<?php get_header(); ?>
<section id="content" role="main">

	<div id="postWrapper" class="wrapper">
<header class="header">
<h2 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h2>
	<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- <?php get_template_part( 'entry' ); ?> -->
		<div class="post">
			<?php get_template_part( 'entry' ); ?>
		</div>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</section>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

