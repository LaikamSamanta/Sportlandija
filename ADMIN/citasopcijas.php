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

    <h3>Nomainīt galvenei romiešu skaitļus</h3>
    <?php
// romiešu skaitļi (VISĀS LAPĀS HEADERĪ JEB GALVENĒ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT cipari FROM romiesucipari WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Pāšreizējie romiešu skaitļi - <h1> ".$row["cipari"]."</h1>";
    echo "<br />";    
  }
}

    ?>
    <form method="post">
        <input type="text" name="cipari" id="izmeri" placeholder="Ievadiet tekstu">
        <button type="submit" name="saglabat">Saglabāt tekstu</button>
</form>
<br />
<h3>Ievietot sākumlapas video</h3>
<!-- IZDZĒST SĀKUMLAPAS VIDEO -->
<form method="post">
<button type="submit" id="text" name="dzestVIDEO">Dzēst video no mapes</button>
</form>

<?php
if(isset($_POST['dzestVIDEO'])) {
include 'config.php';

$path = "../Videos";

$files = glob($path.'/*.mp4');
 
// Izdzēst visus failus
foreach($files as $file){
 if(is_file($file)){
 unlink($file);
 }
}
 
echo "video veiksmīgi izdzēsts no mapes.";
exit;
}
?>
<br />
<!-- IZDZĒST SĀKUMLAPAS VIDEO NO DATUBĀZES -->
<form method="post">
<button type="submit" id="text" name="dzestVIDEO1">Dzēst video no datubāzes</button>
</form>

<?php
include 'config.php';
if(isset($_POST['dzestVIDEO1'])) {
$sql = "DELETE FROM videos";
if ($conn->query($sql) === TRUE) {
echo 'Video izdzēsts no datubāzes';
}
}
?>
<?php
    include("config.php");
 
    if(isset($_POST['but_upload'])){
       $maxsize = 200000000; // 200MB
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Izvēlēties faila veidu
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Derīgie faili paplašinājumi
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Pārbaudīt vai ir derīgs faila paplašinājums
       if( in_array($videoFileType,$extensions_arr) ){
 
       // Pārbaudīt faila izmēru
       if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
       echo "Fails ir par lielu. Failam ir jābūt mazākam par 200MB.";
       }else{
       // Augšupielādēt
       if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
       // Ievietot video lapā
       $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

       mysqli_query($conn,$query);
       echo "Augšupielāde ir veiksmīga.";
            }
          }
       // Pārvietot video uz citu mapi, lai varētu piekļūt ārpus ADMIN mapes 
       if(rename($target_file, "../videos/".  
       basename( $_FILES["file"]["name"]))) { 
       echo ""; 
}     else{
          echo "Fails nav derīgs.";
       }
      }
    }
 
     ?>
  
    <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Augšupielādēt' name='but_upload'>
    </form>
    <br />
<br />
<br />
<?php
include 'config.php';
if(isset($_POST["insert1"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO videos(id, poster) VALUES (1, '$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Sīktēls ievietots datu bāzē")</script>';  
      }   else {

          echo '<script>alert("Sīktēls jau eksistē datubāzē, tas ir JĀNOMAINA")</script>';
      } 
 }  
 ?>
<br />
<br />
    <h3>Ievietot un nomainīt thumbnail jeb sīktēlu iekš video(sākumlapā)</h3>
      <!-- IZDZĒST THUMBNAIL JEB SĪKTELU -->
  <form method="post">
<button type="submit" id="text" name="dzestthumb">Dzēst sīktēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestthumb'])) {

      $sql = "UPDATE videos set poster=''";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Sīktēls dzēsts no datubāzes")</script>';
}
}
?>
    <?php
//Nomainīt thumbnail jeb sīktēlu priekš video
include 'config.php';
if(isset($_POST["updateVideo"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE videos
      SET poster = '$file'"; 
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("sīktēls ir nomainīts")</script>';  

      }
 }  
 ?>
<!-- thumbnail attēla ievietošana -->
<div class="container" style="float:center;">   
 <br />  
  <form method="post" enctype="multipart/form-data">  
  <input type="file" name="image" id="image" />  
<br />  
<input type="submit" name="updateVideo" id="insert" value="Ievietot" class="btn btn-info" />  
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

    // Romiešu skaitļu nomainīšana
  if (isset($_POST['saglabat'])) {

    $sql = "UPDATE romiesucipari SET cipari='" . $_POST['cipari'] . "'
    WHERE id=1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Romiešu skaitļi ir nomainīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<h3>Nomainīt laikus(Katru laiku maina atsevišķi) sadaļā - Programma</h3>
<?php
// sākuma laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks1 FROM proglaiks WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais sākuma laiks <h1> ".$row["laiks1"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<form method="post">
  <input type="text" name="laiks1" id="izmeri" placeholder="Sākuma laiks">
  <button type="submit" name="time1">Saglabāt sākuma laiku</button>
  <?php
    include 'config.php';

  if (isset($_POST['time1'])) {

    $sql = "UPDATE proglaiks SET laiks1='" . $_POST['laiks1'] . "'
    WHERE id=1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Sākuma laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<?php
// beigu laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks2 FROM proglaiks WHERE id = 2";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais beigu laiks <h1> ".$row["laiks2"]."</h1>";
    echo "<br />";    
  }
}

    ?>
  <input type="text" id="izmeri" name="laiks2" placeholder="Beigu laiks">
  <button type="submit" name="time2">Saglabāt beigu laiku</button>
  <?php
    include 'config.php';

  if (isset($_POST['time2'])) {

    $sql = "UPDATE proglaiks SET laiks2='" . $_POST['laiks2'] . "'
    WHERE id=2";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Beigu laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<br />
<?php
// sākuma laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks3 FROM proglaiks WHERE id = 3";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais sākuma laiks <h1> ".$row["laiks3"]."</h1>";
    echo "<br />";    
  }
}

    ?>
  <input type="text" id="izmeri" name="laiks3" placeholder="Sākuma laiks">
  <button type="submit" name="time3">Saglabāt sākuma laiku</button>
  <?php
    include 'config.php';

  if (isset($_POST['time3'])) {

    $sql = "UPDATE proglaiks SET laiks3='" . $_POST['laiks3'] . "'
    WHERE id=3";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Sākuma laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<?php
// beigu laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks4 FROM proglaiks WHERE id = 4";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais beigu laiks <h1> ".$row["laiks4"]."</h1>";
    echo "<br />";    
  }
}

    ?>
  <input type="text" id="izmeri" name="laiks4" placeholder="Beigu laiks">
  <button type="submit" name="time4">Saglabāt beigu laiku</button>
  <?php
    include 'config.php';

  if (isset($_POST['time4'])) {

    $sql = "UPDATE proglaiks SET laiks4='" . $_POST['laiks4'] . "'
    WHERE id=4";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Beigu laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<br />
<?php
// sākuma laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks5 FROM proglaiks WHERE id = 5";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais sākuma laiks <h1> ".$row["laiks5"]."</h1>";
    echo "<br />";    
  }
}

    ?>
 <input type="text" id="izmeri" name="laiks5" placeholder="Sākuma laiks">
 <button type="submit" name="time5">Saglabāt sākuma laiku</button>
 <?php
    include 'config.php';

  if (isset($_POST['time5'])) {

    $sql = "UPDATE proglaiks SET laiks5='" . $_POST['laiks5'] . "'
    WHERE id=5";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Sākuma laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<?php
// beigu laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks6 FROM proglaiks WHERE id = 6";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais beigu laiks <h1> ".$row["laiks6"]."</h1>";
    echo "<br />";    
  }
}

    ?>
 <input type="text" id="izmeri" name="laiks6" placeholder="Beigu laiks">
 <button type="submit" name="time6">Saglabāt beigu laiku</button>
 <?php
    include 'config.php';

  if (isset($_POST['time6'])) {

    $sql = "UPDATE proglaiks SET laiks6='" . $_POST['laiks6'] . "'
    WHERE id=6";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Beigu laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
 <br />
 <br />
 <?php
// sākuma laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks7 FROM proglaiks WHERE id = 7";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais sākuma laiks <h1> ".$row["laiks7"]."</h1>";
    echo "<br />";    
  }
}

    ?>
 <input type="text" id="izmeri" name="laiks7" placeholder="Sākuma laiks">
 <button type="submit" name="time7">Saglabāt sākuma laiku</button>
 <?php
    include 'config.php';

  if (isset($_POST['time7'])) {

    $sql = "UPDATE proglaiks SET laiks7='" . $_POST['laiks7'] . "'
    WHERE id=7";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Sākuma laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<?php
// beigu laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks8 FROM proglaiks WHERE id = 8";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais beigu laiks <h1> ".$row["laiks8"]."</h1>";
    echo "<br />";    
  }
}

    ?>
 <input type="text" id="izmeri" name="laiks8" placeholder="Beigu laiks">
 <button type="submit" name="time8">Saglabāt beigu laiku</button>
 <?php
    include 'config.php';

  if (isset($_POST['time8'])) {

    $sql = "UPDATE proglaiks SET laiks8='" . $_POST['laiks8'] . "'
    WHERE id=8";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Beigu laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<br />
<?php
// sākuma laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks9 FROM proglaiks WHERE id = 9";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais sākuma laiks <h1> ".$row["laiks9"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<input type="text" id="izmeri" name="laiks9" placeholder="Sākuma laiks">
<button type="submit" name="time9">Saglabāt sākuma laiku</button>
<?php
    include 'config.php';

  if (isset($_POST['time9'])) {

    $sql = "UPDATE proglaiks SET laiks9='" . $_POST['laiks9'] . "'
    WHERE id=9";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Sākuma laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<?php
// sākuma laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks10 FROM proglaiks WHERE id = 10";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais beigu laiks <h1> ".$row["laiks10"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<input type="text" id="izmeri" name="laiks10" placeholder="Beigu laiks">
<button type="submit" name="time10">Saglabāt beigu laiku</button>
<?php
    include 'config.php';

  if (isset($_POST['time10'])) {

    $sql = "UPDATE proglaiks SET laiks10='" . $_POST['laiks10'] . "'
    WHERE id=10";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Beigu laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<br />
<?php
// sākuma laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks11 FROM proglaiks WHERE id = 11";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais sākuma laiks <h1> ".$row["laiks11"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<input type="text" id="izmeri" name="laiks11" placeholder="Sākuma laiks">
<button type="submit" name="time11">Saglabāt sākuma laiku</button>
<?php
    include 'config.php';

  if (isset($_POST['time11'])) {

    $sql = "UPDATE proglaiks SET laiks11='" . $_POST['laiks11'] . "'
    WHERE id=11";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Sākuma laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<?php
// beigu laiks echo no datubāzēs (PROGRAMMAS  LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT laiks12 FROM proglaiks WHERE id = 12";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Pašreizējais beigu laiks <h1> ".$row["laiks12"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<input type="text" id="izmeri" name="laiks12" placeholder="Beigu laiks">
<button type="submit" name="time12">Saglabāt beigu laiku</button>
<?php
    include 'config.php';

  if (isset($_POST['time12'])) {

    $sql = "UPDATE proglaiks SET laiks12='" . $_POST['laiks12'] . "'
    WHERE id=12";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Sākuma laiks ir iestatīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<h3>Nomainit tekstu sadaļā - Programma</h3>
<p>Pašreizējais teksts</p>
<?php
// pirmais teksts(Programmas sadaļā)
    include 'config.php';
    $sql = "SELECT teksts1 FROM progteksts WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["teksts1"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <input type="text" name="teksts1" id="izmeri" placeholder="Ievadiet tekstu">
<button type="submit" name="save1">Atjaunot tekstu</button>
<?php
    include 'config.php';

  if (isset($_POST['save1'])) {

    $sql = "UPDATE progteksts SET teksts1='" . $_POST['teksts1'] . "'
    WHERE id=1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Teksts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<p>Pašreizējais teksts</p>
<?php
//Otrais teksts
    include 'config.php';
    $sql = "SELECT teksts2 FROM progteksts WHERE id = 2";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["teksts2"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <input type="text" name="teksts2" id="izmeri" placeholder="Ievadiet tekstu">
<button type="submit" name="save2">Atjaunot tekstu</button>
<?php
    include 'config.php';

  if (isset($_POST['save2'])) {

    $sql = "UPDATE progteksts SET teksts2='" . $_POST['teksts2'] . "'
    WHERE id=2";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Teksts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<p>Pašreizējais teksts</p>
<?php
// Trešais teksts
    include 'config.php';
    $sql = "SELECT teksts3 FROM progteksts WHERE id = 3";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
//
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["teksts3"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <input type="text" name="teksts3" id="izmeri" placeholder="Ievadiet tekstu">
<button type="submit" name="save3">Atjaunot tekstu</button>
<?php
    include 'config.php';

  if (isset($_POST['save3'])) {

    $sql = "UPDATE progteksts SET teksts3='" . $_POST['teksts3'] . "'
    WHERE id=3";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Teksts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<p>Pašreizējais teksts</p>
<?php
// ceturtais teksts
    include 'config.php';
    $sql = "SELECT teksts4 FROM progteksts WHERE id = 4";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["teksts4"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <input type="text" name="teksts4" id="izmeri" placeholder="Ievadiet tekstu">
<button type="submit" name="save4">Atjaunot tekstu</button>
<?php
    include 'config.php';

  if (isset($_POST['save4'])) {

    $sql = "UPDATE progteksts SET teksts4='" . $_POST['teksts4'] . "'
    WHERE id=4";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Teksts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<p>Pašreizējais teksts</p>
<?php
// piektais teksts
    include 'config.php';
    $sql = "SELECT teksts5 FROM progteksts WHERE id = 5";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["teksts5"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <input type="text" name="teksts5" id="izmeri" placeholder="Ievadiet tekstu">
<button type="submit" name="save5">Atjaunot tekstu</button>
<?php
    include 'config.php';

  if (isset($_POST['save5'])) {

    $sql = "UPDATE progteksts SET teksts5='" . $_POST['teksts5'] . "'
    WHERE id=5";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Teksts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<p>Pašreizējais teksts</p>
<?php
// sestais teksts
    include 'config.php';
    $sql = "SELECT teksts6 FROM progteksts WHERE id = 6";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["teksts6"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <input type="text" name="teksts6" id="izmeri" placeholder="Ievadiet tekstu">
<button type="submit" name="save6">Atjaunot tekstu</button>
<?php
    include 'config.php';

  if (isset($_POST['save6'])) {

    $sql = "UPDATE progteksts SET teksts6='" . $_POST['teksts6'] . "'
    WHERE id=6";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Teksts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<br />
<br />
<h3>Mainīt tekstu sadaļā - Reģistrācija</h3>
    <h4>Lai pievienotu pusdienu info, jāidzēš iepriekšējais info(spied uz pogas - dzēst)</h4>
                   <!-- IZDZĒST PUSDIENU INFO -->
<form method="post">
<button type="submit" id="delete" name="dzestpusd">Dzēst pusdienu info</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestpusd'])) {

      $sql = "DELETE from registracija WHERE id = 1";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Pusdienu info dzēsts no datubāzes")</script>';
}
}
?>
<?php
// Pusdienu info(REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT pusdinfo FROM registracija WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Blakus pusdienām pašreizējais info - <h1>".$row["pusdinfo"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<form method="post">
<input type="text" name="pusdinfo" id="izmeri" placeholder="Ievadiet pusdienu info">
    <button type="submit" name="pusdienas">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Pusdienu info ievietošana datubāzē
  if (isset($_POST['pusdienas'])) {

    $sql = "INSERT INTO registracija(id, pusdinfo)
    VALUES (1, '".$_POST['pusdinfo']."')";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Pusdienu info veiksmīgi ievadīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<?php
// Līdz * datumam (REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT lidzdatums FROM registracija WHERE id = 2";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Līdz 'datumam' pašreizējais info - <h1>" .$row["lidzdatums"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<form method="post">
<input type="text" name="lidzdatums" id="izmeri" placeholder="Ievadiet līdz kuram datumam">
    <button type="submit" name="saglabat2">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Pusdienu info ievietošana datubāzē
  if (isset($_POST['saglabat2'])) {

    $sql = "UPDATE registracija SET lidzdatums='" . $_POST['lidzdatums'] . "'
    WHERE id=2";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Datuma info veiksmīgi ievadīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<h3>Ja ir parādīta poga, tad sākumā teksts ir jāidzēš no datubāzes, tad var pievienot jaunu informāciju, bet ja nav nepieciešama jauna informācija, tad vienkārši izdzēsiet un pēc tam to varēsiet pievienot, kad būs nepieciešams</h3>
<?php
// Atlaide (REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT nosvitrcena FROM registracija WHERE id = 3";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>(Līdz *kaut kādam datumam*) atlaides pašreizējais info - <h1>  ".$row["nosvitrcena"]."</h1>";
    echo "<br />";    
  }
}

    ?>
                    <!-- IZDZĒST ATLAIDES INFO -->
<form method="post">
<button type="submit" id="delete" name="dzestatlaidi">Dzēst atlaidi</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestatlaidi'])) {

      $sql = "DELETE from registracija WHERE id = 3";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Atlaide dzēsta no datubāzes")</script>';
}
}
?>   
<form method="post">
<input type="text" name="nosvitrcena" id="izmeri" placeholder="Ievadiet jaunu atlaidi">
    <button type="submit" name="saveatlaidi">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Pusdienu info ievietošana datubāzē
  if (isset($_POST['saveatlaidi'])) {

    $sql = "INSERT INTO registracija(id, nosvitrcena)
    VALUES (3, '".$_POST['nosvitrcena']."')";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Atlaide veiksmīgi ievadīta!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<?php
// Cena (REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT cena FROM registracija WHERE id = 4";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>(Līdz *kaut kādam datumam*) cenas pašreizējais info - <h1> ".$row["cena"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<form method="post">
<input type="text" name="cena" id="izmeri" placeholder="Ievadiet jaunu cenu">
    <button type="submit" name="saglabat3">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Cenas info ievietošana datubāzē
  if (isset($_POST['saglabat3'])) {

    $sql = "UPDATE registracija SET cena='" . $_POST['cena'] . "'
    WHERE id=4";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Cenas info veiksmīgi ievadīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<?php
// 2.Atlaide (REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT nosvitrcena2 FROM registracija WHERE id = 5";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>(Uz vietas) atlaides pašreizējais info - <h1> ".$row["nosvitrcena2"]."</h1>";
    echo "<br />";    
  }
}

    ?>
                    <!-- IZDZĒST ATLAIDES INFO -->
<form method="post">
<button type="submit" id="delete" name="dzestatlaidi2">Dzēst atlaidi</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestatlaidi2'])) {

      $sql = "DELETE from registracija WHERE id = 5";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Atlaide dzēsta no datubāzes")</script>';
}
}
?>   
<form method="post">
<input type="text" name="nosvitrcena2" id="izmeri" placeholder="Ievadiet jaunu atlaidi">
    <button type="submit" name="saveatlaidi2">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Pusdienu info ievietošana datubāzē
  if (isset($_POST['saveatlaidi2'])) {

    $sql = "INSERT INTO registracija(id, nosvitrcena2)
    VALUES (5, '".$_POST['nosvitrcena2']."')";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Atlaide veiksmīgi ievadīta!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<?php
// Otrā cena (REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT cena2 FROM registracija WHERE id = 6";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>(Uz vietas) cenas pašreizējais info - <h1> ".$row["cena2"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<form method="post">
<input type="text" name="cena2" id="izmeri" placeholder="Ievadiet jaunu cenu">
    <button type="submit" name="saglabat4">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Cenas info ievietošana datubāzē
  if (isset($_POST['saglabat4'])) {

    $sql = "UPDATE registracija SET cena2='" . $_POST['cena2'] . "'
    WHERE id=6";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Cenas info veiksmīgi ievadīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<?php
// bezmaksas info (REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT bezmteksts FROM registracija WHERE id = 7";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>pašreizējais info - <h1> ".$row["bezmteksts"]."</h1>";
    echo "<br />";    
  }
}

    ?>
<form method="post">
<input type="text" name="bezmteksts" id="izmeri" placeholder="Uzrakstiet jaunu info">
    <button type="submit" name="saglabat5">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Cenas info ievietošana datubāzē
  if (isset($_POST['saglabat5'])) {

    $sql = "UPDATE registracija SET bezmteksts='" . $_POST['bezmteksts'] . "'
    WHERE id=7";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" info veiksmīgi ievadīts!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<?php
// papildinformācija(izmaiņām) (REĢISTRĀCIJAS LAPĀ, TO REDIĢĒT)
    include 'config.php';
    $sql = "SELECT papildinfo FROM registracija WHERE id = 8";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "Papildus informācijas pašreizējais info - <h1> ".$row["papildinfo"]."</h1>";
    echo "<br />";    
  }
}

    ?>
                    <!-- IZDZĒST PAPILDUS INFO -->
<form method="post">
<button type="submit" id="delete" name="dzestinfo">Dzēst papildus info</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestinfo'])) {

      $sql = "DELETE from registracija WHERE id = 8";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Papildus info dzēsts no datubāzes")</script>';
}
}
?>   
<form method="post">
<textarea name="papildinfo" id="izmeri" placeholder="Uzrakstiet papildus informāciju"></textarea>
    <button type="submit" name="saveinfo">Saglabāt tekstu</button><br><br>
	
    </form>
    <?php

    include 'config.php';

    // Pusdienu info ievietošana datubāzē
  if (isset($_POST['saveinfo'])) {

    $sql = "INSERT INTO registracija(id, papildinfo)
    VALUES (8, '".$_POST['papildinfo']."')";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Papildus info veiksmīgi ievadīts!")</script><br />';
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