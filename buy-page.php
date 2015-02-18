<?php
/*
Template Name: Buy, Property Search Page 
*/


get_header(); ?>


<?php get_sidebar(); ?>
    
<!--Start content Wrapper-->
<div class="content-area"> 
  
  <!--Start Inner Page Content Area-->
  
  <div class="inner-page-content">
  	<div class="sub-pages-menu" align="left">
        <ul>
        	<?php
			if($post->post_parent){
  					$childrenMenus 	= wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); 
					$parent_title	= get_the_title($post->post_parent);
                    $parent 		= get_page_by_title($parent_title);
					$parent_link 	= $parent->guid;
			?>
                     <li><a href="<?php echo $parent_link; ?>"><?php echo $parent_title; ?></a></li>
            <?php 
			}
  			else{
  					$childrenMenus = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0"); ?>
                    <li class="current_page_item"><a href="<?php echo $post->post_permalink; ?>"><?php echo $post->post_title; ?></a></li>
            <?php 
			}
			?>
             <?php echo $childrenMenus; ?>
        </ul>
    </div>
    
    <div class="white-top-cor"></div>
    <div class="white-bg-rep">



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
			
			 <?php if ( is_active_sidebar( 'buy-search' ) ) : ?>
		<div id="property-search">
			<?php dynamic_sidebar( 'buy-search' ); ?>
		</div><!-- #property-search -->
	<?php endif; ?>

			
	<div class="clear"></div>
    </div>
    
    <div class="white-bot-cor"></div>

		 </div>
  <!--End Inner Page Content Area--> 
  
</div>
<!--End content Wrapper-->


<?php get_footer(); ?>