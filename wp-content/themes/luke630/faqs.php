<?php
/*
 * Template Name: FAQs
*/
get_header(); ?>
<section class="faqBanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="content">
          <h1 class="pageTitle"><?php the_field('faqs_banner_title'); ?></h1>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="content">
          <p><?php the_field('faqs_banner_desscription'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="faq">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="content">

          <div id="accordion">

          <?php $n=1; while( have_rows('faqs_reapeater') ) : the_row(); ?>

            <div class="card">
              <div class="card-header" id="heading<?php echo $n;?>">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $n;?>" aria-expanded="false" aria-controls="collapseOne">
                    <?php the_sub_field('faqs_heading'); ?>
                  </button>
                </h5>
              </div>

              <div id="collapse<?php echo $n;?>" class="collapse" aria-labelledby="heading<?php echo $n;?>" data-parent="#accordion">
                <div class="card-body">
                  <div class="content">
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="textContent">
                          <p><?php the_sub_field('faqs_description'); ?></p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <div class="imgContent">
                          <div class="row">
                            <div class="col-6">
                              <div class="img">
                              <img src="<?php the_sub_field('faqs_image_1'); ?>" alt="">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="img">
                              <img src="<?php the_sub_field('faqs_image_2'); ?>" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $n++; endwhile; ?>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>





<?php get_footer(); ?>