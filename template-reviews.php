<?php
/*
 Template Name: Reviews
 */
?>

<div class="no-margin row well">
    <?php while (have_posts()) : the_post(); ?>
    <?php comments_template('/templates/comments.php'); ?>
    <?php endwhile; ?>
</div>

