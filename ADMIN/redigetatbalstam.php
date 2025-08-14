<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../CSS/administration.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="main">
<h3>Nomainīt tekstu(Ja teksts jau eksistē, tas ir jāizdzēš, lai ievietotu jaunu tekstu)</h3>
<?php
// teksts (LAPĀ MĒS ATBALSTAM, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT atbalstateksts, atbalstainfo FROM mesatbalstam WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Pāšreizējais teksts - <h1> ".$row["atbalstateksts"]."</h1>";
    echo "<br />";
    echo "<b>Pašreizējais teksts, kas ir slīprakstā - <h1>" .$row["atbalstainfo"]."</h1>";
    echo "<br />";    
  }
}
?>
<!-- IZDZĒST tekstu -->
<form method = "post">
<button type="submit" id="izdzestFoto" name="izdzesttxt">Dzēst tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['izdzesttxt'])) {
 $sql = "DELETE FROM mesatbalstam WHERE id=1";

if ($conn->query($sql) === TRUE) {
 echo '<script>alert("teksts dzēsts no datubāzes")</script>';
}
}
    ?>
<form method="post" action="">
      <textarea id="izmeri" name='atbalstateksts' placeholder="Ievadiet tekstu"></textarea>
      <textarea id="izmeri" name='atbalstainfo' placeholder="Ievadiet tekstu, kas ir slīprakstā"></textarea>
      <button type='submit' name='atbIevietot'>Ievietot tekstu</button>
    </form>
    <?php
    include 'config.php';
    if(isset($_POST['atbIevietot'])) {
        $sql = "INSERT INTO mesatbalstam(id, atbalstateksts, atbalstainfo)
        VALUES (1, '".$_POST['atbalstateksts']."', '".$_POST['atbalstainfo']."')";
         if ($conn->query($sql) === TRUE) {
            echo '<script>altert(" teksts veiksmīgi ievadīts!")</script><br />';
        } else {
            echo "Kļūda: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        }
    ?>
    <br />
    <br />
<h3>Ievietot attēlus</h3>
<!-- IZDZĒST attēlu -->
<form method = "post">
<button type="submit" id="izdzestFoto" name="izdzestFoto">Dzēst pirmo foto</button>
</form>

<?php
include 'config.php';
if (isset($_POST['izdzestFoto'])) {
 $sql = "DELETE FROM mesatbalstam WHERE id=2";

if ($conn->query($sql) === TRUE) {
 echo '<script>alert("Attēli dzēsti no datubāzes")</script>';
}
}
    ?>
<!-- lapas (Mēs atbalstam) attēla ievietošana -->
<p>Pirmais attēls</p>
<div class="container" style="align:center;">  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insertatt1" id="insert" value="Ievietot" class="btn btn-info" />  
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
if(isset($_POST["insertatt1"]))  
{  
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
$query = "INSERT INTO mesatbalstam(id, atbalstafoto) VALUES (2, '$file')";  
    if(mysqli_query($conn, $query))  
{  
    echo '<script>alert("Attēls ievietots datu bāzē")</script>';  
}  else {

    echo '<script>alert("Attēls jau eksistē datubāzē")</script>';
      } 
}  
 ?>
                <!-- REDIĢĒT OTRU ATTĒLU -->
<!-- IZDZĒST attēlu -->
<form method = "post">
<button type="submit" id="izdzestFoto" name="izdzestFoto1">Dzēst otru foto</button>
</form>

<?php
include 'config.php';
if (isset($_POST['izdzestFoto1'])) {
 $sql = "DELETE FROM mesatbalstam WHERE id=3";

if ($conn->query($sql) === TRUE) {
 echo '<script>alert("Attēls dzēsts no datubāzes")</script>';
}
}
    ?>
<!-- lapas (Mēs atbalstam) attēla ievietošana -->
<p>Otrais attēls</p>
<div class="container" style="align:center;">  
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="insertatt2" id="insert" value="Ievietot" class="btn btn-info" />  
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
if(isset($_POST["insertatt2"]))  
{  
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
$query = "INSERT INTO mesatbalstam(id, atbalstafoto1) VALUES (3, '$file')";  
    if(mysqli_query($conn, $query))  
{  
    echo '<script>alert("Attēls ievietots datu bāzē")</script>';  
}  else {

    echo '<script>alert("Attēls jau eksistē datubāzē")</script>';
      } 
}  
 ?>
<h3>Nomainīt 1. attēla izmērus</h3>
<?php
    include 'config.php';
    $sql = "SELECT fotoplatums FROM mesatbalstam WHERE id = 4";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Pašreizējais platums ".$row["fotoplatums"]."</b>";
    echo "<br />";   
  }
}
    ?>
    <?php
    include 'config.php';
    $sql = "SELECT fotogarums FROM mesatbalstam WHERE id = 5";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Pašreizējais garums ". $row['fotogarums'] ."</b>"; 
    echo "<br />";   
  }
}
    ?>
<form method="post">
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="fotoplatums">
    <button type="submit" name="savePX">Iestatīt platumu</button>
    </form>

<?php
include 'config.php';
    // 1. attēla platuma nomainīšana
  if (isset($_POST['savePX'])) {

    $sql = "UPDATE mesatbalstam SET fotoplatums =('".$_POST['fotoplatums']."') WHERE id = 4";

if ($conn->query($sql) === TRUE) {
    echo '<script>altert("Pirmā attēla platums ir iestatīts!")</script>';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<form method="post">
<input field="text" placeholder="Ievadiet skaitļus(GARUMS)" id="izmeri" name="fotogarums">
    <button type="submit" name="savePX1">Iestatīt platumu</button>
    </form>

<?php
    include 'config.php';
    // 1. attēla garuma nomainīšana
  if (isset($_POST['savePX1'])) {

    $sql = "UPDATE mesatbalstam SET fotogarums =('".$_POST['fotogarums']."') WHERE id = 5";

if ($conn->query($sql) === TRUE) {
    echo '<script>altert("Pirmā attēla garums ir iestatīts!")</script>';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt 2. attēla izmērus</h3>
<?php
    include 'config.php';
    $sql = "SELECT fotoplatums1 FROM mesatbalstam WHERE id = 6";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Pašreizējais platums ".$row["fotoplatums1"]."</b>";
    echo "<br />";   
  }
}
    ?>
<?php
    include 'config.php';
    $sql = "SELECT fotogarums1 FROM mesatbalstam WHERE id = 7";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Pašreizējais garums ".$row["fotogarums1"]."</b>";   
  }
}
    ?>
<form method="post">
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="fotoplatums1">
    <button type="submit" name="savePXX">Iestatīt platumu</button>
    </form>

    <?php

    include 'config.php';

    // 2. attēla platuma nomainīšana
  if (isset($_POST['savePXX'])) {

    $sql = "UPDATE mesatbalstam SET fotoplatums1 =('".$_POST['fotoplatums1']."')
    WHERE id = 6";

if ($conn->query($sql) === TRUE) {
    echo '<script>altert("attēla platums ir iestatīts!")</script>';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<form method="post">
<input field="text" placeholder="Ievadiet skaitļus(GARUMS)" id="izmeri" name="fotogarums1">
    <button type="submit" name="savePXX2">Iestatīt garumu</button>
    </form>

    <?php

    include 'config.php';

    // 2. attēla garuma nomainīšana
  if (isset($_POST['savePXX2'])) {

    $sql = "UPDATE mesatbalstam SET fotogarums1 =('".$_POST['fotogarums1']."')
    WHERE id = 7";

if ($conn->query($sql) === TRUE) {
    echo '<script>altert("attēla garums ir iestatīts!")</script>';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>




</div>
</body>
<script>
</script>
</html>