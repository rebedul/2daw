<?php
 $array = array(2,7,5,3,9,8);
//  echo sort($array); OJO! si dejamos este ECHO sale 1 (=true)
 sort($array);

 for ($i=0; $i < sizeof($array); $i++)
 {
    echo $array[$i]."<br>";
 }
?>