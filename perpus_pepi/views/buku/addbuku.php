<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Buku</h4>
                        <br>
                        <form action="model/buku/prosesaddbuku.php" method="POST">
                            <table class="table">
                            
                                <tr>
                                    <td>isbn</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="isbn" id="isbn"></input></td>
                                </tr>
                                <tr>
                                    <td>nama buku</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_buku" id="nama_buku"></input></td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="penulis" id="penulis" ></textarea></td>
                                </tr>
                                <tr>
                                    <td>penerbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="penerbit" id="penerbit"></input></td>
                                </tr>
                                <tr>
                                    <td>tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tahun_terbit" id="tahun_terbit"></input></td>
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