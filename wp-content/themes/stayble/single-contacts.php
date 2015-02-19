<?php get_header(); ?>
<div id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2132.9058770317065!2d11.958615600000002!3d57.684078100000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff3111ccce643%3A0x4f16b2c5ac290f4b!2sMedicinaregatan+8A%2C+413+90+G%C3%B6teborg!5e0!3m2!1ssv!2sse!4v1422975788196" width="100" height="450" frameborder="0" style="border:0"></iframe>
</div>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="wrapper">
<header class="header">
<!-- <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php endwhile; endif; ?>
</section>
</div>
<?php get_footer(); ?>