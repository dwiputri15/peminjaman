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
                    <h5 class="text-dark font-weight-bold my-1 mr-5"> Edit Petugas</h5>
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
                <div class="col-md-7">
                    <div class="card card-body">
                        <h4 style="margin-bottom: 20px;">Form Edit Petugas</h4>



                        <form action="<?php echo base_url('pengguna/proses_edit/'. $petugas['id_user']) ?>" method="POST">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Petugas *</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama . . ." value="<?php echo $petugas['nama'] ?>" required="" />
                                        <small>Berisi nama petugas</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP . . ." value="<?php echo $petugas['NIP'] ?>" />
                                        <small>Berisi kode nip</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan username . . ." value="<?php echo $petugas['username'] ?>" disabled />
                                        <small>Berisi username</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Masukan password . . ." value="" />
                                        <small>Berisi kata sandi</small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Status </label>
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" name="status" value="aktif" <?php if ($petugas['status_akun'] == "aktif") echo 'checked'; ?> />
                                        <span></span>
                                        Aktif
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="status" value="nonaktif" <?php if ($petugas['status_akun'] == "nonaktif") echo 'checked'; ?> />
                                        <span></span>
                                        Nonaktif
                                    </label>
                                </div>

                            </div>




                            <div class="form-group">
                                <a href="<?php echo base_url('pengguna/index') ?>" class="btn btn-light-warning">Kembali</a>
                                <button class="btn btn-warning"> Simpan Perubahan</button>
                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>