<?php get_header(); ?>
<section class="blogsBanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="leftContent">
          <h1 class="pageTitle">  <?php single_cat_title('Category: '); ?> </h1>
        </div>
      </div>
      
    </div>
  </div>
</section>
<section class="blogs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

      <?php while ( have_posts() ) : the_post();  $month = wp_date( 'M' ); $date = wp_date( 'd' );?>

        <div class="blog">
          <div class="thumbnail">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <p class="pre">
              <?php echo $month; ?><br>
              <span><?php echo $date; ?></span>
            </p>
          </div>
          <div class="details">
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
              </ul>
            </div>
            <div class="title">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            </div>
            <div class="excerpt">
              <?php the_excerpt(); ?>
            </div>
            <div class="anchorDiv">
              <a href="<?php the_permalink(); ?>" class="anchor">Learn More</a>
            </div>
          </div>
        </div>

      <?php endwhile; wp_reset_query(); ?>

      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>