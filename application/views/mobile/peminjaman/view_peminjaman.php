    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h2 >Peminjaman Baru</h2>
        </div>

        


        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h6 class="card-subtitle">Form Peminjaman Laboratorium</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center">
                            Tambah Baru
                        </h5>

                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?php echo base_url('mobile/peminjaman/listbarang') ?>" method="GET">

                                    <div class="form-group boxed">
                                        <div class="input-wrapper">
                                            <label class="form-label" for="smt">Pilihan</label>
                                            <select name="smt" class="form-control form-select" id="smt" style="width: 100%" required="">
                                                <option value="">Pilih Opsi</option>
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>
                                                <option value="3">Semester 3</option>
                                                <option value="4">Semester 4</option>
                                                <option value="5">Semester 5</option>
                                                <option value="6">Semester 6</option>
                                                <option value="7">Semester 7</option>
                                                <option value="8">Semester 8</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group boxed">
                                        <div class="input-wrapper">
                                            <label class="form-label" for="matkul">Matakuliah</label>
                                            <select name="matkul" class="form-control form-select" id="matkul">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group boxed" style="margin-top: 32px">
                                        <div class="input-wrapper">
                                            <button class="btn btn-primary btn-block">Lanjutkan Pemilihan Alat</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    
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