<?php
/*
 Template Name: Reviews
 */
?>
<div class="no-margin row well">
    <?php foreach (get_comments() as $comment): ?>
        <div><?php echo $comment->comment_author; ?> said: "<?php echo $comment->comment_content; ?>".</div>
    <?php endforeach; ?>
</div>
<?php comment_form(); ?>

