<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Pegawai</h4>
                        <br>
                        <form action="model/pegawai/prosesaddpegawai.php" method="POST">
                            <table class="table">
                            
                                <tr>
                                    <td>Id Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai"></input></td>
                                </tr>
                                <tr>
                                    <td>Nama Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai"></input></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="l">Laki Laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="alamat" id="alamat" cols="10" rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="no_hp"></input></td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jabatan" id="jabatan"></input></td>
                                </tr>
                                <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                    </td>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>