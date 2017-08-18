<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if(get_the_title() != '') : ?>
      <?php if ( is_single() || is_page() ) : ?>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <?php else : ?>
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
      <?php endif; ?>
    <?php else : ?>
      <?php if ( is_single() || is_page() ) : ?>
        <h1 class="entry-title"><?php echo get_the_date(); ?></h1>
      <?php else : ?>
        <h1 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a></h1>
      <?php endif; ?>
    <?php endif; ?>

    <?php if( !is_page() ) : ?>
      <div class="comments-link">
        <?php the_date(); ?> <?php if ( has_category() ) : ?> w <?php the_category( ', ' ); ?><?php endif; ?>
        <?php if ( comments_open() ) : ?> &mdash; <?php comments_popup_link( '<span class="leave-reply">' . __( 'Odpowiedz', 'typo' ) . '</span>', __( '1 odpowiedź', 'typo' ), __( '% odpowiedzi', 'typo' ) ); ?> <?php endif; ?>
      </div>
    <?php endif; ?>
  </header><!-- .entry-header -->

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="content entry-summary">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="content entry-thumbnail" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');"></div>
            <?php endif; ?>
            <?php the_excerpt(); ?>
        </div>
    <?php else : ?>
        <div class="content entry-content">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="content entry-thumbnail" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>');"></div>
            <?php endif; ?>
            <?php the_content( __( 'Czytaj dalej <span class="meta-nav">&rarr;</span>', 'academic' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Strony:', 'academic' ), 'after' => '</div>' ) ); ?>
        </div>
    <?php endif; ?>

    <?php if ( has_tag() ) : ?>
      <div class="tags-list"><?php the_tags( '', ' ' ); ?></div>
    <?php endif; ?>

    <?php comments_template( '', true ); ?>
</article>
