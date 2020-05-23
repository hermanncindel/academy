<?php
 echo "<table style='border: 1px solid yellow'><tbody><th><tr><td>"."ITEM"."</td><td>"."QTE"."</td></tr></th></tbody></table>";
 for ($i=1;$i<5;$i++)
 {
     $y=5;
     $fabien=$y-$i;
     echo "<table style='border: 1px solid black;background-color: blue;'><tbody><tr><td>"."ITEM ".$i."</td><td>".$fabien."</td></tr></tbody></table>";

 }
?>