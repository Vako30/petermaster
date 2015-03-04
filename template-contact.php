<?php
/*
    Template Name: Contact
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row no-margin well"> <?php get_template_part('templates/content', 'page'); ?></div>
<?php endwhile; ?>

<div class="map">
    <script type="text/javascript" charset="utf-8"
            src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=kcol9EMdJR-8bbNDzHp5SE8pqASFp_vA&width=100%&height=700"></script>
</div>
