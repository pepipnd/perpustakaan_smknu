
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi
                            <a href="beranda.php?page=transaksi&aksi=add">
                                <button class="btn btn-primary">Tambah Data</button>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                           
                                            <th>Tanggal Transaksi</th>
                                            <th>Nama Anggota</th>
                                            <th>Nama Pegawai</th>
                                            <th>Nama Buku</th>
                                            <th>Quantity</th>
                                            <th>Jenis Transaksi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $sql = "SELECT tr.*,agt.nama_anggota,pgw.nama_pegawai,bk.nama_buku from tabel_transaksi tr 
                                        left join tabel_anggota agt on  tr.id_anggota = agt.id_anggota
                                        left join tabel_pegawai pgw on  tr.id_pegawai = pgw.id_pegawai
                                        left join tabel_buku bk on tr.id = bk.id";

                                        $show = $database->query($sql);

                                        foreach($show as $transaksi):
                                    ?>
                                        <tr>
                                           
                                            <td><?php echo $transaksi['tanggal_transaksi']?></td>
                                            <td><?php echo $transaksi['nama_anggota']?></td>
                                            <td><?php echo $transaksi['nama_pegawai']?></td>
                                            <td><?php echo $transaksi['nama_buku']?></td>
                                            <td><?php echo $transaksi['quantity']?></td>
                                            <td><?php echo $transaksi['jenis_transaksi']?></td>
                                            <td>
                                            <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $transaksi['id_transaksi']?>"
                                                class="btn-btn primary btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                <a href="model/transaksi/prosesdeletetransaksi.php?id=<?php echo $transaksi['id_transaksi']?>"
                                                class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                    </a>
                                            </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                 </table>
                            </div>
                        </div>
                    </div>

                </div>