<!-- begin #content -->
<div id="content" class="content">
	<!-- begin page-header -->
	<h1 class="page-header">Article <small>Write an article</small></h1>
	<!-- end page-header -->

	<!-- begin row -->
	<div class="row">
        <!-- begin col-6 -->
	    <div class="col-md-12">
	        <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Add Aritcle | Form</h4>
                </div>
                <div class="panel-body panel-form">
                    <form action="<?php echo base_url(); ?>samiha/article/add" class="form-horizontal form-bordered" data-parsley-validate="true" name="update_text" method="post" enctype="multipart/form-data">
						<div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Restaurant</label>
                                <div class="col-md-9 col-sm-9">
                                    <select class="combobox" name="restaurant_id" data-parsley-required="true">
                                        <option value="">Select Restaurant</option>
                                    <?php
                                        $restaurants = $this->db->get('restaurant')->result_array();
                                        foreach ($restaurants as $restaurant):
                                    ?>
                                        <option value="<?php echo $restaurant['restaurant_id']; ?>"><?php echo $restaurant['name']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
    							<label class="control-label col-md-3 col-sm-3">Name</label>
    							<div class="col-md-9 col-sm-9">
    								<input class="form-control" maxlength="28" type="text" name="name" placeholder="Type name" data-parsley-required="true" />
    							</div>
    						</div>
    						<div class="form-group">
                                <label class="col-md-3 control-label">Restaurant Image</label>
                                <div class="col-md-9 col-sm-9">
                                	<div class="alert alert-warning fade in m-b-15" align="center">
    									Select an image of dimension 725 &times; 370
    								</div>
                                    <span class="btn btn-success fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        <span>Add image</span>
                                        <input type="file" name="restaurant_image" data-parsley-required="true">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Ambience</label>
                                <div class="col-md-9 col-sm-9">
                                    <textarea style="resize: none" rows="7" class="form-control" type="text" name="ambience" placeholder="Type ambience" data-parsley-required="true"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Food Review</label>
                                <div class="col-md-9 col-sm-9">
                                    <textarea style="resize: none" rows="7" class="form-control" type="text" name="food_review" placeholder="Type food review" data-parsley-required="true"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Preview</label>
                                <div class="col-md-9 col-sm-9">
                                    <textarea style="resize: none" maxlength="125" rows="3" class="form-control" type="text" name="preview" placeholder="Type preview" data-parsley-required="true"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Category</label>
                                <div class="col-md-9 col-sm-9">
                                    <select class="combobox" name="category_id" data-parsley-required="true">
                                        <option value="">Select Category</option>
                                    <?php
                                        $categories = $this->db->get('category')->result_array();
                                        foreach ($categories as $category):
                                    ?>
                                        <option value="<?php echo $category['category_id']; ?>"><?php echo $category['name']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
    							<label class="control-label col-md-3 col-sm-3">Permalink</label>
    							<div class="col-md-9 col-sm-9">
    								<input class="form-control" type="text" name="permalink" placeholder="Type permalink" data-parsley-required="true" />
    							</div>
    						</div>
    						<div class="form-group">
                                <label class="col-md-3 control-label">Food Image</label>
                                <div class="col-md-9 col-sm-9">
                                	<div class="alert alert-warning fade in m-b-15" align="center">
    									Select an image of dimension 725 &times; 370
    								</div>
                                    <span class="btn btn-success fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        <span>Add image</span>
                                        <input type="file" name="food_image" data-parsley-required="true">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Beverages</label>
                                <div class="col-md-9 col-sm-9">
                                    <textarea style="resize: none" rows="7" class="form-control" type="text" name="beverages" placeholder="Type on beverages" data-parsley-required="true"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Service</label>
                                <div class="col-md-9 col-sm-9">
                                    <textarea style="resize: none" rows="7" class="form-control" type="text" name="service" placeholder="Type on service" data-parsley-required="true"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Additional Notes</label>
                                <div class="col-md-9 col-sm-9">
                                    <textarea style="resize: none" maxlength="125" rows="3" class="form-control" type="text" name="additional_notes" placeholder="Type additional notes" data-parsley-required="true"></textarea>
                                </div>
                            </div>
                        </div>

						<div class="form-group">
							<div class="col-md-12 col-sm-12">
								<button type="submit" class="btn btn-success btn-block">Add</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end #content
