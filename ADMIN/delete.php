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
<h4 class="spied">Spiediet uz pogas, lai izdzēstu konkrētus datus mājaslapas sadaļā - Mūs atbalsta</h4>
<div class = "mainDelete">
<div class="rinda">
      <div class = "kolonna">

                  <!-- IZDZĒST 1. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest1">Dzēst 1. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest1'])) {

      $sql = "DELETE from text1 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("1. teksts dzēsts no datubāzes")</script>';
}
}
?>
                  <!-- IZDZĒST 2. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest2">Dzēst 2. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest2'])) {

      $sql = "DELETE from text2 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("2. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 3. TEKSTU -->
    <form method="post">
<button type="submit" id="text" name="dzest3">Dzēst 3. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest3'])) {

      $sql = "DELETE from text3 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("3. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 4. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest4">Dzēst 4. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest4'])) {

      $sql = "DELETE from text4 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("4. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 5. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest5">Dzēst 5. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest5'])) {

      $sql = "DELETE from text5 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("5. teksts dzēsts no datubāzes")</script>';
}
}
?>
</div> <!-- KOLONNA -->
<div class = "kolonna">

                  <!-- IZDZĒST 6. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest6">Dzēst 6. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest6'])) {

      $sql = "DELETE from text6 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("6. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 7. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest7">Dzēst 7. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest7'])) {

      $sql = "DELETE from text7 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("7. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 8. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest8">Dzēst 8. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest8'])) {

      $sql = "DELETE from text8 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("8. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 9. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest9">Dzēst 9. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest9'])) {

      $sql = "DELETE from text9 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("9. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 10. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest10">Dzēst 10. tekstu</button>
</form>
</div> <!-- KOLONNA -->
<div class = "kolonna">
<?php
include 'config.php';
if (isset($_POST['dzest10'])) {

      $sql = "DELETE from text10 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("10. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 11. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest11">Dzēst 11. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest11'])) {

      $sql = "DELETE from text11 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("11. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 12. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest12">Dzēst 12. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest12'])) {

      $sql = "DELETE from text12 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("12. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 13. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest13">Dzēst 13. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest13'])) {

      $sql = "DELETE from text13 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("13. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 14. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest14">Dzēst 14. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest14'])) {

      $sql = "DELETE from text14 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("14. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 15. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest15">Dzēst 15. tekstu</button>
</form>
<?php
include 'config.php';
if (isset($_POST['dzest15'])) {

      $sql = "DELETE from text15 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("15. teksts dzēsts no datubāzes")</script>';
}
}
?>
</div>
<div class = "kolonna">
                  <!-- IZDZĒST 16. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest16">Dzēst 16. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest16'])) {

      $sql = "DELETE from text16 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("16. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 17. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest17">Dzēst 17. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest17'])) {

      $sql = "DELETE from text17 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("17. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 18. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest18">Dzēst 18. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest18'])) {

      $sql = "DELETE from text18 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("18. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 19. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest19">Dzēst 19. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest19'])) {

      $sql = "DELETE from text19 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("19. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 20. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest20">Dzēst 20. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest20'])) {

      $sql = "DELETE from text20 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("20. teksts dzēsts no datubāzes")</script>';
}
}
?>

</div>
<div class = "kolonna">

                  <!-- IZDZĒST 21. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest21">Dzēst 21. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest21'])) {

      $sql = "DELETE from text21 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("21. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 22. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest22">Dzēst 22. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest22'])) {

      $sql = "DELETE from text22 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("22. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 23. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest23">Dzēst 23. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest23'])) {

      $sql = "DELETE from text23 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("23. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 24. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest24">Dzēst 24. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest24'])) {

      $sql = "DELETE from text24 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("24. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 25. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest25">Dzēst 25. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest25'])) {

      $sql = "DELETE from text25 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("25. teksts dzēsts no datubāzes")</script>';
}
}
?>

                  <!-- IZDZĒST 26. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest26">Dzēst 26. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest26'])) {

      $sql = "DELETE from text26 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("26. teksts dzēsts no datubāzes")</script>';
}
}
?>


                  <!-- IZDZĒST 27. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest27">Dzēst 27. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest27'])) {

      $sql = "DELETE from text27 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("27. teksts dzēsts no datubāzes")</script>';
}
}
?>

                        <!-- IZDZĒST 28. TEKSTU -->
<form method="post">
<button type="submit" id="text" name="dzest28">Dzēst 28. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest28'])) {

      $sql = "DELETE from text28 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("28. teksts dzēsts no datubāzes")</script>';
}
}
?>

                        <!-- IZDZĒST 29. TEKSTU -->
                        <form method="post">
<button type="submit" id="text" name="dzest29">Dzēst 29. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest29'])) {

      $sql = "DELETE from text29 WHERE id = 0";

     

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("29. teksts dzēsts no datubāzes")</script>';
}
}
?>

                        <!-- IZDZĒST 30. TEKSTU -->
                        <form method="post">
<button type="submit" id="text" name="dzest30">Dzēst 30. tekstu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzest30'])) {

      $sql = "DELETE from text30 WHERE id = 0";



if ($conn->query($sql) === TRUE) {
      echo '<script>alert("30. teksts dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 1. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto1">Dzēst 1. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto1'])) {
      $sql = "DELETE FROM tbl_images WHERE id=1";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("1. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 2. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto2">Dzēst 2. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto2'])) {
      $sql = "DELETE FROM tbl_images WHERE id=2";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("2. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 3. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto3">Dzēst 3. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto3'])) {
      $sql = "DELETE FROM tbl_images WHERE id=3";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("3. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 4. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto4">Dzēst 4. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto4'])) {
      $sql = "DELETE FROM tbl_images WHERE id=4";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("4. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 5. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto5">Dzēst 5. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto5'])) {
      $sql = "DELETE FROM tbl_images WHERE id=5";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("5. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 6. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto6">Dzēst 6. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto6'])) {
      $sql = "DELETE FROM tbl_images WHERE id=6";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("6. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 7. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto7">Dzēst 7. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto7'])) {
      $sql = "DELETE FROM tbl_images WHERE id=7";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("7. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 8. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto8">Dzēst 8. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto8'])) {
      $sql = "DELETE FROM tbl_images WHERE id=8";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("8. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 9. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto9">Dzēst 9. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto9'])) {
      $sql = "DELETE FROM tbl_images WHERE id=9";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("9. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 10. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto10">Dzēst 10. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto10'])) {
      $sql = "DELETE FROM tbl_images WHERE id=10";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("10. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 11. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto11">Dzēst 11. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto11'])) {
      $sql = "DELETE FROM tbl_images WHERE id=11";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("11. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 12. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto12">Dzēst 12. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto12'])) {
      $sql = "DELETE FROM tbl_images WHERE id=12";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("12. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 13. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto13">Dzēst 13. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto13'])) {
      $sql = "DELETE FROM tbl_images WHERE id=13";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("13. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 14. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto14">Dzēst 14. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto14'])) {
      $sql = "DELETE FROM tbl_images WHERE id=14";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("14. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 15. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto15">Dzēst 15. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto15'])) {
      $sql = "DELETE FROM tbl_images WHERE id=15";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("15. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 16. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto16">Dzēst 16. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto16'])) {
      $sql = "DELETE FROM tbl_images WHERE id=16";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("16. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 17. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto17">Dzēst 17. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto17'])) {
      $sql = "DELETE FROM tbl_images WHERE id=17";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("17. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 18. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto18">Dzēst 18. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto18'])) {
      $sql = "DELETE FROM tbl_images WHERE id=18";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("18. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 19. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto19">Dzēst 19. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto19'])) {
      $sql = "DELETE FROM tbl_images WHERE id=19";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("19. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 20. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto20">Dzēst 20. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto20'])) {
      $sql = "DELETE FROM tbl_images WHERE id=20";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("20. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 21. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto21">Dzēst 21. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto21'])) {
      $sql = "DELETE FROM tbl_images WHERE id=21";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("21. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 22. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto22">Dzēst 22. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto22'])) {
      $sql = "DELETE FROM tbl_images WHERE id=22";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("22. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 23. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto23">Dzēst 23. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto23'])) {
      $sql = "DELETE FROM tbl_images WHERE id=23";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("23. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 24. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto24">Dzēst 24. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto24'])) {
      $sql = "DELETE FROM tbl_images WHERE id=24";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("24. attēls dzēsts no datubāzes")</script>';
}
}
?>


            <!-- IZDZĒST 25. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto25">Dzēst 25. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto25'])) {
      $sql = "DELETE FROM tbl_images WHERE id=25";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("25. attēls dzēsts no datubāzes")</script>';
}
}
?>

            <!-- IZDZĒST 26. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto26">Dzēst 26. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto26'])) {
      $sql = "DELETE FROM tbl_images WHERE id=26";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("26. attēls dzēsts no datubāzes")</script>';
}
}
?>

            <!-- IZDZĒST 27. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto27">Dzēst 27. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto27'])) {
      $sql = "DELETE FROM tbl_images WHERE id=27";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("27. attēls dzēsts no datubāzes")</script>';
}
}
?>

            <!-- IZDZĒST 28. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto28">Dzēst 28. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto28'])) {
      $sql = "DELETE FROM tbl_images WHERE id=28";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("28. attēls dzēsts no datubāzes")</script>';
}
}
?>

            <!-- IZDZĒST 29. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto29">Dzēst 29. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto29'])) {
      $sql = "DELETE FROM tbl_images WHERE id=29";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("29. attēls dzēsts no datubāzes")</script>';
}
}
?>

            <!-- IZDZĒST 30. ATTĒLU -->
            <form method = "post">
<button type="submit" id="izdzestFoto" name="dzestPhoto30">Dzēst 30. attēlu</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestPhoto30'])) {
      $sql = "DELETE FROM tbl_images WHERE id=30";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("30. attēls dzēsts no datubāzes")</script>';
}
}
?>

  <!-- IZDZĒST VISUS ATTĒLUS NO DATUBĀZES -->
  <form method = "post">
<button type="submit" id="DeletePhotos" name="dzestattelus">Dzēst visus attēlus</button>
</form>

<?php
include 'config.php';
if (isset($_POST['dzestattelus'])) {
      $sql = "DELETE FROM tbl_images";

if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Visi attēli dzēsti no datubāzes")</script>';
}
}
?>
</div>
</div>
</div>
</body>
</html>
