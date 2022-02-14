<?php 
/*
Plugin Name: BPal Cloud Gateway
Description: <strong>Instructions:</strong> 1) In plugin editor, select BPal Cloud Gateway. 2) Under process directory, open BPalGateway.php and set the api_key by replacing XXXXXXXXXXXXXXXXXXXX with your API key. 3) Click Update File to save the changes. (Remeber to activate the plugin). 4) Use the Shortcode blocks bellow to position the BPal collection form on your page or page section: (i) MTN Mobile Money: <strong>[mtn_mobile_money_collection]</strong>. (ii) Airtel Money: <strong>[airtel_mobile_money]</strong></p>
Version: 1.0
Author: BPal Technologies
url = 'http://bpalcloud.com'

*/


// Airtel money
require_once('forms/forms_airtel_money.php');
 add_shortcode('airtel_money_collection','form_include_airtel'); 


// mtn mobile money
require_once('forms/forms_mtn_mobile_money.php');
add_shortcode('mtn_mobile_money_collection','form_include_mtn');

