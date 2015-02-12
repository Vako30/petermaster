<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="col-xs-12 col-md-4 navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <nav class="col-xs-12 col-sm-6 col-md-8 collapse navbar-collapse pull-right" role="navigation">

            <div class="col-xs-12 pull-right">
                <adress class="pull-right"><abbr title="Phone">ТЕЛ:</abbr>888-888-888</adress>
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
