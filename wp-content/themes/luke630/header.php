<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link rel="icon" href="" />
<script src="https://kit.fontawesome.com/ecd5508556.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">     
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header class="site-header" role="banner"> 
    <div class="container CheckoutPageHeaderNone">
        <div class="row">
            <div class="col-4">
                <div class="head1">
                    <div id="menuToggle" class="menuToggle">
                        <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                        <ul id="menu">
                        </ul>
                    </div>
                    <div id="navbar" class="nav-bar">
                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav><!-- #site-navigation -->
                        
                        <div class="menutogglebutton">
                            <a href="https://stellarbrush.com/checkout/" class="anchor">Buy now</a>
                        </div>
                        <div class="navbar-icons">
                        <?php    foreach(get_field('social_icons','option') as $val ){ ?>

                            <span class="span">
                                <a href="<?php echo $val['icon_link']; ?>"><i class="<?php echo $val['icon_class']; ?>"></i></a>
                            </span>
                            
                        <?php    } ?>
                    </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="head2">
                    <div class="playbutton hideOnScroll" >
                        <a href="#" id="playBtn2" class="displayBlockAtHome"><img src="<?php echo DIRPATH ?>/images/button-play.png" /></a>
						<a href="<?php echo HOME; ?>#playerDiv" id="playBtn3" class="displayNoneAtHome"><img src="<?php echo DIRPATH ?>/images/button-play.png" /></a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="head3">
                    <a href="<?php echo HOME; ?>checkout/" class="anchor">Buy now</a>
                </div>
            </div>
        </div>
	</div><!--.container-->
	<div class="container CheckoutPageHeaderBlock">
		<div class="row">
			<div class="col-12">
				<div class="CheckOutPageLogo" >
                    <a href="<?php echo HOME; ?>"><img src="<?php the_field('checkout_page_logo', 'options'); ?>" /></a>
                </div>
			</div>
		</div>
	</div>
</header>
	
	

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#stellar_popup">
  Hello
</button> -->

    
	
<!-- Modal One-->
<div class="modal fade stellar-popup" id="stellar_popup">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
<!--        <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></div>-->
        <div class="modal-body">
            <div id="popup_step_one" class="popup-setps active">
                <div class="stellarpopup-content">
                    <?php the_field('modal_one_content', 'options'); ?>
                </div>
                <div class="stellarpopup-button">
                    <span id="agree_btn">I agree</span>
                </div>
            </div>
            
            <div id="popup_step_two" class="popup-setps">
                <div class="stellarpopup-content">
                    <?php the_field('modal_two_content', 'options'); ?>
                </div>
                <div class="stellarpopup-button">
                    <ul>
                        <li>
                            <span id="popno_btn" onclick="close_window()">No</span>
                        </li>
                        <li>
                            <span id="popyes_btn">Yes</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div id="popup_step_three" class="popup-setps">
                <div class="stellarpopup-content">
                    <?php the_field('modal_three_content', 'options'); ?>
                </div>
                <div class="stellarpopup-button">
                    <ul>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" id="iunderstand1" name="iunderstand" value="I Understand">
                                <label for="iunderstand1">I understand</label>
                            </div>
                        </li>
                        <li>
                            <span id="iunderstand">Next</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div id="popup_step_four" class="popup-setps">
                <div class="stellarpopup-content">
                    <?php the_field('modal_four_content', 'options'); ?>
                </div>
                <div class="stellarpopup-button">
                    <ul>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" id="agreeunderstand" name="agreeunderstand" value="Agree Understand">
                                <label for="agreeunderstand">I understand</label>
                            </div>
                        </li>
                        <li>
                            <span id="popiagreee_btn">I agree</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div id="popup_step_five" class="popup-setps">
                <div class="stellarpopup-content">
                    <?php the_field('modal_five_content', 'options'); ?>
                </div>
                <div class="stellarpopup-button">
                    <span id="stecomfirmed_btn">Comfirmed</span>
                </div>
            </div>
            
            <div id="popup_step_six" class="popup-setps">
                <div class="stellarpopup-content">
                    <?php the_field('modal_six_content', 'options'); ?>
                </div>
                <div class="stellarpopup-button">
                    <ul>
                        <li>
                            <span id="setdisagree_btn" onclick="close_window()">Disagree</span>
                        </li>
                        <li>
                            <span id="setlagree_btn">Agree</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="accept-cookiesec">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12 alignself">
                <h3><?php the_field('accept_cookies_title', 'options'); ?></h3>
            </div>
            <div class="col-lg-6 col-sm-12 alignself">
                <?php the_field('accept_cookies_content', 'options'); ?>
            </div>
            <div class="col-lg-3 col-sm-12 alignself">
                <div class="accept-cookbnts">
                    <span id="laccept_cookies">Accept all</span>
                    <span id="donotaccept_last">Do not Accept</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script defer>
    function close_window() {
        window.history.back();

        if (window.parent != null) { //has a parent opener
            setTimeout( window.close , 150);
        }
    }
    jQuery( document ).ready(function() {
		setTimeout(function(){
			jQuery.get( "https://api.db-ip.com/v2/free/self", function( data ) {
				console.log("DATA",data);
				if( getCookie('stellar_popup') == 'yes' ){
						if( getCookie('stellar_popup_clear') == 'yes' ){

						}else{

							jQuery('body').addClass('popup_active'); }

				}else{
					console.log("RUNNING OUTSIDE US CONDITION");
					if(data.countryCode==="US"){
						console.log("RUNNING COUNTRY IS US");
						jQuery("#stellar_popup").modal({backdrop: "static"});
					}
				}
			});
        }, 10000);
		
        jQuery('#accept_cookies').on('click', function(){
           setCookie('stellar_popup_clear', 'yes', 7);
            jQuery('body').removeClass('popup_active');
        });
        jQuery('#popup_step_one #agree_btn').on('click', function(){
            jQuery('#popup_step_one').removeClass('active');
            jQuery('#popup_step_two').addClass('active');
        });
        jQuery('#popyes_btn').on('click', function(){
            jQuery('#popup_step_two').removeClass('active');
            jQuery('#popup_step_three').addClass('active');
        });
        jQuery('#iunderstand').on('click', function(){
            if(jQuery('#iunderstand1').is(':checked') == true ){
                jQuery('#popup_step_three').removeClass('active');
                jQuery('#popup_step_four').addClass('active');
            }
        });
        jQuery('#popiagreee_btn').on('click', function(){
            if(jQuery('#agreeunderstand').is(':checked') == true ){
                jQuery('#popup_step_four').removeClass('active');
                jQuery('#popup_step_five').addClass('active');
            }
        });
        jQuery('#stecomfirmed_btn').on('click', function(){
            jQuery('#popup_step_five').removeClass('active');
            jQuery('#popup_step_six').addClass('active');
        });
        
        jQuery('#dontagree').on('click', function(){
            jQuery("#stellar_popup").modal('hide');
        });

        jQuery('#setlagree_btn').on('click', function(){
            jQuery("#stellar_popup").modal('hide');
             setCookie('stellar_popup', 'yes', 7);
            jQuery('body').addClass('popup_active');
        });
        jQuery('#laccept_cookies').on('click', function(){
             setCookie('stellar_popup_clear', 'yes', 7);
            jQuery('body').removeClass('popup_active');
			setTimeout(function(){
				location.reload();
			}, 500);
        });
        jQuery('#donotaccept_last').on('click', function(){
            setCookie('stellar_popup', 'no', 7);
            jQuery('body').removeClass('popup_active');
        });
    });
      function setCookie(cname, cvalue, exdays) {
          const d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          let expires = "expires="+ d.toUTCString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
          function getCookie(cname) {
          let name = cname + "=";
          let decodedCookie = decodeURIComponent(document.cookie);
          let ca = decodedCookie.split(';');
          for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }
</script>

<div id="container">