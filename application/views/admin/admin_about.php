<?php echo form_open_multipart('Admin_login/edit_about'); ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <?php echo form_error('story_head', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="story_head">Story Head</label>
        <input type="text" class="form-control" name="story_head" id="story_head" value="<?php echo $about->story_head ?>">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('story_details', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="story_details">Story Details</label>
        <input type="text" class="form-control" name="story_details" id="story_details" value="<?php echo $about->story_details ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <?php echo form_error('vision_details', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="vision_details">Vision Details</label>
        <input type="text" class="form-control" id="vision_details" name="vision_details" value="<?php echo $about->vision_details ?>">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('vision_p1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="vision_p1">Vision Point 1</label>
        <input type="text" class="form-control" id="vision_p1" name="vision_p1" value="<?php echo $about->vision_p1 ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <?php echo form_error('vision_p2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="vision_p2">Vision Point 2</label>
        <input type="text" class="form-control" id="vision_p2" name="vision_p2" value="<?php echo $about->vision_p2 ?>">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('vision_p3', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <label for="vision_p3">Vision Point 3</label>
        <input type="text" class="form-control" id="vision_p3" name="vision_p3" value="<?php echo $about->vision_p3 ?>">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <img class="border border-info" src="<?php echo base_url('assets/img/') . $about->img ?>" height="200px" alt="">
    </div>
    <div class="form-group col-md-6">
        <?php echo form_error('img', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?php if ($this->session->flashdata('about_img')) {
            echo $this->session->flashdata('about_img');
            unset($_SESSION['about_img']);
        }
        ?>
        <label for="img">Image</label>
        <input type="file" class="form-control" id="img" name="img">
    </div>
</div>
<button type="submit" class="btn btn-block btn-info">Update</button>
</form>