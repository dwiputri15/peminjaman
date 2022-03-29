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
                                   <h5 class="text-dark font-weight-bold my-1 mr-5">Ajax Client Side Examples</h5>
                                   <!--end::Page Title-->
                                   <!--begin::Breadcrumb-->
                                   <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                       <li class="breadcrumb-item text-muted">
                                           <a href="" class="text-muted">Crud</a>
                                       </li>
                                       <li class="breadcrumb-item text-muted">
                                           <a href="" class="text-muted">Datatables.net</a>
                                       </li>
                                       <li class="breadcrumb-item text-muted">
                                           <a href="" class="text-muted">Data sources</a>
                                       </li>
                                       <li class="breadcrumb-item text-muted">
                                           <a href="" class="text-muted">Ajax Client-side</a>
                                       </li>
                                   </ul>
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

                           <!--end::Notice-->
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
                                       <a href="#" class="btn btn-primary font-weight-bolder">
                                           <i class="la la-plus"></i> Tambahkan Alat</a>
                                       <!--end::Button-->
                                   </div>
                               </div>
                               <div class="card-body">
                                   <!--begin: Datatable-->
                                   <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                       <thead>
                                           <tr>
                                               <th>Kode Alat</th>
                                               <th>Nama Alat</th>
                                               <th>Jumlah Alat</th>
                                               <th>Matakuliah </th>
                                               <th>Semester </th>
                                               <th>Status</th>
                                               <th>Type</th>
                                               <th>Actions</th>
                                           </tr>
                                       </thead>
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