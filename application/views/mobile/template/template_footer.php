<!-- App Bottom Menu -->
<div class="appBottomMenu">
        <a href="<?php echo base_url('mobile/dashboard') ?>" class="item <?php echo ($this->uri->segment(1) == "dashboard-admin") ? 'active' : ''  ?>">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
            </div>
        </a>
        <a href="<?php echo base_url('mobile/peminjaman') ?>" class="item <?php echo ($this->uri->segment(1) == "data-rs") ? 'active' : ''  ?>">
            <div class="col">
                <ion-icon name="cube-outline"></ion-icon>
            </div>
        </a>
        <a href="<?php echo base_url('mobile/peminjaman/history') ?>" class="item <?php echo ($this->uri->segment(1) == "data-kuisioner") ? 'active' : ''  ?>">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
            </div>
        </a>
        <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">

                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                            <img src="https://1.bp.blogspot.com/-PpH7CcrJIvE/X5WGsZUp6LI/AAAAAAAADRE/VIw1_NyjUC4HUnijuO1r2WBG4tfjpJGbgCLcBGAsYHQ/s1920/Logo%2BPolinema%2B%2528Politeknik%2BNegeri%2BMalang%2529.png" alt="image" style="width: 50px; height: auto">
                        </div>
                        <div class="in">
                            <strong><?php echo $this->session->userdata('nama') ?></strong>
                            <div class="text-muted">
                                <?php echo $this->session->userdata('NIM') ?>
                            </div>
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?php echo base_url('mobile/dashboard') ?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Dashboard
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('mobile/peminjaman') ?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="cube-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Peminjaman Baru
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('mobile/peminjaman/history') ?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="person-add-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Peminjaman Terkini</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="moon-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Dark Mode</div>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input dark-mode-switch"
                                            id="darkmodesidebar">
                                        <label class="custom-control-label" for="darkmodesidebar"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>



                </div>




                <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    
                    <a href="<?php echo base_url('mobile/peminjaman/history') ?>" class="button">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </a>

                    <a href="<?php echo base_url('mobile/login/logout') ?>" class="button">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </a>
                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <!-- <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="<?php echo base_url() ?>assets/template-mobile/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>Dosen</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome Dwi Nur</h3>
                    <div class="text">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div>
    * welcome notification -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Bootstrap-->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/lib/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template-mobile/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="<?php echo base_url() ?>assets/template-mobile/js/base.js"></script>

    <script>
        // setTimeout(() => {
        //     notification('notification-welcome', 5000);
        // }, 2000);

    </script>

</body>

</html>