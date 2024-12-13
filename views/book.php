<!DOCTYPE html>
<?php
$number = 1;
if (!defined('SECURE_ACCESS')) {
  die('Direct access not permitted');
}
?>

<?php
  function Inputtgl($tanggal){
    $pisah = explode('/', $tanggal);
    $lari = array($pisah[2], $pisah[1],$pisah[0]);
    $satukan = implode("-", $lari);

    return $satukan;
  }
?>

<?php
session_start();
require_once 'config/database.php';

// if (!isset($_SESSION['id_user'])){
//   header('')
// }

$nama_buku = $pdo->real_escape_string($_POST['id_buku']);
$tgl_peminjaman = date($_POST['tgl_peminjaman']);
$tgl_pengembalian = date($_POST['tgl_pengembalian']);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
  <style>
    .header {
      background-color: #2874a6;
      height: 100px;
      color: white;
      text-align: center;
    }

    .search {
      position: relative;
      box-shadow: 0 0 40px rgba(51, 51, 51, .1);

    }

    .search input {
      height: 60px;
      text-indent: 25px;
      border: 2px solid #d6d4d4;

    }


    .search input:focus {
      box-shadow: none;
      border: 2px solid blue;

    }

    .search .fa-search {
      position: absolute;
      top: 20px;
      left: 16px;

    }

    .search button {
      position: absolute;
      top: 5px;
      right: 5px;
      height: 50px;
      width: 110px;
      background: blue;

    }

    .table {
      margin-left: 25%;
      margin-top: 5%;
    }

    .button {
      height: 3%;
      width: 70%;
      margin-left: 30px;
      font-size: small;
    }
  </style>
</head>

<body>
  <div class="header">
    <br>
    <h1>LIBRARY</h1>
  </div>

  <br>

  <div class="container">
    <div class="row height d-flex justify-content-center align-items-center">
      <div class="col-md-8">
        <div class="search">
          <i class="fa fa-search"></i>
          <form action="" method="GET">
            <input type="text" class="form-control" placeholder="Looking for book?" name="find" required />
            <button class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="table">
    <table class="table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>title</th>
          <th>Author</th>
          <th>Year</th>
          <th>
            <button type="button" class="button btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pinjam</button>

          </th>
        </tr>
      <tbody>
        <?php foreach ($data as $book): ?>
          <tr>
            <th><?= $number++ ?></th>
            <th><?= $book->getTitle() ?></th>
            <th><?= $book->getAuthor() ?></th>
            <th><?= $book->getYear() ?></th>
            <!-- <th><button class="button btn btn-primary" href="/home">Pinjam buku</button></th> -->
           
          </tr>
        </tbody>
      <?php endforeach ?>
      </thead>
    </table>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">x`
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body">
          <form action="proses/proses-tambah-buku.php" method="POST" autocomplete="off">
            <div class="form-group">
              <label for="nama_buku">Nama buku</label>
              <input type="text" name="idx`_buku" class="form-control" autofocus required>
            </div>
            <div class="row ">
                <div class="col-md-4">
                 <div class="form-group" >
                  <div>
                    <label for="example-datepicker">Masukan Tanggal Peminjaman</label>
                    <input type="text" name="tgl_peminjaman" id="tgl_peminjaman">
                   
                  </div>
                </div>
                </div>
                
                <div class="col-md-4" style="margin-left:60px;">
                 <div class="form-group">
                  <div>
                    <label for="example-datepicker">Masukan Tanggal Pengembalian</label>
                    <input type="text" name="tgl_pengembalian" id="tgl_pengembalian">
                  </div>
                </div>
                </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


<script>
  $(function(){
    $('#tgl_peminjaman').datepicker({
      dateFormat :"dd/mm/yy",
      dateMonth : true,
      dateYear : true
    }); 
  });
</script>

<script>
  $(function(){
    $('#tgl_pengembalian').datepicker({
      dateFormat :"dd/mm/yy",
      dateMonth : true,
      dateYear : true
    }); 
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>