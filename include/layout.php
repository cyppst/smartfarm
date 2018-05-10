<?php require('include/auth.php') ?>
<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <div class="logo">
                    <span class="l l1"></span>
                    <span class="l l2"></span>
                    <span class="l l3"></span>
                    <span class="l l4"></span>
                    <span class="l l5"></span>
                </div>
                ระบบฟาร์มเป็ดเย็ดเข้
            </div>
        </div>
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li class="<?= ($current_page == 'dashboard') ? 'active' : ''; ?>">
                    <a href="dashboard.php">
                        <i class="fa fa-area-chart"></i> หน้าหลัก </a>
                </li>
                <li class="<?= ($current_page == 'data_cm') ? 'active' : ''; ?>">
                    <a href="data_cm.php">
                        <i class="fa fa-table"></i> ข้อมูล CM </a>
                </li>
                <li class="<?= ($current_page == 'data_litre') ? 'active' : ''; ?>">
                    <a href="data_litre.php">
                        <i class="fa fa-table"></i> ข้อมูล Litre </a>
                </li>
                <li class="<?= ($current_page == 'feed') ? 'active' : ''; ?>">
                    <a href="data_feed.php">
                        <i class="fa fa-table"></i> ข้อมูลการให้อาหาร </a>
                </li>
                <li class="<?= ($current_page == 'crontab') ? 'active' : ''; ?>">
                    <a href="crontab.php">
                        <i class="fa fa-table"></i> ตั้งค่าเวลาการให้อาหาร </a>
                </li>
                <li>
                    <a href="?logout">
                        <i class="fa fa-sign-out"></i> ออกจากระบบ </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>