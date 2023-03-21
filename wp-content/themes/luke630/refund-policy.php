<?php
/*
 * Template Name: Refund Policy
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
<!--         <div class="rightContent">
          <p>Last Updated: <br/><?php the_modified_date(); ?></p>
        </div> -->
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

<?php endwhile; endif; ?>
<?php get_footer(); ?>