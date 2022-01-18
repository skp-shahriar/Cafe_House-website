<?php echo form_open_multipart("Admin_login/update_service/$service->id"); ?>
<input type="hidden" name="id" id="id" value="<?php echo $service->id ?>">
<div class="form-row">
    <div class="form-group col-md-6">
    <?php echo form_error('head', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="head">Headline</label>
        <input type="text" class="form-control" name="head" id="head" value="<?php echo $service->head ?>">
    </div>
    <div class="form-group col-md-6">
    <?php echo form_error('details', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="details">Details</label>
        <input type="text" class="form-control" name="details" id="details" value="<?php echo $service->details ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <?php echo form_error('img', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?php if ($this->session->flashdata('service_img')) {
            echo $this->session->flashdata('service_img');
            unset($_SESSION['service_img']);
        }
        ?>
        <label for="img">Image</label>
        <input type="file" class="form-control" id="img" name="img">
    </div>
    <div class="form-group col-md-6">
    <?php echo form_error('icon', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="icon">Icon</label>
        <input type="text" class="form-control" id="icon" name="icon" value='<?php echo $service->icon ?>'>
    </div>
</div>
<img src="<?php echo base_url('assets/img/').$service->img ?>" width="200 px" class="mb-3" alt="">

<button type="submit" class="btn btn-block btn-info">Update</button>
</form>