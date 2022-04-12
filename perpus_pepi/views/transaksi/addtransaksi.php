<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Transaksi</h4>
                        <br>
                        <form action="model/transaksi/prosesaddtransaksi.php" method="POST">
                            <table class="table">
                            
                                <tr>
                                    <td>Id Transaksi</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_transaksi" id="id_transaksi"></input></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Transaksi</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi"></input></td>
                                </tr>
                                <tr>
                                    <td>Id Anggota</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_anggota" id="id_anggota" ></input></td>
                                </tr>
                                <tr>
                                    <td>Id Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai"></input></td>
                                </tr>
                                <tr>
                                    <td>Id Buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_buku" id="id_buku"></input></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="quantity" id="quantity"></input></td>
                                </tr>
                                <tr>
                                    <td>Jenis Transaksi</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_transaksi" id="jenis_transaksi">
                                            <option value="pinjam">pinjam</option>
                                            <option value="kembali">kembali</option>
                                        </select>
                                    </td>
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