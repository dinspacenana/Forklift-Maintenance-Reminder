<?php
/**
 * functions.php
 * Kumpulan fungsi bantu (helper) yang dipakai di seluruh halaman.
 */

require_once __DIR__ . '/config.php';

/**
 * Cek apakah user sudah login (berdasarkan session).
 */
function isLoggedIn(): bool
{
    return isset($_SESSION['user_id']);
}

/**
 * Wajibkan login. Jika belum login, redirect ke halaman login.
 * Panggil di bagian paling atas setiap halaman yang butuh proteksi.
 */
function requireLogin(): void
{
    if (!isLoggedIn()) {
        redirect('index.php');
    }
}

/**
 * Escape output supaya aman dari XSS.
 */
function e(?string $string): string
{
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Redirect ke path tertentu lalu hentikan eksekusi script.
 */
function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;
}

/**
 * Ambil nama user yang sedang login dari session.
 */
function currentUserName(): string
{
    return $_SESSION['nama'] ?? 'Pengguna';
}

/**
 * Ambil role user yang sedang login dari session.
 */
function currentUserRole(): string
{
    return $_SESSION['role'] ?? '-';
}
