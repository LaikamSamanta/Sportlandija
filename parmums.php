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
    <a class="smoothscroll" href="#about">
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
    <a class="active6" href="sadalas.php?parmums=true">Kontakti / Karte</a>
          <a href="sadalas.php?atbalstitaji=true">Mūs atbalsta</a>
          <a href="sadalas.php?mesatbalstam=true">Mēs atbalstam</a>
  
  </div>
</header>
  
<!-- Par mums Sekcija(About)
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <div class="main">
<section id="about">
  <div class="container">
    <div class="row1"></div>
      <h1>Kontakti / Karte</h1>
      <div class="block"></div>
      <h4 class="kontakti">Kontakti</h4>
      <p></p>
    </div>
    <div class="row">
      <div class="six columns">
        <h3><span class="typcn typcn-device-desktop icon"></span></h3>
        <p class = "cursive">Tērces, Cenu pag., Ozolnieku nov., LV-3018, <br /> Koordinātas 56.7220310, 23.8061570
        <br />Клуб следопытов «Искатель»<br />sportlandija@gmail.com<br />Tel: 25902366<br /><a class="kefurl" href="http://www.kefa.org.lv/">kefa.org.lv</a></p>

          <p class="Marsruti123">Maršruti</p>
        <div class="marsruti">
    <p>A8(Autoceļš)</p>
 <ul>
    <li>Rīga - "Tērces" </li>
    <li>(36km)</li><br />
    <li>Jelgava - "Tērces"</li>
    <li> (14km)</li><br />
    <li>Ogre - "Tērces" </li>
    <li>(62km)</li><br />
    <li>Paris - "Tērces"</li>
    <li> (2231km)</li>
 </ul>
</div>
      </div>
      <div class="six columns">
        <h3><span class="typcn typcn-pen icon"></span></h3>
        <p><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=56.7220310%2C%2023.8061570&t=k&z=15&ie=UTF8&iwloc=&output=embed" 
          frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <p>Spied zemāk, lai reģistrētos bezmaksas transportam!</p></p>
          <p class="limit">*vietu skaits ir ierobežots</p>
          <p><button onclick="location.href='https://docs.google.com/spreadsheets/d/1TL561v2E51auz_g3oy3S24Q04qqGbCYMa3y4kiU3dHM/edit?usp=sharing'" type="button" class="register">Pieteikties transportam</button><p>
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon"></span></h3>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span></h3>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>  


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
    <p><button class="parmumspoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
      Reģistrācija</button></p>
</div>
    </div>
    <div class="nine columns">
    <div class="blakus123">
    <h5 class="rjadom">Lapa ir izstrādes stadijā, paldies par sapratni!</h5>
</div>
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