<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mobil
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="No_polisi">No Polisi</label>
                            <input type="text" name="No_polisi" class="form-control" id="No_polisi">
                            <small class="form-text text-danger"><?= form_error('No_polisi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Nama_mobil">Nama Mobil</label>
                            <input type="text" name="Nama_mobil" class="form-control" id="Nama_mobil">
                            <small class="form-text text-danger"><?= form_error('Nama_mobil'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Warna">Warna Mobil</label>
                            <input type="text" name="Warna" class="form-control" id="Warna">
                            <small class="form-text text-danger"><?= form_error('Warna'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Harga_sewa">Harga Sewa</label>
                            <input type="text" name="Harga_sewa" class="form-control" id="Harga_sewa">
                            <small class="form-text text-danger"><?= form_error('Harga_sewa'); ?></small>
                        </div>
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>