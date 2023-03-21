<?php
/*
 * Single Post detail template
*/
get_header(); ?>
<section class="singlePageBanner">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="content">
					<?php echo ds_breadcrumbs(); ?>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="content">
					<span class="CustomShareIcons"><?php echo do_shortcode('[shortCodeForSinglePage]'); ?></span>
					<span class="ulikeButtonSinglePage"><?php echo do_shortcode('[wp_ulike]'); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="singlePageBlog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content">
						<div class="categories">
              <ul>
								<?php 
								$categories = get_the_category();
								foreach( $categories as $category) {
										$name = $category->name;
										$category_link = get_category_link( $category->term_id );
								
										echo "<a href='$category_link'>
											<li class=" . esc_attr( $name) . ">$name</li>
												</a>";
								}
								?>
								<li><?php the_date(); ?></li>
							</ul>
            </div>
            <div class="title">
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="shortDescription">
							<?php the_field('post_short_description'); ?>
						</div>
						<div class="thumbnail">
							<img src="<?php the_field('post_full_size_image'); ?>" alt="">
						</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="content">
            <div class="shortDescription2">
							<?php the_field('post_short_description_2'); ?>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="singlePageContent">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="content">
					<?php echo the_content(); ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="displayInitial">
					<div class="Floatingcontent">
						<div class="addlogo">
								<img src="<?php the_field('smalladd_logo', 'options'); ?>" alt="">
						</div>
						<h3><?php the_field('smalladd_description', 'options'); ?></h3>
						<div class="AddImage">
								<img src="<?php the_field('smalladd_image', 'options'); ?>" alt="">
						</div>
						<div class="anchorDiv">
							<a href="<?php the_field('smalladd_anchor_address', 'options'); ?>" class="anchor">Learn more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bigAdd">
	<div class="container">
		<div class="bigAddOuter">
			<div class="row">
				<div class="col-lg-6">
					<div class="content">
							<div class="AddImage">
									<img src="<?php the_field('bigadd_image', 'options'); ?>" alt="">
							</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="content">
							<div class="addlogo">
									<img src="<?php the_field('bigadd_logo', 'options'); ?>" alt="">
							</div>
							<h3><?php the_field('bigadd_description', 'options'); ?></h3>
							<div class="anchorDiv">
								<a href="<?php the_field('bigadd_anchor_address', 'options'); ?>" class="anchor">Learn more</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>