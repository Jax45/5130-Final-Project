<?php
//    Jackson Hoenig
//    Final Project 5130
//    Rod Cutting Problem Solution Game
//    Pipe Cutter
//    11/30/2020

//  Min and Max are going to be set to a penny to a dollar increase.
// this is added to the previous value so that it is always better to sell a bigger pipe but it depends on how much better.
$min = 0.10;
$max = 1.50;
$value = 0;
$n = count($marketArray);
while($n > 0){
//  print("Cut at position ".$cuts[$n]);
//  echo "Cut at position ".$cuts[$n];
  echo "<tr><td>";
  echo $cuts[$n]; echo "\"";
  echo "</td><td>$";
  $value = $marketArray[$cuts[$n]];
  echo number_format($value, 2,'.', ',');
  echo "</td></tr>";
  $n = $n - $cuts[$n];
}



?>
