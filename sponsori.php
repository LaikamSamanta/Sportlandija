<html lang="lv-LV">
  <meta charset="utf-8">
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
  <a class="smoothscroll" href="#about">
  <div class="scroll-down"></div>
  </a>
    <div class="navbar">
      <a href="index.php">Sākums</a>
      <a href="sadalas.php?programma">Programma</a>
      <a href="sadalas.php?registracija=true">Reģistrācija</a>
      <a href="sadalas.php?foto=true">Foto</a>
    <a href="sadalas.php?video=true">Video</a>
    <a href="sadalas.php?parmums=true">Kontakti / Karte</a>
          <a class="active7" href="sadalas.php?atbalstitaji=true">Mūs atbalsta</a>
          <a href="sadalas.php?mesatbalstam=true">Mēs atbalstam</a>
          
  
  </div>
</header>
  
<!-- Par mums Sekcija(About)
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <div class="mainSponsori">
<section id="about">
  <div class="container">
    <div class="row1"></div>
      <h1>Atbalstītāji</h1>
      <div class="block"></div>
      <p></p></div>

      <div class="row">
        <div class="colonna">

      <?php

    
      

// 1 attēls

include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 1";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums1, platums1 FROM parametri1";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums1']).'" width="'.($row1['platums1']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
 </div>
  <div class="formatejums">
<?php 

// 1 teksts echo
include 'ADMIN/config.php';
$sql = "SELECT virsraksts1, teksts1, link1, links1  FROM text1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts1"]."</b>";
    echo $row["teksts1"];
    echo '<a href="' . $row['link1'] . '">' . $row['links1'] . '</a>';    
  }
}
  ?>
  </div>
</div>
  <div class = "row">
<div class = "colonna">
<?php

// 2 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 2";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums2, platums2 FROM parametri2";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums2']).'" width="'.($row1['platums2']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
</div>
<div class = "formatejums">
<?php
// 2 teksts echo
$sql = "SELECT virsraksts2, teksts2, link2, links2  FROM text2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts2"]."</b>";
    echo $row["teksts2"];
    echo '<a href="' . $row['link2'] . '">' . $row['links2'] . '</a>';   
  }
}
  ?>
  </div>
</div>
<div class = "row">
<div class = "colonna">
<?php

// 3 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 3";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums3, platums3 FROM parametri3";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums3']).'" width="'.($row1['platums3']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
?>
</div>
<div class = "formatejums">
<?php 
  // 3 teksts echo
  $sql = "SELECT virsraksts3, teksts3, link3, links3  FROM text3";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts3"]."</b>";
	  echo $row["teksts3"];
	  echo '<a href="' . $row['link3'] . '">' . $row['links3'] . '</a>';   
	}
  }
	?>
</div>
</div>
<div class = "row">
<div class = "colonna">
<?php

// 4 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 4";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums4, platums4 FROM parametri4";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums4']).'" width="'.($row1['platums4']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
  // 4 teksts echo
  $sql = "SELECT virsraksts4, teksts4, link4, links4  FROM text4";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts4"]."</b>";
	  echo $row["teksts4"];
	  echo '<a href="' . $row['link4'] . '">' . $row['links4'] . '</a>';   
	}
  }
	?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 5 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 5";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums5, platums5 FROM parametri5";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums5']).'" width="'.($row1['platums5']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
  // 5 teksts echo
  $sql = "SELECT virsraksts5, teksts5, link5, links5  FROM text5";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts5"]."</b>";
	  echo $row["teksts5"];
	  echo '<a href="' . $row['link5'] . '">' . $row['links5'] . '</a>';   
	}
  }
	?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 6 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 6";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums6, platums6 FROM parametri6";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums6']).'" width="'.($row1['platums6']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
  // 6 teksts echo
  $sql = "SELECT virsraksts6, teksts6, link6, links6  FROM text6";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts6"]."</b>";
	  echo $row["teksts6"];
	  echo '<a href="' . $row['link6'] . '">' . $row['links6'] . '</a>';   
	}
  }
	?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 7 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 7";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums7, platums7 FROM parametri7";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums7']).'" width="'.($row1['platums7']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}

 ?>
  </div>
  <div class = "formatejums">
  <?php
  // 7 teksts echo
  $sql = "SELECT virsraksts7, teksts7, link7, links7  FROM text7";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts7"]."</b>";
	  echo $row["teksts7"];
	  echo '<a href="' . $row['link7'] . '">' . $row['links7'] . '</a>';   
	}
  }
	?>  
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 8 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 8";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums8, platums8 FROM parametri8";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums8']).'" width="'.($row1['platums8']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
?>
  </div>
  <div class="formatejums">

  <?php
  // 8 teksts echo
  $sql = "SELECT virsraksts8, teksts8, link8, links8  FROM text8";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts8"]."</b>";
	  echo $row["teksts8"];
	  echo '<a href="' . $row['link8'] . '">' . $row['links8'] . '</a>';   
	}
  }
	?>
</div>
</div>
<div class = "row">
<div class = "colonna">
<?php
  // 9 attēls
  include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 9";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums9, platums9 FROM parametri9";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums9']).'" width="'.($row1['platums9']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
  ?>
  </div>
  <div class = "formatejums">
  <?php
  // 9 teksts echo
  $sql = "SELECT virsraksts9, teksts9, link9, links9  FROM text9";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts9"]."</b>";
	  echo $row["teksts9"];
	  echo '<a href="' . $row['link9'] . '">' . $row['links9'] . '</a>';   
	}
  }
	?>
  </div>
  </div>
  <div class = "row">
  <div class = "colonna">
  <?php
  // 10 attēls
  include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 10";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums10, platums10 FROM parametri10";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums10']).'" width="'.($row1['platums10']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
?>
  </div>
 <div class = "formatejums">
 <?php

// 10 teksts echo
$sql = "SELECT virsraksts10, teksts10, link10, links10  FROM text10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// 
while($row = $result->fetch_assoc()) {
  echo "<b>".$row["virsraksts10"]."</b>";
  echo $row["teksts10"];
  echo '<a href="' . $row['link10'] . '">' . $row['links10'] . '</a>';   
}
}
?>
</div>
</div>
<div class = "row">
<div class = "colonna">
<?php

// 11 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 11";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums11, platums11 FROM parametri11";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums11']).'" width="'.($row1['platums11']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class = "formatejums">
  <?php
  // 11 teksts echo
  $sql = "SELECT virsraksts11, teksts11, link11, links11  FROM text11";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts11"]."</b>";
	  echo $row["teksts11"];
	  echo '<a href="' . $row['link11'] . '">' . $row['links11'] . '</a>';
	}
  }
	?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php

// 12 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 12";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums12, platums12 FROM parametri12";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums12']).'" width="'.($row1['platums12']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>

  </div>
  <div class="formatejums">
  <?php

// 12 teksts echo
$sql = "SELECT virsraksts12, teksts12, link12, links12  FROM text12";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts12"]."</b>";
    echo $row["teksts12"];
    echo '<a href="' . $row['link12'] . '">' . $row['links12'] . '</a>';   
  }
}
  ?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
  // 13 attēls
  include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 13";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums13, platums13 FROM parametri13";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums13']).'" width="'.($row1['platums13']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
  ?>
  </div>
  <div class = "formatejums">
  <?php
  // 13 teksts echo
  $sql = "SELECT virsraksts13, teksts13, link13, links13  FROM text13";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts13"]."</b>";
	  echo $row["teksts13"];
	  echo '<a href="' . $row['link13'] . '">' . $row['links13'] . '</a>';   
	}
  }
	?>
  </div>
  </div>
  <div class = "row">
  <div class = "colonna">
  <?php

// 14 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 14";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums14, platums14 FROM parametri14";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums14']).'" width="'.($row1['platums14']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class = "formatejums">
  <?php

// 14 teksts echo
$sql = "SELECT virsraksts14, teksts14, link14, links14  FROM text14";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// 
while($row = $result->fetch_assoc()) {
  echo "<b>".$row["virsraksts14"]."</b>";
  echo $row["teksts14"];
  echo '<a href="' . $row['link14'] . '">' . $row['links14'] . '</a>';   
}
}
?>  
</div>
</div>
<div class = "row">
<div class = "colonna">
<?php
// 15 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 15";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums15, platums15 FROM parametri15";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums15']).'" width="'.($row1['platums15']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class = "formatejums">
  <?php
  // 15 teksts echo
  $sql = "SELECT virsraksts15, teksts15, link15, links15  FROM text15";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts15"]."</b>";
	  echo $row["teksts15"];
	  echo '<a href="' . $row['link15'] . '">' . $row['links15'] . '</a>';   
	}
  }
	?> 
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 16 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 16";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums16, platums16 FROM parametri16";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums16']).'" width="'.($row1['platums16']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class="formatejums">
  <?php
// 16 teksts echo
$sql = "SELECT virsraksts16, teksts16, link16, links16  FROM text16";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts16"]."</b>";
    echo $row["teksts16"];
    echo '<a href="' . $row['link16'] . '">' . $row['links16'] . '</a>';   
  }
}
  ?>      
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 17 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 17";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums17, platums17 FROM parametri17";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums17']).'" width="'.($row1['platums17']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class="formatejums">
  <?php 
  // 17 teksts echo
  $sql = "SELECT virsraksts17, teksts17, link17, links17  FROM text17";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts17"]."</b>";
	  echo $row["teksts17"];
	  echo '<a href="' . $row['link17'] . '">' . $row['links17'] . '</a>';   
	}
  }
	?>  
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php

// 18 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 18";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums18, platums18 FROM parametri18";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums18']).'" width="'.($row1['platums18']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class="formatejums">
  <?php
  // 18 teksts echo
  $sql = "SELECT virsraksts18, teksts18, link18, links18  FROM text18";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
	// 
	while($row = $result->fetch_assoc()) {
	  echo "<b>".$row["virsraksts18"]."</b>";
	  echo $row["teksts18"];
	  echo '<a href="' . $row['link18'] . '">' . $row['links18'] . '</a>';   
	}
  }
	?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php

// 19 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 19";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums19, platums19 FROM parametri19";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums19']).'" width="'.($row1['platums19']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class="formatejums">
  <?php
// 19 teksts echo
$sql = "SELECT virsraksts19, teksts19, link19, links19  FROM text19";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts19"]."</b>";
    echo $row["teksts19"];
    echo '<a href="' . $row['link19'] . '">' . $row['links19'] . '</a>';   
  }
}
  ?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 20 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 20";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums20, platums20 FROM parametri20";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums20']).'" width="'.($row1['platums20']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class="formatejums">
  <?php

// 20 teksts echo
$sql = "SELECT virsraksts20, teksts20, link20, links20  FROM text20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts20"]."</b>";
    echo $row["teksts20"];
    echo '<a href="' . $row['link20'] . '">' . $row['links20'] . '</a>';
  }
}
  ?>     
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php

// 21 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 21";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums21, platums21 FROM parametri21";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums21']).'" width="'.($row1['platums21']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
  <div class="formatejums">
  <?php

// 21 teksts echo
$sql = "SELECT virsraksts21, teksts21, link21, links21  FROM text21";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts21"]."</b>";
    echo $row["teksts21"];
    echo '<a href="' . $row['link21'] . '">' . $row['links21'] . '</a>';   
  }
}
  ?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 22 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 22";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums22, platums22 FROM parametri22";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums22']).'" width="'.($row1['platums22']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
 ?>
  </div>
   <div class="formatejums">
   <?php
// 22 teksts echo
$sql = "SELECT virsraksts22, teksts22, link22, links22  FROM text22";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts22"]."</b>";
    echo $row["teksts22"];
    echo '<a href="' . $row['link22'] . '">' . $row['links22'] . '</a>';   
  }
}
  ?>
 </div>
 </div>
 <div class = "row">
 <div class = "colonna">
 <?php
// 23 attēls
include 'ADMIN/config.php';
  $query = "SELECT * FROM tbl_images WHERE id = 23";  
  $result = mysqli_query($conn, $query); 
    while($row = mysqli_fetch_array($result))  {
    $sql = "SELECT garums23, platums23 FROM parametri23";
    $result1 = $conn->query($sql);
    if ($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()) {
       echo '  
       <tr>  
       <td>  
       <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums23']).'" width="'.($row1['platums23']).'" class="img-thumnail" />
       </td>  
       </tr>   
       ';  
      } 
    }
  }
?>
  </div>
  <div class="formatejums">
  <?php

// 23 teksts echo
$sql = "SELECT virsraksts23, teksts23, link23, links23  FROM text23";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts23"]."</b>";
    echo $row["teksts23"];
    echo '<a href="' . $row['link23'] . '">' . $row['links23'] . '</a>';   
  }
}
  ?>
</div>
</div>
<div class = "row">
<div class = "colonna">
<?php
// 24 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 24";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums24, platums24 FROM parametri24";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums24']).'" width="'.($row1['platums24']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
  ?>
  </div>
  <div class="formatejums">
  <?php
// 24 teksts echo
$sql = "SELECT virsraksts24, teksts24, link24, links24  FROM text24";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts24"]."</b>";
    echo $row["teksts24"];
    echo '<a href="' . $row['link24'] . '">' . $row['link24'] . '</a>';   
  }
}
  ?>
  </div>
  </div>
  <div class = "row">
  <div class = "colonna">
  <?php
// 25 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 25";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums25, platums25 FROM parametri25";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums25']).'" width="'.($row1['platums25']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
// 25 teksts echo
$sql = "SELECT virsraksts25, teksts25, link25, links25  FROM text25";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts25"]."</b>";
    echo $row["teksts25"];
    echo '<a href="' . $row['link25'] . '">' . $row['links25'] . '</a>';   
  }
}
  ?>
  </div>
  </div>

  <div class = "row">
  <div class = "colonna">
  <?php
// 26 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 26";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums26, platums26 FROM parametri26";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums26']).'" width="'.($row1['platums26']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
// 26 teksts echo
$sql = "SELECT virsraksts26, teksts26, link26, links26  FROM text26";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts26"]."</b>";
    echo $row["teksts26"];
    echo '<a href="' . $row['link26'] . '">' . $row['links26'] . '</a>';   
  }
}
  ?>
  </div>
</div>

<div class = "row">
  <div class = "colonna">
  <?php
// 27 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 27";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums27, platums27 FROM parametri27";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums27']).'" width="'.($row1['platums27']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
// 27 teksts echo
$sql = "SELECT virsraksts27, teksts27, link27, links27  FROM text27";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts27"]."</b>";
    echo $row["teksts27"];
    echo '<a href="' . $row['link27'] . '">' . $row['links27'] . '</a>';   
  }
}
  ?>
  </div>
</div>
<div class = "row">
  <div class = "colonna">
  <?php
// 28 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 28";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums28, platums28 FROM parametri28";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums28']).'" width="'.($row1['platums28']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
// 28 teksts echo
$sql = "SELECT virsraksts28, teksts28, link28, links28  FROM text28";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts28"]."</b>";
    echo $row["teksts28"];
    echo '<a href="' . $row['link28'] . '">' . $row['links28'] . '</a>';   
  }
}
  ?>
  </div>
</div>
<div class = "row">
  <div class = "colonna">
  <?php
// 29 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 29";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums29, platums29 FROM parametri29";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums29']).'" width="'.($row1['platums29']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
// 29 teksts echo
$sql = "SELECT virsraksts29, teksts29, link29, links29  FROM text29";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts29"]."</b>";
    echo $row["teksts29"];
    echo '<a href="' . $row['link29'] . '">' . $row['links29'] . '</a>';   
  }
}
?>

</div>
</div>

<div class = "row">
  <div class = "colonna">
  <?php
// 30 attēls
include 'ADMIN/config.php';
$query = "SELECT * FROM tbl_images WHERE id = 30";  
$result = mysqli_query($conn, $query); 
  while($row = mysqli_fetch_array($result))  {
  $sql = "SELECT garums30, platums30 FROM parametri30";
  $result1 = $conn->query($sql);
  if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
     echo '  
     <tr>  
     <td>  
     <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="'.($row1['garums30']).'" width="'.($row1['platums30']).'" class="img-thumnail" />
     </td>  
     </tr>   
     ';  
    } 
  }
}
 ?>
  </div>
  <div class = "formatejums">
  <?php
// 30 teksts echo
$sql = "SELECT virsraksts30, teksts30, link30, links30  FROM text30";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // 
  while($row = $result->fetch_assoc()) {
    echo "<b>".$row["virsraksts30"]."</b>";
    echo $row["teksts30"];
    echo '<a href="' . $row['link30'] . '">' . $row['links30'] . '</a>';   
  }
}
  ?>
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
    <p><button class="sponsoripoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
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
<script>
</html>