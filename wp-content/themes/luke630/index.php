<?php get_header(); ?>
<section id="content" role="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template/blog' ); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sidebar">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>
    </div><!--.container-->
</section>

<?php get_footer(); ?>