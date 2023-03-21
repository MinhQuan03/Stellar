<?php
/*
 * Template Name: Terms of Use
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="termsPolicyBanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="leftContent">
          <h1 class="pageTitle"><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="rightContent">
          <p>Last Updated: <br/><?php the_modified_date(); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="termsPolicy">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section>
	<div class="container">
		<div id="map"></div>
	</div>
</section>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWe1Ly34UaBilN3tnvgKtGOMBx18EE6iw&callback=initMap&v=weekly"
      defer
></script> -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>