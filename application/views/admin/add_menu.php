<?php echo form_open('Admin_login/add_menu_item'); ?>
<input type="hidden" name="id" id="id" ">
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" >
    </div>
    <div class="form-group col-md-6">
        <label for="details">Details</label>
        <input type="text" class="form-control" name="details" id="details" >
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="img">Image</label>
        <input type="text" class="form-control" id="img" name="img" >
    </div>
    <div class="form-group col-md-6">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" >
    </div>
</div>
<div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control" id="type" name="type" >
</div>

<button type="submit" class="btn btn-block btn-info">Add Menu</button>
</form>