<?php
for ($i = 1; $i < $maxLength; $i++) {
  echo "<tr id='marketRow".($i)."'>
    <td><button id='marketRowBtn".($i)."' type='button'
     onclick='cutSelected(".$i.");'
     class='btn btn-primary'>
    Cut</button></td><td>";
  echo $i; echo "\"";
  echo "</td><td value='".($i)."'>$";
  echo number_format($marketArray[$i], 2,'.', ',');
  echo "</td></tr>";

}

?>
