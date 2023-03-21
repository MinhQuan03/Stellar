<?php
/*
 * Template Name: Home Slider
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="htesti-smilesec">
    <div class="htesti-scontent">
        <div class="row m-0">
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

<style>
    .alignself{
        align-self: center;
    }
    .htesti-smilesec {
        overflow: hidden;
        padding: 100px 0;
    }
    .htesti-boxone img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        transition: all 0.4s ease;
    }
    #htesti_slide_one {
        margin-left: -39px;
        margin-right: -39px;
        height: 620px;
    }
    #htesti_slide_one .item{
        padding-left: 39px;
        padding-right: 39px;
    }
    #htesti_slide_one .item.slick-center .htesti-boxone img{
        width: 100%;
        height: 600px;
        transition: all 0.4s ease;
    }
    #htesti_slide_two {
        padding: 0 40px 0 112px;
    }
    .htesti-boxtwo ul{
        list-style: none;
        padding: 0;
        margin: 60px -11px 0;
        display: inline-block;
        width: 100%;
    }
    .htesti-boxtwo ul li{
        padding: 0 11px;
        float: left;
    }
    .htesti-boxtwo ul li img{
        width: 100%;
        height: 138px;
        object-fit: cover;
    }
    #htesti_slide_one .slick-prev:before,
    #htesti_slide_one .slick-next:before{
        content: '' !important;
        display: inline-block;
        width: 80px;
        height: 7px;
        font-size: 0;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    #htesti_slide_one .slick-prev:before{
        background-image: url(https://stellarbrush.com/luke630/wp-content/uploads/2023/02/testislide-arrow-left.png);
    }
    #htesti_slide_one .slick-next:before{
        background-image: url(https://stellarbrush.com/luke630/wp-content/uploads/2023/02/testislide-arrow-right.png);
    }
    #htesti_slide_one .slick-prev,
    #htesti_slide_one .slick-next{
        width: 200px;
        height: 55px;
        z-index: 1;
        border: 1px solid #EBB08F;
        top: auto;
        bottom: -40px;
    }
    #htesti_slide_one .slick-prev {
        left: 214px;
    }
    #htesti_slide_one .slick-next{
        right: -273px;
    }
    .htesti-boxtwo p {
        color: #103731;
        font-size: 20px;
        line-height: 25px;
        font-family: 'Work Sans';
        font-weight: 300;
        margin: 0 0 15px 0;
        width: 51%;
    }
    .htesti-boxtwo strong{
        color: #71A49C;
        font-size: 24px;
        font-family: 'Cormorant Garamond';
        font-weight: 300;
        font-style: italic;
        display: block;
        text-transform: uppercase;
    }
    .htesti-boxtwo span{
        color: #71A49C;
        font-size: 16px;
        font-family: 'Work Sans';
        font-weight: 300;
        display: block;
        margin-bottom: 0;
    }
</style>

<script>
jQuery( document ).ready(function() {
     jQuery('#htesti_slide_two').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '#htesti_slide_one'
    });
    jQuery('#htesti_slide_one').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '#htesti_slide_two',
      dots: false,
      arrows: true,
      focusOnSelect: true,
      centerMode: true,
    });
});
</script>
<?php endwhile; endif; ?>
<?php get_footer(); ?>