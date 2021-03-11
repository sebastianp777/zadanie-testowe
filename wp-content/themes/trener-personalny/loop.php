<div class="news-blog">
  <div class="container">
		<div class="news-blog__loop">
			<div class="row">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(350,220)); ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<div class="loop-content-data">
						<p class="date"><?php the_time('F j, Y'); ?></p>
						<a class="main-heading" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

						<p><?php the_excerpt(); ?></p>

				        <a class="read-more-link-blog" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Czytaj więcej <i class="fas fa-angle-double-right"></i></a>
					</div>
					<!-- /post title -->

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->
			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Nie ma dodanych żadnych wpisów', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
