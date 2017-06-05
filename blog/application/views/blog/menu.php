<!--header start-->
<header id="header" class="<?php echo $header_class; ?>">
    <div class="header-sticky light-header">
        <div class="container">
            <div class="search-wrapper">
                <div class="search-trigger <?php if ($page_name == 'home') echo 'light'; ?> pull-right">
                    <div class='search-btn'></div>
                    <i class="material-icons">&#xE8B6;</i>
                </div>
                <!-- Modal Search Form -->
                <i class="search-close material-icons">&#xE5CD;</i>
                <div class="search-form-wrapper">
                    <form action="<?php echo base_url(); ?>search" class="white-form" method="post">
                        <div class="input-field">
                            <input type="text" name="term">
                            <label for="search" class="">Search Here...</label>
                        </div>
                        <button class="btn pink search-button waves-effect waves-light" type="submit">
                            <i class="material-icons">&#xE8B6;</i>
                        </button>
                    </form>
                </div>
            </div><!-- /.search-wrapper -->

            <div id="materialize-menu" class="menuzord">
                <!--logo start-->
                <!-- <a href="<?php // echo base_url(); ?>" class="logo-brand">
                    <img class="logo-dark" src="<?php // echo base_url(); ?>assets/blog/img/logo.png" alt=""/>
                    <img class="logo-light" src="<?php // echo base_url(); ?>assets/blog/img/logo-white.png" alt=""/>
                </a> -->
                <!--logo end-->
                <!--mega menu start-->
                <ul class="menuzord-menu pull-right <?php if ($page_name == 'home') echo 'light'; ?>">
                    <li class="<?php if ($page_name == 'home') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="<?php if ($page_name == 'articles') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>articles">Blog</a>
                    </li>
                    <li class="<?php if ($page_name == 'contact') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>contact">Contact</a>
                    </li>
                </ul>
                <!--mega menu end-->
            </div>
        </div>
    </div>
</header>
<!--header end-->
