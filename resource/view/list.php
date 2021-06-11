<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Product line</th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($products as $key => $product): ?>
                <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td><?php echo $product->product_name ?></td>
                    <td><?php echo $product->product_line ?></td>
                    <td><a href="./index.php?page=product&action=delete&id=<?php echo $product->id; ?>"
                           class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                        <a href="./index.php?page=product&action=edit&id=<?php echo $product->id; ?>"
                           class="btn btn-primary btn-sm">Update</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</div>