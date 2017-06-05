<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Blog for Foodies">
        <meta name="keywords" content="BBQ, BBQ Restaurant, Bed &amp; Breakfast, Breakfast, Cafes, Cakes, chicken wings, Coffee Shop, Diners, Fast food, Fine Dining Restaurant, food, Hamburgers, Indian, Japanese, Live Music, Mexican, Thai Takeout, Tacos, Sushi, Soup, Sandwich, Restaurants, Pizza, Bakery">
        <meta name="author" content="Samiha Kabir">
    <?php
        if ($page_name == 'article'):
        $article_details = $this->db->get_where('article', array('permalink' => $this->uri->segment(2)))->result_array();
        foreach ($article_details as $article_detail):
    ?>
        <meta property="og:url"           content="<?php echo current_url(); ?>" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="<?php echo $article_detail['name']; ?>" />
        <meta property="og:description"   content="<?php echo $article_detail['preview']; ?>" />
        <meta property="og:image"         content="<?php echo base_url(); ?>uploads/article/<?php echo $article_detail['restaurant_image']; ?>" />
    <?php
        endforeach;
        endif;
    ?>

        <title>Samiha Kabir | Blog</title>

        <?php include 'includes_top.php'; ?>
    </head>

    <body id="top" class="has-header-search">
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=119305191978534";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <?php include 'menu.php'; ?>

        <?php include $page_name . '.php'; ?>

        <?php include 'footer.php'; ?>

        <?php include 'includes_bottom.php'; ?>

        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 5000);
        </script>
    </body>
</html>
