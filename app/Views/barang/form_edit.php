<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>
<h2>Edit Barang</h2>
<form action="<?= base_url('barang/update/'. $barang['id_barang']) ?>" method="post">
    <div class="mb-3">
        <label>Nama barang</label>
        <input type="text" name="nama_barang" value="<?= esc($barang['nama_barang']) ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>stok</label>
        <input type="number" name="stok" value="<?= esc($barang['stok']) ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Satuan</label>
        <input type="text" name="satuan" value="<?= esc($barang['stok']) ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tanggal Masuk</label>
        <input type="date" name="tanggal_masuk" value="<?= esc($barang['tanggal_masuk']) ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">update</button>
</form>
<?= $this->endSection() ?>