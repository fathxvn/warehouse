<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-2">
    <h2 class="">Data Barang</h2>

    <a href="<?= base_url('barang/form_tambah')?>" class="btn btn-success mb-3" >+Tambah Barang</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Tanggal masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php foreach($barang as $b): ?>
            <tbody>
                <tr>
                    <td><?= $b + 1?></td>
                    <td><?= esc($b['nama_barang'])?></td>
                    <td><?= esc($b['stok'])?></td>
                    <td><?= esc($b['satuan'])?></td>
                    <td><?= esc($b['tanggal_masuk'])?></td>
                </tr>
            </tbody>
            <?php endforeach ?>
    </table>

</div>
<?= $this->endSection(); ?>