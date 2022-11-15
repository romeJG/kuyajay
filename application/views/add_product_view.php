<!-- if not null si validation errors lalabas si div class -->
<!-- validation errors are the errors from the form. -->
<?php if (!null == validation_errors()) : ?>
    <div class="alert alert-danger col-md-4" role="alert">
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>
<div class="col-md-4">
    <?php echo form_open_multipart('Products/add_product'); ?>
    <form>
        <br>
        <div class="form-group">
            <label for="prod_name">Prod name</label>
            <input name="prod_name" type="text" class="form-control" id="prod_name" placeholder="Prod name" value="<?php echo set_value('prod_name'); ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="prod_description">Product Description</label>
            <input name="prod_description" type="text" class="form-control" id="prod_description" placeholder="Product Description" value="<?php echo set_value('prod_description'); ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="prod_price">Product Price</label>
            <input name="prod_price" type="text" class="form-control" id="prod_price" placeholder="Product Price" value="<?php echo set_value('prod_price'); ?>">
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="prod_imag">Product Image</label>
            <input name="prod_image" type="file" class="form-control" id="prod_image" placeholder="Product Image">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a type="a" class="btn btn-danger" href="<?= base_url('home/view_products'); ?>">Cancel</a>
    </form>
</div>