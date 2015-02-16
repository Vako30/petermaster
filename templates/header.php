<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="row">
            <div class=" col-md-4 navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo4.png" class="img-responsive" alt=""></a>
            </div>

            <div class="pull-right phone-mother-div "> <div class="glyphicon glyphicon-earphone phone-icon"></div> <div class="phone-number">(812) 941-82-71</div> </div>
            <div class="col-sm-12 col-md-8">
                <nav class=" collapse navbar-collapse" role="navigation">

                    <div class="col-xs-12 no-padding">
                        </div>
                    <div class="col-xs-12 no-padding">
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav pull-right'));
                    endif;
                    ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
