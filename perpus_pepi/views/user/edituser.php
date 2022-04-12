<?php
    @$id_user = $_GET['id'];

    $sql    = "select * from tabel_user where id_user=$id_user";
    $show   = $database->query($sql);
    $hasil  = mysqli_fetch_assoc($show);    
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data User</h4>
                        <br>
                        <form action="model/user/edituser.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $hasil['id'] ?>">

                            <table class="table">
                                <tr>
                                    <td>Id User</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_user" id="id_user" value="<?php echo $hasil['id_user']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Id Pegawai</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="id_pegawai" id="id_pegawai" cols="10" rows="6"><?php echo $hasil['id_pegawai']?></textarea></td>
                                </tr>
                                <tr>
                                    <td>User Name</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="username" id="username" value="<?php echo $hasil['username']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="password"  class="form-control" name="password" id="password" value="<?php echo $hasil['password']?>"></input></td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="level" id="level" value="<?php echo $hasil['level']?>"></input></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>