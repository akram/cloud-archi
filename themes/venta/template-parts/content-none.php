<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Venta
 * @since Venta 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php echo(esc_html__( 'Nothing Found', 'venta' )); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'venta' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php echo(esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'venta' )); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php echo(esc_html__( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'venta' )); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
