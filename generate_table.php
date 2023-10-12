<?php
if (isset($_POST["columns"])) {
  $numColumns = $_POST["columns"];
  echo "<table>";
  echo "<tr>";
  $creation='';
  for ($i = 0; $i < $numColumns; $i++) {
    $columnName = $_POST["column_name_$i"];
    $creation=$creation.$columnName.',';

    echo "<th>$columnName</th>";
  }
  echo "</tr>";
  echo "</table>";
  echo($creation);
}
    
?>
