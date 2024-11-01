<?php
/**
 * Plugin Name: Request Quote via Whatsapp for Woocommerce
 * Plugin URI: https://troplr.com/
 * Description: Easily add Whatsapp link to request quote in woocommerce product.
 * Version: 1.0.1
 * Author: Troplr
 * Author URI: https://troplr.com
 * Requires at least: 4.9.8
 * Tested up to: 5.1.1
 * Tags: social, chat, wordpress, woocommerce, whatsapp
 * Text Domain: troplr
 *
 */

require_once('titan-framework/titan-framework-embedder.php');





add_action( 'tf_create_options', 'rrwfw_options_creating_function' );
 
function rrwfw_options_creating_function() {
 
    // Initialize Titan with your theme name.
    $titan = TitanFramework::getInstance( 'rrwfwc' );
 
    /**
     * First Admin panel.
     */
 
    $rrwfw_panel = $titan->createAdminPanel( array(
        'name' => 'Woo Whatsapp' // Name the options menu.
    ) );
 
    /**
     * Create the options.
     */

    $rrwfw_panel->createOption( array(
        'id'   => 'buttonsend', // The ID which will be used to get the value of this option.
        'type' => 'text', // Type of option we are creating.
        'name' => 'Link Text', // Name of the option which will be displayed in the admin panel.
        'desc' => 'Enter button text E.g: "Send Quote Request"', // Description of the option which will be displayed in the admin panel.
        'default' => 'Send Quote Request'
    ) );

   
 
    $rrwfw_panel->createOption( array(
        'id'   => 'woo_number1', // The ID which will be used to get the value of this option.
        'type' => 'text', // Type of option we are creating.
        'name' => 'Enter Mobile Number', // Name of the option which will be displayed in the admin panel.
        'desc' => 'Enter with country code followed by mobile number (+919867286325)' // Description of the option which will be displayed in the admin panel.
    ) );

    
   

    $rrwfw_panel->createOption( array(
        'id'   => 'woo_text', // The ID which will be used to get the value of this option.
        'type' => 'textarea', // Type of option we are creating.
        'name' => 'Message', // Name of the option which will be displayed in the admin panel.
        'desc' => 'Message that will automatically appear in the text field of a chat.', // Description of the option which will be displayed in the admin panel.
        'default'=> 'Hello! I'.' wanted to know the best price for this product.'
    ) );
 
    








 

$rrwfw_panel->createOption(  array(

'name' => 'Select Icon',

'id' => 'my_layout_rrwfw',

'type' => 'radio-image',

'options' => array(

'icon1' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_16_-_Whatsapp_1775225.png',

'icon2' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_16_-_Whatsapp_2945046.png',

'icon3' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_23-whatsapp_843773.png',

'icon4' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_375_Whatsapp_logo_4375415.png',

'icon5' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_social__media__social_media__whatsapp__3259418.png',

'icon6' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_social__media__social_media__whatsapp__3350470.png',

'icon7' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_social__media__whatsapp__3046391.png',

'icon8' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_Social_Media_Icons_Edged_Highlight-09_1542407.png',

'icon9' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_Social_Media_Icons_Edged-09_1542381.png',

'icon10' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_Social_Media_Icons-09_1542390.png',

'icon11' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_social_media_social_media_logo_whatsapp_2993741.png',

'icon12' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_Social-10-Whatsapp-Outline_1243535.png',

'icon13' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_Social-media_Whatsapp_4362952.png',

'icon14' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_Social-media-expand_Whatsapp_4362938.png',

'icon15' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_WhatsApp__3336957.png',

'icon16' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp__social__media__social_media___3244052.png',

'icon17' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_287520.png',

'icon18' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_287615.png',

'icon19' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_986960.png',

'icon20' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_1164523.png',

'icon21' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_1218297.png',

'icon22' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_1220296.png',

'icon23' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_WHATSAPP_1230706.png',

'icon24' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_WhatsApp_1298775.png',

'icon25' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_WhatsApp_2106396.png',

'icon26' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_Whatsapp_3721678.png',

'icon27' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_pin_logo_2481145.png',

'icon28' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_social_logo_2481087.png',

'icon29' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_social_media_2552412.png',

'icon30' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_WhatsApp_social_media_2552509.png',

'icon31' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_social_media_2863469.png',

'icon32' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_social_media_logo_1098998.png',

'icon33' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_social_media_logo_1099046.png',

'icon34' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_social_pin_2470547.png',

'icon35' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_whatsapp_social_pin_2552387.png',

'icon36' => plugin_dir_url( __FILE__ ) . '/assets/img/iconfinder_WhatsApp-01_1961289.png',

'icon37' => plugin_dir_url( __FILE__ ) . '/assets/img/whatsapp-logo.png',

),

'default' => 'small',

) );


    $rrwfw_panel->createOption( array(
        'type' => 'save'
    ) );



 
}

function add_rrwfw()
{
    $titan = TitanFramework::getInstance( 'rrwfwc' );

    $my_layout_rrwfw = $titan->getOption( 'my_layout_rrwfw' );
    $woo_number1 = $titan->getOption( 'woo_number1' );
    $my_profile1 = $titan->getOption( 'my_profile1' );
    $buttonsend = $titan->getOption( 'buttonsend' );
    $woo_text = $titan->getOption( 'woo_text' );


    

    $imageSrc = $my_profile1; // For the default value
        if ( is_numeric( $my_profile1 ) ) {
        $imageAttachment = wp_get_attachment_image_src( $my_profile1 );
        $imageSrc = rtrim($imageAttachment[0],'/');
        $photoo = rtrim($imageSrc,'/');
        }
    global $product;

    
        if ($my_layout_rrwfw == icon1) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;
            


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_16_-_Whatsapp_1775225.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_16_-_Whatsapp_1775225.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}



if ($my_layout_rrwfw == icon2) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_16_-_Whatsapp_2945046.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_16_-_Whatsapp_2945046.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}





if ($my_layout_rrwfw == icon3) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_23-Whatsapp_843773.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_23-Whatsapp_843773.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon4) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_375_Whatsapp_logo_4375415.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_375_Whatsapp_logo_4375415.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}




if ($my_layout_rrwfw == icon5) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social__media__social_media__Whatsapp__3259418.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social__media__social_media__Whatsapp__3259418.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}



if ($my_layout_rrwfw == icon6) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social__media__social_media__Whatsapp__3350470.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social__media__social_media__Whatsapp__3350470.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}



if ($my_layout_rrwfw == icon7) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social__media__Whatsapp__3046391.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social__media__Whatsapp__3046391.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}



if ($my_layout_rrwfw == icon8) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social_Media_Icons_Edged_Highlight-09_1542407.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social_Media_Icons_Edged_Highlight-09_1542407.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}



if ($my_layout_rrwfw == icon9) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social_Media_Icons_Edged-09_1542381.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social_Media_Icons_Edged-09_1542381.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}



if ($my_layout_rrwfw == icon10) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social_Media_Icons-09_1542390.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social_Media_Icons-09_1542390.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon11) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social_media_social_media_logo_Whatsapp_2993741.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_social_media_social_media_logo_Whatsapp_2993741.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon12) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social-10-Whatsapp-Outline_1243535.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social-10-Whatsapp-Outline_1243535.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon13) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social-media_Whatsapp_4362952.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social-media_Whatsapp_4362952.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon14) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social-media-expand_Whatsapp_4362938.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Social-media-expand_Whatsapp_4362938.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon15) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp__3336957.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp__3336957.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon16) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp__social__media__social_media___3244052.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp__social__media__social_media___3244052.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon17) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_287520.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_287520.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon18) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_287615.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_287615.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon19) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_986960.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_986960.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon20) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1164523.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1164523.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon21) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1218297.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1218297.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon22) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1220296.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1220296.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}

if ($my_layout_rrwfw == icon23) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1230706.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1230706.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon24) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1298775.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_1298775.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon25) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_2106396.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_2106396.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon26) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_3721678.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_3721678.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}



if ($my_layout_rrwfw == icon27) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_pin_logo_2481145.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_pin_logo_2481145.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon28) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_logo_2481087.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_logo_2481087.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon29) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_2552412.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_2552412.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon30) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_2552509.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_2552509.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon31) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_2863469.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_2863469.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon32) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .=  '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_logo_1098998.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_logo_1098998.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}

if ($my_layout_rrwfw == icon33) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_logo_1099046.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_media_logo_1099046.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon34) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_pin_2470547.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_pin_2470547.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon35) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_pin_2552387.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp_social_pin_2552387.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon36) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp-01_1961289.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/iconfinder_Whatsapp-01_1961289.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}


if ($my_layout_rrwfw == icon37) {

        if ( is_singular('product')){

        $url = get_permalink( $item['product_id'] ) ;

        if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
        $is_mobile = false;
    } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
        || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
            $is_mobile = true;


            

    $contents .= '<a  href="https://api.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/Whatsapp-logo.png"/>'." ".$buttonsend.'</a>';
    echo $contents;
    } else {
        $is_mobile = false;
        $aftercontents = '<a  href="https://web.Whatsapp.com/send?phone='.$woo_number1.'&text='.$url." ".'%0A'.$product->get_name().'%0A'.$woo_text.'"><img id="myBtn" style="width:64px" src="'.plugin_dir_url( __FILE__ ).'/assets/img/Whatsapp-logo.png"/>'." ".$buttonsend.'</a>';
      

    

    }

    echo $aftercontents;

    

    

    }

    

}






    

}
add_filter('woocommerce_single_product_summary', 'add_rrwfw',40);



function woo_script(){
    $thejava = '<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>';
echo $thejava;

}
add_action('wp_footer','woo_script',10);



function woo_style(){
    $thestyle = '<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 40%; /* Full width */
  margin:auto;
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>';
echo $thestyle;

}
add_action('wp_head','woo_style',10);

?>