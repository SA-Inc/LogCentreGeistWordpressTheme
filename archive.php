<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package geist
 */

get_header();

//get category
$geist_category = get_the_category();

//get number of posts in category
if( $geist_category ){
	$geist_category_num_posts = $geist_category[0]->category_count;
}
?>
	<!-- Special header partial to generate the <header> tag--}} -->
	<?php get_template_part('template-parts/header'); ?>
	    <div class="inner">
	        <?php get_template_part('template-parts/site-nav'); ?>
	        <div class="site-header-content">
	        	<h1 class="site-title">
		        	<?php
		        		if( is_category() ){
		            		echo single_term_title();
		        		}elseif( is_date() ){
		        			echo get_the_date( _x( 'F Y', 'monthly archives date format', 'geist' ) );
		        		}else{
		        			esc_html_e( 'Archive', 'geist' );
		        		}
		        	?>
	        	</h1>
	            <h2 class="site-description">
	            	<?php
	            	if ( have_posts() ) :

	            		//check if category description is set
	            		if( category_description() ){
	            			//output category description
	            			echo category_description();
	            		}else{
	            			//output number of posts in category
	            			if( $geist_category_num_posts > 1 ){
	            				/* translators: %d: number of posts, i.e. 5 posts  */
	            				$geist_category_text = printf( esc_html__( 'A collection of %d posts.', 'geist' ), esc_html( $geist_category_num_posts ) );
	            			}else{
	            				/* translators: %d: number of posts, i.e. 5 posts  */
	            				$geist_category_text = printf( esc_html__( 'A collection of %d post.', 'geist' ), esc_html ( $geist_category_num_posts ) );
	            			}
	            		}

	            	endif;
	            	?>
	            </h2>
	        </div>
	    </div>
	</header>


	<main id="site-main" class="site-main outer">
	    <div class="inner">
	        <div id="content" class="post-feed">
	        <?php
	        if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
	        </div>
	    </div>
	</main>

	<!-- Logo Block -->
	<div class="project-logos-block">
		<p>Project management</p>
		<section class="project-logos-row">
			<img src="https://github.com/SA-Inc/LogCentreAssets/blob/main/logo/dku_logo.png?raw=true" alt="">
			<img src="https://github.com/SA-Inc/LogCentreAssets/blob/main/logo/ilm_logo.jpg?raw=true" alt="">
			<img src="https://i.ibb.co/ZVj9FcQ/logo-log-centre50.jpg" alt="">
		</section>

		<p>In cooperation with</p>
		<section class="project-logos-row">
			<img src="https://github.com/SA-Inc/LogCentreAssets/blob/main/logo/ovgu_logo.png?raw=true" alt="">
			<img src="https://github.com/SA-Inc/LogCentreAssets/blob/main/logo/wildau_logo.jpg?raw=true" alt="">
			<img src="https://github.com/SA-Inc/LogCentreAssets/blob/main/logo/bmbf_logo.png?raw=true" alt="">
		</section>

		<p>With financial support</p>
		<section class="project-logos-row">
			<img src="https://github.com/SA-Inc/LogCentreAssets/blob/main/logo/daad_logo.png?raw=true" alt="">
			<img src="https://github.com/SA-Inc/LogCentreAssets/blob/main/logo/aus_amt_logo.png?raw=true" alt="">
		</section>
	</div>

<?php
get_footer();
