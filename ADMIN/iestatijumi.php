<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../CSS/administration.css">
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
</form>

<div class = "mainopt">
    <h3>Profila iestatījumi</h3>
    <h4>Nomainīt lietotājvārdu un paroli(lietotājvārdu un/vai paroli var nomainīt pat ja tāds eksistē patreiz)</h4>
    <form method="post">
    <input type="text" id="izmeri" name="username" placeholder="Ievadiet jaunu lietotājvārdu"> 
    <input type="text" id="izmeri" name="pass" placeholder="Ievadiet jaunu paroli">
    <button type="submit" name="change">Atjaunot profilu</button>
</form>
    <?php
    include 'config.php';

    // lietotājvārda nomainīšana
  if (isset($_POST['change'])) {

    $sql = "UPDATE users SET username =('".$_POST['username']."'), pass = ('".$_POST['pass']."')
    WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo '<script>altert(" Lietotājvārds un parole ir nomainīti!")</script>';
} else {
    echo "Kļūda: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
</div>
</body>
</html>