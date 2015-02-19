<?php get_header(); ?>
<section id="content" role="main">	
<!-- <div class="wrapper"> -->
<div id="postWrapper" class="wrapper">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail();
}
?>
	<?php the_excerpt(); ?>
</div>

<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
</div>
<!-- </div> -->
<?php get_sidebar(); ?> 
 <?php get_footer(); ?>