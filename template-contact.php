<?php
/*
    Template Name: Contact
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row no-margin well"> <?php get_template_part('templates/content', 'page'); ?></div>
<?php endwhile; ?>

