<?php
/**
 * The default template for displaying post content.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */



/**
	Entries
**/

if ( is_singular() && is_main_query() ) { ?>
	

<?php }

/**
	Posts
**/
else { ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="loop-entry-text clr">

			<header>


				<h2 class="loop-entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
				<?php
				// Display post meta details
				wpex_post_meta() ;?>
			</header>
			<div class="loop-entry-content entry clr">
				<?php if ( get_theme_mod( 'wpex_entry_content_excerpt','excerpt' ) == 'content' ) {
					the_content();
				} else {
					$wpex_readmore = get_theme_mod('wpex_blog_readmore','1') == '1' ? true : false;
					wpex_excerpt( 93, $wpex_readmore );
				} ?>
			</div><!-- .loop-entry-content -->
		</div><!-- .loop-entry-text -->
	</article><!-- .loop-entry -->

<?php } ?>