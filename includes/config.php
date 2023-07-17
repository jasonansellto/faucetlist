<?php

// Main website configuration options

$site_config = array(
	'website_url' => 'http://emberthemes.net/demo/faucetlist',
	'website_name' => 'Faucet List',
	'default_title' => 'Faucet List',
	'default_description' => 'Find the best bitcoin faucets',
	'default_image' => 'img.png',
	'faucetlist_api' => 'true'
	);

	// Addresses registered with faucethub.io

	$ref = array(
		'BTC' => '15L7a3M82QTNtP9zfdNQV24NZQti3iREsq',
		'LTC' => 'LQWaDEHGaKbBRR6XeYZGzMqcuD3nXxK7Ce',
		'DOGE' => 'D6vDHAQs2DCpmBwBDyYmNq22VkskYM2ofJ',
		'BLK' => 'BFbGJd337MMd9EFn6dukg2XMpvENgpMAoZ',
		'DASH' => 'XoWTPAtENCUVHjr2SKrxE54XXWgxCLSJEr',
		'PPC' => 'PFY3ZjQBhDXxP52EZ8EM4Zpmw5RcSkTywP',
		'XPM' => 'AJYnAy1EPU7HT3SUDCMyVdx2ebcMBCiaE3',
        'BCH' => '155tn1eWJryndBTUvFJCea3TMDYkHAwEco'
		);

// Google services config

$google = array(
	'webmaster_tools' => 'unique id'
	);

// Database Configuration


//////////////////////////////////////////////////////////////////////////
// Important stuff, don't change unless you know what you are doing!!! //
////////////////////////////////////////////////////////////////////////

// Allow getting the version number for support reasons

if(isset($_GET['version'])) {
	echo 'v1.1';
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
