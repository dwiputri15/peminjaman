<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Tambah Alat Praktikum</title>
		<meta name="description" content="Base form control examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url('demo13/dist/assets/') ?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('demo13/dist/assets/') ?>plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('demo13/dist/assets/') ?>css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url('demo13/dist/assets/') ?>media/logos/favicon.ico" />
	</head><div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
   Tambah Alat Praktikum
  </h3>
 </div>
 <!--begin::Form-->
 <form class="form">
  <div class="card-body">
   <div class="form-group form-group-last">
    </div>
   </div>
   <div class="form-group">
    <label>Jenis Alat</label>
    <input type="email" class="form-control" disabled="disabled" placeholder="Jenis Alat"/>
   </div>
   <div class="form-group">
    <label>Jumlah Alat</label>
    <select class="form-control" disabled="disabled">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
    </select>
   </div>
   <div class="form-group">
    <label for="exampleTextarea">Matakuliah</label>
    <textarea class="form-control" disabled="disabled" rows="3"></textarea>
   </div>
   <div class="form-group">
    <label>Semester</label>
    <input type="email" class="form-control" readonly placeholder="Semester"/>
   </div>
   <div class="form-group">
    <label for="exampleTextarea">Keterangan</label>
    <textarea class="form-control" readonly rows="3"></textarea>
   </div>
  </div>
  <div class="card-footer">
   <button type="reset" class="btn btn-primary mr-2">Masuk</button>
   <button type="reset" class="btn btn-secondary">Batal</button>
  </div>
 </form>
 <!--end::Form-->
</div>