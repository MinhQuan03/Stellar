<?php get_header(); ?>
<section id="content" role="main">
<header class="content-header">
	<div class="container">
		<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'kts_theme' ); ?><?php single_tag_title(); ?></h1>
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
</section> 
<?php get_footer(); ?>