    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/camera-style.css') ?>">
    
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h2>Verifikasi Peminjaman</h2>
        </div>

        


        <div class="section mt-3 mb-3">
            <div class="card">
                <div style="width: 100%" id="reader"></div>

                <h3>Monitor QR Code</h3>
                <small>Lakukan scanning untuk melakukan verifikasi</small>

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


        let config = {
            fps: 30,
            qrbox: {
                width: 200,
                height: 200
            },
            rememberLastUsedCamera: true,
            // Only support camera scan type.
            supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA]
        };

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", config, /* verbose= */ false);


        html5QrcodeScanner.render(onScanSuccess);
        

        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            
            


            // pengecekan validitas kode qr
            $.ajax({

                type: "GET",
                url : "<?php echo base_url('mobile/peminjaman/cek_qr') ?>",
                data: "qr=" + decodedText,
                dataType: "json",
                success: function( hasil ) {

                    if ( hasil.status ) {

                        $('#pesan-text').text("Verifikasi Peminjaman Berhasil");
                        $('#btn-close').data('dismiss', '');


                        htmlLink = `<a href="<?php echo base_url('mobile/dashboard/index') ?>" id="btn-close" class="btn btn-text-primary">
                						<ion-icon name="checkmark-outline"></ion-icon>
                						Tutup
                					</a>`;                    


                    } else {

                        htmlLink = `<a href="<?php echo base_url('mobile/dashboard/index') ?>" id="btn-close" class="btn btn-text-danger" data-dismiss="modal">
                						<ion-icon name="checkmark-outline"></ion-icon>
                						Tutup
                					</a>`;

                        $('#pesan-text').text("Kode QR tidak teridentifikasi");
                        
                        
                    }
                    $('#link-href').html( htmlLink );
                    $('#response').modal('show');
                }
            })
        }

        // html5QrcodeScanner.render(onScanSuccess); 

    });
</script>