<?php get_header(); ?>
<section id="content" role="main">

<div id="postWrapper" class="wrapper">

<header class="header">
<h2 class="entry-title"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'blankslate' ); }
?></h2>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="post">
<?php get_template_part( 'entry' ); ?>
</div>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
