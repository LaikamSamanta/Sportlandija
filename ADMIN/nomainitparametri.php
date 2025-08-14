<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../CSS/administration.css">     
        <meta name="viewport" content = "width-device-width, initial scale=1">
</head>
<body>
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
<h1>Nomainīt attēla izmērus sadaļā - Mūs atbalsta</h1>
  <p>1. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums1, garums1 FROM parametri1 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums1"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums1'] ."</b>";    
  }
}
    ?>

<form method="post">
<h4><b>1. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums1">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums1">
    <button type="submit" name="savepar1">Iestatīt izmērus</button>
    </form>

    <?php

    include 'config.php';

    // 1. attēla izmēra nomainīšana
  if (isset($_POST['savepar1'])) {

    $sql = "UPDATE parametri1 SET platums1 =('".$_POST['platums1']."'), garums1 = ('".$_POST['garums1']."')
    WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 1. attēla izmēri ir iestatīti!")</script>';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>



<br/>

<p>2. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums2, garums2 FROM parametri2 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums2"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums2'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>2. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums2">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums2">
    <button type="submit" name="savepar2">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 2. attēla izmēra nomainīšana
  if (isset($_POST['savepar2'])) {

    $sql = "UPDATE parametri2 SET platums2 =('".$_POST['platums2']."'), garums2 = ('".$_POST['garums2']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 2. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>3. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums3, garums3 FROM parametri3 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums3"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums3'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>3. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums3">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums3">
    <button type="submit" name="savepar3">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 3. attēla izmēra nomainīšana
  if (isset($_POST['savepar3'])) {

    $sql = "UPDATE parametri3 SET platums3 =('".$_POST['platums3']."'), garums3 = ('".$_POST['garums3']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 3. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>4. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums4, garums4 FROM parametri4 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums4"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums4'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>4. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums4">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums4">
    <button type="submit" name="savepar4">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 4. attēla izmēra nomainīšana
  if (isset($_POST['savepar4'])) {

    $sql = "UPDATE parametri4 SET platums4 =('".$_POST['platums4']."'), garums4 = ('".$_POST['garums4']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 4. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>5. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums5, garums5 FROM parametri5 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums5"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums5'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>5. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums5">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums5">
    <button type="submit" name="savepar5">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 5. attēla izmēra nomainīšana
  if (isset($_POST['savepar5'])) {

    $sql = "UPDATE parametri5 SET platums5 =('".$_POST['platums5']."'), garums5 = ('".$_POST['garums5']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 5. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />

<p>6. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums6, garums6 FROM parametri6 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums6"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums6'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>6. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums6">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)"  id="izmeri" name="garums6">
    <button type="submit" name="savepar6">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 6. attēla izmēra nomainīšana
  if (isset($_POST['savepar6'])) {

    $sql = "UPDATE parametri6 SET platums6 =('".$_POST['platums6']."'), garums6 = ('".$_POST['garums6']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 6. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>7. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums7, garums7 FROM parametri7 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums7"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums7'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>7. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums7">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums7">
    <button type="submit" name="savepar7">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 7. attēla izmēra nomainīšana
  if (isset($_POST['savepar7'])) {

    $sql = "UPDATE parametri7 SET platums7 =('".$_POST['platums7']."'), garums7 = ('".$_POST['garums7']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 7. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>8. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums8, garums8 FROM parametri8 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums8"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums8'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>8. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums8">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums8">
    <button type="submit" name="savepar8">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 8. attēla izmēra nomainīšana
  if (isset($_POST['savepar8'])) {

    $sql = "UPDATE parametri8 SET platums8 =('".$_POST['platums8']."'), garums8 = ('".$_POST['garums8']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 8. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>9. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums9, garums9 FROM parametri9 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums9"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums9'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>9. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums9">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums9">
    <button type="submit" name="savepar9">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 9. attēla izmēra nomainīšana
  if (isset($_POST['savepar9'])) {

    $sql = "UPDATE parametri9 SET platums9 =('".$_POST['platums9']."'), garums9 = ('".$_POST['garums9']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 9. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>10. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums10, garums10 FROM parametri10 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums10"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums10'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>10. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums10">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums10">
    <button type="submit" name="savepar10">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 10. attēla izmēra nomainīšana
  if (isset($_POST['savepar10'])) {

    $sql = "UPDATE parametri10 SET platums10 =('".$_POST['platums10']."'), garums10 = ('".$_POST['garums10']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 10. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>11. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums11, garums11 FROM parametri11 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums11"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums11'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>11. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums11">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums11">
    <button type="submit" name="savepar11">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 11. attēla izmēra nomainīšana
  if (isset($_POST['savepar11'])) {

    $sql = "UPDATE parametri11 SET platums11 =('".$_POST['platums11']."'), garums11 = ('".$_POST['garums11']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 11. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>12. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums12, garums12 FROM parametri12 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums12"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums12'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>12. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums12">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums12">
    <button type="submit" name="savepar12">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 12. attēla izmēra nomainīšana
  if (isset($_POST['savepar12'])) {

    $sql = "UPDATE parametri12 SET platums12 =('".$_POST['platums12']."'), garums12 = ('".$_POST['garums12']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 12. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>13. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums13, garums13 FROM parametri13 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums13"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums13'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>13. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums13">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums13">
    <button type="submit" name="savepar13">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 13. attēla izmēra nomainīšana
  if (isset($_POST['savepar13'])) {

    $sql = "UPDATE parametri13 SET platums13 =('".$_POST['platums13']."'), garums13 = ('".$_POST['garums13']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 13. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>14. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums14, garums14 FROM parametri14 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums14"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums14'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>14. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums14">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums14">
    <button type="submit" name="savepar14">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 14. attēla izmēra nomainīšana
  if (isset($_POST['savepar14'])) {

    $sql = "UPDATE parametri14 SET platums14 =('".$_POST['platums14']."'), garums14 = ('".$_POST['garums14']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 14. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>15. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums15, garums15 FROM parametri15 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums15"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums15'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>15. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums15">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums15">
    <button type="submit" name="savepar15">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 15. attēla izmēra nomainīšana
  if (isset($_POST['savepar15'])) {

    $sql = "UPDATE parametri15 SET platums15 =('".$_POST['platums15']."'), garums15 = ('".$_POST['garums15']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 15. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>16. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums16, garums16 FROM parametri16 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums16"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums16'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>16. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums16">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums16">
    <button type="submit" name="savepar16">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 16. attēla izmēra nomainīšana
  if (isset($_POST['savepar16'])) {

    $sql = "UPDATE parametri16 SET platums16 =('".$_POST['platums16']."'), garums16 = ('".$_POST['garums16']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 16. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>17. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums17, garums17 FROM parametri17 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums17"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums17'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>17. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums17">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums17">
    <button type="submit" name="savepar17">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 17. attēla izmēra nomainīšana
  if (isset($_POST['savepar17'])) {

    $sql = "UPDATE parametri17 SET platums17 =('".$_POST['platums17']."'), garums17 = ('".$_POST['garums17']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 17. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}


?>
<br />
<p>18. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums18, garums18 FROM parametri18 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums18"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums18'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>18. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums18">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums18">
    <button type="submit" name="savepar18">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 18. attēla izmēra nomainīšana
  if (isset($_POST['savepar18'])) {

    $sql = "UPDATE parametri18 SET platums18 =('".$_POST['platums18']."'), garums18 = ('".$_POST['garums18']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 18. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>19. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums19, garums19 FROM parametri19 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums19"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums19'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>19. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums19">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums19">
    <button type="submit" name="savepar19">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 19. attēla izmēra nomainīšana
  if (isset($_POST['savepar19'])) {

    $sql = "UPDATE parametri19 SET platums19 =('".$_POST['platums19']."'), garums19 = ('".$_POST['garums19']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 19. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<br />
<p>20. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums20, garums20 FROM parametri20 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums20"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums20'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>20. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums20">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums20">
    <button type="submit" name="savepar20">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 20. attēla izmēra nomainīšana
  if (isset($_POST['savepar20'])) {

    $sql = "UPDATE parametri20 SET platums20 =('".$_POST['platums20']."'), garums20 = ('".$_POST['garums20']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 20. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>21. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums21, garums21 FROM parametri21 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums21"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums21'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>21. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums21">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums21">
    <button type="submit" name="savepar21">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 21. attēla izmēra nomainīšana
  if (isset($_POST['savepar21'])) {

    $sql = "UPDATE parametri21 SET platums21 =('".$_POST['platums21']."'), garums21 = ('".$_POST['garums21']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 21. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>22. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums22, garums22 FROM parametri22 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums22"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums22'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>22. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums22">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums22">
    <button type="submit" name="savepar22">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 22. attēla izmēra nomainīšana
  if (isset($_POST['savepar22'])) {

    $sql = "UPDATE parametri22 SET platums22 =('".$_POST['platums22']."'), garums22 = ('".$_POST['garums22']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 22. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>23. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums23, garums23 FROM parametri23 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums23"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums23'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>23. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums23">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums23">
    <button type="submit" name="savepar23">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 23. attēla izmēra nomainīšana
  if (isset($_POST['savepar23'])) {

    $sql = "UPDATE parametri23 SET platums23 =('".$_POST['platums23']."'), garums23 = ('".$_POST['garums23']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 23. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>24. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums24, garums24 FROM parametri24 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums24"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums24'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>24. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums24">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums24">
    <button type="submit" name="savepar24">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 24. attēla izmēra nomainīšana
  if (isset($_POST['savepar24'])) {

    $sql = "UPDATE parametri24 SET platums24 =('".$_POST['platums24']."'), garums24 = ('".$_POST['garums24']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 24. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>25. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums25, garums25 FROM parametri25 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums25"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums25'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>25. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums25">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums25">
    <button type="submit" name="savepar25">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 25. attēla izmēra nomainīšana
  if (isset($_POST['savepar25'])) {

    $sql = "UPDATE parametri25 SET platums25 =('".$_POST['platums25']."'), garums25 = ('".$_POST['garums25']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 25. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>26. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums26, garums26 FROM parametri26 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums26"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums26'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>26. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums26">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums26">
    <button type="submit" name="savepar26">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 26. attēla izmēra nomainīšana
  if (isset($_POST['savepar26'])) {

    $sql = "UPDATE parametri26 SET platums26 =('".$_POST['platums26']."'), garums26 = ('".$_POST['garums26']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 26. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>27. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums27, garums27 FROM parametri27 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums27"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums27'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>27. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums27">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums27">
    <button type="submit" name="savepar27">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 27. attēla izmēra nomainīšana
  if (isset($_POST['savepar27'])) {

    $sql = "UPDATE parametri27 SET platums27 =('".$_POST['platums27']."'), garums27 = ('".$_POST['garums27']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 27. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>28. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums28, garums28 FROM parametri28 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums28"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums28'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>28. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums28">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums28">
    <button type="submit" name="savepar28">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 28. attēla izmēra nomainīšana
  if (isset($_POST['savepar28'])) {

    $sql = "UPDATE parametri28 SET platums28 =('".$_POST['platums28']."'), garums28 = ('".$_POST['garums28']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 28. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>29. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums29, garums29 FROM parametri29 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums29"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums29'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>29. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums29">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums29">
    <button type="submit" name="savepar29">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 29. attēla izmēra nomainīšana
  if (isset($_POST['savepar29'])) {

    $sql = "UPDATE parametri29 SET platums29 =('".$_POST['platums29']."'), garums29 = ('".$_POST['garums29']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 29. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<br />
<p>30. attēla pašreizējie izmēri</p>
<?php
    include 'config.php';
    $sql = "SELECT platums30, garums30 FROM parametri30 WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>Platums ".$row["platums30"]."</b>";
    echo "<br />";
    echo "<b>Garums ". $row['garums30'] ."</b>";    
  }
}
    ?>
<form method="post">
<h4><b>30. attēla izmēra nomainīšana</b></h4>
<input field="text" placeholder="Ievadiet skaitļus(PLATUMS)" id="izmeri" name="platums30">
<input feild="text" placeholder="Ievadiet skatiļus(GARUMS)" id="izmeri" name="garums30">
    <button type="submit" name="savepar30">Iestatīt izmērus</button>
    </form>


    <?php

    include 'config.php';

    // 30. attēla izmēra nomainīšana
  if (isset($_POST['savepar30'])) {

    $sql = "UPDATE parametri30 SET platums30 =('".$_POST['platums30']."'), garums30 = ('".$_POST['garums30']."')
    WHERE id = 1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" 30. attēla izmēri ir iestatīti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
</div>
</body>
</html>