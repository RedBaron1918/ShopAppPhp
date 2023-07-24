<?php 

ini_set('session.use_strict_mode',1);
ini_set('session.use_only_cookies', 1);

// Set session parameters
$sessionParams = [
    'lifetime' => 1800,       // 30 minutes (in seconds)
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
];

// Apply session parameters
session_set_cookie_params($sessionParams);
session_start();

// Check for session regeneration
$last_regeneration = 'last_regeneration';
if (!isset($_SESSION[$last_regeneration])) {
    regenerate_session_id($last_regeneration);
} else {
    $interval = 60 * 30; // 30 minutes (in seconds)
    if (time() - $_SESSION[$last_regeneration] >= $interval) {
        regenerate_session_id($last_regeneration);
    }
}

function regenerate_session_id(string $item):void
{
    session_regenerate_id();
    $_SESSION[$item] = time();
}
