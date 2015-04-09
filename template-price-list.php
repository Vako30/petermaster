<?php
/*
  Template Name: Price-List
*/
?>

<div class="no-margin row custom-well">

    <h1 class="text-center">Прайс-Лист</h1>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row no-margin well"> <?php get_template_part('templates/content', 'page'); ?></div>
        <? $items = CFS()->get('price_list_items');
        $i=1;
        foreach ($items as $item) :
                $i++;
        ?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
                <div class="panel-heading" role="tab">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#accordion<?echo $i; ?>"
                           aria-expanded="true"
                           aria-controls="accordion<?echo $i; ?>">
                            <? echo $item['price_list_item_title']; ?>
                        </a>
                    </h4>
                </div>
                <div id="accordion<? echo $i ?>" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="heading">
                    <div class="panel-body">
                        <? echo $item['price_list_item_content']; ?>
                    </div>
                </div>
            </div>

        <? endforeach; endwhile;?>

    </div>


</div>
