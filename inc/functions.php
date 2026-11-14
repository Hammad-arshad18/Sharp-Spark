<?php
declare(strict_types=1);

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function current_route(): string
{
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
    $path = trim($path, '/');
    $path = preg_replace('/\.php$/', '', $path) ?? '';

    return $path === '' || $path === 'index' ? './' : $path;
}

function icon(string $name, int $size = 24, string $class = ''): string
{
    $paths = [
        'arrow-right' => '<path d="M4 12h15"/><path d="m13 6 6 6-6 6"/>',
        'arrow-up-right' => '<path d="M7 17 17 7"/><path d="M8 7h9v9"/>',
        'mail' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3.5 6.5 8.5 6 8.5-6"/>',
        'pin' => '<path d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z"/><circle cx="12" cy="10" r="2.6"/>',
        'check' => '<path d="m5 12.5 4.5 4.5L19 7.5"/>',
        'menu' => '<path d="M4 7h16"/><path d="M4 12h16"/><path d="M4 17h16"/>',
        'close' => '<path d="m6 6 12 12"/><path d="m18 6-12 12"/>',
        'globe' => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3a15 15 0 0 1 0 18"/><path d="M12 3a15 15 0 0 0 0 18"/>',
        'truck' => '<path d="M3 7h11v8H3z"/><path d="M14 10h4l3 3v2h-7z"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/>',
        'boxes' => '<path d="M3 8.5 12 4l9 4.5v7L12 20l-9-4.5z"/><path d="m12 12 9-4.5"/><path d="M12 12v8"/>',
        'route' => '<circle cx="6" cy="19" r="2"/><circle cx="18" cy="5" r="2"/><path d="M8 19h5a4 4 0 0 0 4-4V9"/>',
        'spark' => '<path d="M12 2.5c.7 4.8 2.6 6.7 7.5 7.5-4.9.8-6.8 2.7-7.5 7.5-.7-4.8-2.6-6.7-7.5-7.5 4.9-.8 6.8-2.7 7.5-7.5Z"/>',
        'shield' => '<path d="M12 3 5 6v5c0 5 3.5 8.5 7 9 3.5-.5 7-4 7-9V6z"/>',
    ];

    $body = $paths[$name] ?? $paths['spark'];

    return '<svg class="icon ' . e($class) . '" width="' . $size . '" height="' . $size
        . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"'
        . ' stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">'
        . $body . '</svg>';
}
