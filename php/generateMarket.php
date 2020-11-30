<?php
//    Jackson Hoenig
//    Final Project 5130
//    Rod Cutting Problem Solution Game
//    Pipe Cutter
//    11/30/2020
for ($i = 0; $i < $maxLength; $i++) {
  echo "<tr id='marketRow".($i+1)."'>
    <td><button id='marketRowBtn".($i+1)."' type='button'
     onclick='cutSelected(".($i+1).");'
     class='btn btn-primary'>
    Cut</button></td><td>";
  echo $i+1; echo "\"";
  echo "</td><td value='".($i+1)."'>$";
  echo number_format($marketArray[$i+1], 2,'.', ',');
  echo "</td></tr>";

}

?>
