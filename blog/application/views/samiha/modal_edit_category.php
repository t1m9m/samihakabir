<form action="<?php echo base_url(); ?>samiha/category/edit/<?php echo $param2; ?>" class="form-horizontal form-bordered" data-parsley-validate="true" name="update_text" method="post">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Name</label>
        <div class="col-md-9 col-sm-9">
            <input value="<?php echo $this->db->get_where('category', array('category_id' => $param2))->row()->name; ?>" class="form-control" type="text" name="name" placeholder="Type name" data-parsley-required="true" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Permalink</label>
        <div class="col-md-9 col-sm-9">
            <input value="<?php echo $this->db->get_where('category', array('category_id' => $param2))->row()->permalink; ?>" class="form-control" type="text" name="permalink" placeholder="Type permalink" data-parsley-required="true" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Description</label>
        <div class="col-md-9 col-sm-9">
            <textarea style="resize: none" rows="5" class="form-control" type="text" name="description" placeholder="Type description" data-parsley-required="true"><?php echo $this->db->get_where('category', array('category_id' => $param2))->row()->description; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3"></label>
        <div class="col-md-9 col-sm-9">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
