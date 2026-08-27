<?php
/**
 * config.php
 * Konfigurasi dasar aplikasi Forklift Maintenance Reminder (FMR).
 *
 * Tahap 1 (Prototype):
 * - Session PHP native diaktifkan di sini.
 * - Koneksi MySQL (PDO) hanya disiapkan strukturnya, BELUM digunakan.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Nama aplikasi
define('APP_NAME', 'Forklift Maintenance Reminder');
define('APP_SHORT', 'FMR');

// Konfigurasi database (disiapkan untuk tahap berikutnya)
define('DB_HOST', 'localhost');
define('DB_NAME', 'forklift_maintenance');
define('DB_USER', 'root');
define('DB_PASS', '');

/*
 * Koneksi PDO - BELUM DIAKTIFKAN pada tahap prototype ini.
 * Dashboard masih menggunakan data dummy/static.
 *
 * try {
 *     $pdo = new PDO(
 *         "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
 *         DB_USER,
 *         DB_PASS,
 *         [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
 *     );
 * } catch (PDOException $e) {
 *     die("Koneksi database gagal: " . $e->getMessage());
 * }
 */
