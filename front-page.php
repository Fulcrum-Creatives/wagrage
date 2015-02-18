<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>


<?php get_sidebar(); ?>
    
<!--Start content Wrapper-->
<div class="content-area"> 
  
  <!--Start Inner Page Content Area-->
  
  <div class="inner-page-content">
  	<div class="sub-pages-menu" align="left">
  	
  	<div class="home-boxes">
  	<a href=" <?php echo home_url(); ?>/buy/">
  		<div class="home-box first">
  		<h1>Buy</h1>
  		with Wagenbrenner
  		</div>
  	</a>
  	<a href=" <?php echo home_url(); ?>/sell/">
  		<div class="home-box">
  		<h1>Sell</h1> 
  		with Wagenbrenner
  		</div>
  	</a>
  	</div>

			<?php if ( have_posts() ) : ?>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

		 </div>
  <!--End Inner Page Content Area--> 
  
</div>
<!--End content Wrapper-->
</div>

<?php get_footer(); ?>