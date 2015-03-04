<footer class="content-info" role="contentinfo">
    <div class="container">
        <div class="row no-margin footer_cont well">
            <?php dynamic_sidebar('sidebar-footer'); ?>
            <?php $query = new WP_Query(array('category_name' => 'footer'));
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <? the_content() ?>
                        </div>
                        <? echo get_the_post_thumbnail($id, 'thumbnail'); ?>
                    </div>
                </div>
            <?
            endwhile;
            endif;
            // Reset Query
            //wp_reset_query();
            ?>

            <div class="col-xs-12 text-center alert alert-info">
                <?php $query = new WP_Query(array('category_name' => 'footerdown'));
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                             <? the_content() ?>
                <?
                endwhile;
                endif;
                // Reset Query
                //wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</footer>
