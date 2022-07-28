<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Alat Praktikum Yang Dipinjam</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->

                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-9">

                    <div class="card card-body" style="margin-bottom: 40px;">

                        <div class="row">
                            <div class="col-md-8 align-self-center">
                                <h1 class="text-center">Konfirmasi Pengembalian</h1>
                                <p class="text-center">Mahasiswa harap melakukan scanning QRCode untuk memverifikasi pengembalian</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="<?php echo base_url('assets/qrcode/' . $peminjaman[0]['qrcode']) ?>" alt="Qr Code" style="width: 200px">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    <!--end::Entry-->
</div>
<!--end::Content-->