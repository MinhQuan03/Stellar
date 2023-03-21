<?php if(is_front_page() || is_home()){}elseif(is_checkout()){?>
	<div class="container">
		<div class="row checkoutPageRow">
			   <div class="col-lg-6">
					<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
				</div>
				<div class="col-lg-6">
							<!--  Pam Add  -->
<!-- 					<div id="alternatepayments">
							<h3 class="expressHeading"><span>EXPRESS </span>CHECKOUT</h3>
							<div id="four_image_pay">
							<img class="CardPay" src="https://stellarbrush.com/wp-content/uploads/2023/03/ApplePay.png" />
							<img class="CardPay" src="https://stellarbrush.com/wp-content/uploads/2023/03/GPay.png" />
							<img class="CardPay" src="https://stellarbrush.com/wp-content/uploads/2023/03/PayPal.png" />
							<img class="CardPay" src="https://stellarbrush.com/wp-content/uploads/2023/03/Amazon.png" />
							</div>
					</div> -->
				</div>
			<span class="borderbottom"></span>
		</div>
	</div>
<?php }else
			{ 
        if(has_post_thumbnail()){ ?>
				<header class="content-header" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>)">
						<?php }else{ ?>
						<header class="content-header" style="background-image:url(<?php echo DIRPATH; ?>/images/headerbg.jpg)">
						<?php } ?>	
								<div class="container">
									<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
								</div>
				</header>
<?php } ?>
		<div class="container">
			<div class="entry-content">
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</div>
		</div>
