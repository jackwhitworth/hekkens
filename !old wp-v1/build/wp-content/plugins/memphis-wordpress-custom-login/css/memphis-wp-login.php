<?php
header("Content-type: text/css; charset: UTF-8");
$days_to_cache = 10;
header('Expires: '.gmdate('D, d M Y H:i:s',time() + (60 * 60 * 24 * $days_to_cache)).' GMT');
//$doc_root = $_SERVER['DOCUMENT_ROOT'];
//DOC ROOT FIX FOR SERVERS WITH MULTI DOMIANS
$raw_path = $_SERVER['SCRIPT_FILENAME'];
$explode_path = explode('/wp-content/', $raw_path);
$doc_root = $explode_path[0];
//echo $doc_root;
require( $doc_root.'/wp-load.php' );

//$str = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/wp-login.php');
if(get_option('mwpl_enable_custom_login')) {
    $custom_bgcolor = get_option('mwpl_custom_bgcolor'); //My Favorite Color is #ABDEBE
    $custom_textcolor = get_option('mwpl_custom_textcolor');
    $custom_linkcolor_normal = get_option('mwpl_custom_linkcolor_normal');
    $custom_linkcolor_hover = get_option('mwpl_custom_linkcolor_hover');
    $enable_custom_bgimage = get_option('mwpl_enable_form_bg');
    if($enable_custom_bgimage) {
		$upload_dir = wp_upload_dir();
		//if(is_ssl() && !preg_match('/https/',$upload_dir['baseurl'])) $upload_dir['baseurl'] = preg_replace('/http/','https',$upload_dir['baseurl']);
		$custom_bgimage = get_option('mwpl_custom_bgimage');
		//$custom_bgimage = str_replace("\'","\"",$custom_bgimage);
		$custom_bgimage = unserialize($custom_bgimage);
		if(count($custom_bgimage) > 0) {
			$custom_bgimage['imagename'] = $upload_dir['baseurl'].$custom_bgimage['imagename'];
			$custom_bgimage_left = get_option('mwpl_bgimage_left');
			$custom_bgimage_top = get_option('mwpl_bgimage_top');
		} else {
			$custom_bgimage['imagename'] = '';
			$custom_bgimage_left = get_option('mwpl_bgimage_left');
			$custom_bgimage_top = get_option('mwpl_bgimage_top');
		}
    }
    $custom_width = get_option('mwpl_form_width');
	if($custom_width == null) $custom_width = 30;
    //Added in Version 1.2.5
    $remove_text_shadow = get_option('mwpl_remove_text_shadow');
    $form_bg_color = get_option('mwpl_form_bg_color');
	$form_font_size = get_option('mwpl_font_size');
    $form_border_color = get_option('mwpl_form_border_color');
    $form_border_radius = get_option('mwpl_form_border_radius');
    $form_box_shadow_offset_right = get_option('mwpl_form_box_shadow_right');
    $form_box_shadow_offset_top = get_option('mwpl_form_box_shadow_top');
    $form_box_shadow_softness = get_option('mwpl_form_box_shadow_softness');
    $form_box_shadow_color = get_option('mwpl_form_box_shadow_color');
	$custom_position_top = get_option('mwpl_form_position_top');
}



$hide_top_bar = get_option('mwpl_hide_top_bar');
//Added in Version 1.2.5
$hide_lost_password = get_option('mwpl_hide_lost_password');
$hide_login_messages = get_option('mwpl_hide_login_messages');

if(get_option('mwpl_enable_custom_login')) {
?>
html, body {height: 80%;  width: 100%; padding: 0; margin: 0; <?php echo $custom_bgcolor == null ? "background: #FBFBFB !important;" : "background: ".$custom_bgcolor; ?> !important;}
#login { <?php echo $custom_width == 30 ? "" : "width: ".$custom_width.'px;'; ?> }
#loginform, #registerform, #lostpasswordform { background: <?php echo $form_bg_color; ?>;  <?php echo $form_border_color == "" ? '' : 'border: 1px solid '.$form_border_color;?>; box-shadow: <?php echo $form_box_shadow_offset_right == null ? '0' : $form_box_shadow_offset_right;?>px <?php echo $form_box_shadow_offset_top == null ? '0' : $form_box_shadow_offset_top;?>px <?php echo $form_box_shadow_softness == null ? '10' : $form_box_shadow_softness;?>px <?php echo $form_box_shadow_color == null ? 'rgba(200,200,200, 0.7)' : $form_box_shadow_color;?>;border-radius: <?php echo $form_border_radius; ?>px; }
#login h1 { position: relative; left: <? echo $custom_bgimage_left ?>px; top: <?php echo $custom_bgimage_top; ?>px; }
#login h1 a { <?php echo $custom_bgimage['imagename'] == "" ? '' : 'background: url('.$custom_bgimage['imagename'].') no-repeat;';?> margin:10px 10px; padding:0; width: <?php echo $custom_bgimage[width];?>px !important; height: <?php echo $custom_bgimage[height];?>px !important; background-size: <?php echo $custom_bgimage[width];?>px <?php echo $custom_bgimage[height];?>px;}
#login label, .login #nav, #reg_passmail, #loginform p { color: <?php echo $custom_textcolor; ?>; text-shadow: none !important;}
.login #nav a, .login #backtoblog a {<?php echo $remove_text_shadow == 1 ? 'text-shadow: none !important;' : ''; echo $custom_linkcolor_normal != '' ? 'color: '.$custom_linkcolor_normal.' !important;' : ''; ?> !important; }
.login #nav a:hover, .login #backtoblog a:hover { <?php echo $custom_linkcolor_hover == '' ? "" : "color: ".$custom_linkcolor_hover.' !important;'; ?> }
.mwpl-custom-msg { display: none; width: 60%; position: absolute;  top:10px; left: 20%; text-align: center; padding:10px;  margin:0; clear:both; font-size: 15px; font-family: HelveticaNeue-Light,sans-serif; }
#wp-submit { border: none !important; }
<?php
}
?>
#nav { display: <?php echo $hide_lost_password == 1 ? 'none' : '';?>; }
#backtoblog { display: <?php echo $hide_top_bar == 1 ? 'none' : '';?>; }
.message, #login_error { display: <?php echo $hide_login_messages == 1 ? 'none' : '';?>; }
/* INPUT TEXT HEIGHT FIX */
#user_login, #user_pass { height: 100% !important; <?php if($form_font_size != '') { ?>font-size: <?php echo $form_font_size; ?>px !important; <?php } ?> }
