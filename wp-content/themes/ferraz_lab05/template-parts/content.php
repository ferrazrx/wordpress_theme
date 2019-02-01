<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ferraz_lab05
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-categories">
			<?php ferraz_lab05_categories_list(); ?>
		</div>
		<div class="header-info">
			<!-- <?php ferraz_lab05_post_thumbnail(); ?> -->
			<div class="header-text">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				ferraz_lab05_post_thumbnail();
				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						ferraz_lab05_posted_by();
						ferraz_lab05_posted_on();
						ferraz_lab05_comments_info();
						ferraz_lab05_edit_button();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ferraz_lab05' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ferraz_lab05' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ferraz_lab05_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
