<?php
require_once(dirname(__FILE__) . "/../Model.php");

function viewTotalSuppliedProducts($model) {
    $result = $model->getTotalSuppliedProducts();

    if ($result->num_rows > 0) {

      while ($row = $result->fetch_assoc()) {

        echo $row["Product"] . " " . $row["Units"] . " " . $row["Price"] . "<br>";
      }
    } else {

      echo "0 results";
    }
}
