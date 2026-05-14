<div class="container-fluid">

    <h3>Laporan Anggota</h3>

    <form method="get">
        <input type="text" name="keyword"
        value="<?= isset($keyword) ? $keyword : ''; ?>"
        placeholder="Cari nama anggota">

        <button type="submit" class="btn btn-primary btn-sm">
            Filter
        </button>

        <a href="<?= site_url('laporan/anggota'); ?>"
        class="btn btn-secondary btn-sm">
        Reset
        </a>
    </form>

    <br>

    <a href="<?= site_url('laporan/cetak_anggota'); ?>"
    target="_blank"
    class="btn btn-success btn-sm">
    Cetak PDF
    </a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Nomor Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Tanggal_daftar</th>
            <th>Status</th>
        </tr>

        <?php $no=1; foreach($anggota as $a): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $a->nomor_anggota; ?></td>
            <td><?= $a->nama; ?></td>
            <td><?= $a->alamat; ?></td>
            <td><?= $a->telepon; ?></td>
            <td><?= $a->email; ?></td>
            <td><?= $a->tanggal_daftar; ?></td>
            <td><?= $a->status; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

</div>