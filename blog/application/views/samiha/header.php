<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="<?php echo base_url(); ?>samiha" class="navbar-brand"><span class="navbar-logo"></span> s1m9h1 Admin</a>
			<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown navbar-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url(); ?>assets/samiha/img/samiha.jpg" alt="s1m9h1" />
					<span class="hidden-xs">s1m9h1</span> <b class="caret"></b>
				</a>
				<ul class="dropdown-menu animated fadeInLeft">
					<li class="arrow"></li>
					<li>
						<a href="<?php echo base_url(); ?>samiha/message">Inbox</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="<?php echo base_url(); ?>auth/logout">Log Out</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
