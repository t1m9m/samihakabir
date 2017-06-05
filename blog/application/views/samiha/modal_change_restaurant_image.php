<form action="<?php echo base_url(); ?>samiha/restaurant/image/<?php echo $param2; ?>" class="form-horizontal form-bordered" data-parsley-validate="true" name="update_text" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Preview</label>
        <div class="col-md-9 col-sm-9">
            <img width="100%" src="<?php echo base_url(); ?>uploads/restaurant/<?php echo $this->db->get_where('restaurant', array('restaurant_id' => $param2))->row()->image_link; ?>" class="media-object">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Image</label>
        <div class="col-md-9 col-sm-9">
            <div class="alert alert-warning fade in m-b-15" align="center">
                Select an image of dimension 190 &times; 80
            </div>
            <span class="btn btn-success fileinput-button">
                <i class="fa fa-plus"></i>
                <span>Add image</span>
                <input type="file" name="image_link" data-parsley-required="true">
            </span>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3"></label>
        <div class="col-md-9 col-sm-9">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
