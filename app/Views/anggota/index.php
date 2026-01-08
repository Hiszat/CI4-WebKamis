<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<a href="<?= base_url('anggota/tambah'); ?>" class="btn btn-success">Tambah Anggota</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Telp</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($anggota as $index => $a): ?>
            <tr>
                <th scope="row"><?= $index + 1; ?></th>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['alamat']; ?></td>
                <td><?= $a['telp']; ?></td>
            </tr>

        <?php endforeach; ?>
        <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr> -->
    </tbody>
</table>

<?php $this->endSection(); ?>