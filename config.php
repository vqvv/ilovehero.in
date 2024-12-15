<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'file_host');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try {
    // Establish a PDO connection
    $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
        DB_USER,
        DB_PASSWORD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    // Handle connection errors
    die('Database connection failed: ' . $e->getMessage());
}
?>
