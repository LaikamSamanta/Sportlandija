<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../CSS/administration.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>      
        <meta name="viewport" content = "width-device-width, initial scale=1">
</head>
<body id="body">
<div id="header">
<div class="izvelneQ">
      <a href="administracija.php">Sākums</a>
      <a href="index.php?teksts=true">Pievienot tekstu</a>
      <a href="index.php?atteli=true">Pievienot attēlus</a>
      <a href="index.php?nomainitatteli=true">Nomainīt attēlus</a>
      <a href="index.php?nomainitparametri=true">Nomainīt izmērus attēliem</a>
      <a href="index.php?citasopcijas=true">Citas opcijas</a>
      <a href="index.php?kontakti=true">Rediģēt Kontakti/Karte</a>
      <a href="index.php?atbalstam=true">Rediģēt Mēs atbalstam</a> 
      <a href="index.php?delete=true">Dzēst datus</a>
      <a href="index.php?iestatijumi=true">Iestatījumi</a>
      <a class="iziet" href="admin.php">Iziet</a>
</div>
</div>
<div class="bodypar">
<h1>Pievienot attēlus sadaļā - Mūs atbalsta</h1>
<h4 align="center">(Šo izmantot, ja nu gadījumā esat izdzēsuši kādu attēlu un mājaslapā nepieciešams pievienot jaunu bildi)</h4>
<?php

include 'config.php';
if(isset($_POST["insert1"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (1, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("1. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("1. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 1. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">1. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert1" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php
include 'config.php';
if(isset($_POST["insert2"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (2, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("2. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("2. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 2. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">2. Attēla augšupielāde</h3>
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert2" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert3"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (3, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("3. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("3. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 3. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">3. Attēla augšupielāde</h3>
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert3" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert4"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (4, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("4. Attēls ievietots datu bāzē")</script>';  
      }  else {

          echo '<script>alert("4. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 4. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">4. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert4" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert5"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (5, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("5. Attēls ievietots datu bāzē")</script>';  
      } else {

          echo '<script>alert("5. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 5. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">5. Attēla augšupielāde</h3> 
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert5" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert6"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (6, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("6. Attēls ievietots datubāzē")</script>';  
      }   else {

          echo '<script>alert("6. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 6. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">6. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert6" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert7"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (7, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("7. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("7. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 7. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">7. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert7" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert8"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (8, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("8. Attēls ievietots datu bāzē")</script>';  
      }    else {

          echo '<script>alert("8. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 8. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">8. Attēla augšupielāde</h3> 
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert8" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert9"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (9, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("9. Attēls ievietots datu bāzē")</script>';  
      }    else {

          echo '<script>alert("9. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 9. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">9. Attēla augšupielāde</h3> 
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert9" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert10"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (10, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("10. Attēls ievietots datu bāzē")</script>';  
      }    else {

          echo '<script>alert("10. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 10. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">10. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert10" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert11"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (11, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("11. Attēls ievietots datu bāzē")</script>';  
      }    else {

          echo '<script>alert("11. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 11. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">11. Attēla augšupielāde</h3>
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert11" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert12"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (12, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("12. Attēls ievietots datu bāzē")</script>';  
      }    else {

          echo '<script>alert("12. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 12. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">12. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert12" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div>

<?php

include 'config.php';
if(isset($_POST["insert13"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (13, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("13. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("13. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 13. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">13. Attēla augšupielāde</h3>
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert13" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert14"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (14, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("14. Attēls ievietots datu bāzē")</script>';  
      }    else {

          echo '<script>alert("14. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 14. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">14. Attēla augšupielāde</h3> 
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert14" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div>

<?php

include 'config.php';
if(isset($_POST["insert15"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (15, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("15. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("15. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 15. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">15. Attēla augšupielāde</h3>
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert15" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div>

<?php

include 'config.php';
if(isset($_POST["insert16"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (16, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("16. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("16. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 16. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">16. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert16" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert17"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (17, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("17. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("17. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 17. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">17. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert17" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert18"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (18, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("18. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("18. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 18. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">18. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert18" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 
<?php

include 'config.php';
if(isset($_POST["insert19"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (19, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("19. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("19. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 19. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">19. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert19" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert20"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (20, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("20. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("20. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 20. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">20. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert20" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div>

<?php

include 'config.php';
if(isset($_POST["insert21"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (21, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("21. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("21. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 21. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">21. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert21" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert22"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (22, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("22. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("22. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 22. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">22. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert22" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div>

<?php

include 'config.php';
if(isset($_POST["insert23"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (23, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("23. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("23. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 23. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">23. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert23" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert24"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (24, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("24. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("24. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 24. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">24. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert24" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert25"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (25, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("25. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("25. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 25. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">25. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert25" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert26"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (26, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("26. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("26. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 26. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">26. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert26" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert27"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (27, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("27. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("27. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 27. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">27. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert27" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert28"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (28, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("28. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("28. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 28. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">28. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert28" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert29"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (29, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("29. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("29. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 29. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">29. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert29" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<?php

include 'config.php';
if(isset($_POST["insert30"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(id, name) VALUES (30, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("30. Attēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("30. attēls jau eksistē datubāzē, dodieties uz sadaļu NOMAINĪT ATTĒLUS")</script>';
      } 
 }  
 ?>
<!-- 30. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">30. Attēla augšupielāde</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insert30" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 
</div>
<script>
//Attēlu augšupielāde
$(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Lūdzu izvēlieties attēlu");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Nepareizs attēla formāts');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
</script> 
</body>
</html>