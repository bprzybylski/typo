<?php if ( post_password_required() ) return; ?>
<?php if ( have_comments() || comments_open()) : ?>

<section id="comments" class="content">
  <h2 class="comments-title">
    <?php printf( _n( '1 odpowiedź', '%1$s odpowiedzi', get_comments_number(), 'typo' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
  </h2>

  <ol class="comments-list">
    <?php wp_list_comments(); ?>
  </ol><!-- .comments-list -->

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav id="comment-nav-below" class="navigation" role="navigation">
      <h3 class="assistive-text section-heading"><?php _e( 'Nawigacja wewnątrz komentarzy', 'typo' ); ?></h3>
      <p><?php previous_comments_link( __( '&larr; Wcześniejsze', 'typo' ) ); ?> <?php next_comments_link( __( 'Późniejsze &rarr;', 'typo' ) ); ?></p>
    </nav>
  <?php endif; ?>

  <?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p><?php _e( 'Komentarze są wyłączone.', 'typo' ); ?></p>
  <?php endif; ?>

  <?php comment_form(); ?>
</section>

<?php endif; // have_comments() ?>
