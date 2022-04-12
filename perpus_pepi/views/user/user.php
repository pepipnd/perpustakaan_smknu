
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data User
                            <a href="beranda.php?page=user&aksi=add">
                                <button class="btn btn-primary">Tambah Data</button>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id User</th>
                                            <th>Id Pegawai</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>aksi</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "select * from tabel_user";
                                        $show = $database->query($sql);

                                        foreach($show as $user):
                                    ?>
                                        <tr>
                                            <td><?php echo $user['id_user']?></td>
                                            <td><?php echo $user['id_pegawai']?></td>
                                            <td><?php echo $user['username']?></td>
                                            <td><?php echo $user['password']?></td>
                                            <td><?php echo $user['level']?></td>
                                            <td>
                                            <a href="beranda.php?page=user&aksi=edit&id=<?php echo $user['id_user']?>"
                                                class="btn-btn primary btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                <a href="model/user/prosesdeleteuser.php?id=<?php echo $user['id_user']?>"
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