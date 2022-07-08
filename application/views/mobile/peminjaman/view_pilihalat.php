    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h2 >Pilih Alat Lab</h2>
        </div>

        


        <div class="section mt-3 mb-3">
            <div class="card">
                <ul class="listview flush transparent image-listview text">
                    
                    <?php foreach ( $barang AS $item ) :
                        
                        
                        if ( $item['status_akun'] == "tersedia" ) :    
                    ?>
                    <li>
                        <a href="<?php echo base_url('mobile/peminjaman/cart_tambah/'. $item['kode_barang']) ?>" class="item">
                            <div class="in">
                                <div>
                                    <?php echo $item['nama_barang'] ?><br>
                                    <small>
                                        <?php echo $item['jumlah_barang'] == 0 ? "Tidak Tersedia" : "Jumlah Tersedia" ?>
                                    </small>
                                </div>
                                <span class="badge badge-secondary"><?php echo $item['jumlah_barang'] ?></span>
                            </div>
                        </a>
                    </li>
                    <?php 
                
                        endif;
                
                    endforeach; ?>
                </ul>
            </div>
        </div>


         <!-- bottom center -->
        <div class="fab-button text bottom-center" style="margin-bottom: 100px">
            <a href="#" class="fab" data-toggle="modal" data-target="#ModalBasic">
                <ion-icon name="add-outline"></ion-icon>
                Selesaikan
            </a>
        </div>
        <!-- * bottom center -->





        <!-- Modal Basic -->
        <div class="modal fade modalbox" id="ModalBasic" data-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Rincian Peminjaman</h5>
                        <a href="#" data-dismiss="modal">Batal</a>
                    </div>
                    <div class="modal-body">
                        
                        <?php foreach ( $this->cart->contents() AS $isi ) : ?>

                            <ul class="listview image-listview">
                                <li>
                                    <a href="<?php echo base_url('mobile/peminjaman/cart_hapus/'. $isi['rowid']) ?>" class="item">
                                        <div class="in">
                                            <div>
                                                <header>Item</header>
                                                <b><?php echo $isi['name'] ?></b>
                                                <footer>Jumlah <?php echo $isi['qty'] ?> Item</footer>
                                            </div>
                                            <span class="text-muted">Hapus</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        
                        <?php endforeach; ?>

                        <hr>

                        <div class="row">
                            <a href="<?php echo base_url('mobile/peminjaman/final') ?>" class="btn btn-primary btn-block">Tambah dan Simpan</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- * Modal Basic -->

        

        


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



    <script>
        $(function() {

            $('#smt').change(function() {

                var smt = $(this).val();
                
                $.ajax({

                    type: "GET",
                    url: "<?php echo base_url('mobile/peminjaman/carimatkul_berdasarkanSMT') ?>",
                    data: "semester=" + smt,
                    dataType: "html",
                    success: function( response ) {

                        $('#matkul').html( response );
                    }
                })
            })
        })
    </script>