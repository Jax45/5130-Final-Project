<?php
//get variables

if (isset($_GET['difficulty'])) {
  $difficulty = $_GET['difficulty'];
} else {
  $difficulty = 'Easy';
}


//  Min and Max are going to be set to a penny to a dollar increase.
// this is added to the previous value so that it is always better to sell a bigger pipe but it depends on how much better.
$min = 0.10;
$max = 1.50;
$value = 0;
$maxLength = 10;
if($difficulty == 'Medium'){
  $maxLength = 15;
}
elseif ($difficulty == 'Hard') {
  $maxLength = 20;
}
for ($i = 0; $i < $maxLength; $i++) {
  //randomly exclude certain lengths
  if(rand(0,100) > 85){
    continue;
  }
  echo "<tr><td><button type='button' class='btn btn-primary'>Cut</button></td><td>";
  echo $i + 1; echo "\"";
  echo "</td><td>$";
  $value += mt_rand ($min*100, $max*100) / 100;
  echo number_format($value, 2,'.', ',');
  echo "</td></tr>";
}
?>
