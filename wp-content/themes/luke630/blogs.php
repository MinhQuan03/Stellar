<?php
/*
 * Template Name: Blog
*/
get_header(); ?>
<section class="blogsBanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="leftContent">
          <h1 class="pageTitle"><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="col-lg-6  col-md-12">
		  <div class="rightContent">
		  	<div class="dropdown">
			  <button class="AjaxSortingButton btn  dropdown-toggle" type="button" data-toggle="dropdown"><?php
		  if(isset($_GET['order']) == "oldest"){ echo "Oldest"; }else{ echo "Newest"; } ?>
			  <span class="btnafter"></span></button>
			  <ul class="dropdown-menu">
				  <?php
		  if(isset($_GET['order']) == "oldest"){ ?> 
				  <li><a href="<?php echo get_the_permalink(249); ?>">Newest</a></li>
				  <?php   }else{ ?>
				
				<li><a href="<?php echo get_the_permalink(249); ?>?order=oldest">Oldest</a></li>
				  <?php } ?>
 			  </ul>
			</div>
        
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blogs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

      <?php
		  if(isset($_GET['order']) == "oldest"){
			    $args = array( 
                        'post_type'=>'post', 
  						'orderby'   => array(
						  'date' =>'ASC',
  						 ),
                        'posts_per_page' => '-1'
                        );
		  }else{
              $args = array( 
                        'post_type'=>'post', 
                         'posts_per_page' => '-1'
                        );
		  }
                        query_posts( $args );
                ?>
      <?php while ( have_posts() ) : the_post();  $month = get_the_date( 'M' ); $date = get_the_date( 'd' );?>

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
				<span class="ulikeButton" onClick="window.location.reload();" ><?php echo do_shortcode('[wp_ulike]'); ?></span>
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
			  <span class="getLike"><?php echo do_shortcode('[wp_ulike]'); ?></span>
            </div>
          </div>
        </div>

      <?php endwhile; wp_reset_query(); ?>

      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>