<?php get_header(); ?>

<main id="page-main">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    <?php num_paging_nav(); ?>
  <?php else : ?>
    <article id="post-0" class="post no-results not-found">
      <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Nic nie znaleziono', 'typo' ); ?></h1>
      </header>

      <div class="content entry-content">
        <p><?php _e( 'Przykro mi, ale nic nie znalazłem. Może spróbuj wyszukać coś ogólniejszego?', 'typo' ); ?></p>
        <?php get_search_form(); ?>
      </div><!-- .entry-content -->
    </article><!-- #post-0 -->
  <?php endif; // end have_posts() check ?>
</main>

<?php get_footer(); ?>
