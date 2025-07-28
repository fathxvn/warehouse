<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-2">
    <h2 class="">Data Barang</h2>
    <a href="<?= base_url('barang/form_tambah')?>" class="btn btn-success">+Tambah Barang</a>

</div>
<?= $this->endSection(); ?>