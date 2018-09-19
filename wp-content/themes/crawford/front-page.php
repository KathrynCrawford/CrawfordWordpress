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

			<div class="hero-slider col">

				<div><img src="<?php the_field('image_one'); ?>" /></div>

				<div><img src="<?php the_field('image_two'); ?>" /></div>

				<div><img src="<?php the_field('image_three'); ?>" /></div>

				<div><img src="<?php the_field('image_four'); ?>" /></div>

			</div>

			<div class="col">
				<h2><?php the_field('intro_header'); ?></h2>
			</div>

			<div class="row">
				<div class="one_fourth col">
					<img src="<?php the_field('intro_image'); ?>" />
				</div>

				<div class="three_fourths last col">
					<?php the_field('intro_content'); ?>
				</div>
			</div>

		</section>

		<section>

			<div class="col">
				<h2><?php the_field('news_header'); ?></h2>
			</div>

			<div class="col">
				<?php the_field('news_content'); ?>
			</div>

		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
