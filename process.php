<?php
  $number = $_POST['size'];
  echo "<table>";
  echo "<tr><th></th>";
  for ($i = 1; $i <= $number; $i++) {
    echo "<th>" . $i . "</th>";
  }
  echo "</tr>";
  for ($i = 1; $i <= $number; $i++) {
    echo "<tr>";
    echo "<th>" . $i . "</th>";
    for ($j = 1; $j <= $number; $j++) {
      echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

?>