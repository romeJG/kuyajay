    <h3>This today's menu</h3>
    <a type="a" class="btn btn-success" href="<?= base_url('products'); ?>">Add New Product</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product->prod_id; ?></td>
                    <td><?php echo $product->prod_name; ?></td>
                    <td><?php echo $product->prod_description; ?></td>
                    <td><?php echo $product->prod_price; ?></td>
                    <td><?php echo $product->prod_date_created; ?></td>
                    <td>
                        <a type="a" class="btn btn-primary">View Product</a>
                        <a type="a" class="btn btn-secondary">Edit Product</a>
                        <a type="a" class="btn btn-danger">Delete Product</a>
                    </td>
                </tr>asdasd
        </tbody>
    </table>

    <a type="a" href="<?= base_url('home'); ?>">Back to Home</a>