
<!doctype html>
<html lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Aplikasi Peminjaman | Login</title>
    <meta name="description" content="Tugas Akhir Poltekes">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/poltekes-ico.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/template-mobile/img/icon/192x192.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template-mobile/css/style.css">
    <!-- <link rel="manifest" href="__manifest.json"> -->
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <img src="https://1.bp.blogspot.com/-PpH7CcrJIvE/X5WGsZUp6LI/AAAAAAAADRE/VIw1_NyjUC4HUnijuO1r2WBG4tfjpJGbgCLcBGAsYHQ/s1920/Logo%2BPolinema%2B%2528Politeknik%2BNegeri%2BMalang%2529.png" style="width: 150px" alt="" />
            <div class="section mt-1">
                <h2>Registrasi</h2>
                <h4>Lengkapi form dibawah ini untuk mendaftar kedalam aplikasi</h4>
            </div>
            <div class="section mt-1 mb-5" style="margin-top: 100px !important">
                
                <?php if ( $this->session->flashdata('msg-error') == "login_error" ) { ?>
                <div class="alert alert-danger mb-1" role="alert">
                    <b>Maaf</b>, email dan kata sandi tidak ditemukan
                </div>
                <?php } ?>
                <form action="<?php echo base_url('mobile/login/prosesregister') ?>" method="POST">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="number" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM anda . . ." required="">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama anda . . ." required="">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <select name="prodi" class="form-control form-select" style="width: 100%" required="">
                                <option value="">Prodi Jurusan dan Teknik</option>
                                <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
                                <option value="D4 Jurusan Telekomunikasi Digital">D4 Jurusan Telekomunikasi Digital</option>
                            </select>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas anda . . ." required="">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            <a href="<?php echo base_url('mobile/login/index') ?>">Kembali Halaman Login</a>
                        </div>
                        <!-- <div><a href="<?php echo base_url() ?>" class="text-muted">Halaman Kuisioner</a></div> -->
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Daftar Akun</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/lib/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template-mobile/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- Owl Carousel -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/base.js"></script>


</body>


</html>