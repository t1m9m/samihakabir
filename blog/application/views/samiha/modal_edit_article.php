<?php
    $article_details = $this->db->get_where('article', array('article_id' => $param2))->result_array();
    foreach ($article_details as $article_detail):
?>
<form action="<?php echo base_url(); ?>samiha/article/edit/<?php echo $param2; ?>" class="form-horizontal form-bordered" data-parsley-validate="true" name="update_text" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Restaurant</label>
        <div class="col-md-9 col-sm-9">
            <select class="combobox" name="restaurant_id" data-parsley-required="true">
                <option value="">Select Restaurant</option>
            <?php
                $restaurants = $this->db->get('restaurant')->result_array();
                foreach ($restaurants as $restaurant):
            ?>
                <option <?php if ($restaurant['restaurant_id'] == $article_detail['restaurant_id']) echo 'selected'; ?> value="<?php echo $restaurant['restaurant_id']; ?>"><?php echo $restaurant['name']; ?></option>
            <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
		<label class="control-label col-md-3 col-sm-3">Name</label>
		<div class="col-md-9 col-sm-9">
			<input value="<?php echo $article_detail['name']; ?>" class="form-control" maxlength="28" type="text" name="name" placeholder="Type name" data-parsley-required="true" />
		</div>
	</div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Ambience</label>
        <div class="col-md-9 col-sm-9">
            <textarea style="resize: none" rows="7" class="form-control" type="text" name="ambience" placeholder="Type ambience" data-parsley-required="true"><?php echo $article_detail['ambience']; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Food Review</label>
        <div class="col-md-9 col-sm-9">
            <textarea style="resize: none" rows="7" class="form-control" type="text" name="food_review" placeholder="Type food review" data-parsley-required="true"><?php echo $article_detail['food_review']; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Preview</label>
        <div class="col-md-9 col-sm-9">
            <textarea style="resize: none" maxlength="125" rows="3" class="form-control" type="text" name="preview" placeholder="Type preview" data-parsley-required="true"><?php echo $article_detail['preview']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Category</label>
        <div class="col-md-9 col-sm-9">
            <select class="combobox" name="category_id" data-parsley-required="true">
                <option value="">Select Category</option>
            <?php
                $categories = $this->db->get('category')->result_array();
                foreach ($categories as $category):
            ?>
                <option <?php if ($category['category_id'] == $article_detail['category_id']) echo 'selected'; ?> value="<?php echo $category['category_id']; ?>"><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
		<label class="control-label col-md-3 col-sm-3">Permalink</label>
		<div class="col-md-9 col-sm-9">
			<input value="<?php echo $article_detail['permalink']; ?>" class="form-control" type="text" name="permalink" placeholder="Type permalink" data-parsley-required="true" />
		</div>
	</div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Beverages</label>
        <div class="col-md-9 col-sm-9">
            <textarea style="resize: none" rows="7" class="form-control" type="text" name="beverages" placeholder="Type on beverages" data-parsley-required="true"><?php echo $article_detail['beverages']; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Service</label>
        <div class="col-md-9 col-sm-9">
            <textarea style="resize: none" rows="7" class="form-control" type="text" name="service" placeholder="Type on service" data-parsley-required="true"><?php echo $article_detail['service']; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3">Additional Notes</label>
        <div class="col-md-9 col-sm-9">
            <textarea style="resize: none" maxlength="125" rows="3" class="form-control" type="text" name="additional_notes" placeholder="Type additional notes" data-parsley-required="true"><?php echo $article_detail['additional_notes']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3"></label>
        <div class="col-md-9 col-sm-9">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
<?php endforeach; ?>

<script>
	$(document).ready(function() {
		App.init();
		FormPlugins.init();
	});
</script>
