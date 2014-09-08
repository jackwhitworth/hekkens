<?php
function mwpl_custom_login_functions() {
	//$enable_custom_login = get_option('mwpl_enable_custom_login');
	//if($enable_custom_login) { mwpl_custom_login_enabled(); }
	mwpl_custom_login_enabled();
}

function mwpl_custom_login_enabled() {
	$custom_css = MWPL_PLUGIN_URL.'css/memphis-wp-login.php';
	$custom_javascript = MWPL_PLUGIN_URL.'javascript/mwpl.functions.js';
	/*
	wp_enqueue_script("jquery");
	wp_register_script('mwpl_javascript', $custom_javascript, "jquery");
	wp_enqueue_script( 'mwpl_javascript');
	wp_register_style('mwpl_style_sheet', $custom_css);
	wp_enqueue_style( 'mwpl_style_sheet');
	//wp_head();
	*/
	?>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?php echo $custom_javascript; ?>" type="text/javascript"></script>
	<link href="<?php echo $custom_css; ?>" rel="stylesheet" type="text/css">
	<script> jQuery(document).ready(function(){ mwpl_Edit_Login('<?php echo get_option('mwpl_logo_link'); ?>','<?php echo get_option('mwpl_logo_title'); ?>','<?php echo get_option('mwpl_custom_message'); ?>','<?php echo get_option('mwpl_custom_message_alert'); ?>'); });</script><?php
?>

<?php
}
?>