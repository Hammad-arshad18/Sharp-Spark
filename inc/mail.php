<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

/**
 * Outgoing mail for the contact form.
 * Direct HTTP access to this directory is denied in .htaccess.
 */

const SMTP_HOST      = 'send.one.com';
const SMTP_PORT      = 465;
const SMTP_USER      = 'no-reply@whiteseastar.com';
const SMTP_PASS      = 'Developer#18';
const SMTP_FROM_NAME = 'Sharp Spark General Trading L.L.C';
const SMTP_TO        = 'info@sharpsparkgt.com';

function send_contact_mail(string $name, string $company, string $email, string $message): bool
{
    $name    = smtp_strip($name);
    $company = smtp_strip($company);
    $email   = smtp_strip($email);

    $lines = ["Name: {$name}"];
    if ($company !== '') {
        $lines[] = "Company: {$company}";
    }
    $lines[] = "Email: {$email}";
    $lines[] = '';
    $lines[] = str_replace(["\r\n", "\r"], "\n", $message);

    $subject = 'Website enquiry — ' . SITE_NAME;
    $from    = SMTP_USER;
    $body    = implode("\r\n", $lines) . "\r\n";

    $headers = [
        'Date: ' . gmdate('D, d M Y H:i:s') . ' +0000',
        'From: ' . smtp_encode_phrase(SMTP_FROM_NAME) . ' <' . $from . '>',
        'To: <' . SMTP_TO . '>',
        'Reply-To: ' . smtp_encode_phrase($name) . ' <' . $email . '>',
        'Subject: ' . smtp_encode_subject($subject),
        'Message-ID: <' . bin2hex(random_bytes(16)) . '@whiteseastar.com>',
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
    ];

    $data = implode("\r\n", $headers) . "\r\n\r\n" . smtp_dotstuff($body);

    try {
        smtp_deliver($from, SMTP_TO, $data);
        return true;
    } catch (Throwable $e) {
        error_log('Contact form SMTP failed: ' . $e->getMessage());
        return false;
    }
}

function smtp_deliver(string $from, string $to, string $data): void
{
    $errno  = 0;
    $errstr = '';
    $socket = stream_socket_client(
        'ssl://' . SMTP_HOST . ':' . SMTP_PORT,
        $errno,
        $errstr,
        20,
        STREAM_CLIENT_CONNECT,
        stream_context_create([
            'ssl' => [
                'verify_peer'      => true,
                'verify_peer_name' => true,
                'peer_name'        => SMTP_HOST,
            ],
        ])
    );

    if ($socket === false) {
        throw new RuntimeException('Could not connect to ' . SMTP_HOST . ': ' . $errstr . ' (' . $errno . ')');
    }

    stream_set_timeout($socket, 20);

    try {
        smtp_expect($socket, [220]);
        smtp_command($socket, 'EHLO whiteseastar.com', [250]);
        smtp_command($socket, 'AUTH LOGIN', [334]);
        smtp_command($socket, base64_encode(SMTP_USER), [334]);
        smtp_command($socket, base64_encode(SMTP_PASS), [235]);
        smtp_command($socket, 'MAIL FROM:<' . $from . '>', [250]);
        smtp_command($socket, 'RCPT TO:<' . $to . '>', [250, 251]);
        smtp_command($socket, 'DATA', [354]);

        $written = fwrite($socket, $data . "\r\n.\r\n");
        if ($written === false) {
            throw new RuntimeException('Could not write the message.');
        }

        smtp_expect($socket, [250]);
        smtp_command($socket, 'QUIT', [221]);
    } finally {
        fclose($socket);
    }
}

function smtp_command($socket, string $command, array $ok): string
{
    $written = fwrite($socket, $command . "\r\n");
    if ($written === false) {
        throw new RuntimeException('Could not write to the mail server.');
    }

    return smtp_expect($socket, $ok);
}

function smtp_expect($socket, array $ok): string
{
    $response = '';

    while (($line = fgets($socket, 1024)) !== false) {
        $response .= $line;
        if (isset($line[3]) && $line[3] === ' ') {
            break;
        }
    }

    $meta = stream_get_meta_data($socket);
    if ($response === '' || !empty($meta['timed_out'])) {
        throw new RuntimeException('The mail server did not respond in time.');
    }

    $code = (int) substr($response, 0, 3);
    if (!in_array($code, $ok, true)) {
        throw new RuntimeException('Unexpected reply ' . trim(smtp_strip($response)));
    }

    return $response;
}

function smtp_strip(string $value): string
{
    return trim(str_replace(["\r", "\n", "\0"], '', $value));
}

function smtp_encode_phrase(string $value): string
{
    $value = smtp_strip($value);
    if ($value === '') {
        return '""';
    }

    if (preg_match('/^[\x20-\x7E]+$/', $value) === 1) {
        return '"' . str_replace(['\\', '"'], ['\\\\', '\\"'], $value) . '"';
    }

    return '=?UTF-8?B?' . base64_encode($value) . '?=';
}

function smtp_encode_subject(string $value): string
{
    $value = smtp_strip($value);
    if (preg_match('/^[\x20-\x7E]+$/', $value) === 1) {
        return $value;
    }

    return '=?UTF-8?B?' . base64_encode($value) . '?=';
}

function smtp_dotstuff(string $body): string
{
    $body = str_replace(["\r\n", "\r"], "\n", $body);
    $body = str_replace("\n", "\r\n", $body);

    return preg_replace('/^\./m', '..', $body) ?? $body;
}
