<section class="page-title ptb-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo $name = $this->db->get_where('article', array('permalink' => $permalink))->row()->name; ?></h2>
				<ol class="breadcrumb">
					<li>
						<a href="<?php echo base_url(); ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>articles">Blog</a>
					</li>
					<li class="active"><?php echo $name; ?></li>
				</ol>
			</div>
		</div>
	</div>
</section><!--page title end-->
<!-- blog section start -->
<section class="blog-section section-padding">
	<div class="container">
		<div class="row">
        <?php
            $article_details = $this->db->get_where('article', array('permalink' => $permalink))->result_array();
            foreach ($article_details as $article_detail):
        ?>
			<div class="col-md-8">
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert success-border text-center" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<i class="fa fa-thumbs-o-up"></i> <?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
				<div class="posts-content single-post">
					<article class="post-wrapper">
						<header class="entry-header-wrapper clearfix">
							<div class="entry-header">
								<h2 class="entry-title">
                                    <?php echo $article_detail['name']; ?>
                                </h2>
								<div class="entry-meta">
									<ul class="list-inline">
										<li>
											<i class="fa fa-map-marker"> <?php echo $this->db->get_where('restaurant', array('restaurant_id' => $article_detail['restaurant_id']))->row()->address; ?></i>
										</li>
									</ul>
								</div>
								<div class="entry-meta">
									<ul class="list-inline">
										<li>
											<i class="fa fa-user"> Samiha Kabir</i>
										</li>
										<li>
											<i class="fa fa-clock-o"> <?php echo date('d M, Y', $article_detail['timestamp']); ?></i>
										</li>
										<li id="love_status">
											<a id="<?php echo $article_detail['article_id']; ?>" class="love">
												<i class="fa fa-heart-o"> <span><?php echo $article_detail['love']; ?></span></i>
											</a>
										</li>
										<li>
											<i class="fa fa-comment-o">3</i>
										</li>
									</ul>
								</div><!-- .entry-meta -->
							</div>
						</header><!-- /.entry-header-wrapper -->

                        <div class="thumb-wrapper">
                            <img alt="" class="img-responsive" src="<?php echo base_url(); ?>uploads/article/<?php echo $article_detail['restaurant_image']; ?>">
                        </div><!-- .post-thumb -->
						<div class="entry-content">
							<p><?php echo $article_detail['ambience']; ?></p>
							<p><?php echo $article_detail['food_review']; ?></p>
						</div><!-- .entry-content -->

                        <div class="thumb-wrapper">
                            <img alt="" class="img-responsive" src="<?php echo base_url(); ?>uploads/article/<?php echo $article_detail['food_image']; ?>">
                        </div><!-- .post-thumb -->
						<div class="entry-content">
							<p><?php echo $article_detail['beverages']; ?></p>
							<p><?php echo $article_detail['service']; ?></p>
						</div><!-- .entry-content -->
						<div class="entry-content">
							<div class="table-responsive">
								<table class="table table-bordered">
									<style>
										.table>tbody>tr>td { color: white; text-align: center; }
									</style>
		                            <tbody>
										<tr class="blue lighten-4">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue lighten-3">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue lighten-2">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue lighten-1">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue darken-1">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue darken-2">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue darken-3">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
			                            <tr class="blue darken-4">
			                                <td>Column content</td>
			                                <td>Column content</td>
			                                <td>Column content</td>
			                            </tr>
		                            </tbody>
		                        </table>
							</div>
						</div>

						<footer class="entry-footer">
							<ul class="social-link rtl">
								<li>
									<a style="color: #FFF" href="http://www.facebook.com/sharer.php?u=<?php echo current_url(); ?>" target="_blank">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
							</ul>
						</footer>
					</article><!-- /.post-wrapper -->
					<div class="comments-wrapper">
						<div class="comments-tab">
							<div class="panel-body">
								<div class="comment-respond">
									<form action="<?php echo base_url(); ?>comment/<?php echo $article_detail['article_id']; ?>" method="post" name="commentform" role="form" onsubmit="return validateForm()">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 comment-form-author">
													<input class="form-control" id="name" name="name" placeholder="Your Name" type="text">
												</div>
												<div class="col-sm-6 comment-form-email">
													<input class="form-control" id="email" name="email" placeholder="Email Address" type="email">
												</div>
											</div>
										</div>
										<div class="form-group comment-form-comment">
											<textarea maxlength="420" style="resize: none" class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea>
										</div>
										<div class="form-submit">
											<button class="btn btn-lg pink waves-effect waves-light" type="submit">Submit</button>
										</div>
									</form>
								</div>
							</div><!-- /.panel-body -->
						</div><!-- /.comments-tab -->

                        <ul class="media-list comment-list mt-30">
                        <?php
                            $this->db->order_by('timestamp', 'asc');
                            $comments = $this->db->get_where('comment', array('article_id' => $article_detail['article_id'], 'status' => 1))->result_array();
                            foreach ($comments as $comment):
                        ?>
							<li class="media">
								<div class="media-body">
									<div class="comment-info">
										<h4 class="author-name">
											<?php echo $comment['name']; ?> &nbsp; | &nbsp; <?php echo date('d M, Y', $comment['timestamp']); ?>
										</h4>
									</div>
									<p><?php echo $comment['comment']; ?></p>
								</div>
							</li>
                        <?php endforeach; ?>
						</ul>

					</div><!-- /.comments-wrapper -->
				</div><!-- /.posts-content -->
			</div><!-- /.col-md-8 -->
        <?php endforeach; ?>
			<div class="col-md-4">
				<div class="tt-sidebar-wrapper" role="complementary">
					<div class="widget widget_tt_author_widget">
						<div class="author-info-wrapper">
							<div class="author-cover">
                                <img alt="" src="<?php echo base_url(); ?>assets/blog/img/s1m9h1.jpg">
                            </div>
							<div class="author-avatar">
								<h2>Samiha Kabir</h2>
                                <span>Bite. Chew. Swallow. Repeat.</span>
							</div>
						</div><!-- /author-info-wrapper -->
					</div><!-- /.widget_tt_author_widget -->
					<div class="widget widget_tt_popular_post">
						<div class="tt-popular-post border-bottom-tab">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active">
									<a aria-expanded="true" data-toggle="tab" href="#tt-popular-post-tab1">Latest</a>
								</li>
								<li class="">
									<a aria-expanded="false" data-toggle="tab" href="#tt-popular-post-tab2">Popular</a>
								</li>
							</ul><!-- Tab panes -->
							<div class="tab-content">
								<!-- latest post tab -->
								<div class="tab-pane fade active in" id="tt-popular-post-tab1">
								<?php
                                    $this->db->limit(5);
                                    $this->db->order_by('timestamp', 'desc');
                                    $latest_articles = $this->db->get('article')->result_array();
                                    foreach ($latest_articles as $latest_article):
                                ?>
									<div class="media">
										<a class="media-left" href="<?php echo base_url() ?>article/<?php echo $latest_article['permalink']; ?>">
                                            <img alt="" src="<?php echo base_url(); ?>uploads/restaurant/<?php echo $this->db->get_where('restaurant', array('restaurant_id' => $latest_article['restaurant_id']))->row()->image_link; ?>">
                                        </a>
										<div class="media-body">
											<h4>
                                                <a href="<?php echo base_url() ?>article/<?php echo $latest_article['permalink']; ?>">
                                                    <?php echo $latest_article['name']; ?>
                                                </a>
                                            </h4>
										</div><!-- /.media-body -->
									</div><!-- /.media -->
                                <?php endforeach; ?>
								</div><!-- popular post tab-->
								<div class="tab-pane fade" id="tt-popular-post-tab2">
                                <?php
                                    $this->db->limit(5);
                                    $this->db->order_by('times', 'desc');
                                    $popular_articles = $this->db->get('article')->result_array();
                                    foreach ($popular_articles as $popular_article):
                                ?>
									<div class="media">
										<a class="media-left" href="<?php echo base_url() ?>article/<?php echo $popular_article['permalink']; ?>">
                                            <img alt="" src="<?php echo base_url(); ?>uploads/restaurant/<?php echo $this->db->get_where('restaurant', array('restaurant_id' => $popular_article['restaurant_id']))->row()->image_link; ?>">
                                        </a>
										<div class="media-body">
											<h4>
                                                <a href="<?php echo base_url() ?>article/<?php echo $popular_article['permalink']; ?>">
                                                    <?php echo $popular_article['name']; ?>
                                                </a>
                                            </h4>
										</div><!-- /.media-body -->
									</div><!-- /.media -->
                                <?php endforeach; ?>
								</div>
							</div><!-- /.tab-content -->
						</div><!-- /.tt-popular-post -->
					</div><!-- /.widget_tt_popular_post -->
					<div class="widget widget_categories">
						<h3 class="widget-title">Categories</h3>
						<ul>
                        <?php
                            $categories = $this->db->get('category')->result_array();
                            foreach ($categories as $category):
                        ?>
							<li>
								<a href="<?php echo base_url(); ?>category/<?php echo $category['permalink']; ?>">
                                    <?php echo $category['name']; ?>
                                </a>
							</li>
                        <?php endforeach; ?>
						</ul>
					</div><!-- /.widget_categories -->
				</div><!-- /.tt-sidebar-wrapper -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- blog section end -->

<script type="text/javascript">
    $(document).ready(function() {
        $('.love').on('click', function(){
            $.ajax({
                type: "POST",
                url:"<?php echo base_url(); ?>/loved_the_article",
                dataType: 'json',
                data: {article_id: this.id},
                success: function(data){
                    $('#love_status').load(document.URL +  ' #love_status');
                }
            });
        });
    });
</script>

<script type="text/javascript">
    function validateForm() {
        // Name Validation
        var name = document.forms["commentform"]["name"].value;
        if (name == "") {
            $("#name").focus();
            $("#name").css("border", "2px solid #d35400");
            return false;
        } else {
            $("#name").focus();
            $("#name").css("border", "2px solid #27ae60");
        }

        // Email Validation
        var email = document.forms["commentform"]["email"].value;
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (email == "" || atpos < 1 || dotpos < atpos+2 || dotpos+2 >= email.length) {
            $("#email").focus();
            $("#email").css("border", "2px solid #d35400");
            return false;
        } else {
            $("#email").focus();
            $("#email").css("border", "2px solid #27ae60");
        }

        // Message Validation
        var comment = document.forms["commentform"]["comment"].value;
        if (comment == "") {
            $("#comment").focus();
            $("#comment").css("border", "2px solid #d35400");
            return false;
        } else {
            $("#comment").focus();
            $("#comment").css("border", "2px solid #27ae60");
        }
    }
</script>
