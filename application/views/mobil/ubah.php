<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mobil
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="No_mobil" value="<?= $mobil['No_mobil']; ?>">
                        
                      


                        <div class="form-group">
                            <label for="No_polisi">No Polisi</label>
                            <input type="text" name="No_polisi" class="form-control" id="No_polisi" value="<?= $mobil['No_polisi']; ?>">
                            <small class="form-text text-danger"><?= form_error('No_polisi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Nama_mobil">Nama Mobil</label>
                            <input type="text" name="Nama_mobil" class="form-control" id="Nama_mobil" value="<?= $mobil['Nama_mobil']; ?>">
                            <small class="form-text text-danger"><?= form_error('Nama_mobil'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Warna">Warna Mobil</label>
                            <input type="text" name="Warna" class="form-control" id="Warna" value="<?= $mobil['Warna']; ?>">
                            <small class="form-text text-danger"><?= form_error('Warna'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Harga_sewa">Harga Sewa</label>
                            <input type="text" name="Harga_sewa" class="form-control" id="Harga_sewa"value="<?= $mobil['Harga_sewa']; ?>">
                            <small class="form-text text-danger"><?= form_error('Harga_sewa'); ?></small>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>