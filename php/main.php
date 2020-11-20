<?php
if (isset($_GET['difficulty'])) {
  $difficulty = $_GET['difficulty'];
} else {
  $difficulty = 'Easy';
}
//  Min and Max are going to be set to a penny to 2 dollars increase.
// this is added to the previous value so that it is always better to sell a bigger pipe but it depends on how much better.
$min = 0.01;
$max = 2.00;
$value = 0;
$maxLength = 11;
$marketArray = array();
$cuts = array();
$valueArray = array();
if($difficulty == 'Medium'){
  $maxLength = 26;
}
elseif ($difficulty == 'Hard') {
  $maxLength = 51;
}
for ($i = 0; $i < $maxLength; $i++) {
  $value += mt_rand ($min*100, $max*100) / 100;
  //populate the array
  $marketArray[$i+1] = $value;
}
//$marketArray = array(1=>1,2=>5.01,3=>8,4=>9,5=>10,6=>17,7=>17,8=>20);
//print_r($marketArray);

function rodCutDP( $pricing, $length, $maxLength){
  $valueArray = array();
//  for($x = 0; $x < $maxLength; $x++){
    $valueArray[0] = 0;
//  }
  $i=1;
  $j=1;
  //an array of the bestCuts matching the ValueArray.
  $cuts = array();

  for($j = 1; $j <= $length; $j++){
    $max_value = 0.00;

    for ($i = 1; $i <= $j; $i++){ //find max cut position $j for length $i
      if($max_value < $pricing[$i] + $valueArray[$j-$i]){
        $max_value = $pricing[$i] + $valueArray[$j-$i];
        //keep track of best cut at length $i
        $cuts[$j] = $i;
      }
    }
    $valueArray[$j] = $max_value;
  }
  return array($valueArray, $cuts);

}
list($valueArray, $cuts) = rodCutDP($marketArray, count($marketArray), $maxLength);

?>
