<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="image">
					<a href="javascript:;"><img src="<?php echo base_url(); ?>assets/samiha/img/samiha.jpg" alt="" /></a>
				</div>
				<div class="info">
					s1m9h1
					<small>Scientist</small>
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header">Navigation</li>
			<li class="<?php if ($page_name == 'dashboard') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>samiha">
				    <i class="fa fa-laptop"></i>
				    <span>Dashboard</span>
			    </a>
			</li>
			<li class="has-sub <?php if ($page_name == 'add_category' || $page_name == 'category') echo 'active'; ?>">
				<a href="javascript:;">
				    <b class="caret pull-right"></b>
				    <i class="fa fa-diamond"></i>
				    <span>Category</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_category') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>samiha/add_category">Add Category</a>
					</li>
					<li class="<?php if ($page_name == 'category') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>samiha/category">Categories</a>
					</li>
				</ul>
			</li>
			<li class="has-sub <?php if ($page_name == 'add_restaurant' || $page_name == 'restaurant') echo 'active'; ?>">
				<a href="javascript:;">
				    <b class="caret pull-right"></b>
				    <i class="fa fa-spoon"></i>
				    <span>Restaurant</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_restaurant') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>samiha/add_restaurant">Add Restaurant</a>
					</li>
					<li class="<?php if ($page_name == 'restaurant') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>samiha/restaurant">Restaurants</a>
					</li>
				</ul>
			</li>
			<li class="has-sub <?php if ($page_name == 'add_article' || $page_name == 'article') echo 'active'; ?>">
				<a href="javascript:;">
				    <b class="caret pull-right"></b>
				    <i class="fa fa-rss"></i>
				    <span>Article</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_article') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>samiha/add_article">Add Article</a>
					</li>
					<li class="<?php if ($page_name == 'article') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>samiha/article">Articles</a>
					</li>
				</ul>
			</li>
			<li class="<?php if ($page_name == 'comment') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>samiha/comment">
				    <i class="fa fa-comment"></i>
				    <span>Comment</span>
			    </a>
			</li>
			<li class="<?php if ($page_name == 'message') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>samiha/message">
				    <i class="fa fa-envelope"></i>
				    <span>Message</span>
			    </a>
			</li>
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar
