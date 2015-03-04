<?php
/*
  Template Name: Price-List
*/
?>

<div class="no-margin row well">

    <h1 class="text-center">Прайс-Лист</h1>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row no-margin well"> <?php get_template_part('templates/content', 'page'); ?></div>
    <?php endwhile; ?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php $query = new WP_Query(array('category_name' => 'price'));
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#<?= get_the_ID() ?>"
                           aria-expanded="true"
                           aria-controls="<?= get_the_ID() ?>">
                            <? the_title() ?>
                        </a>
                    </h4>
                </div>
                <div id="<?= get_the_ID() ?>" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="heading">
                    <div class="panel-body">
                        <? the_content() ?>
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


</div>
