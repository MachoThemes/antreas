<?php get_header(); ?>

<div id="main" class="main">
	<div class="container">
		<?php cpotheme_post_media( get_the_ID(), 'image' ); ?>
		<section id="content" class="content">
			<?php do_action( 'cpotheme_before_content' ); ?>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="page-content">
							<?php the_content(); ?>
						</div>
						<?php cpotheme_post_pagination(); ?>
						<div class="clear"></div>
					</div>
					<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php do_action( 'cpotheme_after_content' ); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>
