<?php echo form_open_multipart("Admin_login/update_menu/$menu->id"); ?>
<input type="hidden" name="id" id="id" value="<?php echo $menu->id ?>">
<div class="form-row">
    <div class="form-group col-md-6">
    <?php echo form_error('name', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $menu->name ?>">
    </div>
    <div class="form-group col-md-6">
    <?php echo form_error('details', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="details">Details</label>
        <input type="text" class="form-control" name="details" id="details" value="<?php echo $menu->details ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <?php echo form_error('type', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" value='<?php echo $menu->type ?>'>
    </div>
    <div class="form-group col-md-6">
    <?php echo form_error('price', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" value='<?php echo $menu->price ?>'>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <img class="border border-info" src="<?php echo base_url('assets/img/') . $menu->img ?>" height="200px" alt="">
    </div>
    <div class="form-group col-md-6">
    <?php echo form_error('img', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?php if ($this->session->flashdata('menu_img')) {
            echo $this->session->flashdata('menu_img');
            unset($_SESSION['menu_img']);
        }
        ?>
        <label for="img">Image</label>
        <input type="file" class="form-control" id="img" name="img">
    </div>
</div>

<button type="submit" class="btn btn-block btn-info">Update</button>
</form>