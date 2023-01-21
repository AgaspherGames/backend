<?php
function drawTable($cols, $rows, $color='#fff'){
  echo "<table style='border: 1px solid black'>";
  for ($y=1; $y <= $rows; $y++) { 
    echo "<tr>";
    for ($x=1; $x <= $cols; $x++) { 
      if($x==1|$y==1)echo "<td style='padding:5px;text-align:center;background-color: $color;'>".$x*$y."</td>";
      else echo "<td style='padding:5px;text-align:center;' >".$x*$y."</td>";
    }
    echo "</tr>";
  }
    echo "</table>";
}

function drawMenu($arr){
  echo "<ul>";
  foreach ($arr as $li) {
    echo "<li><a href='".$li['href']."'>".$li['link']."</a></li>";
  }
  echo "</ul>";
}