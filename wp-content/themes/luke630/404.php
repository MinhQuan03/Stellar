<?php get_header(); ?>
<section id="content" role="main">
<article id="post-0" class="post not-found">
<header class="content-header">
	<div class="container">
		<h1 class="entry-title"><?php _e( 'Not Found', 'kts_theme' ); ?></h1>
	</div>
</header>
	<div class="container">
		<div class="entry-content">
		<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'kts_theme' ); ?></p>
		<?php get_search_form(); ?>
		</div>
	</div>
</article>
</section>
<?php get_footer(); ?>