<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="product_name" value="<?php echo $result['product_name'] ?>" type="text" class="form-control"
               id="exampleInputEmail1" placeholder="Enter name product">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Product Line</label>
        <input name="product_line" value="<?php echo $result['product_line'] ?>" type="text" class="form-control"
               id="exampleInputEmail1" placeholder="product line">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input name="unit_price" value="<?php echo $result['unit_price'] ?>" type="number" class="form-control"
               id="exampleInputEmail1"
               placeholder="Enter unit price">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Amount</label>
        <input name="amount" value="<?php echo $result['amount'] ?>" type="number" class="form-control"
               id="exampleInputEmail1" placeholder="Enter amount">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Date Input</label>
        <input name="date_input" value="<?php echo $result['date_input'] ?>" type="date" class="form-control"
               id="exampleInputEmail1" placeholder="Enter Date Input">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">description</label>
        <input name="description" value="<?php echo $result['description'] ?>" type="text" class="form-control"
               id="exampleInputEmail1" placeholder="Enter description">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
