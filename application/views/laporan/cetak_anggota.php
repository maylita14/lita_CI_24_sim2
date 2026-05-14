<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan</title>

    <style>
        body{
            font-family: Arial;
        }

        h3{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid black;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }

        @media print{
            button{
                display: none;
            }
        }
    </style>
</head>

<body>

    <h3>Laporan Anggota</h3>

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

    <br><br>

    <p style="text-align:right;">
        Tangerang, <?= date('d-m-Y'); ?><br><br><br>
        (Admin)
    </p>

    <script>
        window.print();
    </script>

</body>
</html>