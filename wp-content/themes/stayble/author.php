<?php get_header(); ?>
<section id="content" role="main">
		<div class="wrapper">
<div id="postWrapper">

<header class="header">
<?php the_post(); ?>
<h1 class="entry-title author"><?php _e( 'Author Archives', 'blankslate' ); ?>: <?php the_author_link(); ?></h1>
<?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' 
. get_the_author_meta( 'user_description' ) . '</div>' ); ?>
<?php rewind_posts(); ?>
</header>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="post">
<?php get_template_part( 'entry' ); ?>
</div>
<?php endwhile;?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>