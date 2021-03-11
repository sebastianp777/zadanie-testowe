<?php get_header(); ?>


<main role="main">
		<!-- section -->
		<section class="news-blog-section">
  		<div class="container">
			<h2 class="breadcrumbs__h2">Aktualności</h2>
			<?php get_sidebar(); ?>
		</div>

			<div class="news-blog__loop">
				<?php get_template_part('loop'); ?>
			</div>
			<?php get_template_part('pagination'); ?>
		</div>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
