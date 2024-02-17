<?php
  echo "<pre>";
 
  $tinggi_piramida = 100;
  for($i = 0; $i < $tinggi_piramida; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo " ";
    }
    for($k = 1; $k <= $tinggi_piramida - $i; $k++) {
      echo " a";
    }
    echo "<br>";
  }
 
  echo "</pre>";
?>