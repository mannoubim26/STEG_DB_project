<form action="" method="post">
  <label for="table_name">Table Name:</label>
  <input type="text" id="table_name" name="table_name">
  <br><br>
  <label for="columns">Number of Columns:</label>
  <input type="number" id="columns" name="columns">
  <br><br>
  <div id="column_inputs"></div>
  <input type="submit" value="Submit">
</form>

<button id="submit">Submit</button>

<script>
let columnNamesArray = [];

document.querySelector('#columns').addEventListener('input', function() {
  let numColumns = this.value;
  let columnInputs = document.querySelector('#column_inputs');
  columnInputs.innerHTML = '';

  for (let i = 0; i < numColumns; i++) {
    columnInputs.innerHTML += `
      <label for="column_name_${i}">Column Name ${i + 1}:</label>
      <input type="text" id="column_name_${i}" name="column_name_${i}">
      <br><br>
    `;
    columnNamesArray.push(`column_name_${i}`);
  }
});

document.querySelector("#submit").addEventListener("click", function() {
  let columnValues = [];
  columnNamesArray.forEach(columnName => {
    let columnValue = document.querySelector(`#${columnName}`).value;
    columnValues.push(columnValue);
  });

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "store_values.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      console.log(this.responseText);
    }
  };
  xhr.send(`columnValues=${JSON.stringify(columnValues)}`);
});
document.querySelector("#print").addEventListener("click", function() {
  let numColumns = document.querySelector("#columns").value;
  let columnNames = [];

  for (let i = 0; i < numColumns; i++) {
    let columnName = document.querySelector(`#column_name_${i}`).value;
    columnNames.push(columnName);
  }

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "generate_table.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      document.querySelector("#table_container").innerHTML = this.responseText;
    }
  };
  xhr.send(`column_names=${JSON.stringify(columnNames)}`);
});

</script>
<?php
if (isset($_POST["column_names"])) {
  $columnNames = json_decode($_POST["column_names"]);
  echo "<table>";
  echo "<tr>";
  foreach ($columnNames as $columnName) {
    echo "<th>$columnName</th>";
  }
  echo "</tr>";
  echo "</table>";
}
?>

