<div class="blogdetail">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<?php the_post_thumbnail('blog_thumb'); ?>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
		<h1><?php the_title(); ?></h1>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
	</div>
</div>