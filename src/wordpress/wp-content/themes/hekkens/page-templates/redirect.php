<?php
/*
Template Name: Collection - Redirect
*/

$subpages = get_pages(array('child_of' => $post->ID, 'post_status' => 'publish', 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'hierarchical' => 0));

if (!is_null($subpages) && count($subpages) > 0) {

switch(strtolower($post->post_title)) {
default:
$subsubpage = '';
break;
}

// var_dump($subpages[0]->post_title);
// die();

// Permanent 301 Redirect via PHP
// echo "redirecting to: " . get_page_link($subpages[0]->ID) . 'campaign/';
header("HTTP/1.1 301 Moved Permanently");
header("Location: " . get_page_link($subpages[0]->ID) . $subsubpage);
exit();
}

?>
<html>
<body>
Could not find the latest collection!
</body>
</html>