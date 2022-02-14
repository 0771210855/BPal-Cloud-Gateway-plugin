<?php 
/*
Plugin Name: BPal Cloud Gateway
Description: <strong>Installation</strong> Open the BPal cloud plugin in the plugin editor. In the process directory open BPalGateway file and paste the API key you are provided with. Save and close then activate the plugin. Use the Shortcode block to position the BPal collections form on your page or section.USE: <strong>[mtn_mobile_money_collection]</strong>for MTN , <strong>[airtel_mobile_money]</strong>for airtel.
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

