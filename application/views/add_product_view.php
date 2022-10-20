<div class="col-md-4">
    <?php echo form_open('products/add_product'); ?>
    <form>
        <br>
        <div class="form-group">
            <label for="prod_name">Prod name</label>
            <input type="text" class="form-control" id="prod_name" placeholder="Prod name" value="">
        </div>
        <br>
        <div class="form-group">
            <label for="prod_description">Product Description</label>
            <input type="text" class="form-control" id="prod_description" placeholder="Product Description" value="">
        </div>
        <br>
        <div class="form-group">
            <label for="prod_price">Product Price</label>
            <input type="text" class="form-control" id="prod_price" placeholder="Product Price" value="">
        </div>
        <br>
        <br>
        <a type="a" class="btn btn-danger" href="<?= base_url('home/view_products'); ?>">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>