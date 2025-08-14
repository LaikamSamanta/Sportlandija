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
<h1>Nomainīt attēlus sadaļā - Mūs atbalsta</h1>

<!--Atjaunot 1. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update1"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 1"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("1. attēls ir nomainīts")</script>';  

      }  else {
           echo '<script>Attēls neeksistē, dodieties uz sadaļu PIEVIENOT ATTĒLUS</script>';
      }
 }  
 ?>
<!--1. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">1. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update1" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 2. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update2"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 2"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("2. attēls ir nomainīts")</script>';  
      } 
 }  
 ?>
<!--2. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">2. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update2" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 3. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update3"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 3"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("3. attēls ir nomainīts")</script>';  
      } 
 }  
 ?>
<!--3. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">3. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update3" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 4. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update4"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 4"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("4. attēls ir nomainīts")</script>';  
      }
 }  
 ?>
<!--4. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">4. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update4" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 5. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update5"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 5"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("5. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--5. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">5. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update5" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 6. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update6"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 6"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("6. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--6. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">6. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update6" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 7. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update7"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 7"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("7. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--3. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">7. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update7" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 8. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update8"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 8"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("8. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--8. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">8. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update8" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 9. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update9"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 9"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("9. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--9. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">9. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update9" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 10. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update10"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 10"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("10. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--10. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">10. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update10" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 11. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update11"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 11"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("11. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--11. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">11. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update11" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 12. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update12"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 12"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("12. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--12. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">12. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update12" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 13. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update13"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 13"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("13. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--13. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">13. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update13" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 14. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update14"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 14"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("14. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--14. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">14. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update14" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 15. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update15"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 15"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("15. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--15. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">15. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update15" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 16. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update16"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 16"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("16. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--16. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">16. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update16" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 17. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update17"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 17"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("17. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--17. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">17. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update17" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 18. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update18"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 18"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("18. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--18. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">18. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update18" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 19. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update19"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 19"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("19. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--19. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">19. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update19" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 20. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update20"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 20"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("20. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--20. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">20. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update20" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 21. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update21"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 21"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("21. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--21. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">21. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update21" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 22. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update22"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 22"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("22. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--22. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">22. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update22" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 23. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update23"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 23"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("23. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--23. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">23. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update23" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 24. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update24"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 24"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("24. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--24. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">24. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update24" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div>

<!--Atjaunot 25. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update25"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 25"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("25. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--25. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">25. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update25" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 26. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update26"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 26"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("26. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--26. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">26. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update26" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 27. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update27"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 27"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("27. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--27. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">27. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update27" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 28. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update28"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 28"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("28. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--28. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">28. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update28" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 29. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update29"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 29"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("29. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--29. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">29. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update29" id="insert" value="Ievietot" class="btn btn-info" />  
</form>  
<br />  
<br />  
<table class="table table-bordered">  
<tr>  
<th></th>  
 </tr>  
</table>  
</div> 

<!--Atjaunot 30. attēlu-->
<?php

include 'config.php';
if(isset($_POST["update30"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE tbl_images 
      SET name = '$file'
      WHERE id = 30"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("30. attēls ir nomainīts")</script>';  
      }  
 }  
 ?>
<!--30. attēla ievietošana -->
<div class="container" style="width:500px;">  
<h3 align="center">30. attēla nomainīšana</h3>  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="update30" id="insert" value="Ievietot" class="btn btn-info" />  
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