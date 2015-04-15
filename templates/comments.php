<?php
  if (post_password_required()) {
    return;
  }
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
<!--    <h2>--><?php //printf(_nx('One response to &ldquo;%2$s&rdquo;', '%2$s', get_comments_number(), 'comments title', 'roots'), number_format_i18n(get_comments_number())); ?><!--</h2>-->

    <ol class="comment-list">
      <?php wp_list_comments(array('style' => 'ol', 'short_ping' => true)); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Старые отзывы', 'roots')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Новые отзывы &rarr;', 'roots')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'roots'); ?>
    </div>
  <?php endif; ?>
<div class="col-xs-12 col-md-6">
    <?php $comment_args = array('fields' => apply_filters('comment_form_default_fields', array(
        'author' => '<p class="comment-form-author">' .
            '<label for="author">' . __('Имя') . '</label> ' .
            ($req ? '<span class="required">*</span>' : '') .
            '<input id="author" name="author" type="text" value="' .
            esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />' .
            '</p><!-- #form-section-author .form-section -->',
        'email' => '<p class="comment-form-email">' .
            '<label for="email">' . __('Email') . '</label> ' .
            ($req ? '<span class="required">*</span>' : '') .
            '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />' .
            '</p><!-- #form-section-email .form-section -->',
        'url' => '')),
        'comment_field' => '<p class="comment-form-comment">' .
            '<label for="comment">' . __('Сообщение:') . '</label>' .
            '<textarea class="text_input" id="comment" name="comment" cols="45" rows="10" aria-required="true"></textarea>' .
            '</p><!-- #form-section-comment .form-section -->',
        'comment_notes_after' => '',
    );
    $comment_args['title_reply'] = __("Оставить отзыв");
    comment_form($comment_args); ?>
</div>
</section>
