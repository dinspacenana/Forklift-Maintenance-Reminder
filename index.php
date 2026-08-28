<?php
// index.php - Dashboard Forklift Maintenance Reminder (FMR)
include_once __DIR__ . '/header.php';
?>

<!-- MAIN DASHBOARD CONTENT -->
<main class="dashboard-container">
    <!-- Page Title -->
    <h2 class="page-title">Dashboard</h2>

    <!-- Welcome Banner -->
    <section class="welcome-banner">
        <div class="banner-circle-1"></div>
        <div class="banner-circle-2"></div>
        <div class="position-relative" style="z-index: 1;">
            <div class="banner-date">Senin, 10 Agustus 2026</div>
            <h3 class="banner-heading">Selamat Datang, Administrator</h3>
            <p class="banner-subtext">Pantau seluruh Customer dari satu layar — reminder H-7 berbasis Hour Meter atau Waktu.</p>
        </div>
    </section>

    <!-- 4 Statistic Summary Cards -->
    <section class="row g-4 mb-4">
        <!-- Card 1: Total Forklift -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card-blue">
                <div class="stat-header">
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <span class="stat-title">Total Forklift</span>
                </div>
                <div class="stat-value">14</div>
            </div>
        </div>

        <!-- Card 2: Due Soon -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card-yellow">
                <div class="stat-header">
                    <div class="stat-icon-wrapper">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <span class="stat-title">Due Soon</span>
                </div>
                <div class="stat-value">25</div>
            </div>
        </div>

        <!-- Card 3: Overdue -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card-red">
                <div class="stat-header">
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <span class="stat-title">Overdue</span>
                </div>
                <div class="stat-value">03</div>
            </div>
        </div>

        <!-- Card 4: Outstanding -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card-maroon">
                <div class="stat-header">
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-exclamation"></i>
                    </div>
                    <span class="stat-title">Outstanding</span>
                </div>
                <div class="stat-value">01</div>
            </div>
        </div>
    </section>

    <!-- Bottom Tables Section -->
    <section class="row g-4">
        <!-- Left Table: Jadwal Reminder Maintenance Terdekat -->
        <div class="col-12 col-lg-7 col-xl-7">
            <div class="fmr-table-card">
                <h4 class="card-heading-main">Jadwal Reminder Maintenance Terdekat</h4>

                <div class="table-responsive">
                    <table class="table fmr-table">
                        <thead>
                            <tr>
                                <th style="width: 26%;">Customer</th>
                                <th style="width: 24%;">Maintenance</th>
                                <th style="width: 20%;">Jatuh Tempo</th>
                                <th style="width: 15%; text-align: center;">Tipe Reminder</th>
                                <th style="width: 15%; text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT. Maju Jaya</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Ganti Oli Mesin</span>
                                </td>
                                <td>
                                    <span class="due-date">20 Agu 2026</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                                </td>
                                <td class="text-center">
                                    <span class="status-badge due-soon">Due Soon</span>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT. Robin Jaya</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Ganti Filter Udara</span>
                                </td>
                                <td>
                                    <span class="due-date">15 Agu 2026</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-regular fa-envelope type-icon-mail"></i>
                                </td>
                                <td class="text-center">
                                    <span class="status-badge over-due">Over Due</span>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT. Wijaya Putra</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Ganti Filter Oli</span>
                                </td>
                                <td>
                                    <span class="due-date">21 Agu 2026</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                                </td>
                                <td class="text-center">
                                    <span class="status-badge over-due">Over Due</span>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT. Jeon Grup</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Ganti Filter Solar</span>
                                </td>
                                <td>
                                    <span class="due-date">1 Sep 2026</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-regular fa-envelope type-icon-mail"></i>
                                </td>
                                <td class="text-center">
                                    <span class="status-badge h-7">H - 7</span>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT. Jeon Grup</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Ganti Filter Solar</span>
                                </td>
                                <td>
                                    <span class="due-date">1 Sep 2026</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-regular fa-envelope type-icon-mail"></i>
                                </td>
                                <td class="text-center">
                                    <span class="status-badge h-7">H - 7</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Right Table: Reminder Terkirim Hari ini -->
        <div class="col-12 col-lg-5 col-xl-5">
            <div class="fmr-table-card">
                <h4 class="card-heading-main">Reminder Terkirim Hari ini</h4>
                <p class="card-subheading-main">Aktivitas Pengiriman Reminder pada 23 Agustus 2026</p>

                <!-- Summary Badges -->
                <div class="summary-pills-row">
                    <span class="summary-pill pill-success">12 Terkirim</span>
                    <span class="summary-pill pill-danger">2 Gagal</span>
                </div>

                <!-- Filter Tabs -->
                <div class="fmr-filter-tabs">
                    <span class="fmr-tab-link active">Semua</span>
                    <span class="fmr-tab-link">WhatsApp</span>
                    <span class="fmr-tab-link">Email</span>
                </div>

                <!-- Sent Reminders Table -->
                <div class="table-responsive">
                    <table class="table fmr-table">
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td style="width: 32%;">
                                    <div class="cust-name">PT Maju Jaya</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td style="width: 30%;">
                                    <span class="maint-name">Ganti Oli Mesin</span>
                                </td>
                                <td style="width: 10%; text-align: center;">
                                    <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                                </td>
                                <td style="width: 14%; text-align: center; color: #475569; font-size: 0.82rem; font-weight: 500;">
                                    08:16
                                </td>
                                <td style="width: 14%; text-align: end;">
                                    <span class="status-badge sukses">Sukses</span>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT. Nusantara Logistik</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Preventive Service</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-regular fa-envelope type-icon-mail"></i>
                                </td>
                                <td style="text-align: center; color: #475569; font-size: 0.82rem; font-weight: 500;">
                                    11:44
                                </td>
                                <td style="text-align: end;">
                                    <span class="status-badge gagal">Gagal</span>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT Wijaya Putra</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Ganti Filter Oli</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                                </td>
                                <td style="text-align: center; color: #475569; font-size: 0.82rem; font-weight: 500;">
                                    08:34
                                </td>
                                <td style="text-align: end;">
                                    <span class="status-badge sukses">Sukses</span>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <td>
                                    <div class="cust-name">PT Maju Jaya</div>
                                    <div class="cust-city">Surabaya</div>
                                </td>
                                <td>
                                    <span class="maint-name">Ganti Oli Mesin</span>
                                </td>
                                <td class="text-center">
                                    <i class="fa-brands fa-whatsapp type-icon-wa"></i>
                                </td>
                                <td style="text-align: center; color: #475569; font-size: 0.82rem; font-weight: 500;">
                                    08:16
                                </td>
                                <td style="text-align: end;">
                                    <span class="status-badge sukses">Sukses</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once __DIR__ . '/footer.php';
?>
