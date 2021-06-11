<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name product">
        <?php if (isset($errors['product_name'])): ?>
            <p class="text-danger"><?php echo $errors['product_name'] ?></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Product Line</label>
        <input name="product_line" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Line">
        <?php  if (isset($errors['product_line'])): ?>
            <p class="text-danger"><?php echo $errors['product_line'] ?></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input name="unit_price" type="number" class="form-control" id="exampleInputEmail1"
               placeholder="Enter unit_price">
        <?php if (isset($errors['unit_price'])): ?>
            <p class="text-danger"><?php echo $errors['unit_price'] ?></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Amount</label>
        <input name="amount" type="text" class="form-control" id="exampleInputEmail1" placeholder="amount">
        <?php if (isset($errors['amount'])): ?>
            <p class="text-danger"><?php echo $errors['amount'] ?></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Date Input</label>
        <input name="date_input" type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter date_input">
        <?php if (isset($errors['date_input'])): ?>
            <p class="text-danger"><?php echo $errors['date_input'] ?></p>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <input name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Description">
        <?php if (isset($errors['date_input'])): ?>
            <p class="text-danger"><?php echo $errors['description'] ?></p>
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary" >Submit</button>
</form>
