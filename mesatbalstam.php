<html>
  <meta charset="UTF-8">
  <head>
    <meta name="viewport" content="width=device=width, initial-scale=1" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
<?php
include 'ADMIN/config.php';
$sql = "SELECT cipari FROM romiesucipari";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
<header id="headeris">
  <div class="title">
    <div class="smallsep heading"></div>
    <h2 class="heading">Ģimenes sporta svētki</h2>
    <h3 class="heading">Mamma, Tētis, Es</h3>
    <h1 id="inline">Sportlandijā <h1 id="inline"><?php echo ($row['cipari'])?></h1></h1>
  <?php
  }
}
  ?>
  <br />
  <br />
    <div class="mouse">
      <div class="wheel"></div>
    </div>
    </a> </div>

    <div class="navbar">
      <a href="index.php">Sākums</a>
      <a href="sadalas.php?programma">Programma</a>
      <a href="sadalas.php?registracija=true">Reģistrācija</a>
      <a href="sadalas.php?foto=true">Foto</a>
      <a href="sadalas.php?video=true">Video</a>
      <a href="sadalas.php?parmums=true">Kontakti / Karte</a>
      <a href="sadalas.php?atbalstitaji=true">Mūs atbalsta</a>
      <a class="active8" href="sadalas.php?mesatbalstam=true">Mēs atbalstam</a>
  
  </div>
</header>
  
<!-- Par mums Sekcija(About)
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <div class="main">
<section id="about">
  <div class="container">
      <h1>Mēs atbalstam</h1>
      <div class="block"></div>
      <div class="bloks">
    <div class="teksts">
    <?php
include 'ADMIN/config.php';
$sql = "SELECT atbalstateksts FROM mesatbalstam WHERE id = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row1 = $result->fetch_assoc()) {
?>
<p class="atbalstsmain"><?php echo ($row1['atbalstateksts'])?></p>
<?php
  }
}
?>
<br />
<br />
<br />
<?php
include 'ADMIN/config.php';
$sql = "SELECT atbalstainfo FROM mesatbalstam WHERE id = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row1 = $result->fetch_assoc()) {
?>
<p class="slipraksts"><?php echo ($row1['atbalstainfo'])?></p>
<?php
  }
}
?>
</p>
</div>
<?php
//pirmais attēls
include 'ADMIN/config.php';
$query = "SELECT atbalstafoto FROM mesatbalstam WHERE id = 2";  
$result = mysqli_query($conn, $query); 
  while($row2 = mysqli_fetch_array($result))  {
    $sql = "SELECT fotoplatums FROM mesatbalstam WHERE id = 4";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
    $sql = "SELECT fotogarums FROM mesatbalstam WHERE id = 5";
    $result3 = $conn->query($sql);
    if ($result3->num_rows > 0) {
      while($row3 = $result3->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row2['atbalstafoto'] ).'" height="'.($row3['fotogarums']).'" width="'.($row1['fotoplatums']).'" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
    }
  }
 ?>
<?php
//pirmais attēls
include 'ADMIN/config.php';
$query = "SELECT atbalstafoto1 FROM mesatbalstam WHERE id = 3";  
$result = mysqli_query($conn, $query); 
  while($row4 = mysqli_fetch_array($result))  {
    $sql = "SELECT fotoplatums1 FROM mesatbalstam WHERE id = 6";
    $result5 = $conn->query($sql);
    if ($result5->num_rows > 0) {
      while($row5 = $result5->fetch_assoc()) {
    $sql = "SELECT fotogarums1 FROM mesatbalstam WHERE id = 7";
    $result6 = $conn->query($sql);
    if ($result6->num_rows > 0) {
      while($row6 = $result6->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row4['atbalstafoto1'] ).'" height="'.($row6['fotogarums1']).'" width="'.($row5['fotoplatums1']).'" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
    }
  }
 ?>
</div>
    </div>
</section>  
</div>

<!-- Footer Sekcija
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  

<footer>
  <div class="container">
    <div class="nine columns">
      <div id="container">
        </div>
        <div class="footer">
            <div class="news">
        <div class="facebook">
            <a href="https://www.facebook.com/events/291899375371214/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
    
        <div class="instagram">
            <a href="https://www.instagram.com/kefa_lv/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    
        <div class="youtube">
            <a href="https://www.youtube.com/user/KlubIskatel/featured"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>

        <div class="blakus">
    <p><button class="atbalstampoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
      Reģistrācija</button></p>
</div>
    </div>
    <div class="nine columns">
    <div class="blakus123">
    <h5 class="rjadom">Lapa ir izstrādes stadijā, paldies par sapratni!</h5>
</div>
</div>
  </div>
  <div class="nine columns">
  <div id="container">
    
        </div>
        </div>
    </div>
</footer>
</body>
<script>
  function fade($ele) {
    $ele.fadeIn(1000).delay(3000).fadeOut(1000, function() {
        var $next = $(this).next('.quote');
        fade($next.length > 0 ? $next : $(this).parent().children().first());
   });
}
fade($('.quoteLoop > .quote').first());


jQuery(document).ready(function($) {

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});
  
});

</script>
</html>