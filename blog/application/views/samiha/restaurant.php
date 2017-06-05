<!-- begin #content -->
<div id="content" class="content">
	<h1 class="page-header">Restaurant <small>All restaurant are shown here</small></h1>

	<!-- begin row -->
	<div class="row">
	    <!-- begin col-12 -->
	    <div class="col-md-12">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Restaurant | Table</h4>
                </div>
                <div class="panel-body" style="overflow-x: auto">
                    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
								<th>Permalink</th>
								<th>Serial</th>
                                <th>Address</th>
                                <th>Added On</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                            $restaurants = $this->db->get('restaurant')->result_array();
                            foreach($restaurants as $restaurant):
                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $restaurant['name']; ?></td>
								<td><?php echo $restaurant['permalink']; ?></td>
								<td><?php echo $restaurant['serial']; ?></td>
                                <td><?php echo $restaurant['address']; ?></td>
                                <td><?php echo date('d M, Y', $restaurant['timestamp']); ?></td>
                                <td>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_restaurant/<?php echo $restaurant['restaurant_id']; ?>');" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
									<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_change_restaurant_image/<?php echo $restaurant['restaurant_id']; ?>');" class="btn btn-success btn-sm">
                                        <i class="fa fa-image"></i> Change Image
                                    </a>
                                    <a href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>samiha/restaurant/delete/<?php echo $restaurant['restaurant_id']; ?>');" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Remove
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
