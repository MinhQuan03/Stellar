<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="content-header">
	<div class="container">
		<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'kts_theme' ), get_search_query() ); ?></h1>
	</div>
</header>
	<div class="container">
<div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <?php while ( have_posts() ) : the_post(); ?>
                  <?php get_template_part('template/blog'); ?>
                <?php endwhile; ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sidebar">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>  
		</div>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="content-header">
	<div class="container">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'kts_theme' ); ?></h1>
	</div>
</header>
	<div class="container">
		<div class="entry-content">
		<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'kts_theme' ); ?></p>
		<?php get_search_form(); ?>
		</div>
	</div>
</article>
<?php endif; ?>
</section>
<?php get_footer(); ?>