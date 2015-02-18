<?php
/*
 Template Name: Reviews
 */
?>
<div class="no-margin row well">
    <?php foreach (get_comments() as $comment): ?>
        <div class="row">
            <div>
                <strong class="col-xs-12 col-md-8"><?php echo $comment->comment_author; ?></strong></br>
                <div class="col-xs-12 col-md-9"><?php echo $comment->comment_date; ?>.</div></br>
                <div class="col-xs-12 col-md-9"><?php echo $comment->comment_content; ?>.</div>
                <div class="col-xs-12 col-md-9"><hr></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php $comment_args = array('fields' => apply_filters('comment_form_default_fields', array(
    'author' => '<p class="comment-form-author">' .
        '<label for="author">' . __('Имя *') . '</label> ' .
        ($req ? '<span class="required">*</span>' : '') .
        '<input id="author" name="author" type="text" value="' .
        esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />' .
        '</p><!-- #form-section-author .form-section -->',
    'email' => '<p class="comment-form-email">' .
        '<label for="email">' . __('Email *') . '</label> ' .
        ($req ? '<span class="required">*</span>' : '') .
        '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />' .
        '</p><!-- #form-section-email .form-section -->',
    'url' => '')),
    'comment_field' => '<p class="comment-form-comment">' .
        '<label for="comment">' . __('Сообщение:') . '</label>' .
        '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
        '</p><!-- #form-section-comment .form-section -->',
    'comment_notes_after' => '',
);
comment_form($comment_args); ?>
<?php //comment_form(); ?>


