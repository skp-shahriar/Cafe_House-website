<?php echo form_open('Admin_login/edit_general'); ?>

<div class="form-row">
    <div class="form-group col-md-6">
        <?php echo form_error('name', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $general->name ?>">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $general->email ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <?php echo form_error('address', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="<?php echo $general->address ?>">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('phone', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $general->phone ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <?php echo form_error('od_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="od_1">Open-Day 1</label>
        <input type="text" class="form-control" id="od_1" name="od_1" value="<?php echo $general->od_1 ?>">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('oh_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="oh_1">Open-Hour 1</label>
        <input type="text" class="form-control" id="oh_1" name="oh_1" value="<?php echo $general->oh_1 ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <?php echo form_error('od_2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="od_2">Open-Day 2</label>
        <input type="text" class="form-control" id="od_2" name="od_2" value="<?php echo $general->od_2 ?>">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('oh_2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="oh_2">Open-Hour 2</label>
        <input type="text" class="form-control" id="oh_2" name="oh_2" value="<?php echo $general->oh_2 ?>">
    </div>
</div>
<button type="submit" class="btn btn-block btn-info">Update</button>
</form>