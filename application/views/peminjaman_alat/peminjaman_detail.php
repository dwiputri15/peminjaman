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
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->

                <!--begin::Dropdown-->

                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
           

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!--begin::Card-->
                    <div class="card card-custom">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShfRxN_snHOUA7gZ4Xjqc2D7HNY_pMgDNqhQ&usqp=CAU" style="width: 100px;" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h1 style="margin-top: 20px">Laporan Peminjaman</h1>
                                    <b>Peminjaman #<?php echo $peminjaman[0]['id_peminjaman'] ?></b> &emsp;|&emsp;
                                    dibuat pada <?php echo date('d F Y H.i A', strtotime($peminjaman[0]['pembuatan'])) ?>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-9">
                                    <small>Nama Mahasiswa</small><br>
                                    <b><?php echo $peminjaman[0]['nama'] ?></b>
                                    
                                    <br><br>
                                    
                                    <small>NIM</small><br>
                                    <b><?php echo $peminjaman[0]['NIM'] ?></b>

                                </div>
                                <div class="col-md-3">
                                    <small>Tanggal Peminjaman</small><br>
                                    <b><?php echo date('d F Y', strtotime($peminjaman[0]['tanggal_awal'])) ?></b>
                                    
                                    <br><br>
                                    
                                    <small>Tanggal Kembali</small><br>
                                    <b>
                                        <?php if ( $peminjaman[0]['status'] == "selesai" ) {

                                            echo date('d F Y', strtotime($peminjaman[0]['tanggal_berakhir']));
                                        } else {

                                            echo '-';
                                        } ?>
                                    </b>

                                </div>
                            </div>

                            <hr><br>


                            <h6>Informasi Detail Peminjaman</h6>
                            <p>Berikut rincian alat yang dipinjam oleh mahasiswa</p>

                            <table class="table table-stripe">
                                <tr style="font-weight: bold;">
                                    <td>#</td>
                                    <td>Kode Alat</td>
                                    <td>Nama Alat</td>
                                    <td>Jumlah</td>
                                </tr>
                                <?php 
                                $nomor = 1;
                                foreach ( $peminjaman AS $row ) : ?>
                                <tr>
                                    <td><?php echo $nomor ?></td>
                                    <td>
                                        <?php echo $row['kode_barang'] ?><br>
                                        <small>kd-mk : <?php echo $row['kode_matkul'] ?></small>
                                    </td>
                                    <td>
                                        <?php echo $row['nama_barang'] ?> <br>
                                        <small><?php echo $row['nama_matkul'] ?></small>

                                    </td>
                                    <td><?php echo $row['jumlah'] ?> item</td>
                                </tr>
                                <?php 
                                
                                    $nomor++;
                                endforeach;
                                ?>
                            </table>

                            <hr>

                            <h6>Keterangan</h6>
                            <div class="card card-body" style="background-color: #f2f2f2">
                                <?php echo $peminjaman[0]['keterangan'] ?>
                            </div>
                            
                            <small>Keterangan seperti barang rusak atau catatan tambahan</small>

                            <hr>
                            <a href="" class="btn btn-default">Kembali</a>
                            <a href="" class="btn btn-light-danger">Cetak PDF</a>
                            <a href="" class="btn btn-light-warning">Selesaikan Peminjaman</a>

                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    <!--end::Entry-->
</div>
<!--end::Content-->

