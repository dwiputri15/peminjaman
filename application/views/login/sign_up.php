<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../../">
	<meta charset="utf-8" />
	<title>Daftar Admin</title>
	<meta name="description" content="Singin page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="https://keenthemes.com/metronic" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="<?php echo base_url('demo13/dist/assets/') ?>css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="<?php echo base_url('demo13/dist/assets/') ?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('demo13/dist/assets/') ?>plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('demo13/dist/assets/') ?>css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="<?php echo base_url('demo13/dist/assets/') ?>media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
			<!--begin::Content-->
			<div class="login-container d-flex flex-center flex-row flex-row-fluid order-2 order-lg-1 flex-row-fluid bg-white py-lg-0 pb-lg-0 pt-15 pb-12">
				<!--begin::Container-->
				<div class="login-content login-content-signup d-flex flex-column">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column px-10">
						<!--begin::Aside header-->
						<a href="#" class="login-logo pb-lg-4 pb-10">
							<img src="https://1.bp.blogspot.com/-PpH7CcrJIvE/X5WGsZUp6LI/AAAAAAAADRE/VIw1_NyjUC4HUnijuO1r2WBG4tfjpJGbgCLcBGAsYHQ/s1920/Logo%2BPolinema%2B%2528Politeknik%2BNegeri%2BMalang%2529.png" class="max-h-70px" alt="" />
						</a>
					</div>
					<!--end::Login Header-->
					<!--begin::Login Sign up form-->
					<div class="login-signup">
						<div class="mb-20">
							<h3>Selamat Datang</h3>
							<p class="opacity-60 font-weight-bold"> Daftar terlebih dahulu untuk mengakses Laboratorium AI Politeknik Negeri Malang </p>
							<!--end::Aside header-->
							<!--begin: Wizard Nav-->
							<div class="wizard-nav pt-5 pt-lg-15 pb-10">
								<!--begin::Wizard Steps-->
								<div class="wizard-steps d-flex flex-column flex-sm-row">

									<!--end::Wizard Step 1 Nav-->

									<!--end::Wizard Step 2 Nav-->

								</div>
								<!--end::Wizard Steps-->
							</div>
							<!--end: Wizard Nav-->
						</div>
						<!--end::Aside Top-->
						<!--begin::Signin-->
						<div class="login-form">
							<!--begin::Form-->
							<form class="form px-10" novalidate="novalidate" id="kt_login_signup_form">
								<!--begin: Wizard Step 1-->
								<div class="" data-wizard-type="step-content" data-wizard-state="current">
									<!--begin::Title-->
									<div class="pb-10 pb-lg-12">
										<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Buat Akun</h3>
										<div class="text-muted font-weight-bold font-size-h4">Sudah Memiliki Akun ?
											<a href="<?php echo base_url('login/index') ?>" class="text-primary font-weight-bolder">Masuk</a>
										</div>
									</div>

									<!--begin::Title-->
									<!--begin::Form Group-->

									<form action="<?php echo base_url('sign_up/ambil_data') ?>" method="POST">
										<div class="form-group">
											<label> Masukkan Id </label>
											<input type="text" name="id" class="form-control" placeholder="Masukkan kode matakuliah . . ." required="" />

										</div>
										<div class="form-group">
											<label>Masukkan Nama </label>
											<input type="text" name="nama" class="form-control" placeholder="Masukkan nama matakuliah . . ." required="" />

										</div>
										<div class="form-group">
											<label>Masukkan Password </label>
											<input type="text" name="pw" class="form-control" placeholder="semester . . ." required="" />

										</div>
										<div class="form-group">
											<label>Status Akun </label>
											<input type="text" name="akun" class="form-control" placeholder="semester . . ." required="" />

										</div>

										<div class="form-group">
											<a href="<?php echo base_url('login/index') ?>" class="btn btn-light-primary">Kembali</a>
											<button class="btn btn-primary">Tambahkan Akun </button>
										</div>
									</form>

								</div>

							</form>
							<!--end::Form Group-->

							<!--end::Form Group-->
						</div>
						<!--end: Wizard Step 1-->


						<!--begin: Wizard Actions-->

						</form>
						<!--end::Form-->
					</div>
					<!--end::Signin-->
				</div>
				<!--end::Container-->
			</div>
			<!--begin::Content-->
			<!--begin::Aside-->
		</div>
		<!--end::Aside-->
	</div>
	<!--end::Login-->
	</div>
	<!--end::Main-->
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
	<!--begin::Page Scripts(used by this page)-->
	<script src="<?php echo base_url('demo13/dist/assets/') ?>js/pages/custom/login/login-4.js"></script>
	<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>