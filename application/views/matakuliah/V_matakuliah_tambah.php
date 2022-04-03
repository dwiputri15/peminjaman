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
                    <h5 class="text-dark font-weight-bold my-1 mr-5"> Matakuliah</h5>
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
                        <h4 style="margin-bottom: 20px;">Form Matakuliah</h4>



                        <form action="<?php echo base_url('matakuliah/proses_tambah') ?>" method="POST">
                            
                            <div class="form-group">
                                <label>Kode Matakuliah</label>
                                <input type="text" name="kode_matkul" class="form-control" placeholder="Masukkan kode matakuliah . . ." required="" />
                                <small>Berisi kode mata kuliah</small>
                            </div>
                            
                            <div class="row"> 
                                <div class="col-md-9" >
                                    <div class="form-group">
                                        <label>Nama Matakuliah</label>
                                        <input type="text" name="nama_matkul" class="form-control" placeholder="Masukkan nama matakuliah . . ." required="" />
                                        <small>Berisi nama mata kuliah</small>
                                    </div>        
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="number" name="semester_matkul" class="form-control" placeholder="semester . . ." required="" />
                                        <small>Berisi semester</small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <a href="<?php echo base_url('matakuliah/index') ?>" class="btn btn-light-primary">Kembali</a>
                                <button class="btn btn-primary">Tambahkan dan Simpan</button>
                            </div>
                            
                            
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>