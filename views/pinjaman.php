<?php
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/Controller.php';
require_once 'controllers/DataPinjamanController.php';
require_once 'controllers/PinjamanController.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <h2>Data Barang</h2>
        <hr>

        <a href="/book" class="btn btn-primary">Kembali</a>
        <a href="?p=tambah-barang" class="btn btn-primary btn-sm float-right">Tambah Data</a>


        <div class="clearfix"></div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama buku</th>
            <th scope="col">Tgl. Peminjaman</th>
            <th scope="col">Batas Tgl. Pengembalian</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($peminjaman as $row)
            ?>
            <tr>
            <td scope="row"><?= $no++ ?></td>
            <td><?= $row ['id_buku'] ?></td>
            <td><?= $row['tgl_peminjaman'] ?></td>
            <td><?= $row['tgl_pengembalian'] ?></td>
            </tr>
        </tbody>
    </table>





    </div>
</body>

</html>