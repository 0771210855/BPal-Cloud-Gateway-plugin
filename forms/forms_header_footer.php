<?php


function __form_header(){
	$content = "";

	
	$content .= '<div class="center">';
	$content .= '<img src="'.plugin_dir_url(__FILE__).'favicon.png" alt="">';
	$content .= '</div>';
	
	$content .= '<div class="header">';
	$content .= '<span class="gateway">BPal Cloud Payment Gateway</span>';

	$content .= '</div>';
	

	return $content;
}

function __form_footer(){
	$content = "";
	$content .= '<div class="footer">';
	$content .= '<p>Powered by <a href="http://bpaltech.com" target="_blank" rel="noopener noreferrer"> BPal Technologies</a></p>';

	$content .= '</div>';

	return $content;
}
