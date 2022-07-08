    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h2 >Halaman Utama</h2>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="carousel-multiple owl-carousel owl-theme">

                <div class="item">
                    <div class="card">
                        <img src="<?php echo base_url() ?>assets/img/user-1.png" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Scan untuk verifikasi</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?php echo base_url() ?>assets/img/user-2.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Peminjaman lebih cepat</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?php echo base_url() ?>assets/img/user-3.png" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Informasi Terkait Laboratorium</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?php echo base_url() ?>assets/img/user-4.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Konsultasi Peminjaman</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Akifkan Mode Gelap</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Dark Mode
                        </h5>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                        <label class="custom-control-label" for="darkmodeswitch"></label>
                    </div>

                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="<?php echo base_url() ?>assets/img/scan-now.png" class="card-img-top" alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle">Scan QR</h6>
                    <h5 class="card-title">Pindai Kode QR</h5>
                    <p class="card-text">
                        Klik untuk memindai kode QR dan melakukan verifikasi pengembalian
                    </p>
                    <a href="<?php echo base_url('mobile/peminjaman/verifikasi_pengembalian') ?>" class="btn btn-primary">
                        <ion-icon name="qr-code-outline"></ion-icon>
                        QR Code
                    </a>
                </div>
            </div>
        </div>


        <!-- app footer -->
        <div class="appFooter">
            <img src="https://1.bp.blogspot.com/-PpH7CcrJIvE/X5WGsZUp6LI/AAAAAAAADRE/VIw1_NyjUC4HUnijuO1r2WBG4tfjpJGbgCLcBGAsYHQ/s1920/Logo%2BPolinema%2B%2528Politeknik%2BNegeri%2BMalang%2529.png" style="width: 75px; height: auto" class="footer-logo mb-2">
            <div class="footer-title">
                Copyright © Polinema App 2022. All Rights Reserved.
            </div>
            <div>Peminjaman laboratorium telekomunikasi</div>

          

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->