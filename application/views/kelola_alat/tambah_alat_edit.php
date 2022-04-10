<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5"> Tambah Alat Praktikum </h5>
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
                    <div class="card card-body">
                        <h4 style="margin-bottom: 20px;">Form Tambah Alat Praktikum</h4>



                        <form action="<?php echo base_url('kelola_alat/proses_ambil') ?>" method="POST">

                            <div class="form-group">
                                <label>Kode Alat</label>
                                <input type="text" name="kd_barang" class="form-control" placeholder="Masukkan Kode Barang" value="<?php echo $tb_barang['kode_barang'] ?>" required="" />
                                <small>Kode Barang Alat Praktikum</small>
                            </div>
                            <div class="form-group">
                                <label>Kode Matakuliah</label>
                                <input type="text" name="kd_matkul" class="form-control" placeholder="Masukkan Kode Matakuliah" value="<?php echo $tb_barang['kode_matkul'] ?>" required="" />

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nm_barang" class="form-control" placeholder="Nama Alat Praktikum" value="<?php echo $tb_barang['nama_barang'] ?>" required="" />
                                        <small></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Barang</label>
                                        <input type="number" name="jmlh_barang" class="form-control" placeholder="Jumlah Alat Yang Tersedia" value="<?php echo $tb_barang['jumlah_barang'] ?>" required="" />

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status </label>
                                <input type="text" name="status" class="form-control" placeholder="Masukkan status" value="<?php echo $tb_barang['status_akun'] ?>" required="" />

                            </div>
                            <div class="form-group">
                                <a href="<?php echo base_url('kelola_alat/index') ?>" class="btn btn-light-primary">Kembali</a>
                                <button class="btn btn-primary">Simpan Dan Perbarui</button>
                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>