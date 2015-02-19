<?php /* Template Name: Home Page */ ?>

<section id="content" role="main">
<?php get_header(); ?>
<?php echo do_shortcode('[pjc_slideshow slide_type="stayble-homepage"]'); ?>

<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<?php
$args=array(
		'post_type' => 'homepage',
		'post_status' => array('publish'),
		'post_per_page' => 10,
		'paged' => $paged,
		'ignore_sticky_post' => 1,
		'order' => DESC
		);

	$wp_Query = new WP_Query($args);
	while ($wp_Query -> have_posts()) :  $wp_Query -> the_post();?>
	
	
		<div id="imageSlider">
			<?php the_field('image_slider'); ?>
		</div>
		<div id="about" class="wrapper">
			<!-- <h1><?php the_title();?></h1> -->
			<?php the_content('<p></p>')?>
			<a href="<?php the_field('aboutlink'); ?>"><button>Read more about us</button></a>
		</div>

		<div id="tech" class="wrapper">
			<h1><?php 	the_field('tech_head_front'); ?></h1>
			<p><?php 	the_field('tech_text_front'); ?></p>
			<a href="<?php the_field('techlink'); ?>"><button>Read more about our technology</button></a>

		</div>
		
		<div id="invest" class="wrapper">
			<!-- <h1><?php 	the_field('invest_head_front'); ?></h1> -->
			<p><?php 	the_field('invest_text_front'); ?></p>
			<a href="<?php the_field('investlink'); ?>"><button>Read more</button></a>
		</div>

		<div id="contact" class="wrapper">
			<h1><?php 	the_field('contact_head_front'); ?></h1>
			<div id="contact-wrapper">
				<p><?php 	the_field('contact_text_front'); ?></p>
			</div>
		</div>
	
	</section>

<?php endwhile; endwhile; endif; ?>

<?php get_footer(); ?>