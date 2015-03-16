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
        <div class=""><? the_content() ?></div>
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

            <div class="thumbnail thumnbnail-center">

                <div class="caption"><? the_title() ?></div>

                <? echo get_the_post_thumbnail($id, 'thumbnail'); ?>
                <p class="Description_of_item"><?php echo CFS()->get('Description_of_item'); ?></p>
                <p class="badge price_of_item "><?php echo CFS()->get('Price'); ?></p><br>

                <!-- Button trigger modal -->
                <div class="btn btn-danger div-contact-button" data-toggle="modal" data-target="#myModal<?php echo CFS()->get('write_or_buy')?>">
                    <p class="div-p-contact-button">
                        <?php if( CFS()->get('write_or_buy')==1)
                        {
                            echo "купить";
                        }else{
                            echo "написать";
                        }
                        ?>
                    </p>
                </div>

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

            <div class="thumbnail thumnbnail-center">

                <div class="caption"><? the_content() ?></div>

                <? echo get_the_post_thumbnail($id, 'thumbnail'); ?>
                <p class="Description_of_item"><?php echo CFS()->get('Description_of_item'); ?></p>
                <p class="badge price_of_item"><?php echo CFS()->get('Price'); ?></p><br>
                <!-- Button trigger modal -->
                <div class="btn btn-danger div-contact-button" data-toggle="modal" data-target="#myModal<?php echo CFS()->get('write_or_buy')?>" >
                    <p class="div-p-contact-button">
                        <?php if( CFS()->get('write_or_buy')==1)
                        {
                            echo "купить";
                        }else{
                            echo "написать";
                        }
                        ?>
                    </p>
                </div>
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Купить товар</h4>
            </div>
            <div class="modal-body">

                <?php
                    echo do_shortcode( '[contact-form-7 id="172" title="Купить товар"]' );
                ?>


            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заказать услугу</h4>
            </div>
            <div class="modal-body">

                  <?php  echo do_shortcode( '[contact-form-7 id="203" title="услуга"]' );?>
            </div>
        </div>
    </div>
</div>