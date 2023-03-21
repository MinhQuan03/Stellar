<?php
/*
 * Template Name: About
*/
get_header(); ?>

<section class="aboutBanner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="content">
          <h1 class="pageTitle"><?php the_field('about_banner_title'); ?></h1>
        </div>
      </div>
      <div class="col-md-6">
        <div class="content">
          <p><?php the_field('about_banner_text'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mission">
  <div class="container">
    <h1 class="heading"><?php the_field('mission_heading'); ?></h1>
    <div class="row">
      <div class="col-md-6">
        <div class="imgContent">
           <img class="lazy" src="" data-src="<?php the_field('mission_left_image'); ?>" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="content">
          <p><?php the_field('mission_right_text'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="story">
  <div class="container">
    <h1 class="heading"><?php the_field('story_heading'); ?></h1>
    <div class="row">
      <div class="col-md-6">
        <div class="content">
          <p><?php the_field('story_left_text'); ?></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="imgContent">
          <img class="lazy" src="" data-src="<?php the_field('story_right_image'); ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="team">
  <div class="container">
    <h1 class="heading">Team</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="content leftContent">
          <?php while( have_rows('team_member_repeater_left') ) : the_row();?>
            <div class="member">
              <div class="img">
                <img class="lazy" src="" data-src="<?php the_sub_field('member_image'); ?>" alt="">
              </div>
              <div class="details">
                <div>
                  <h2><?php the_sub_field('member_name'); ?></h2>
                  <h3><?php the_sub_field('member_designation'); ?></h3>
                  <p><?php the_sub_field('member_description'); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="content rightContent">
          <?php while( have_rows('team_member_repeater_right') ) : the_row();?>
            <div class="member">
              <div class="img">
                <img class="lazy" src="" data-src="<?php the_sub_field('member_image'); ?>" alt="">
              </div>
              <div class="details">
                <div>
                  <h2><?php the_sub_field('member_name'); ?></h2>
                  <h3><?php the_sub_field('member_designation'); ?></h3>
                  <p><?php the_sub_field('member_description'); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="advisors">
  <div class="container">
    <h1 class="heading">advisors</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="content leftContent">
            <?php while( have_rows('advisors_repeater_left') ) : the_row();?>
                <div class="singleAdvisor">
                  <div class="img">
                    <img class="lazy" src="" data-src="<?php the_sub_field('advisor_image'); ?>" alt="">
                  </div>
                  <div class="details">
                    <div>
                      <h2><?php the_sub_field('advisor_name'); ?></h2>
                      <h3><?php the_sub_field('advisor_type'); ?></h3>
                      <p><?php the_sub_field('advisor_description'); ?></p>
                    </div>
                  </div>
                </div>
            <?php endwhile; ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="content rightContent">
            <?php while( have_rows('advisors_repeater_right') ) : the_row();?>
                <div class="singleAdvisor">
                  <div class="img">
                    <img class="lazy" src="" data-src="<?php the_sub_field('advisor_image'); ?>" alt="">
                  </div>
                  <div class="details">
                    <div>
                      <h2><?php the_sub_field('advisor_name'); ?></h2>
                      <h3>SEO director<?php the_sub_field('advisor_type'); ?></h3>
                      <p><?php the_sub_field('advisor_description'); ?></p>
                    </div>
                  </div>
                </div>
            <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sustain">
  <div class="container">
    <h1 class="heading1"><?php the_field('ability_title_line_1'); ?></h1>
    <h1 class="heading2"><?php the_field('ability_title_line_2'); ?></h1>
    <div class="row">
      <div class="col-md-5">
        <div class="imgContent">
          <img class="lazy" src="" data-src="<?php the_field('ability_left_image'); ?>" alt="">
        </div>
      </div>
      <div class="col-md-7">
        <div class="content">
          <p><?php the_field('ability_right_description'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>