<?php

function viewFilterForm() {

?>

    <form method="get">
        <input type="hidden" name="action" value="fitlerByPriceRange">
        <div class="form-group">
            <label for="fromPrice"><b>Filter by product price</b></label>
        </div>
        <div class="form-group">
            <label for="fromPrice">From</label>
            <input type="number" class="form-control" id="fromPrice" name="fromPrice" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="toPrice">To</label>
            <input type="number" class="form-control" id="toPrice" name="toPrice" aria-describedby="emailHelp">
        </div>
        <p>
            <button type="submit" class="btn btn-primary">Apply</button>
        </p>
    </form>

<?php
}

?>
