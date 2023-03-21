<div class="clearfix"></div>
</div>
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-8">
                <div class="foot1">
                    <div class="footer-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav-menu nav-menu-footer', 'menu_id' => 'secondary-menu' ) ); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-4">
                <div class="foot2">
                    <div class="footer-icons">
                        <?php    foreach(get_field('social_icons','option') as $val ){ ?>

                            <span class="span">
                                <a href="<?php echo $val['icon_link']; ?>" target="_blank"><i class="<?php echo $val['icon_class']; ?>"></i></a>
                            </span>
                            
                        <?php    } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

<script>
jQuery(document).ready(function(){
	
	jQuery("#payment").appendTo("#show-paymentshere");
 	 
	jQuery("#billing_email").appendTo("#inner-maildiv");
		jQuery("#wc-stripe-payment-request-wrapper").appendTo("#alternatepayments");
  });
	jQuery(document).on('click','#plus-quan',function(){
		var oldva = parseFloat(jQuery('.quantity input').val());
		var valtwo = 1;
		var total = ((oldva) + (valtwo));
		jQuery('.quantity input').trigger('change');
		 jQuery('.quantity input').val(total);
		
		 setTimeout(function(){ 
		    var ordertext = jQuery(".order-total bdi").html();
		    jQuery(".right-align bdi").html(ordertext);
		 }, 500);
		
	});
	jQuery(document).on('click','#minus-quan',function(){
		var oldva = parseFloat(jQuery('.quantity input').val());
		
		var valtwo = 1;
		var total = ((oldva) - (valtwo));
		if(oldva == "1" || total == "1"){
			 jQuery('.quantity input').val("1");
			jQuery(this).addClass("diable");
		}else{
			jQuery(this).removeClass("diable");
			
		jQuery('.quantity input').trigger('change');
		 jQuery('.quantity input').val(total);
		}
 		 setTimeout(function(){ 
		    var ordertext = jQuery(".order-total bdi").html();
		    jQuery(".right-align bdi").html(ordertext);
		 }, 500);	
 		
		
	});
</script>

</body>
</html>