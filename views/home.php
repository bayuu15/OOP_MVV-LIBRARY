<!DOCTYPE html>

<?php
$number = 0;
if (!defined('SECURE_ACCESS')){
  die('Direct access not permitted');
}

// if (isset($_SESSION['is_login']) == false) {
//   header("location: /login");
// }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <style>
      .header{
      background-color: #2874a6;
      height: 100px;
      color: white;
      text-align: center;
      }   
      .card-group{
        gap: 20px;
        margin: 20px;
        width: 40%;
      }

    </style>
</head>
<body>


  <div class="header">
    <br>
    <h1 >LIBRARY</h1>
  </div>


  <br>
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card-group" >
      <div class="card" >
        <img src="views/foto1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Search Book</h5>
          <p class="card-text">Cari buku yang ingin anda baca.</p>
                  <a href="/book" class="btn btn-primary">Click</a>
                </div>
              </div>
              
              <div class="card">
                <img src="views/foto1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Membership</h5>
                  <p class="card-text">Langganan untuk mendapatkan akses tertentu.</p>
                  <a href="/membership" class="btn btn-primary">Click</a>
        </div>
      </div>
  </div>

  </div>

 

</body>
</html>