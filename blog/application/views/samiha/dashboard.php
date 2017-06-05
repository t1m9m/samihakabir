<!-- begin #content -->
<div id="content" class="content">
	<!-- begin page-header -->
	<h1 class="page-header">Dashboard <small>Welcome to Samiha Kabir Admin Panel</small></h1>
	<!-- end page-header -->

	<!-- begin row -->
	<div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL ARTICLES</h4>
                    <p><?php echo $this->db->get('article')->num_rows(); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>samiha/article">
						View Detail <i class="fa fa-arrow-circle-o-right"></i>
					</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                <div class="stats-info">
                    <h4>TOTAL RESTAURANTS</h4>
                    <p><?php echo $this->db->get('restaurant')->num_rows(); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>samiha/restaurant">
						View Detail <i class="fa fa-arrow-circle-o-right"></i>
					</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>TOTAL CATEGORY</h4>
                    <p><?php echo $this->db->get('category')->num_rows(); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>samiha/category">
						View Detail <i class="fa fa-arrow-circle-o-right"></i>
					</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                <div class="stats-info">
                    <h4>TOTAL MESSAGES</h4>
                    <p><?php echo $this->db->get('message')->num_rows(); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>samiha/message">
						View Detail <i class="fa fa-arrow-circle-o-right"></i>
					</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                <div class="stats-info">
                    <h4>TOTAL COMMENTS</h4>
                    <p><?php echo $this->db->get('comment')->num_rows(); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>samiha/comment">
						View Detail <i class="fa fa-arrow-circle-o-right"></i>
					</a>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>TOTAL PHOTOS</h4>
                    <p>1,291,922</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                <div class="stats-info">
                    <h4>TOTAL VOLUNTEERS</h4>
                    <p>20.44%</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL NOTICES</h4>
                    <p>3,291,922</p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div> -->
    </div>
    <!-- end row -->
</div>
<!-- end #content
