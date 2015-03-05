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
    <?php $query = new WP_Query(array('category_name' => 'block1'));

    if ($query->have_posts()) : while ($query->have_posts()) :

        $query->the_post(); ?>
        <div class="text-center"><? the_content() ?></div>
    <?

    endwhile;

    endif;

    // Reset Query

    //wp_reset_query();

    ?>

    <?php $query = new WP_Query(array('category_name' => 'firsttitle'));

// Заголовок 1

    $category_id = get_cat_ID('firsttitle');

    $i= get_category($category_id)->category_count;

    if($i<5){

    $x=12/$i;

    }

    else{

        $x=4;

    }
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <div class="col-sm-6 col-md-<?php echo $x ?>">

            <div class="thumbnail">

                <div class="caption">

                    <? the_title() ?>

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



</div>

<div class="row no-margin well">

<?php $query = new WP_Query(array('category_name' => 'block2'));

if ($query->have_posts()) : while ($query->have_posts()) :

    $query->the_post(); ?>
    <div class="text-center"><? the_content() ?></div>
<?

endwhile;

endif;

// Reset Query

//wp_reset_query();

?>

<?php $query = new WP_Query(array('category_name' => 'secondtitle'));

// Заголовок 2

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <? the_content() ?>

    <?

    endwhile;

    endif;

    // Reset Query

    //wp_reset_query();

?>
</div>
<div class="row no-margin well">

    <?php $query = new WP_Query(array('category_name' => 'block3'));

    if ($query->have_posts()) : while ($query->have_posts()) :

        $query->the_post(); ?>
    <div class="text-center"><? the_content() ?></div>
    <?

    endwhile;

    endif;

    // Reset Query

    //wp_reset_query();

    ?>

    <?php $query = new WP_Query(array('category_name' => 'thirdtitle'));

    // Заголовок 3

    $category_id = get_cat_ID('thirdtitle');

    $i= get_category($category_id)->category_count;

    if($i<5){

        $x=12/$i;

    }

    else{

        $x=4;

    }
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <div class="col-sm-6 col-md-<?php echo $x?>">

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

</div>

<div class="row no-margin well">
<?php $query = new WP_Query(array('category_name' => 'block4'));

if ($query->have_posts()) : while ($query->have_posts()) :

    $query->the_post(); ?>
    <div class="text-center"><? the_content() ?></div>
<?

endwhile;

endif;

// Reset Query

//wp_reset_query();

?>

<?php $query = new WP_Query(array('category_name' => 'fourthtitle'));

// Заголовок 4

if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <? the_content() ?>

<?

endwhile;

endif;

// Reset Query

//wp_reset_query();

?>
</div>

