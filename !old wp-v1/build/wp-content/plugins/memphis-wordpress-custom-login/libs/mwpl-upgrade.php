<?php
// UPGRADE SAVED VARIABLES TO NEW FORMAT - VERSION 2.2.4, 2.2.5
//update_option('mwpl_upgrade_225', true);
$images = get_option('mwpl_custom_bgimage_list');
$upgrade224 = get_option('mwpl_upgrade_224');
$upgrade225 = get_option('mwpl_upgrade_225');

//update_option('mwpl_upgrade_224', false);

if($upgrade224 == false) {
	$new_image_array = array();
	$index = 0;
	foreach($images as $key => $value) {
		array_push($new_image_array,array());
		foreach($images[$key] as $k => $v) {
			if($k == 'imageurl') {
				$explode = explode('/',$v);
				$image = $explode[count($explode)-1];
				$new_image_array[$index]['imagename'] = $image;
			} elseif ($k != 'imagepath') $new_image_array[$index][$k] = $v;
		}
		$index++;
	}
	add_action('admin_notices', 'mphs_admin_message_224');
	update_option('mwpl_upgrade_224', true);
	update_option('mwpl_custom_bgimage_list', $new_image_array);
}
if($upgrade225 == false) {
	$upload_dir = wp_upload_dir();
	$new_image_array = array();
	$index = 0;
	foreach($images as $key => $value) {
		//var_dump($value);
		array_push($new_image_array, $value);
		if(!file_exists($upload_dir['basedir'].'/'.$value['imagename']) && preg_match('/mwpl-bgimage/',$value['imagename'])) {
			$explode = explode('-',$value['imagename']);
			$year = substr($explode[2], 0,4);
			$month = substr($explode[2],4,2);
			if(file_exists($upload_dir['basedir'].'/'.$year.'/'.$month.'/'.$value['imagename'])) $new_image_array[$index]['imagename'] = '/'.$year.'/'.$month.'/'.$value['imagename'];
		} elseif(!preg_match('~/~',$value['imagename'])) {
			$new_image_array[$index]['imagename'] = '/'.$value['imagename'];
		}
		$index++;
	}
	add_action('admin_notices', 'mphs_admin_message_224');
	update_option('mwpl_upgrade_225', true);
	update_option('mwpl_custom_bgimage_list', $new_image_array);
}

//update_option('mwpl_upgrade_224', false);

function mphs_admin_message_224() {
	if (current_user_can('manage_options')) {
        ?>
    <div class="updated">
        <p><?php _e( 'Memphis: Background image list has been successfully updated!', 'my-text-domain' ); ?></p>
    </div>
    <?php
    }
}
?>