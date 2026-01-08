<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= base_url('anggota/tambah'); ?>">
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="Nama" name="nama_anggota">
    </div>
    <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="Alamat" name="alamat">
    </div>
    <div class="mb-3">
        <label for="NoTelp" class="form-label">No. Telp</label>
        <input type="text" class="form-control" id="NoTelp" name="telp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $this->endSection(); ?>