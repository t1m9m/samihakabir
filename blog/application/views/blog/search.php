<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Search Results</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active">Search Results</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section-padding grid-news">
    <div class="container">
        <div class="row">
        <?php
            $array = array('name' => $term, 'ambience' => $term, 'food_review' => $term, 'preview' => $term, 'beverages' => $term, 'service' => $term, 'additional_notes' => $term);
            $this->db->or_like($array);
            $articles = $this->db->get('article')->result_array();
            if ($articles):
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
        <?php
            endforeach;
            else:
        ?>
            <div class="col-md-6">
                Sorry no results found; Please try again!
            </div>
        <?php endif; ?>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
