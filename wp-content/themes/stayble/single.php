<?php get_header(); ?>
<section id="content" role="main">
<div class="wrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="post" class="post">
	<a href="http://localhost/phptest/stayble-old/news/" alt="Back to News"> ← Back to News</a>
<?php get_template_part( 'entry' ); ?>
</div>
<?php endwhile; endif; ?>
</div>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_footer(); ?>