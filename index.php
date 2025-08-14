<html>
  <meta charset="UTF-8">
  <head>
    <meta name="viewport" content="width=device=width, initial-scale=1.0" />
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
  <h6 class="location">30.08.2020 11:00 | Tērces, Cenu pag., Ozolnieku nov.</h6>
    <a class="smoothscroll" href="#about">
      <div class="mouse">
        <div class="wheel"></div>
      </div>
      </a> </div>

    <div class="navbar">
      <a class="active1" href="index.php">Sākums</a>
      <a href="sadalas.php?programma">Programma</a>
      <a href="sadalas.php?registracija=true">Reģistrācija</a>
      <a href="sadalas.php?foto=true">Foto</a>
    <a href="sadalas.php?video=true">Video</a>
    <a href="sadalas.php?parmums=true">Kontakti / Karte</a>
          <a href="sadalas.php?atbalstitaji=true">Mūs atbalsta</a>
          <a href="sadalas.php?mesatbalstam=true">Mēs atbalstam</a>
          
  
  </div>
</header>
  
<!-- Par mums Sekcija(About)
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
<section id="about">
<div class="konteineris">
  <div class="maniSlaidi">
    <div class="numurs">1 / 6</div>
      <img src="foto/sakums1.JPG" style="width:100%">
    </div>
        
  <div class="maniSlaidi">
    <div class="numurs">2 / 6</div>
      <img src="foto/sakums2.JPG" style="width:100%">
    </div>
        
  <div class="maniSlaidi">
    <div class="numurs">3 / 6</div>
      <img src="foto/sakums3.JPG" style="width:100%">
    </div>
        
  <div class="maniSlaidi">
    <div class="numurs">4 / 6</div>
      <img src="foto/sakums4.JPG" style="width:100%">
    </div>
        
  <div class="maniSlaidi">
    <div class="numurs">5 / 6</div>
      <img src="foto/sakums5.JPG" style="width:100%">
    </div>
        
  <div class="maniSlaidi">
    <div class="numurs">6 / 6</div>
      <img src="foto/sakums7.JPG" style="width:100%">
    </div>
        
          <!-- Nākamais un Iepriekšējais pogas -->
      <a class="iepr" onclick="plusSlides(-1)">&#10094;</a>
      <a class="nak" onclick="plusSlides(1)">&#10095;</a>
        

  <div class="rinda">
    <div class="kolonna">
      <img class="demo1 cursor" src="foto/sakums1.JPG" style="width:100%" onclick="currentSlide(1)">
    </div>
    <div class="kolonna">
      <img class="demo1 cursor" src="foto/sakums2.JPG" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="kolonna">
      <img class="demo1 cursor" src="foto/sakums3.JPG" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="kolonna">
      <img class="demo1 cursor" src="foto/sakums4.JPG" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="kolonna">
      <img class="demo1 cursor" src="foto/sakums5.JPG" style="width:100%" onclick="currentSlide(5)">
    </div>
    <div class="kolonna">
      <img class="demo1 cursor" src="foto/sakums7.JPG" style="width:100%" onclick="currentSlide(6)">
    </div>
  </div>
</div>
<div class="video">
<?php
include 'ADMIN/config.php';
$query = "SELECT poster FROM videos";
$result = mysqli_query($conn, $query); 
while($row1 = mysqli_fetch_array($result))  {
?>
<?php
     $fetchVideos = mysqli_query($conn, "SELECT location FROM videos");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
 
       echo "<div class=video>";
       echo '<video src="'.$location.'" controls poster="data:image/jpeg;base64,'.base64_encode($row1['poster'] ).'" />';
       echo "</div>";
     }
     ?>
     <?php
  }
     ?>
     </div>
</section>  


<!-- Partneru sekcija
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  

<div id="Portfolio">
  <div class="container">
    <h1>Partneri</h1>
    <div class="block"></div>
    <div class="row">
      <div class="three columns"> <a href="http://handmadebyelina.mozello.lv/"><img src="bildes/elina.jpg" alt="elina" class="image2" width="100" height="90"></a></div>
      <div class="three columns"> <a href="http://www.kinobize.lv/"><img src="bildes/kino.png" alt="kino" class="image5" width="100" height="100"></a></div>
      <div class="three columns"> <a href="https://www.piparmetra.com/"><img src="bildes/piparmetra.png" alt="piparmetra" class="image6" width="100" height="100"></a></div>
      <div class="three columns"> <a href="http://uhh.lv/"><img src="bildes/design.png" alt="design" class="image7" width="160" height="100"></a></div>
      <div class="three columns"> <a href="https://www.chepi.lv/lat/"><img src="bildes/cherry.png" alt="cherry" class="image4" width="330" height="100"></a></div>
    </div>
    <div class="row" style="margin-top: 30px;">
      <div class="three columns"> <a href="https://www.impro.lv/c_startpage.php"><img src="bildes/impro.png" alt="impro" class="image8" width="100" height="100"></a></div>
      <div class="three columns"> <a href="https://durbesveltes.lv/"><img src="bildes/veltes.png" alt="veltes" class="image9" width="100" height="100"></a></div>
      <div class="three columns"> <a href="https://quest.lv/lv/"><img src="bildes/questlv.png" alt="questlv" class="image10" width="135" height="90"></a></div>
      <div class="three columns"> <a href="https://jaunavecriga.lv/"><img src="bildes/jaunavecriga.png" alt="jaunavecriga" class="image12" width="170" height="100"></a></div>
      <div class="three columns"> <a href="http://www.lazeroptima.lv/"><img src="bildes/laser.png" alt="laser" class="image14" width="340" height="100"></a></div>
    </div>
    <div class="row" style="margin-top: 30px;">
      <div class="three columns"> <a href="https://www.facebook.com/miL.design.miL/"><img src="bildes/mil.png" alt="mil" class="image16" width="100" height="100"></a></div>
      <div class="three columns"> <a href="https://www.facebook.com/ziedukronis/"><img src="bildes/ziedukronis.jpg" alt="ziedukronis" class="image17" width="100" height="100"></a></div>
      <div class="three columns"> <a href="http://www.motormuzejs.lv/index.php"><img src="bildes/motormuzejs.png" alt="motormuzejs" class="image21" width="100" height="100"></a></div>
      <div class="three columns"> <a href="https://7day.lv/"><img src="bildes/cosmetics.png" alt="cosmetics" class="image19" width="100" height="100"></a></div>
      <div class="three columns"> <a href="https://www.dabasrotas.lv/"><img src="bildes/dabasrotas.jpg" alt="DabasRotas" class="image3" width="300" height="100"></a></div>
      </div>
    <div class="row" style="margin-top: 30px;">
      <div class="three columns"> <a href="https://silmachy.lv/par-mums/"><img src="bildes/remedies.png" alt="remedies" class="image19" width="100" height="100"></a></div>
      <div class="three columns"> <a href="https://kafijaspasaule.lv/"><img src="bildes/kafija.png" alt="kafija" class="image23" width="100" height="100"></a></div>
      <div class="three columns"> <a href="http://automuzejs.lv/lv/kontakti.html"><img src="bildes/retro.png" alt="retro" class="image11" width="200" height="100"></a></div>
      <div class="three columns"> <a href="http://www.annahouse.lv/shop/articles/about/lv"><img src="bildes/annahouse.jpg" alt="annahouse" class="image22" width="420" height="100"></a></div>
  </div>
  <div class="row" style="margin-top:30px;">
    <div class="three columns"> <a href="https://mebelubode.eu/"><img src="bildes/mebelubode.png" alt="mebelubode" class="image18" width="100" height="100"></a></div>
    <div class="three columns"> <a href="https://winktattoo.com/"><img src="bildes/wink.png" alt="wink" class="image13" width="100" height="100"></a></div>
    <div class="three columns"> <a href="https://silmachy.lv/par-mums/"><img src="bildes/smalkaismuslis.jpg" alt="smalkaismuslis" class="image15" width="150" height="100"></a></div>
</div>
</div>
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
          <p><button class="indexpoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
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


//slidešovam skripts
var slideIndex = 1;
showSlides(slideIndex);
//kontroles uz priekšu un atpakaļ
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("maniSlaidi");
  var dots = document.getElementsByClassName("demo1");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" aktivs", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " aktivs";
  captionText.innerHTML = dots[slideIndex-1].alt;
} 

</script>
</html>