
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Buku
                            <a href="beranda.php?page=buku&aksi=add">
                                <button class="btn btn-primary">Tambah Data</button></a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Isbn</th>
                                            <th>Nama Buku</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $sql = "select * from tabel_buku";
                                        $show = $database->query($sql);

                                        foreach($show as $buku):
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $buku['isbn']?></td>
                                            <td><?php echo $buku['nama_buku']?></td>
                                            <td><?php echo $buku['penulis']?></td>
                                            <td><?php echo $buku['penerbit']?></td>
                                            <td><?php echo $buku['tahun_terbit']?></td>
                                            <td>
                                            <a href="beranda.php?page=buku&aksi=edit&id=<?php echo $buku['id']?>"
                                                class="btn-btn primary btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                <a href="model/buku/prosesdeletebuku.php?id=<?php echo $buku['id']?>"
                                                class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
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