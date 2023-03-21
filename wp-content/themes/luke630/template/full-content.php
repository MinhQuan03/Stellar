<?php if(is_front_page() || is_home()){}else{ 
        if(has_post_thumbnail()){ ?>
<header class="content-header" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>)">
<?php }else{ ?>
<header class="content-header" style="background-image:url(<?php echo DIRPATH; ?>/images/headerbg.jpg)">
<?php } ?>	
		<div class="container">
			<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
		</div>
	</header>
<?php } ?>
    <?php the_content(); ?>
			<div class="entry-links"><?php wp_link_pages(); ?></div>
