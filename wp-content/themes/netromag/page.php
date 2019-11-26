<?php
/**
 * The template for displaying pages.
 *
 * @package netromag
 */

get_header(); ?>
	<?php 
	//если это не главная страница, то показываем контент
	if(is_home() || is_front_page() == false){ ?>
		<section class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main>
		</section>
	<?php }



get_sidebar();

get_footer();