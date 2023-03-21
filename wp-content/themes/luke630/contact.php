<?php
/*
 * Template Name: Contact
*/
get_header(); ?>
<section class="contactBanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="content">
          <h1 class="pageTitle"><?php the_field('contact_banner_title'); ?></h1>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="content">
          <a href="tel:<?php the_field('contact_right_phone_number_anchor'); ?>" class="phoneAnchor">
          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
<path d="M5.67188 9.69979C6.44364 11.2935 7.73239 12.579 9.32813 13.3467C9.44583 13.4024 9.57603 13.4265 9.70589 13.4167C9.83575 13.4068 9.96081 13.3633 10.0688 13.2904L12.4125 11.7248C12.5161 11.6546 12.6357 11.6117 12.7603 11.6002C12.8849 11.5887 13.0104 11.609 13.125 11.6592L17.5125 13.5435C17.6625 13.6059 17.7877 13.7159 17.869 13.8565C17.9504 13.9971 17.9832 14.1606 17.9625 14.3217C17.8234 15.407 17.2937 16.4046 16.4723 17.1276C15.6509 17.8506 14.5943 18.2495 13.5 18.2498C10.1185 18.2498 6.87548 16.9065 4.48439 14.5154C2.0933 12.1243 0.75 8.8813 0.75 5.49979C0.750247 4.40553 1.1492 3.34886 1.87221 2.5275C2.59522 1.70613 3.59274 1.17635 4.67813 1.03729C4.83922 1.01659 5.00266 1.04943 5.14326 1.13074C5.28386 1.21206 5.39384 1.33733 5.45625 1.48729L7.34063 5.88416C7.38963 5.99699 7.41013 6.12013 7.40032 6.24275C7.39051 6.36537 7.35069 6.48369 7.28438 6.58729L5.71875 8.96854C5.64905 9.07624 5.60814 9.20002 5.59993 9.32805C5.59172 9.45607 5.6165 9.58407 5.67188 9.69979V9.69979Z" stroke="#71A49C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
          <?php the_field('contact_right_phone_number'); ?></a>
          <a href="mailto:<?php the_field('contact_right_email_anchor'); ?>" class="emailAnchor">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M3 5.25H21V18C21 18.1989 20.921 18.3897 20.7803 18.5303C20.6397 18.671 20.4489 18.75 20.25 18.75H3.75C3.55109 18.75 3.36032 18.671 3.21967 18.5303C3.07902 18.3897 3 18.1989 3 18V5.25Z" stroke="#71A49C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M21 5.25L12 13.5L3 5.25" stroke="#71A49C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
          <?php the_field('contact_right_email'); ?></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="content">
        
          <p>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<circle cx="12" cy="11" r="2" stroke="#71A49C"/>
<path d="M11.9999 21.9999L17.4999 16.4999C20.5374 13.4623 20.5374 8.53742 17.4999 5.49985C14.4623 2.46229 9.53742 2.46229 6.49985 5.49985C3.46229 8.53742 3.46229 13.4623 6.49985 16.4999L11.9999 21.9999Z" stroke="#71A49C" stroke-linejoin="round"/>
</svg>
          <?php the_field('contact_right_location'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contactFormSection">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-9">
        <div class="content">
            <?php echo do_shortcode('[contact-form-7 id="284" title="Contact form 1"]'); ?>
        </div>
      </div>
      <div class="col-lg-5 col-md-3">
        <div class="imgContent">
          <img class="lazy" src="" data-src="https://stellarbrush.com/luke630/wp-content/uploads/2023/02/8_000.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>