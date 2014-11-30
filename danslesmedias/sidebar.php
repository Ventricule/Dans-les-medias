<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<!-- RAJOUT : -->
			<div id="liens" class="widget">
				<?php
				$post_id = 16;
				$queried_post = get_post($post_id);
				?>
				<h3 class="widget-title"><?php echo $queried_post->post_title; ?></h3>
				<?php echo $queried_post->post_content; ?>
			</div>
		</div><!-- #secondary -->
	<?php endif; ?>
