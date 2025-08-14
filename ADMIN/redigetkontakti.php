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
    <h3>Nomainīt adresi</h3>
<p>Pašreizējā adrese</p>
<?php
// adrese(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT adrese FROM parmums WHERE id = 1";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["adrese"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" name="adrese" id="izmeri" placeholder="Ievietot jaunu adresi">
        <button type="submit" name="submit1">Nomainīt adresi</button>
<?php
    include 'config.php';

  if (isset($_POST['submit1'])) {

    $sql = "UPDATE parmums SET adrese='" . $_POST['adrese'] . "'
    WHERE id=1";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Adrese ir atjaunota!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt Koordinātas</h3>
<p>Pašreizējās koordinātas</p>
<?php
// koordinātas(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT koordinatas FROM parmums WHERE id = 2";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["koordinatas"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="koordinatas" placeholder="Ievietot jaunas koordinatas">
        <button type="submit" name="submit2">Nomainīt koordinātas</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit2'])) {

    $sql = "UPDATE parmums SET koordinatas='" . $_POST['koordinatas'] . "'
    WHERE id=2";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Koordinatas ir atjaunotas!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<h3>Nomainīt tekstu</h3>
<p>Pašreizējais teksts</p>
<?php
// teksts(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT iskatel FROM parmums WHERE id = 3";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["iskatel"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="iskatel" placeholder="Ievietot jaunu tekstu">
        <button type="submit" name="submit3">Nomainīt tekstu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit3'])) {

    $sql = "UPDATE parmums SET iskatel='" . $_POST['iskatel'] . "'
    WHERE id=3";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" teksts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt e-pastu</h3>
<p>Pašreizējais e-pasts</p>
<?php
// e-pasts(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT epasts FROM parmums WHERE id = 4";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["epasts"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="epasts" placeholder="Ievietot jaunu epastu">
        <button type="submit" name="submit4">Nomainīt epastu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit4'])) {

    $sql = "UPDATE parmums SET epasts='" . $_POST['epasts'] . "'
    WHERE id=4";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" e-pasts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt telefona numuru</h3>
<p>Pašreizējais telefona numuru</p>
<?php
// telefons(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT telefons FROM parmums WHERE id = 5";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["telefons"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="telefons" placeholder="Ievietot jaunu telefonu">
        <button type="submit" name="submit5">Nomainīt telefonu numuru</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit5'])) {

    $sql = "UPDATE parmums SET telefons='" . $_POST['telefons'] . "'
    WHERE id=5";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" telefona numurs ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt mājaslapas adresi</h3>
<p>Pašreizējā mājaslapas adrese</p>
<?php
// url(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT url FROM parmums WHERE id = 15";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["url"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="url" placeholder="Ievietot jaunu adresi(URL)">
        <button type="submit" name="submit15">Nomainīt URL</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit15'])) {

    $sql = "UPDATE parmums SET url='" . $_POST['url'] . "'
    WHERE id=15";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" URL ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt mājaslapas adreses nosaukumu(kas parādīsies vienkārši kā nosaukums uz linka)</h3>
<p>Pašreizējā mājaslapas adreses nosaukums</p>
<?php
// url nosaukums(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT urlnosaukums FROM parmums WHERE id = 16";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["urlnosaukums"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="urlnosaukums" placeholder="Ievietot jaunu URL nosaukumu">
        <button type="submit" name="submit16">Nomainīt URL nosaukumu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit16'])) {

    $sql = "UPDATE parmums SET urlnosaukums='" . $_POST['urlnosaukums'] . "'
    WHERE id=16";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" URL nosaukums ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt autoceļu</h3>
<p>Pašreizējais autoceļš</p>
<?php
// autoceļš(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT autocels FROM parmums WHERE id = 6";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["autocels"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="autocels" placeholder="Ievietot jaunu autocelu">
        <button type="submit" name="submit6">Nomainīt autocelu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit6'])) {

    $sql = "UPDATE parmums SET autocels='" . $_POST['autocels'] . "'
    WHERE id=6";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" autoceļš ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt maršrutu</h3>
<p>Pašreizējais maršruts</p>
<?php
// maršruts(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT marsruts1 FROM parmums WHERE id = 7";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["marsruts1"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="marsruts1" placeholder="Ievietot jaunu marsrutu">
        <button type="submit" name="submit7">Nomainīt maršrutu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit7'])) {

    $sql = "UPDATE parmums SET marsruts1='" . $_POST['marsruts1'] . "'
    WHERE id=7";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" marsruts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt kilometrus</h3>
<p>Pašreizējie kilometri</p>
<?php
// kilometri(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT kilometri1 FROM parmums WHERE id = 8";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["kilometri1"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="kilometri1" placeholder="Ievietot jaunus kilometrus">
        <button type="submit" name="submit8">Nomainīt kilometrus</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit8'])) {

    $sql = "UPDATE parmums SET kilometri1='" . $_POST['kilometri1'] . "'
    WHERE id=8";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" kilometri ir atjaunoti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt maršrutu</h3>
<p>Pašreizējais maršruts</p>
<?php
// maršruts(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT marsruts2 FROM parmums WHERE id = 9";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["marsruts2"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="marsruts2" placeholder="Ievietot jaunu marsrutu">
        <button type="submit" name="submit9">Nomainīt maršrutu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit9'])) {

    $sql = "UPDATE parmums SET marsruts2='" . $_POST['marsruts2'] . "'
    WHERE id=9";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" marsruts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt kilometrus</h3>
<p>Pašreizējie kilometri</p>
<?php
// kilometri(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT kilometri2 FROM parmums WHERE id = 10";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["kilometri2"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="kilometri2" placeholder="Ievietot jaunus kilometrus">
        <button type="submit" name="submit10">Nomainīt kilometrus</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit10'])) {

    $sql = "UPDATE parmums SET kilometri2='" . $_POST['kilometri2'] . "'
    WHERE id=10";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" kilometri ir atjaunoti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt maršrutu</h3>
<p>Pašreizējais maršruts</p>
<?php
// maršruts(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT marsruts3 FROM parmums WHERE id = 11";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["marsruts3"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="marsruts3" placeholder="Ievietot jaunu marsrutu">
        <button type="submit" name="submit11">Nomainīt maršrutu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit11'])) {

    $sql = "UPDATE parmums SET marsruts3='" . $_POST['marsruts3'] . "'
    WHERE id=11";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" marsruts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt kilometrus</h3>
<p>Pašreizējie kilometri</p>
<?php
// kilometri(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT kilometri3 FROM parmums WHERE id = 12";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["kilometri3"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="kilometri3" placeholder="Ievietot jaunus kilometrus">
        <button type="submit" name="submit12">Nomainīt kilometrus</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit12'])) {

    $sql = "UPDATE parmums SET kilometri3='" . $_POST['kilometri3'] . "'
    WHERE id=12";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" kilometri ir atjaunoti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<h3>Nomainīt maršrutu</h3>
<p>Pašreizējais maršruts</p>
<?php
// maršruts(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT marsruts4 FROM parmums WHERE id = 13";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["marsruts4"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="marsruts4" placeholder="Ievietot jaunu marsrutu">
        <button type="submit" name="submit13">Nomainīt maršrutu</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit13'])) {

    $sql = "UPDATE parmums SET marsruts4='" . $_POST['marsruts4'] . "'
    WHERE id=13";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" marsruts ir atjaunots!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<h3>Nomainīt kilometrus</h3>
<p>Pašreizējie kilometri</p>
<?php
// kilometri(Kontakti/Karte sadaļā)
    include 'config.php';
    $sql = "SELECT kilometri4 FROM parmums WHERE id = 14";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<h1> ".$row["kilometri4"]."</h1>";
    echo "<br />";    
  }
}
    ?>
    <form method="post">
        <input type="text" id="izmeri" name="kilometri4" placeholder="Ievietot jaunus kilometrus">
        <button type="submit" name="submit14">Nomainīt kilometrus</button>
</form>
<?php
    include 'config.php';

  if (isset($_POST['submit14'])) {

    $sql = "UPDATE parmums SET kilometri4='" . $_POST['kilometri4'] . "'
    WHERE id=14";

  if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" kilometri ir atjaunoti!")</script><br />';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
</div>
</body>
</html>