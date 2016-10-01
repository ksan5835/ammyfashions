<?php
/*
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
get_header(); ?>
<div id="main-content" class="main-content blog-page blog-list <?php echo esc_attr(tm_sidebar_position()); ?> <?php echo esc_attr(tm_page_layout()); ?>">
  <?php
		if ( is_front_page() && harvest_has_featured_posts() ) {
			// Include the featured content template.
			get_template_part( 'featured-content' );
		}
	?>
  <div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
      <?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				endwhile;
				// Previous/next post navigation.
				harvest_paging_nav();
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );
			endif;
		?>
    </div>
    <!-- #content -->
  </div>
  <!-- #primary -->
  <?php get_sidebar( 'content' ); ?>

<?php 
get_sidebar(); ?>
</div>
<!-- #main-content -->
<?php get_footer(); ?>