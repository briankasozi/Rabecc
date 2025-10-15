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
// Sensible defaults provided for Gmail SMTP. These are used only when the
// corresponding environment variables are not set. For security it's best to
// set real credentials in environment variables (RABECC_SMTP_... or MAIL_...)
// rather than committing them in source control.
define('MAIL_SMTP_HOST', env('MAIL_SMTP_HOST', 'smtp.gmail.com'));
define('MAIL_SMTP_PORT', (int)env('MAIL_SMTP_PORT', 587));
// Set the SMTP username (Gmail address) if not provided via env
define('MAIL_SMTP_USER', env('MAIL_SMTP_USER', 'rabecc50@gmail.com'));
// App password fallback (provided by project owner). Recommended: set MAIL_SMTP_PASSWORD
// in the environment instead of storing here. This value will be used only when
// env('MAIL_SMTP_PASSWORD') is not set. Normalize it by removing spaces and a
// leading colon if present so both raw app passwords and user-pasted values
// with spaces work as expected.
$rawPass = env('MAIL_SMTP_PASSWORD', ':mbfh vbvr ylmq cugb');
// remove whitespace and leading colon
$normalizedPass = ltrim(preg_replace('/\s+/', '', (string)$rawPass), ':');
define('MAIL_SMTP_PASSWORD', $normalizedPass);
define('MAIL_SMTP_SECURE', env('MAIL_SMTP_SECURE', 'tls')); // 'tls', 'ssl' or ''

// From address used when sending emails. If empty, we'll use SMTP user.
define('MAIL_FROM_ADDRESS', env('MAIL_FROM_ADDRESS', 'rabecc50@gmail.com'));
define('MAIL_FROM_NAME', env('MAIL_FROM_NAME', 'RABEC Website'));

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
