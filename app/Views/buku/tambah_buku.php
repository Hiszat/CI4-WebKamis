<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<form>
    asdasa
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judulu" name="judul_buku">
    </div>
    <div class="mb-3">
        <label for="Pengarang" class="form-label">Pengarang</label>
        <input type="text" class="form-control" id="Pengarang" name="pengarang">
    </div>
    <div class="mb-3">
        <label for="Penerbit" class="form-label">Penerbit</label>
        <input type="text" class="form-control" id="Penerbit" name="pengarang">
    </div>
    <div class="mb-3">
        <label for="thnterbit" class="form-label">Tahun Terbit</label>
        <input type="number" class="form-control" id="thnterbit" name="pengarang">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $this->endSection(); ?>