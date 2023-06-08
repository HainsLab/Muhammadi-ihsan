<?php

echo "<table border=1>";
for($i=1; $i <=3; $i++){
      echo "<tr>";
      for($j=1; $j<=5; $j++){
            echo "<td>";
            echo $i.$j;
            echo "</td>";
      }
}
echo "</table>";
?>