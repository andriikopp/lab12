<?php

function viewSuppliedProductsByPriceRange($model) {
	
    $result = $model->getTotalSuppliedProductsByPriceRange($_GET["fromPrice"], $_GET["toPrice"]);

    if ($result->num_rows > 0) {

    ?>

    <table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Product</th>
	      <th scope="col">Units</th>
	      <th scope="col">Price</th>
	    </tr>
	  </thead>
	  <tbody>

    <?php

      while ($row = $result->fetch_assoc()) {

        ?>
        <tr>
	      <th><?= $row["Product"] ?></th>
	      <td><?= $row["Units"] ?></td>
	      <td><?= $row["Price"] ?></td>
	    </tr>
        <?php

      }

	?>

	  </tbody>
	</table>

	<?php

    } else {

      echo "0 results";
    }
}
