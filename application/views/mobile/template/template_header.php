<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>App - Peminjaman</title>
    <meta name="description" content="Tugas Akhir ">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/poltekes-ico.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/template-mobile/img/icon/192x192.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-mobile/css/style.css">
    <!-- Jquery -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/lib/jquery-3.4.1.min.js"></script>

    <style>
        .panel{

            border: 1px solid #e0e0e0;
            border-radius: 4px;
            background-color: #fff;
            padding: 10px 20px;
        }
    </style>

</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Aplikasi Peminjaman Perpustakaan
        </div>
        
    </div>
    <!-- * App Header -->
