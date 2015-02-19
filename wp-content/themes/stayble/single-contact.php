<?php get_header(); ?>
<div id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2132.9058770317065!2d11.958615600000002!3d57.684078100000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff3111ccce643%3A0x4f16b2c5ac290f4b!2sMedicinaregatan+8A%2C+413+90+G%C3%B6teborg!5e0!3m2!1ssv!2sse!4v1422975788196" 
	width="800" height="450" frameborder="0" style="border:0"></iframe>
</div>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="content" role="main">

<?php
$args=array(
		'post_type' => 'contact',
		'post_status' => array('publish'),
		'post_per_page' => 10,
		'paged' => $paged,
		'ignore_sticky_post' => 1,
		'order' => DESC
		);

	$wp_Query = new WP_Query($args);
	while ($wp_Query -> have_posts()) :  $wp_Query -> the_post();?>
	
		<div id="about" class="wrapper">
			<h1><?php the_title();?></h1>
			<?php the_content('<p></p>')?>
		</div>

		<div id="contact" class="wrapper">
			<h1><?php 	the_field('contact_header'); ?></h1>
			<p><?php 	the_field('contact'); ?></p>
		</div>
	
	</section>

<?php endwhile; endwhile; endif; ?>

<?php get_footer(); ?>