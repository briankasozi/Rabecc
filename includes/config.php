<?php
// includes/config.php
// Environment-driven configuration for the site. Reads from environment variables
// when available, otherwise falls back to sensible defaults for portability.

// Helper to read environment values in a cross-platform way
function env($key, $default = null) {
    // Try common places
    $val = getenv($key);
    if ($val !== false) return $val;
    if (isset($_ENV[$key])) return $_ENV[$key];
    if (isset($_SERVER[$key])) return $_SERVER[$key];
    return $default;
}

// Mail settings
define('MAIL_SMTP_HOST', env('MAIL_SMTP_HOST', ''));
define('MAIL_SMTP_PORT', (int)env('MAIL_SMTP_PORT', 587));
define('MAIL_SMTP_USER', env('MAIL_SMTP_USER', ''));
define('MAIL_SMTP_PASSWORD', env('MAIL_SMTP_PASSWORD', ''));
define('MAIL_SMTP_SECURE', env('MAIL_SMTP_SECURE', 'tls')); // 'tls', 'ssl' or ''

// From address used when sending emails. If empty, we'll use SMTP user.
define('MAIL_FROM_ADDRESS', env('MAIL_FROM_ADDRESS', ''));
define('MAIL_FROM_NAME', env('MAIL_FROM_NAME', 'Website'));

// Logging
define('SITE_LOG_PATH', __DIR__ . '/../logs');
define('MAIL_DEBUG_LOG', SITE_LOG_PATH . '/mail-debug.log');

// Debugging toggle (set to '1' in env to enable verbose SMTP debug)
define('MAIL_DEBUG_ENABLED', env('MAIL_DEBUG_ENABLED', '0') === '1');

// Ensure logs directory exists (best-effort; permission errors are ignored here)
if (!is_dir(SITE_LOG_PATH)) {
    @mkdir(SITE_LOG_PATH, 0755, true);
}

return true;
