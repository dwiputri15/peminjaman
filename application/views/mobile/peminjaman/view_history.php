<!-- App Capsule -->
<div id="appCapsule">

<div class="header-large-title">
    <h2>Riwayat Peminjaman</h2>
    <small>Menampilkan history peminjaman</small>
</div>




<div class="section mt-3 mb-3">
    <div class="card">

    <div class="wide-block p-0">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ( $history AS $urutan => $isi ) : ?>
                    <tr>
                        <th scope="row"><?php echo $urutan + 1 ?></th>
                        <td>
                            <a href="javascript:;" data-toggle="modal" data-target="#display-<?php echo $urutan ?>">
                                <?php echo date('d/m/Y H.i', strtotime( $isi['info']['tanggal_awal'] )) ?>
                            </a>


                            <!-- Modal Basic -->
                            <div class="modal fade modalbox" id="display-<?php echo $urutan ?>" data-backdrop="static" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Rincian Peminjaman Detail</h5>
                                            <a href="#" data-dismiss="modal">Batal</a>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <?php foreach ( $isi['detail'] AS $isi_d ) : ?>

                                                <ul class="listview image-listview">
                                                    <li>
                                                        <a href="javascript:;" class="item">
                                                            <div class="in">
                                                                <div>
                                                                    <header>Item</header>
                                                                    <b><?php echo $isi_d['nama_barang'] ?></b>
                                                                    <footer>Jumlah <?php echo $isi_d['jumlah'] ?> Item</footer>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            
                                            <?php endforeach; ?>

                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- * Modal Basic -->


                            







                        </td>
                        <td><?php echo $isi['info']['status'] ?></td>
                        <td><?php echo $isi['info']['jumlah_peminjaman'] ?> item</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    

    </div>
</div>