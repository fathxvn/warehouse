<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>
<h2>Tambah Data</h2>
<a href="<?= base_url('barang/form_tambah') ?>" class="mb-3 btn btn-success">Tambah Data</a>
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
    <tbody>
        <?php $i = 1; foreach($barang as $b): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($b['nama_barang'])?></td>
                <td><?= esc($b['stok'])?></td>
                <td><?= esc($b['satuan'])?></td>
                <td><?= esc($b['tanggal_masuk'])?></td>
                <td><!-- Aksi nanti di sini -->
                    <a href="<?= base_url('barang/edit/' . $b['id_barang']) ?>" class="btn btn-warning">edit</a>
                    <a href="<?= base_url('barang/hapus/'. $b['id_barang']) ?>" onclick="confirm('sure DELETE this Data')" class="btn btn-danger">delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection(); ?>