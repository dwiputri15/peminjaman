               <!--begin::Content-->
               <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                   <!--begin::Subheader-->
                   <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                       <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                           <!--begin::Info-->
                           <div class="d-flex align-items-center flex-wrap mr-5">
                               <!--begin::Page Heading-->
                               <div class="d-flex align-items-baseline flex-wrap mr-5">
                                   <!--begin::Page Title-->
                                   <h5 class="text-dark font-weight-bold my-1 mr-5"> Alat Praktikum Yang Tersedia</h5>
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

                               <!--end::Actions-->
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


                           <!--begin::Notice-->
                           <?php if ($this->session->flashdata('pesan')) : ?>
                               <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                                   <div class="alert-icon">
                                       <span class="svg-icon svg-icon-primary svg-icon-xl">
                                           <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                   <rect x="0" y="0" width="24" height="24" />
                                                   <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                                   <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                               </g>
                                           </svg>
                                           <!--end::Svg Icon-->
                                       </span>
                                   </div>
                                   <div class="alert-text"><?php echo $this->session->flashdata('pesan') ?></div>
                               </div>
                           <?php endif; ?>


                           <!--begin::Card-->
                           <div class="card card-custom">
                               <div class="card-header">
                                   <div class="card-title">
                                       <span class="card-icon">
                                           <i class="flaticon2-psd text-primary"></i>
                                       </span>
                                       <h3 class="card-label">Kelola Alat Praktikum</h3>
                                   </div>
                                   <div class="card-toolbar">
                                       <!--begin::Dropdown-->
                                       <div class="dropdown dropdown-inline mr-2">
                                           <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="la la-download"></i>Export</button>
                                           <!--begin::Dropdown Menu-->
                                           <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                               <ul class="nav flex-column nav-hover">
                                                   <li class="nav-header font-weight-bolder text-uppercase text-primary pb-2"> Pilih :</li>
                                                   <li class="nav-item">
                                                       <a href="#" class="nav-link">
                                                           <i class="nav-icon la la-print"></i>
                                                           <span class="nav-text">Print</span>
                                                       </a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a href="#" class="nav-link">
                                                           <i class="nav-icon la la-copy"></i>
                                                           <span class="nav-text">Copy</span>
                                                       </a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a href="#" class="nav-link">
                                                           <i class="nav-icon la la-file-excel-o"></i>
                                                           <span class="nav-text">Excel</span>
                                                       </a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a href="#" class="nav-link">
                                                           <i class="nav-icon la la-file-text-o"></i>
                                                           <span class="nav-text">CSV</span>
                                                       </a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a href="#" class="nav-link">
                                                           <i class="nav-icon la la-file-pdf-o"></i>
                                                           <span class="nav-text">PDF</span>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                           <!--end::Dropdown Menu-->
                                       </div>
                                       <!--end::Dropdown-->
                                       <!--begin::Button-->
                                       <a href="<?php echo base_url('kelola_alat/tambah_alat') ?>" class="btn btn-primary font-weight-bolder">
                                           <i class="la la-plus"></i> Tambahkan Alat</a>
                                       <!--end::Button-->
                                   </div>
                               </div>
                               <div class="card-body">
                                   <!--begin: Datatable-->
                                   <table class="table table-bordered table-checkable" id="kt_datatable">
                                       <thead>
                                           <tr>
                                               <th>Kode Alat</th>
                                               <th>Kode Matkul</th>
                                               <th>Nama Alat</th>
                                               <th>Jumlah Alat</th>
                                               <th>Semester</th>
                                               <th>Aksi</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <?php foreach ($tb_barang as $isi) : ?>
                                               <tr>
                                                   <td><?php echo $isi['kode_barang'] ?></td>
                                                   <td><?php echo $isi['kode_matkul'] ?></td>
                                                   <td><?php echo $isi['nama_barang'] ?></td>
                                                   <td><?php echo $isi['jumlah_barang'] ?></td>
                                                   <td><?php echo $isi['status_akun'] ?></td>

                                                   <td>
                                                       <a href="<?php echo base_url('kelola_alat/edit_data/' . $isi['kode_barang']) ?>" class="btn btn-light-warning btn-sm">Sunting</a>

                                                       <a href="<?php echo base_url('kelola_alat/proses_hapus/' . $isi['kode_barang']) ?>" class="btn btn-light-danger btn-sm">Hapus</a>
                                                   </td>
                                               </tr>
                                           <?php endforeach; ?>
                                       </tbody>
                                   </table>
                                   <!--end: Datatable-->
                               </div>
                           </div>
                           <!--end::Card-->
                       </div>
                       <!--end::Container-->
                   </div>
                   <!--end::Entry-->
               </div>
               <!--end::Content-->
               <script>
                   var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
               </script>
               <!--begin::Global Config(global config for global JS scripts)-->
               <script>
                   var KTAppSettings = {
                       "breakpoints": {
                           "sm": 576,
                           "md": 768,
                           "lg": 992,
                           "xl": 1200,
                           "xxl": 1400
                       },
                       "colors": {
                           "theme": {
                               "base": {
                                   "white": "#ffffff",
                                   "primary": "#3699FF",
                                   "secondary": "#E5EAEE",
                                   "success": "#1BC5BD",
                                   "info": "#8950FC",
                                   "warning": "#FFA800",
                                   "danger": "#F64E60",
                                   "light": "#E4E6EF",
                                   "dark": "#181C32"
                               },
                               "light": {
                                   "white": "#ffffff",
                                   "primary": "#E1F0FF",
                                   "secondary": "#EBEDF3",
                                   "success": "#C9F7F5",
                                   "info": "#EEE5FF",
                                   "warning": "#FFF4DE",
                                   "danger": "#FFE2E5",
                                   "light": "#F3F6F9",
                                   "dark": "#D6D6E0"
                               },
                               "inverse": {
                                   "white": "#ffffff",
                                   "primary": "#ffffff",
                                   "secondary": "#3F4254",
                                   "success": "#ffffff",
                                   "info": "#ffffff",
                                   "warning": "#ffffff",
                                   "danger": "#ffffff",
                                   "light": "#464E5F",
                                   "dark": "#ffffff"
                               }
                           },
                           "gray": {
                               "gray-100": "#F3F6F9",
                               "gray-200": "#EBEDF3",
                               "gray-300": "#E4E6EF",
                               "gray-400": "#D1D3E0",
                               "gray-500": "#B5B5C3",
                               "gray-600": "#7E8299",
                               "gray-700": "#5E6278",
                               "gray-800": "#3F4254",
                               "gray-900": "#181C32"
                           }
                       },
                       "font-family": "Poppins"
                   };
               </script>
               <!--end::Global Config-->
               <!--begin::Global Theme Bundle(used by all pages)-->
               <script src="<?php echo base_url('demo13/dist/assets/') ?>plugins/global/plugins.bundle.js"></script>
               <script src="<?php echo base_url('demo13/dist/assets/') ?>plugins/custom/prismjs/prismjs.bundle.js"></script>
               <script src="<?php echo base_url('demo13/dist/assets/') ?>js/scripts.bundle.js"></script>
               <!--end::Global Theme Bundle-->
               <!--begin::Page Vendors(used by this page)-->
               <script src="<?php echo base_url('demo13/dist/assets/') ?>plugins/custom/datatables/datatables.bundle.js"></script>
               <!--end::Page Vendors-->
               <!--begin::Page Scripts(used by this page)-->
               <script src="<?php echo base_url('demo13/dist/assets/') ?>js/pages/crud/datatables/data-sources/ajax-client-side.js"></script>
               <!--end::Page Scripts-->