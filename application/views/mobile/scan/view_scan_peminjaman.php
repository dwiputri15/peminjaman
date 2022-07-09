    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/camera-style.css') ?>">
    
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h2>Peminjaman</h2>
        </div>

        


        <div class="section mt-3 mb-3">
            <div class="card">
                <div style="width: 100%" id="reader"></div>
                <img src="<?php echo $img_qr ?>" alt="" style="width: 350px">

                <h3>Tunjukan QR Peminjaman</h3>
                <small>Dengan menunjukan QR agar dilakukan verifikasi</small>

                <!-- Dialog Delete Inline -->
                <div class="modal fade dialogbox" id="response" data-backdrop="static" tabindex="-1" role="dialog">
                	<div class="modal-dialog" role="document">
                		<div class="modal-content">
                			<div class="modal-body">
                                <br><br>
                				<b>Pesan</b>
                                <h3 id="pesan-text">Verifikasi Berhasil</h3>
                			</div>
                			<div class="modal-footer">
                				<div class="btn-inline">
                                    <div id="link-href">

                                    </div>
                					
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!-- * Dialog Iconed Inline -->
            </div>
        </div>
    
    </div>


    <script src="https://unpkg.com/html5-qrcode"></script>

    <script>
    $(function() {


        // check every second 
        function checkstatus() {

            // pengecekan validitas kode qr
            $.ajax({

                type: "GET",
                url : "<?php echo base_url('mobile/peminjaman/cekverifikasiadmin/'. $id_peminjaman) ?>",
                dataType: "json",
                success: function( hasil ) {

                    if ( hasil.status == "dipinjam" ) {

                        $('#pesan-text').text("Verifikasi Peminjaman Berhasil");
                        $('#btn-close').data('dismiss', '');


                        htmlLink = `<a href="<?php echo base_url('mobile/dashboard/index') ?>" id="btn-close" class="btn btn-text-primary">
                                        <ion-icon name="checkmark-outline"></ion-icon>
                                        Tutup
                                    </a>`;   
                                    
                        $('#link-href').html( htmlLink );
                        $('#response').modal('show');


                    } else if ( hasil.status == "ditolak" ) {

                        $('#pesan-text').text("Peminjaman Ditolak");
                        $('#btn-close').data('dismiss', '');


                        htmlLink = `<a href="<?php echo base_url('mobile/dashboard/index') ?>" id="btn-close" class="btn btn-text-danger">
                                        <ion-icon name="checkmark-outline"></ion-icon>
                                        Tutup
                                    </a>`;   
                                    
                        $('#link-href').html( htmlLink );
                        $('#response').modal('show');
                    }

                    // console.log( hasil );
                }
                })
        }


        setInterval(function(){
            checkstatus();
        }, 1000);

    });
</script>