<?php /* Template Name: Posts As Content */ ?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- The code segment below will call up the post tagged "hero".
			Copy the code for each new area that you want to use a post as content. -->


			<hr>
			<?php
				$the_query = new WP_Query( 'tag=hero' );

				if ( $the_query->have_posts() ) {
					echo '<ul>';
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<li>' . get_the_content() . '</li>';
					}
					echo '</ul>';
				} else {
					// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
			?>
			<hr>





		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
