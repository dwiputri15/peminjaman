    <!--begin::Footer-->
    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    	<!--begin::Container-->
    	<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
    		<!--begin::Copyright-->
    		<div class="text-dark order-2 order-md-1">
    			<span class="text-muted font-weight-bold mr-2">2022©</span>
    			<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Politeknik Negeri Malang</a>
    		</div>
    		<!--end::Copyright-->
    		<!--begin::Nav-->
    		<div class="nav nav-dark">
    			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
    			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
    			<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
    		</div>
    		<!--end::Nav-->
    	</div>
    	<!--end::Container-->
    </div>
    <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    	<!--begin::Header-->
    	<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
    		<h3 class="font-weight-bold m-0">User Profile
    		</h3>
    		<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
    			<i class="ki ki-close icon-xs text-muted"></i>
    		</a>
    	</div>
    	<!--end::Header-->
    	<!--begin::Content-->
    	<div class="offcanvas-content pr-5 mr-n5">
    		<!--begin::Header-->
    		<div class="d-flex align-items-center mt-5">
    			<div class="symbol symbol-100 mr-5">
    				<div class="symbol-label" style="background-image:url('https://thumbs.gfycat.com/AcademicDefensiveArgentinehornedfrog-max-1mb.gif')"></div>
    				<i class="symbol-badge bg-success"></i>
    			</div>
    			<div class="d-flex flex-column">

				<?php

				$nama = "Harap Login";

				if ($this->session->userdata('nama')) {

					$nama = $this->session->userdata('nama');
				}
				?>
    				<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?php echo $nama ?></a>
    				<div class="text-muted mt-1">Halo Selamat Datang</div>
    				<div class="navi mt-2">	
    					<a href="<?php echo base_url('login/logout') ?>" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Keluar Aplikasi</a>
    				</div>
    			</div>
    		</div>
    		<!--end::Header-->
    		<!--begin::Separator-->
    		<div class="separator separator-dashed mt-8 mb-5"></div>
    		<!--end::Separator-->
    		<!--begin::Nav-->
    		<div class="navi navi-spacer-x-0 p-0">
    			<!--begin::Item-->
    			<a href="<?php echo base_url('peminjaman_alat/index') ?>" class="navi-item">
    				<div class="navi-link">
    					<div class="symbol symbol-40 bg-light mr-3">
    						<div class="symbol-label">
    							<span class="svg-icon svg-icon-md svg-icon-success">
    								<!--begin::Svg Icon | path:<?php echo base_url('demo13/dist/assets/') ?>media/svg/icons/General/Notification2.svg-->
    								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    										<rect x="0" y="0" width="24" height="24" />
    										<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
    										<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
    									</g>
    								</svg>
    								<!--end::Svg Icon-->
    							</span>
    						</div>
    					</div>
    					<div class="navi-text">
    						<div class="font-weight-bold">Peminjaman Terkini</div>
    						<div class="text-muted">Lihat data peminjaman keseluruhan
    						</div>
    					</div>
    				</div>
    			</a>
    			<!--end:Item-->
    			<!--begin::Item-->
    			<a href="<?php echo base_url('dashboard') ?>" class="navi-item">
    				<div class="navi-link">
    					<div class="symbol symbol-40 bg-light mr-3">
    						<div class="symbol-label">
    							<span class="svg-icon svg-icon-md svg-icon-warning">
    								<!--begin::Svg Icon | path:<?php echo base_url('demo13/dist/assets/') ?>media/svg/icons/Shopping/Chart-bar1.svg-->
    								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    										<rect x="0" y="0" width="24" height="24" />
    										<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
    										<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
    										<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
    										<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
    									</g>
    								</svg>
    								<!--end::Svg Icon-->
    							</span>
    						</div>
    					</div>
    					<div class="navi-text">
    						<div class="font-weight-bold">Dashboard</div>
    						<div class="text-muted">Halaman Utama Aplikasi</div>
    					</div>
    				</div>
    			</a>
    			<!--end:Item-->
    			<!--begin::Item-->
    			<a href="<?php echo base_url('kelola_alat/index') ?>" class="navi-item">
    				<div class="navi-link">
    					<div class="symbol symbol-40 bg-light mr-3">
    						<div class="symbol-label">
    							<span class="svg-icon svg-icon-md svg-icon-danger">
    								<!--begin::Svg Icon | path:<?php echo base_url('demo13/dist/assets/') ?>media/svg/icons/Files/Selected-file.svg-->
    								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    										<polygon points="0 0 24 0 24 24 0 24" />
    										<path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
    										<path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" />
    									</g>
    								</svg>
    								<!--end::Svg Icon-->
    							</span>
    						</div>
    					</div>
    					<div class="navi-text">
    						<div class="font-weight-bold">Alat</div>
    						<div class="text-muted">Data alat keseluruhan yang ada</div>
    					</div>
    				</div>
    			</a>
    			<!--end:Item-->
    			
    		</div>
    		<!--end::Nav-->
    		<!--begin::Separator-->
    		<div class="separator separator-dashed my-7"></div>
    		<!--end::Separator-->
    		<!--begin::Notifications-->

    		<!--end::Notifications-->
    	</div>
    	<!--end::Content-->
    </div>
    <!-- end::User Panel-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
    	<span class="svg-icon">
    		<!--begin::Svg Icon | path:<?php echo base_url('demo13/dist/assets/') ?>media/svg/icons/Navigation/Up-2.svg-->
    		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    				<polygon points="0 0 24 0 24 24 0 24" />
    				<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
    				<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
    			</g>
    		</svg>
    		<!--end::Svg Icon-->
    	</span>
    </div>
    <!--end::Scrolltop-->

    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="<?php echo base_url('demo13/dist/assets/') ?>plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?php echo base_url('demo13/dist/assets/') ?>js/pages/widgets.js"></script>
    <!--end::Page Scripts-->
    </body>
    <!--end::Body-->

    </html>