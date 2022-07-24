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
            <!--begin::Notice-->
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

                    <div class="alert-text">
                        <p>Verifikasi Peminjaman Baru</p>
                        <small>Scan QR dibawah ini untuk mensetujui peminjaman</small>
                    </div>
                </div>
            </div>

            <!--end::Notice-->
            <!--begin::Card-->

            <div id="message-verif"></div>
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Tabel Alat Yang Dipinjam
                            <span class="d-block text-muted pt-2 font-size-sm">Laboratorium AI Politeknik Negeri Malang</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">

                            <?php

                            $start = $this->input->get('start');
                            $end = $this->input->get('end');

                            $url = base_url('laporan/index');

                            if (!empty($start)) {

                                $url = base_url('laporan/index?start=' . $start . '&end=' . $end);
                            }

                            ?>

                            <a href="<?php echo $url ?>" download class="btn btn-light-danger font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Cetak PDF</a>
                        </div>
                        <!--end::Dropdown-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <div class="row">
                        <div class="col-md-5">
                            <form id="form-submit-verifikasi">
                                <div class="form-group">
                                    <input type="text" name="qr" class="form-control" placeholder="Scan atau masukkan kode peminjaman . . ." autofocus />
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--begin::Search Form-->
                    <div class="mb-2">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Dipinjam</option>
                                                <option value="2">Dikembalikan</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr>


                        <form action="" method="GET">



                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group date" id="kt_datetimepicker_7_1" data-target-input="nearest">
                                        <input type="text" name="start" class="form-control datetimepicker-input" placeholder="Start date" data-target="#kt_datetimepicker_7_1" value="<?php echo $start ?>" />
                                        <div class="input-group-append" data-target="#kt_datetimepicker_7_1" data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="ki ki-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group date" id="kt_datetimepicker_7_2" data-target-input="nearest">
                                        <input type="text" name="end" class="form-control datetimepicker-input" placeholder="End date" data-target="#kt_datetimepicker_7_2" value="<?php echo $end ?>" />
                                        <div class="input-group-append" data-target="#kt_datetimepicker_7_2" data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="ki ki-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-light-primary px-6 font-weight-bold">Tampilkan</button>
                                    <a href="<?php echo base_url('peminjaman_alat') ?>" class="btn btn-light-warning px-6 font-weight-bold">Reset</a>
                                </div>
                            </div>
                        </form>


                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th width="3%">ID</th>
                                <th title="Field #2">Identitas Mahasiswa</th>
                                <th title="Field #5">Jumlah Alat</th>
                                <th title="Field #6">Tanggal Peminjaman</th>
                                <th title="Field #6">Tanggal Kembali</th>
                                <th title="Field #7" width="10%">Status </th>
                                <th title="Field #7">Opsi </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            error_reporting(0);
                            $data = array();


                            foreach ($peminjaman->result_array() as $row) {

                                $tanggal = strtotime(date('Y-m-d', strtotime($row['tanggal_awal'])));


                                // melakukan filter
                                if (!empty($start)) {

                                    $filterAwal = strtotime($start);
                                    $filterAkhir = strtotime($end);

                                    if (($filterAwal <= $tanggal) && ($tanggal <= $filterAkhir)) {

                                        array_push($data, $row);
                                    }
                                } else {

                                    array_push($data, $row);
                                }
                            }





                            foreach ($data as $row) : ?>
                                <tr>
                                    <td><?php echo $row['id_peminjaman'] ?></td>
                                    <td><?php echo $row['NIM'] . ' ' . $row['nama'] ?></td>
                                    <td><?php echo $row['jumlah_peminjaman'] ?> item</td>
                                    <td><?php echo date('d F Y', strtotime($row['tanggal_awal'])) ?></td>
                                    <td><?php

                                        if ($row['tanggal_kembali']) {

                                            echo date('d F Y', strtotime($row['tanggal_berakhir']));
                                        } else {

                                            echo "-";
                                        }
                                        ?></td>
                                    <td>
                                        <?php
                                        $color = "";
                                        $text  = "";


                                        if ($row['status'] == "dipinjam") {

                                            $color = "primary";
                                            $text = "Sedang Dipinjam";
                                        } else if ($row['status'] == "diproses" || $row['status'] == "disetujui") {

                                            $color = "warning";
                                            $text = ucfirst($row['status']);
                                        } else if ($row['status'] == "selesai") {

                                            $color = "success";
                                            $text = "Selesai";
                                        }

                                        ?>
                                        <span class="label label-<?php echo $color ?> label-pill label-inline text-center" style="color: #fefefe"><?php echo $text ?></span>
                                    </td>
                                    <td>
                                        <!-- <a href="<?php echo base_url('peminjaman_alat/peminjaman_detail/' . $row['id_peminjaman']) ?>" class="btn btn-sm btn-primary btn-block">Lihat detail</a> -->
                                        <a href="javascript:;" data-toggle="modal" data-target="#opsi-<?php echo $row['id_peminjaman'] ?>" class="btn btn-sm btn-primary btn-block">Opsi</a>

                                        <!-- Modal-->
                                        <div class="modal fade" id="opsi-<?php echo $row['id_peminjaman'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">
                                                        <h4>Keputusan Peminjaman</h4>
                                                        <small>Pilih tombol dibawah ini untuk menentukan keputusan dari peminjaman</small>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary font-weight-bold" data-dismiss="modal">Batal</button>
                                                        <button type="button" class="btn btn-sm btn-light-primary font-weight-bold">Detail</button>

                                                        <?php if ($row['status'] == "diproses") : ?>
                                                            <a href="<?php echo base_url('peminjaman_alat/konfirmasipersetujuan/' . $row['id_peminjaman'] . '/ditolak') ?>" class="btn btn-sm btn-light-danger font-weight-bold">Tolak</a>
                                                            <a href="<?php echo base_url('peminjaman_alat/konfirmasipersetujuan/' . $row['id_peminjaman'] . '/disetujui') ?>" class="btn btn-sm btn-primary font-weight-bold">Terima</a>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
    <!--end::Entry-->
</div>
<!--end::Content-->


<script>
    'use strict';
    // Class definition

    var KTDatatableHtmlTableDemo = function() {
        // Private functions

        // demo initializer
        var demo = function() {

            var datatable = $('#kt_datatable').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },
                search: {
                    input: $('#kt_datatable_search_query'),
                    key: 'generalSearch',
                },
                layout: {
                    class: 'datatable-bordered',
                }
            });

            $('#kt_datatable_search_status').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_search_type').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'Type');
            });



            // Demo 7
            $('#kt_datetimepicker_7_1').datetimepicker({

                format: 'L'
            });

            $('#kt_datetimepicker_7_2').datetimepicker({
                useCurrent: false,
                format: 'L'
            });

            $('#kt_datetimepicker_7_1').on('change.datetimepicker', function(e) {
                $('#kt_datetimepicker_7_2').datetimepicker('minDate', e.date);
            });
            $('#kt_datetimepicker_7_2').on('change.datetimepicker', function(e) {
                $('#kt_datetimepicker_7_1').datetimepicker('maxDate', e.date);
            });


        };

        return {
            // Public functions
            init: function() {
                // init dmeo
                demo();
            },
        };
    }();

    jQuery(document).ready(function() {
        KTDatatableHtmlTableDemo.init();
    });
</script>



<script>
    $(function() {

        $('#form-submit-verifikasi').submit(function(e) {

            $.ajax({

                type: "GET",
                url: "<?php echo base_url('peminjaman_alat/verifikasipeminjaman') ?>",
                data: "qr=" + $('input[name="qr"]').val(),
                dataType: "json",
                success: function(hasil) {

                    $('#message-verif').html(hasil.data).hide().fadeIn();
                }
            });

            e.preventDefault();
        });
    })
</script>