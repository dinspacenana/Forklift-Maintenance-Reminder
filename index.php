<?php
// index.php - Main Application Router for Forklift Maintenance Reminder (FMR)
include_once __DIR__ . '/includes/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {
    case 'customer':
        include_once __DIR__ . '/views/master/customer.php';
        break;
    case 'forklift':
        include_once __DIR__ . '/views/master/forklift.php';
        break;
    case 'jenis_maintenance':
        include_once __DIR__ . '/views/master/jenis_maintenance.php';
        break;
    case 'input_maintenance':
        include_once __DIR__ . '/views/operasional/input_maintenance.php';
        break;
    case 'unit_forklift':
        include_once __DIR__ . '/views/operasional/unit_forklift.php';
        break;
    case 'outstanding':
        include_once __DIR__ . '/views/operasional/outstanding.php';
        break;
    case 'reminder':
        include_once __DIR__ . '/views/reminder/index.php';
        break;
    case 'user':
        include_once __DIR__ . '/views/user_management/index.php';
        break;
    case 'setting':
        include_once __DIR__ . '/views/setting/index.php';
        break;
    case 'history':
        include_once __DIR__ . '/views/report/history.php';
        break;
    case 'activity_log':
        include_once __DIR__ . '/views/report/activity_log.php';
        break;
    case 'dashboard':
    default:
        include_once __DIR__ . '/views/dashboard/index.php';
        break;
}

include_once __DIR__ . '/includes/footer.php';
?>
