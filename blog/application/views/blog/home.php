<section class="banner-4 parallax-bg bg-fixed overlay dark-5 fullscreen-banner valign-wrapper" data-stellar-background-ratio="0.5">
    <div class="valign-cell">
      <div class="container padding-top-110">
        <div class="row">
            <div class="col-md-6">
                <h1 class="intro-title text-uppercase white-text mb-30">Samiha Kabir</h1>
                <p class="lead text-regular white-text">
                    People who Love to Eat are always the Best people
                </p>
            </div><!-- col-md-6 -->
        </div><!-- row -->
      </div><!-- /.container -->
    </div><!-- /.valign-cell -->
</section>

<section class="section-padding">
	<div class="container">
		<div class="text-center mb-50">
			<h2 class="section-title text-uppercase">Categories</h2>
		</div>
		<div class="portfolio-container text-center">
			<div class="portfolio portfolio-with-title col-3 gutter mt-50">
			<?php
                $categories = $this->db->get('category')->result_array();
                foreach ($categories as $category):
            ?>
				<div class="portfolio-item">
					<div class="portfolio-wrapper">
						<a href="<?php echo base_url(); ?>category/<?php echo $category['permalink']; ?>">
                            <div class="thumb">
                                <img alt="" src="<?php echo base_url(); ?>uploads/category/<?php echo $category['image_link']; ?>">
    						</div>
                        </a>
						<div class="portfolio-title">
							<h2>
                                <a href="<?php echo base_url(); ?>category/<?php echo $category['permalink']; ?>">
                                    <?php echo $category['name']; ?>
                                </a>
                            </h2>
						</div>
					</div><!-- /.portfolio-wrapper -->
				</div><!-- /.portfolio-item -->
            <?php endforeach; ?>
			</div><!-- /.portfolio -->
		</div><!-- portfolio-container -->
	</div><!-- /.container -->
</section>

<section class="section-padding grid-news gray-bg">
    <div class="container">
		<div class="text-center mb-80">
			<h2 class="section-title">Blog</h2>
		</div>
		<div class="row">
        <?php
            $this->db->limit(3);
            $this->db->order_by('times', 'desc');
            $articles = $this->db->get('article')->result_array();
            foreach ($articles as $article):
        ?>
			<div class="col-md-4">
				<article class="post-wrapper">
					<div class="thumb-wrapper waves-effect waves-block waves-light">
						<a href="<?php echo base_url(); ?>article/<?php echo $article['permalink']; ?>">
                            <img alt="" class="img-responsive" src="<?php echo base_url(); ?>uploads/article/<?php echo $article['restaurant_image']; ?>">
                        </a>
					</div><!-- .post-thumb -->
					<div class="blog-content">
						<header class="entry-header-wrapper">
							<div class="entry-header">
								<h2 class="entry-title">
                                    <a href="<?php echo base_url(); ?>article/<?php echo $article['permalink']; ?>">
                                        <?php echo $article['name']; ?>
                                    </a>
                                </h2>
								<div class="entry-meta">
									<ul class="list-inline">
										<li>
											<i class="fa fa-user"> Samiha Kabir</i>
										</li>
										<li>
											<i class="fa fa-clock-o"> <?php echo date('d M, Y', $article['timestamp']); ?></i>
										</li>
									</ul>
								</div><!-- .entry-meta -->
							</div><!-- /.entry-header -->
						</header><!-- /.entry-header-wrapper -->
						<div class="entry-content">
							<p><?php echo $article['preview']; ?></p>
						</div><!-- .entry-content -->
						<footer class="entry-footer">
							<ul class="list-inline pull-left">
								<li>
									<span>
                                        <i class="fa fa-heart-o"></i> <?php echo $article['love']; ?>
                                    </span>
								</li>
								<li>
									<span>
                                        <i class="fa fa-comments"> <?php echo $this->db->get_where('comment', array('article_id' => $article['article_id'], 'status' => 1))->num_rows(); ?></i>
                                    </span>
								</li>
							</ul>
                            <a class="readmore pull-right" href="<?php echo base_url(); ?>article/<?php echo $article['permalink']; ?>">
                                Read Full Post
                            </a>
						</footer>
					</div><!-- /.blog-content -->
				</article><!-- /.post-wrapper -->
			</div><!-- /.col-md-4 -->
        <?php endforeach; ?>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<section class="section-padding">
	<div class="container">
		<div class="text-center mb-80">
			<h2 class="section-title text-uppercase">Restaurants</h2>
		</div>
		<div class="clients-grid gutter">
			<div class="row">
            <?php
                $this->db->limit('4');
                $this->db->order_by('serial', 'asc');
                $restaurants = $this->db->get('restaurant')->result_array();
                foreach ($restaurants as $restaurant):
            ?>
				<div class="col-md-3 col-sm-6">
					<div class="border-box">
						<a href="<?php echo base_url(); ?>restaurant/<?php echo $restaurant['permalink']; ?>">
                            <img src="<?php echo base_url(); ?>uploads/restaurant/<?php echo $restaurant['image_link']; ?>">
                        </a>
					</div><!-- /.border-box -->
				</div><!-- /.col-md-3 -->
            <?php endforeach; ?>
			</div><!-- /.row -->
		</div><!-- /.clients-grid -->
	</div><!-- /.container -->
</section>
