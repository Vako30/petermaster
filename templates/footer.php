<footer class="content-info" role="contentinfo">
    <div class="container">
        <div class="row no-margin footer_cont well">
            <?php dynamic_sidebar('sidebar-footer'); ?>
<!--            <div class="col-xs-12 alert">-->
<!--                --><?php //$query = new WP_Query(array('category_name' => 'footerdown'));
//                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
<!--                             --><?// the_content() ?>
<!--                --><?//
//                endwhile;
//                endif;
//                // Reset Query
//                //wp_reset_query();
//                ?>
<!--            </div>-->
        </div>
    </div>
</footer>
<?php wp_footer(); ?>