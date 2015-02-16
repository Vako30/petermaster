<?php
/*
Template Name: Home
*/
?>
<div id="owl-example" class="owl-carousel">

    <?php $query = new WP_Query(array('category_name' => 'slider'));
    if ($query->have_posts()) : while ($query->have_posts()) :
        $query->the_post(); ?>
        <div class="general-slider">
            <div class="sl-items">
                <? echo get_the_post_thumbnail($id); ?>
            </div>
        </div>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
</div>

<div class="row no-margin well">

    <h1 class="text-center">Загаловок H1</h1>
    <?php $query = new WP_Query(array('category_name' => 'firsttitle'));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><? the_title() ?></h3>
                </div>
                <? echo get_the_post_thumbnail($id, 'medium'); ?>
            </div>
        </div>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>

</div>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
