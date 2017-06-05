<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $restaurant_name = $this->db->get_where('restaurant', array('permalink' => $this->uri->segment(2)))->row()->name; ?></h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active"><?php echo $restaurant_name; ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section-padding grid-news">
    <div class="container">
        <div class="row">
        <?php
            if (isset($restaurant)):
            foreach ($restaurant as $row):
        ?>
			<div class="col-md-4">
				<article class="post-wrapper">
					<div class="thumb-wrapper waves-effect waves-block waves-light">
						<a href="<?php echo base_url(); ?>article/<?php echo $row['permalink']; ?>">
                            <img alt="" class="img-responsive" src="<?php echo base_url(); ?>uploads/article/<?php echo $row['restaurant_image']; ?>">
                        </a>
					</div><!-- .post-thumb -->
					<div class="blog-content">
						<header class="entry-header-wrapper">
							<div class="entry-header">
								<h2 class="entry-title">
                                    <a href="<?php echo base_url(); ?>article/<?php echo $row['permalink']; ?>">
                                        <?php echo $row['name']; ?>
                                    </a>
                                </h2>
								<div class="entry-meta">
									<ul class="list-inline">
										<li>
											<i class="fa fa-user"> Samiha Kabir</i>
										</li>
										<li>
											<i class="fa fa-clock-o"> <?php echo date('d M, Y', $row['timestamp']); ?></i>
										</li>
									</ul>
								</div><!-- .entry-meta -->
							</div><!-- /.entry-header -->
						</header><!-- /.entry-header-wrapper -->
						<div class="entry-content">
							<p><?php echo $row['preview']; ?></p>
						</div><!-- .entry-content -->
						<footer class="entry-footer">
							<ul class="list-inline pull-left">
                                <li>
									<span>
                                        <i class="fa fa-heart-o"></i> <?php echo $row['love']; ?>
                                    </span>
								</li>
								<li>
									<span>
                                        <i class="fa fa-comments"> <?php echo $this->db->get_where('comment', array('article_id' => $row['article_id'], 'status' => 1))->num_rows(); ?></i>
                                    </span>
								</li>
							</ul>
                            <a class="readmore pull-right" href="<?php echo base_url(); ?>article/<?php echo $row['permalink']; ?>">
                                Read Full Post
                            </a>
						</footer>
					</div><!-- /.blog-content -->
				</article><!-- /.post-wrapper -->
			</div><!-- /.col-md-4 -->
        <?php
            endforeach;
            endif;
        ?>
		</div><!-- /.row -->
	</div><!-- /.container -->
    <ul class="pagination post-pagination text-center mt-50">
        <?php foreach ($pages as $page) {
            echo "<li>" . $page . "</li>";
        } ?>
    </ul>
</section>
