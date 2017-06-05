<!-- begin #content -->
<div id="content" class="content">
	<!-- begin page-header -->
	<h1 class="page-header">Restaurant <small>Add restaurant for articles</small></h1>
	<!-- end page-header -->

	<!-- begin row -->
	<div class="row">
        <!-- begin col-6 -->
	    <div class="col-md-6 col-md-offset-3">
	        <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Add Restaurant | Form</h4>
                </div>
                <div class="panel-body panel-form">
                    <form action="<?php echo base_url(); ?>samiha/restaurant/add" class="form-horizontal form-bordered" data-parsley-validate="true" name="update_text" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3">Name</label>
							<div class="col-md-9 col-sm-9">
								<input class="form-control" type="text" name="name" placeholder="Type name" data-parsley-required="true" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3">Permalink</label>
							<div class="col-md-9 col-sm-9">
								<input class="form-control" type="text" name="permalink" placeholder="Type permalink" data-parsley-required="true" />
							</div>
						</div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Address</label>
                            <div class="col-md-9 col-sm-9">
                                <textarea style="resize: none" rows="5" class="form-control" type="text" name="address" placeholder="Type address" data-parsley-required="true"></textarea>
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
							<label class="control-label col-md-3 col-sm-3">Serial</label>
							<div class="col-md-9 col-sm-9">
								<input class="form-control" type="number" name="serial" placeholder="Type serial" data-parsley-required="true" />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3"></label>
							<div class="col-md-9 col-sm-9">
								<button type="submit" class="btn btn-success">Add</button>
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
