<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="shortcut icon" href="logo.ico">

    <title>Linker</title>
  </head>
  <body style="background-color: #FBEFF2;">
  <div class="container" style="background-image: linear-gradient(to right, #ea5040 , #e83b81);">
    <div class="row" style="height: 100px;">
      <div class="col">
        <a href="page3.html"><img src="fleche.png" class="align-middle img-fluid mx-auto d-block" style="width: 50px; margin-top: 20px;"></a>
      </div>
      <div class="col">
        <p class="text-center align-middle Name" style="color: white; margin-top: 25px; font-size: 30px;">JAN</p>
      </div>
      <div class="col">
        <img src="LUI_contour.png" class="align-middle img-fluid mx-auto d-block" style="width: 60px; margin-top: 20px;">
      </div>
    </div>
  </div>

  <div class="container fixed-bottom  Discussion">
    <div class="row" style="margin-bottom: 1px;">
      <div class="col">
        <img src="LUI_rond_sanscontour.png" class="img-fluid" style="width: 40px; margin-top: 40px;">
        <div class="alert border-success rounded-pill d-inline-flex" style="">
          On peut parler là ?
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-end" style="margin-bottom: 1px;">
        <div class="d-flex justify-content-end" style="margin-bottom: -40px; margin-right: 40px;">
        <div class="alert alert-success rounded-pill d-inline-flex">
          Ok
        </div></div>
        <div class="col-2 d-flex justify-content-end">
        <img src="ELLE_rond_sanscontour.png" class="img-fluid" style="width: 40px;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 100px;">
      <div class="col">
        <img src="LUI_rond_sanscontour.png" class="img-fluid" style="width: 40px; margin-top: 40px;">
        <div class="alert alert-success rounded-pill d-inline-flex" style="">
          <span class="" style="opacity: 0.7">Écrit...</span>
        </div>
      </div>
    </div>

  </div>

  <<?php 
    sleep(20);
    header('location:page4.html');
   ?>

  <div class="container fixed-bottom bg-light py-4 border border-3">
    <div class="row">
      <div class="col-10"><form>
        <input type="text" class="form-control rounded-pill Discussion" placeholder="Entrer le texte ici">
      </form></div>
      <div class="col-2">
        <a href="page5.html"><img src="send.svg" class="img-fluid" style="width: 40px;"></a>
      </div>
    </div>
  </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>