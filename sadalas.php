<?php

  if(isset($_GET['programma'])) {
      include 'programma.php';
  }

  if(isset($_GET['registracija'])) {
      include 'registracija.php';
  }

  if(isset($_GET['foto'])) {
      include 'foto.php';
  }

  if(isset($_GET['parmums'])) {
      include 'parmums.php';
  }

  if(isset($_GET['atbalstitaji'])) {
      include 'sponsori.php';
  }

  if(isset($_GET['video'])) {
    include 'video.php';
}

if(isset($_GET['mesatbalstam'])) {
    include 'mesatbalstam.php';
}

?>
