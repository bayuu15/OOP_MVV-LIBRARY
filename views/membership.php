<?php

if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}

if (isset($_SESSION['is_login']) == false){
    header('location: /login');
}

include("templates/header.php") ?>

<!DOCTYPE html>

<?php
$number = 0;
if (!defined('SECURE_ACCESS')){
  die('Direct access not permitted');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
      .header{
      background-color: #2874a6;
      height: 100px;
      color: white;
      text-align: center;
      }   
   
      

    </style>
</head>
<body>


  <div class="header">
    <br>
    <h1>LIBRARY</h1>
  </div>

    <div>
      <h1>HALAMAM MEMBERSHIP</h1>
    </div>
</body>
</html>