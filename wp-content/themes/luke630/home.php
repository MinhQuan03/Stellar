<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="content">
          <h2>
            <?php the_field('banner_heading_pre_heading'); ?>
          </h2>
          <h1 class="heading1">
            <?php the_field('banner_heading_line_one'); ?>
          </h1>
          <h1 class="heading2"><span>&</span>
            <?php the_field('banner_heading_line_two'); ?>
          </h1>
          <div class="banner-thumbnail">
            <img class="" src="<?php the_field('banner_thumbnail'); ?>" alt="">
          </div>
          <div class="rowflex">
            <div class="flex-div div1">
              <img class="" src="<?php the_field('banner_steller_logo'); ?>" alt="">
            </div>
            <div class="flex-div div2">
              <p>
                <?php the_field('banner_side_description'); ?>
              </p>
            </div>
          </div>
          <div class="buttonHeadin">
          <h4>
            <?php the_field('banner_bottom_description'); ?>
          </h4>
          <div class="playbutton">
            <a href="#" id="playBtn1"><img class="" src="<?php echo DIRPATH ?>/images/button-play.png" /></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="problem">
  <div class="container">
    <h1 class="heading"><span>
        <?php the_field('problem_pre_text'); ?>
      </span>
      <?php the_field('problem_heading'); ?>
    </h1>
    <div class="row">
      <div class="col-lg-5">
        <div class="content height">
          <p>
            <?php the_field('problem_description'); ?><span class="moredata">
              <?php the_field('problem_description_show_more'); ?>
            </span>
          </p>
          <button class="anchor MoreLessButton" id="MoreLessButton" onclick="myFunctionLess()" >Learn More</button>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="imgContent height">
          <img class="lazy" src="" data-src="<?php the_field('problem_side_image'); ?>" alt="" >
          <!-- <iframe width="100%" height="454" src="https://www.youtube.com/embed/9AkModwf40w" controls="false" title="Coke Zero 3D Product Animation by 3D Animation Studio - Third Dimension Studios" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
          <h2 class="moredata">
            <?php the_field('problem_video_bottom_heading'); ?>
          </h2>
        </div>
      </div>
    </div>
    <!-- <div class="row">
        <div class="col-lg-12">
          <button class="anchor MoreLessButton">Learn More</button>
        </div>
      </div> -->
  </div>
</section>
<section class="solution">
  <div class="container">
  <div class="mobileSection">
        
      <h1 class="heading1 "><span>
        <?php the_field('solution_pre_heading_text'); ?>
      </span>
      <?php the_field('solution_heading_line_1'); ?>
    </h1>
    <h1 class="heading2">
      <?php the_field('solution_heading_line_2'); ?>
    </h1>
     <h1 class="heading3">
      <?php the_field('solution_heading_line_3'); ?>
    </h1>
     <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="row imgWrap">
        
        <div class="imgContent">
          <img class="lazy" src="" data-src="<?php the_field('solution_left_image'); ?>" alt="">
        </div>
        
        <div class="imgContent imgContentSpecial">
          <img class="lazy bgimg" src="" data-src="<?php the_field('solution_right_image'); ?>" alt="">
          <img class="centerBrush" src="<?php the_field('solution_right_floating_image'); ?>" alt="">
        </div>
        
        <div class="imgContent">
          <img class="lazy" src="" data-src="<?php the_field('solution_left_image'); ?>" alt="">
        </div>
        
        
        </div>
        
        
      </div>
      
      <div class="col-lg-4">
        <div class="content">
          <p>
            <?php the_field('solution_right_content'); ?><span class="moredata2">
              <?php the_field('solution_right_show_more_content'); ?>
            </span>
          </p>
          <button class="anchor MoreLessButton2">Learn More</button>
        </div>
        <div class="afterImagWrap">
        <img class="afterBrush" src="<?php the_field('solution_bottom_image'); ?>" alt="">
        </div>
      </div>
    </div>
    
    ///
  </div>
    <div class="desktopSection">
    <h1 class="heading1 "><span>
        <?php the_field('solution_pre_heading_text'); ?>
      </span>
      <?php the_field('solution_heading_line_1'); ?>
    </h1>
    <h1 class="heading2">
      <?php the_field('solution_heading_line_2'); ?>
    </h1>
     <h1 class="heading3">
      <?php the_field('solution_heading_line_3'); ?>
    </h1>
     <div class="row justify-content-center">
      <div class="col-lg-3 col-md-3">
        <div class="imgContent">
          <img class="lazy" src="" data-src="<?php the_field('solution_left_image'); ?>" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-3 ">
        <div class="imgContent imgContentSpecial">
          <img class="lazy" src="" data-src="<?php the_field('solution_right_image'); ?>" alt="">
          <img class="centerBrush" src="<?php the_field('solution_right_floating_image'); ?>" alt="">
          <img class="afterBrush" src="<?php the_field('solution_bottom_image'); ?>" alt="">
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <div class="content">
          <p>
            <?php the_field('solution_right_content'); ?><span class="moredata2">
              <?php the_field('solution_right_show_more_content'); ?>
            </span>
          </p>
          <button class="anchor MoreLessButton2" onclick="myFunction()" id="MoreLessButton2">Learn More</button>
        </div>
      </div>
    </div>
    </div>
    
   <script>
// function myFunctionLess() {
//   var x = document.getElementById("MoreLessButton");
//   if (x.innerHTML === "Learn More") {
//     x.innerHTML = "Less";
//   }  else {
//     x.innerHTML = "Learn More";
//   }
// }
	   
function myFunction() {
  var x = document.getElementById("MoreLessButton2");
  if (x.innerHTML === "Learn More") {
    x.innerHTML = "Less";
  } else {
    x.innerHTML = "Learn More";
  }
}
</script>   
  </div>
</section>
<section class="video" id="playerDiv">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="content" >
          <div style="height:792px;position:relative;" ><iframe 
              src="https://player.vimeo.com/video/796910252?h=9d718d0554&amp;loop=1&amp;badge=0&amp;autopause=1&amp;player_id=0&amp;app_id=58479"
              frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
              style="position:absolute;top:-100;left:0;width:100%;height:100%;z-index: 999;" title="Stellar_Toothbrush.mp4"></iframe>
          </div>
          <script src="https://player.vimeo.com/api/player.js"></script>
          <script>
            var iframe = document.querySelector('iframe');
			var btn1= document.getElementById("playBtn1");
			var btn2= document.getElementById("playBtn2");
            var player = new Vimeo.Player(iframe);
			player.setLoop(true).then(function (loop) {
              // The loop behavior is enabled
            });
            btn1.addEventListener("click", (e)=>{
				e.preventDefault();
				jQuery('html, body').animate({
                    scrollTop: jQuery("#playerDiv").offset().top
                }, 0);
				setTimeout(function(){
					player.play();
        		}, 1000);
// 				player.getPaused().then(function(paused) {
// 					console.log("PAUSED",paused);
// 					if(paused){
// 						player.play();	
// 					}else{
// 						player.pause();
// 					}
					
// 				});
			})
            btn2.addEventListener("click", (e)=>{ 
				e.preventDefault();
				jQuery('html, body').animate({
                    scrollTop: jQuery("#playerDiv").offset().top
                }, 0);
				setTimeout(function(){
					player.play();
        		}, 1000);
// 				player.getPaused().then(function(paused) {
// 					console.log("PAUSED",paused);
// 					if(paused){
// 						player.play();	
// 					}else{
// 						player.pause();
// 					}
					
// 				});
			})
            player.setVolume(0.5);
			
            document.body.addEventListener("click", (e) => { console.log("CLICKED ON BODY") })
            iframe.click();
            var observer = new IntersectionObserver(function (entries) {
              if (entries[0].isIntersecting === true) {
                player.play();
              }

            }, { threshold: [0] });
//             observer.observe(document.querySelector("iframe"));
          </script>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="sliderSection">
  <div class="sliderHere">
    <div class="allslides" id="slider">
        
        <div>
          <div class="singleSlide">
            <div class="content">
              <img class="lazy" src="" data-src="<?php echo DIRPATH; ?>/images/slide-3.png" alt="">
            </div>
          </div>
        </div>
        <div>
          <div class="singleSlide">
            <div class="content">
              <p>My smile is whiter after using this set. The sensitivity of the teeth is gone. I started to feel more confident.</p>
              <h3>Anabella Villyago</h3>
              <h4>photomodel</h4>
              <img class="img" src="<?php echo DIRPATH; ?>/images/slide41.png" alt="">
              <img class="img" src="<?php echo DIRPATH; ?>/images/slide42.png" alt="">
            </div>
          </div>
        </div>
        <div>
          <div class="singleSlide">
          <div class="content">
              <img class="lazy" src="" data-src="<?php echo DIRPATH; ?>/images/slide-2.png" alt="">
            </div>
          </div> 
        </div>
        <div>
          <div class="singleSlide">
            <div class="content">
              <img class="lazy" src="" data-src="<?php echo DIRPATH; ?>/images/slide-2.png" alt="">
            </div>
          </div>
        </div>
        <div>
          <div class="singleSlide">
            <div class="content">
              <img class="lazy" src="" data-src="<?php echo DIRPATH; ?>/images/slide-2.png" alt="">
            </div>
          </div>
        </div>
        <div>
          <div class="singleSlide">
            <div class="content">
              <img class="lazy" src="" data-src="<?php echo DIRPATH; ?>/images/slide-2.png" alt="">
            </div>
          </div>
        </div>
    </div>
  </div>
</section> -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="htesti-smilesec hideOnMobile">
    <div class="htesti-scontent">
    <div class="mobileSlider">
      <div id="htesti_slide_one1" class="htesti_slide">
                    <?php $args	=	array( 'post_type'=> 'testimonial', 'posts_per_page' => '-1' );
                     query_posts( $args );
                     while( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="htesti-boxone">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
                <div id="htesti_slide_two1" class="htesti_slide">
                    <?php $args	=	array( 'post_type'=> 'testimonial', 'posts_per_page' => '-1' );
                     query_posts( $args );
                     while( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="htesti-boxtwo">
                                <p><?php the_field('testi_description'); ?></p>
                                <strong><?php the_title(); ?></strong>
                                <span><?php the_field('htesti_designation'); ?></span>
                                <ul>
                                    <?php $htesti_images = get_field('htesti_images');
                                    foreach($htesti_images as $value){ ?>
                                        <li>
                                            <img src="<?php echo $value['add_image']; ?>"/>
                                        </li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
    </div>
        <div class="row m-0 hideMobile">
            <div class="col-8 p-0">
                <div id="htesti_slide_one" class="htesti_slide">
                    <?php $args	=	array( 'post_type'=> 'testimonial', 'posts_per_page' => '-1' );
                     query_posts( $args );
                     while( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="htesti-boxone">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
            <div class="col-4 p-0 alignself">
                <div id="htesti_slide_two" class="htesti_slide">
                    <?php $args	=	array( 'post_type'=> 'testimonial', 'posts_per_page' => '-1' );
                     query_posts( $args );
                     while( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="htesti-boxtwo">
                                <p><?php the_field('testi_description'); ?></p>
                                <strong><?php the_title(); ?></strong>
                                <span><?php the_field('htesti_designation'); ?></span>
                                <ul>
                                    <?php $htesti_images = get_field('htesti_images');
                                    foreach($htesti_images as $value){ ?>
                                        <li>
                                            <img src="<?php echo $value['add_image']; ?>"/>
                                        </li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="SliderForMobile">
	<div class="sliderClass" id="slider">
		<?php $args	=	array( 'post_type'=> 'testimonial', 'posts_per_page' => '-1' );
                     query_posts( $args );
                     while( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="htesti-boxtwo NewMobileSlider">
                                <div class="row">
									<div class="col-6">
										
										<div class="side1">
												<?php the_post_thumbnail(); ?>
										</div>
										
									</div>
									<div class="col-6">
										
											<div class="side2">
												<p><?php the_field('testi_description'); ?></p>
												<strong><?php the_title(); ?></strong>
												<span><?php the_field('htesti_designation'); ?></span>
 												<ul class="hideOnSmallScreen">
													<?php $htesti_images = get_field('htesti_images');
													foreach($htesti_images as $value){ ?>
														<li>
															<img src="<?php echo $value['add_image']; ?>"/>
														</li>
													<?php  } ?>
												</ul>
											</div>
										
									</div>
								</div>
                            </div>
                        </div>
        <?php endwhile; wp_reset_query(); ?>		
	</div>
</section>
<?php endwhile; endif; ?>

<section class="abrasive">
  <h1 class="heading">
    <?php the_field('abrasive_heading_line_1'); ?><br />
    <?php the_field('abrasive_heading_line_2'); ?>
  </h1>
  <div class="row">
    <div class="col-lg-8">
      <div class="imgContent">
        <img class="" src="<?php the_field('abrasive_left_image'); ?>" alt="">
        <img class="tube lazy" src="" data-src="https://stellarbrush.com/wp-content/uploads/2023/03/Group-374.png" alt="">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="content">
        <h3>
          <?php the_field('abrasive_pre_heading'); ?>
        </h3>
        <h2>
          <?php the_field('abrasive_right_heading_text'); ?>
        </h2>
        <p>
          <?php the_field('abrasive_right_text'); ?>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="superiorCleaning">
  <div class="container">
    <h1>
      <?php the_field('cleaning_heading_line_1'); ?>
    </h1>
    <h2>
      <?php the_field('cleaning_heading_line_2'); ?>
    </h2>
    <div class="row">
      <div class="col-lg-6">
        <div class="imageContent">
          <img class="lazy" src="" data-src="<?php the_field('cleaning_left_stellar_kit'); ?>" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content">
          <div class="stellerimg">
            <img class="lazy" src="" data-src="<?php the_field('cleaning_steller_logo'); ?>" alt="">
          </div>
          <p class="p1">
            <?php the_field('cleaning_feature_1'); ?>
          </p>
          <p class="p2">
            <?php the_field('cleaning_feature_2'); ?>
          </p>
          <p class="p3">
            <?php the_field('cleaning_feature_3'); ?>
          </p>
          <h3 class="price"><span>$</span>
            <?php the_field('cleaning_feature_price'); ?>
          </h3>
          <p class="shipping">
            <?php the_field('cleaning_shipping_text'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>