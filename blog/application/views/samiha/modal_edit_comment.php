<form action="<?php echo base_url(); ?>samiha/comment/edit/<?php echo $param2; ?>" class="form-horizontal form-bordered" data-parsley-validate="true" method="post">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Restaurant</label>
        <div class="col-md-9 col-sm-9">
            <select class="combobox" name="status" data-parsley-required="true">
                <option value="">Select Status</option>
                <option <?php if ($this->db->get_where('comment', array('comment_id' => $param2))->row()->status == 0) echo 'selected'; ?> value="0">Hidden</option>
                <option <?php if ($this->db->get_where('comment', array('comment_id' => $param2))->row()->status == 1) echo 'selected'; ?> value="1">Shown</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3"></label>
        <div class="col-md-9 col-sm-9">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>

<script>
	$(document).ready(function() {
		App.init();
		FormPlugins.init();
	});
</script>
