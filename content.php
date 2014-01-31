<?php
/**
 * @package Decode
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail(); ?>
			</a>
			<?php endif; ?>
		<div class="entry-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
		<?php if ( get_theme_mod( 'entry_date_position', 'below' ) == 'above' ) : ?>
		<div class="entry-meta above-content">
			<p class="date"><?php decode_posted_on(); ?></p>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'decode' ) ); ?>
	</div><!-- .entry-content -->
	
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'decode' ), 'after' => '</div>' ) ); ?>
	
	<footer class="entry-meta below-content">
		<?php if (get_theme_mod( 'enable_comments', true ) == true && ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<div class="comments-link <?php echo get_theme_mod( 'enable_comments', '' ); ?>"><?php comments_popup_link( __( 'Leave a comment', 'decode' ), __( '1 Comment', 'decode' ), __( '% Comments', 'decode' ) ); ?></div>
		<?php endif; ?>
		<?php edit_post_link( __( 'Edit', 'decode' ), '<div class="edit-link">', '</div>' ); ?>
		<?php if (get_theme_mod( 'show_tags', false ) == true ) : ?>
			<p class="tags"><?php the_tags(__( 'Tagged as: ', 'decode' ),', '); ?></p>
		<?php endif; ?>
		<?php if (get_theme_mod( 'show_categories', false ) == true ) : ?>
			<p class="categories"><?php _e( 'Categorized in&#58; ', 'decode' ) . the_category(', '); ?></p>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'entry_date_position', 'below' ) == 'below' ) : ?>
			<p class="date"><?php decode_posted_on(); ?></p>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->