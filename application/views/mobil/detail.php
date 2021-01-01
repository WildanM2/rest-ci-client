<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mobil
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mobil['No_polisi']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mobil['Nama_mobil']; ?></h6>
                    <p class="card-text"><?= $mobil['Warna']; ?></p>
                    <p class="card-text"><?= $mobil['Harga_sewa']; ?></p>
                    <a href="<?= base_url(); ?>mobil/" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>