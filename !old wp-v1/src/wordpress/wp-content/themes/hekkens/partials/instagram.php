<?php
 
	/**
	* Instagram PHP API
	*
	* @link https://github.com/cosenary/Instagram-PHP-API
	* @author Christian Metz
	* @since 20.06.2012
	*/

	require_once 'instagram.class.php';

	// Initialize class for public requests
	$instagram = new Instagram('6342c0f526eb41baa643d7521382a7ed');

	// Receive AJAX request and create call object
	$user = $_GET['user'];
	$maxID = $_GET['max_id'];
	$clientID = $instagram->getApiKey();

	$call = new stdClass;
	$call->pagination->next_max_id = $maxID;
	$call->pagination->next_url = "https://api.instagram.com/v1/users/{$user}/media/recent?client_id={$clientID}&max_id={$maxID}";

	// Receive new data
	$media = $instagram->pagination($call);

	// Collect everything for json output
	// $images = array();
	$return = array();
	// $tags = array();
	// $date = array();

	foreach ($media->data as $data) {
		$images = $data->images->standard_resolution->url;

		$tag = implode(' #', $data->tags);
		$tags = '#' . $tag;
		$date = date('d M. Y', $data->created_time);

		$return[] = array('src'=>$images , 'tag'=>$tags , 'date'=>$date);
	}

	error_log(print_r($images, true));

	echo json_encode(array(
		'next_id' => $media->pagination->next_max_id,
		'data'  => $return
	));

?>