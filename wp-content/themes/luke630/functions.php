<?php
define( 'DIRPATH', get_template_directory_uri() );
define( 'HOME', esc_url( home_url( '/' ) ) );
define( 'HTITLE', esc_html( get_bloginfo( 'name' ) ) );

require( trailingslashit( get_template_directory() ) . 'assets/breadcrum.php' );
require( trailingslashit( get_template_directory() ) . 'assets/pagination.php' );
require( trailingslashit( get_template_directory() ) . 'assets/clients.php' );

function kts_theme_setup()
{
    load_theme_textdomain( 'kts_theme', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    
    global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 640;
        register_nav_menus(array( 'main-menu' => __( 'Main Menu', 'kts_theme' ) ));
        register_nav_menus(array( 'footer-menu' => __( 'Footer Menu', 'kts_theme' ) ));
}
add_action( 'after_setup_theme', 'kts_theme_setup' );

function kts_theme_load_scripts()
{
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', DIRPATH.'/css/bootstrap.min.css' );
    wp_enqueue_style( 'slick', DIRPATH.'/css/slick-theme.css' );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'popper-js', DIRPATH.'/js/popper.min.js' );
    wp_enqueue_script( 'bootstrap-js', DIRPATH.'/js/bootstrap.min.js' );
    wp_enqueue_script( 'slick-js', DIRPATH.'/js/slick.min.js' );
    wp_enqueue_script( 'kts_theme-js', DIRPATH.'/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'kts_theme_load_scripts' );

function kts_theme_enqueue_comment_reply_script()
{
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'comment_form_before', 'kts_theme_enqueue_comment_reply_script' );

function kts_theme_title( $title )
{
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}
add_filter( 'the_title', 'kts_theme_title' );

function kts_theme_filter_wp_title( $title )
{
    return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_filter( 'wp_title', 'kts_theme_filter_wp_title' );

function kts_theme_widgets_init()
{
    register_sidebar( array (
        'name' => __( 'Sidebar Widget Area', 'kts_theme' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'kts_theme_widgets_init' );

function kts_theme_custom_pings( $comment )
{
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <?php echo comment_author_link(); ?>
    </li><?php
}

function kts_theme_comments_number( $count )
{
    if ( !is_admin() ) {
        global $id;
        $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}
add_filter( 'get_comments_number', 'kts_theme_comments_number' );

function custom_excerpt_length( $length )
{
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function ds_my_search_form( $form )
{
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="Search Blog" value="' . get_search_query() . '" name="s" id="s" />
     <button type="submit"><i class="fa fa-search"></i></button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'ds_my_search_form' );
//add_image_size('blog_thumb', 270, 215, array('top', 'center'));

function phone( $number )
{
    echo '<a href="tel:'.str_replace(array('-',' ','(',')' ), '', $number).'">'.$number.'</a>';
}

function recent_posts()
{
    ob_start(); global $post;
    $recentposts = array( 'post_type' => 'post', 'posts_per_page' => '3' );
    query_posts( $recentposts );
    echo '<div class="recent-posts">';
        while( have_posts() ) : the_post(); ?>
            <div class="recentpost">
                <div class="thumb">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <h4><?php the_title(); ?></h4>
                <p> <i class="fa fa-calendar"></i> <?php echo get_the_date('F j, Y'); ?></p>
                <div class="clearfix"></div>
            </div>
            <?php
        endwhile;
        wp_reset_query();
    echo '</div>';
    return ob_get_clean();
}

add_shortcode('recent-post', 'recent_posts');

function get_ctxonmy_val($val){
    global $post;
    $terms = get_the_terms( $post->ID , $val );
    if($terms)
    {
        foreach ( $terms as $term )
        {
          $name[] =   $term->name;
        }
        return implode(',', $name);
    }
    
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


add_filter( 'woocommerce_checkout_cart_item_quantity', 'bbloomer_checkout_item_quantity_input', 9999, 3 );
  
function bbloomer_checkout_item_quantity_input( $product_quantity, $cart_item, $cart_item_key ) {
   $product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
   $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
   if ( ! $product->is_sold_individually() ) {
      $product_quantity = woocommerce_quantity_input( array(
         'input_name'  => 'shipping_method_qty_' . $product_id,
         'input_value' => $cart_item['quantity'],
         'max_value'   => $product->get_max_purchase_quantity(),
         'min_value'   => '0',
      ), $product, false );
      $product_quantity .= '<span id="minus-quan">-</span><input type="hidden" name="product_key_' . $product_id . '" value="' . $cart_item_key . '"><span id="plus-quan">+</span>';
   }
   return $product_quantity;
}
 
// ----------------------------
// Detect Quantity Change and Recalculate Totals
 
add_action( 'woocommerce_checkout_update_order_review', 'bbloomer_update_item_quantity_checkout' );
 
function bbloomer_update_item_quantity_checkout( $post_data ) {
   parse_str( $post_data, $post_data_array );
   $updated_qty = false;
   foreach ( $post_data_array as $key => $value ) {   
      if ( substr( $key, 0, 20 ) === 'shipping_method_qty_' ) {         
         $id = substr( $key, 20 );   
         WC()->cart->set_quantity( $post_data_array['product_key_' . $id], $post_data_array[$key], false );
         $updated_qty = true;
      }      
   }   
   if ( $updated_qty ) WC()->cart->calculate_totals();
}


add_action( 'template_redirect', 'add_product_to_cart' );
function add_product_to_cart() {
	if ( ! is_admin() ) {
		$product_id = 341; //replace with your own product id
		$found = false;
		//check if product already in cart
		if ( sizeof( WC()->cart->get_cart() ) > 0 ) {
			foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
				$_product = $values['data'];
				if ( $_product->get_id() == $product_id )
					$found = true;
			}
			// if product not found, add it
			if ( ! $found )
				WC()->cart->add_to_cart( $product_id );
		} else {
			// if no products in cart, add it
			WC()->cart->add_to_cart( $product_id );
		}
	}
}

add_filter( 'woocommerce_order_button_text', 'misha_custom_button_text' );
 
// function wpk_soical_share_buttom($content){
function wpk_soical_share_buttom(){
	global $post;
	if (is_singular() || is_home()) {
	//get shareable url & title & image Url
	$post_url = urlencode(get_permalink());
	$post_title = str_replace( ' ', '%20', get_the_title());
	$thumbnail = get_the_post_thumbnail_url($post->ID);
	$twitter = 'https://twitter.com/intent/tweet?text='.$post_title.'&amp;url='.$post_url.'&amp;';
	$facebook = 'https://www.facebook.com/sharer.php?u='.$post_url;
	$linkedIn = 'https://www.linkedin.com/shareArticle?mini=true&url='.$post_url.'&amp;title='.$post_title;
	$reddit = 'https://www.reddit.com/share?url='.$post_url.'&amp;title='.$post_title;
	$email = 'https://mail.google.com/share?url='.$post_url.'&amp;title='.$post_title;	
	$content .= '<div>
	<a class="share-ico ico-linkedin" href="'.$reddit.'" title="Share on LinkedIn" target="_blank" rel="nofollow"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/Icon-Reddit.png" /></a>
	<a class="share-ico ico-linkedin" href="'.$linkedIn.'" title="Share on LinkedIn" target="_blank" rel="nofollow"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/Icon-Linkedin.png" /></a>
	
	<a class="share-ico ico-twitter" href="'.$twitter.'" title="Tweet on Twitter" target="_blank" rel="nofollow"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/Icon-Twitter.png" /></a></a>
	<a class="share-ico ico-facebook" href="'.$facebook.'" title="Share on facebook" target="_blank" rel="nofollow"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/Icon-Facebook.png" /></a>
	<a class="share-ico ico-linkedin" href="'.$email.'" title="Share on LinkedIn" target="_blank" rel="nofollow"><img src="https://stellarbrush.com/wp-content/uploads/2023/02/Icon-Envelope.png" /></a>
	</div>';
	return $content;
	}
}
add_shortcode('shortCodeForSinglePage','wpk_soical_share_buttom');
// add_filter( 'the_content', 'wpk_soical_share_buttom', 50);

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{
	unset($fields['billing']['billing_company']);
	unset($fields['shipping']['shipping_company']);
	unset($fields['billing']['billing_country']);
	unset($fields['shipping']['shipping_country']);
	unset($fields['billing']['billing_phone']);
	unset($fields['shipping']['shipping_phone']);
	unset($fields['billing']['billing_city']['validate']);
	
	$fields['billing']['billing_address_1']['placeholder'] = '(e.g. 123 Main Street)';
	$fields['billing']['billing_address_2']['placeholder'] = '(Optional: unit, suite, apartment number) ';
	$fields['shipping']['shipping_address_1']['placeholder'] = '(e.g. 123 Main Street)';
	$fields['shipping']['shipping_address_2']['placeholder'] = '(Optional: unit, suite, apartment number) ';
	
	$fields['billing']['billing_state']['placeholder'] = 'Select';
	$fields['shipping']['shipping_state']['placeholder'] = 'Select';
	
	$fields['billing']['billing_first_name']['label'] = 'First Name';
	$fields['billing']['billing_last_name']['label'] = 'Last Name';

	$fields['shipping']['shipping_first_name']['label'] = 'First Name';
	$fields['shipping']['shipping_last_name']['label'] = 'Last Name';
	
	$fields['billing']['billing_address_1']['label'] = 'Street';
	$fields['shipping']['shipping_address_1']['label'] = 'Street';
	
 	$fields['billing']['billing_city']['label'] = 'City';
	$fields['shipping']['shipping_city']['label'] = 'City'; 
	
	
	
 return $fields;
 }
/**
 * Process the checkout
 */
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

function my_custom_checkout_field_process() {
    // Check if set, if its not set add an error.
    if ( ! $_POST['shipping_first_name'] )
        wc_add_notice( __( 'Please fill in your name.' ), 'error' );
}

add_filter( 'woocommerce_states', 'lets_customize_woocommerce_states' );
    function lets_customize_woocommerce_states() {
    	global $states;

    	$states['US'] = array(
            'AL' =>	__( 'AL' , 'woocommerce' ),
        	'AK' =>	__( 'AK' , 'woocommerce' ),
        	'AZ' =>	__( 'AZ' , 'woocommerce' ),
        	'AR' =>	__( 'AR' , 'woocommerce' ),
        	'CA' =>	__( 'CA' , 'woocommerce' ),
        	'CO' =>	__( 'CO' , 'woocommerce' ),
        	'CT' =>	__( 'CT' , 'woocommerce' ),
        	'DE' =>	__( 'DE' , 'woocommerce' ),
        	'DC' =>	__( 'DC' , 'woocommerce' ),
        	'FL' =>	__( 'FL' , 'woocommerce' ),
        	'GA' =>	_x( 'GA' , 'woocommerce' ),
        	'HI' =>	__( 'HI' , 'woocommerce' ),
        	'ID' =>	__( 'ID' , 'woocommerce' ),
        	'IL' =>	__( 'IL' , 'woocommerce' ),
        	'IN' =>	__( 'IN' , 'woocommerce' ),
        	'IA' =>	__( 'IA' , 'woocommerce' ),
        	'KS' =>	__( 'KS' , 'woocommerce' ),
        	'KY' =>	__( 'KY' , 'woocommerce' ),
        	'LA' =>	__( 'LA' , 'woocommerce' ),
        	'ME' =>	__( 'ME' , 'woocommerce' ),
        	'MD' =>	__( 'MD' , 'woocommerce' ),
        	'MA' =>	__( 'MA' , 'woocommerce' ),
        	'MI' =>	__( 'MI' , 'woocommerce' ),
        	'MN' =>	__( 'MN' , 'woocommerce' ),
        	'MS' =>	__( 'MS' , 'woocommerce' ),
        	'MO' =>	__( 'MO' , 'woocommerce' ),
        	'MT' =>	__( 'MT' , 'woocommerce' ),
        	'NE' =>	__( 'NE' , 'woocommerce' ),
        	'NV' =>	__( 'NV' , 'woocommerce' ),
        	'NH' =>	__( 'NH' , 'woocommerce' ),
        	'NJ' =>	__( 'NJ' , 'woocommerce' ),
        	'NM' =>	__( 'NM' , 'woocommerce' ),
        	'NY' =>	__( 'NY' , 'woocommerce' ),
        	'NC' =>	__( 'NC' , 'woocommerce' ),
        	'ND' =>	__( 'ND' , 'woocommerce' ),
        	'OH' =>	__( 'OH' , 'woocommerce' ),
        	'OK' =>	__( 'OK' , 'woocommerce' ),
        	'OR' =>	__( 'OR' , 'woocommerce' ),
        	'PA' =>	__( 'PA' , 'woocommerce' ),
        	'RI' =>	__( 'RI' , 'woocommerce' ),
        	'SC' =>	__( 'SC' , 'woocommerce' ),
        	'SD' =>	__( 'SD' , 'woocommerce' ),
        	'TN' =>	__( 'TN' , 'woocommerce' ),
        	'TX' =>	__( 'TX' , 'woocommerce' ),
        	'UT' =>	__( 'UT' , 'woocommerce' ),
        	'VT' =>	__( 'VT' , 'woocommerce' ),
        	'VA' =>	__( 'VA' , 'woocommerce' ),
        	'WA' =>	__( 'WA' , 'woocommerce' ),
        	'WV' =>	__( 'WV' , 'woocommerce' ),
        	'WI' =>	__( 'WI' , 'woocommerce' ),
        	'WY' =>	__( 'WY' , 'woocommerce' ),
        	'AA' =>	__( 'AA' , 'woocommerce' ),
        	'AE' =>	__( 'AE' , 'woocommerce' ),
        	'AP' =>	__( 'AP' , 'woocommerce' )
    	);
    	
    	return $states;
    }

function misha_custom_button_text( $button_text ) {
	return 'Purchase'; // new text is here 
}