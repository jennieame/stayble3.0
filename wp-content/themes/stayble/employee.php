<?php /* Template Name: employee*/ ?>
<section id="content" role="main">
<?php get_header(); ?>
<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="wrapper">
<header class="header">
<h1 class="entry-title ingress"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
<?php the_content(); ?>
<div id="empolyee-Wrapper">
<?php
	$args=array(
		'post_type' => 'employee',
		'post_status' => array('publish'),
		'post_per_page' => 10,
		'paged' => $paged,
		'ignore_sticky_post' => 1,
		'order' => ASC
		);
	$wp_Query = new WP_Query($args);

	while ($wp_Query -> have_posts()) :  $wp_Query -> the_post();?>
<div class="empolyee">
	<?php the_post_thumbnail();?>
			<h2><?php the_title();?></h2>
<?php
	the_content('<p></p>');
?>
</div>
<?php
	endwhile;
?>
</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
