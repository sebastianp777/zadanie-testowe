<?php get_header(); ?>

	<main role="main">
	<section class="blog-post-single">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<div class="blog-post-single__heading">
					<div class="col-md-6">
						<div class="blog-post-single__heading__div">
							<span class="date"><?php the_time('F j Y'); ?></span>
							<p><?php _e( '', 'html5blank' ); the_category(' '); ?></p>
						</div>
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ' ', '<br>'); ?>

						<p><?php the_field( 'text_with_photo_text' ); ?></p>
					</div>
					<a class="col-md-6" title="<?php the_title(); ?>">
						<?php the_post_thumbnail();  ?>
					</a>
				</div>
				<div class="post-content">
					<?php the_content();  ?>
				</div>
			</div>
		</article>

	<?php endwhile; ?>

	<?php else: ?>

		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>

	<?php endif; ?>

	</section>


	</main>

<?php get_footer(); ?>
