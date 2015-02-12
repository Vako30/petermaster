<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="col-xs-12 col-md-4 navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo4.png" alt=""></a>
        </div>

        <nav class="col-xs-12 col-sm-6 col-md-8 collapse navbar-collapse pull-right" role="navigation">

            <div class="col-xs-12 pull-right">
                <address class="pull-right"><abbr title="Phone"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt=""></abbr> (812) 941-82-71</address>
            </div>
            <div class="col-xs-12 pull-right">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav pull-right'));
            endif;
            ?>
            </div>
        </nav>
    </div>
</header>
