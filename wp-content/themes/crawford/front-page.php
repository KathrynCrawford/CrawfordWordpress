<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main wrapper" role="main">

		<section>

			<div class="hero-slider">

				<div><img src="<?php the_field('image_one'); ?>" /></div>

				<div><img src="<?php the_field('image_two'); ?>" /></div>

				<div><img src="<?php the_field('image_three'); ?>" /></div>

				<div><img src="<?php the_field('image_four'); ?>" /></div>

			</div>

		</section>

		<section>

			<hr>
			<h2><?php the_field('intro_header'); ?></h2>
			<hr>

			<div class="row">
				<div class="one_third">
					<img src="<?php the_field('intro_image'); ?>" />
				</div>

				<div class="two_third last">
					<?php the_field('intro_content'); ?>
				</div>
			</div>

		</section>

		<section>

			<hr>
			<h2><?php the_field('news_header'); ?></h2>
			<hr>

			<?php the_field('news_content'); ?>

		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
