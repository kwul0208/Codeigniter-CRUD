<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 ">
            <h1 class=" mt-3 text-center">CRUD</h1>
            <h4 class="mb-5">TOko HandPhone</h4>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nama" name="nama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Poduk">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                </div>
                <div class="mb-3">
                    <label for="keterangan" name="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan Produk">
                    <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>

                </div>
                <div class="mb-3">
                    <label for="harga" name="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk">
                    <small class="form-text text-danger"><?= form_error('harga'); ?></small>

                </div>
                <div class="mb-3">
                    <label for="jumblah" name="jumblah" class="form-label">Jumblah</label>
                    <input type="text" class="form-control" id="jumblah" name="jumblah" placeholder="Jumblah Produk">
                    <small class="form-text text-danger"><?= form_error('jumblah'); ?></small>

                </div>
                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

            </form>


        </div>
        <a href="<?= base_url('Home') ?>">kembali</a>
    </div>
</div>