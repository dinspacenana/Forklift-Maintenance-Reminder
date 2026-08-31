<?php
// includes/functions.php - Global Helper Functions

/**
 * Base URL helper
 */
function base_url($path = '') {
    return ltrim($path, '/');
}

/**
 * Asset URL helper
 */
function asset_url($path = '') {
    return 'assets/' . ltrim($path, '/');
}
