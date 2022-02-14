<?php
wp_enqueue_style('custom-style', plugins_url( 'styles.css', __FILE__ ), array(),'all');

function form_include_mtn()
{
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$actual_link = explode("?", $actual_link)[0];
    require_once('forms_header_footer.php');	
	

	$content = '';

	$content .= '<div class="continer">';
	$content .= __form_header(); 


	$content .= '<form class="form-style-4" action="'.plugin_dir_url( __FILE__ ) . '../process/bpal_collections.php" method="post">';
	
	$content .= '<input type="hidden" name="redirect_url" value="'.$actual_link.'"   />';

	$content .= '<div class="service"><img src=" '.plugin_dir_url(__FILE__).'mtn.png" alt=""></div>';
	if(isset($_GET['message'])){		 
		 $content .= '<div class="message">'.$_GET["message"].'</div>';
			}

	$content .= '<label for="field1">';
	$content .= '<span>Enter Amount</span><input type="text" name="amount"  />';
	$content .= '</label>';
	$content .= '<label for="field2">';
	$content .= '<span>Enter Phone</span><input type="text" name="phone"  />';
	$content .= '</label>';
	$content .= '<label for="field3">';
	$content .= '<span>Enter Name</span><input type="text" name="name"  />';
	$content .= '</label>';
	$content .= '<label for="field4">';
	$content .= '<span>Enter Reason</span><input type="text" name="reason" />';
	$content .= '</label>';
	$content .= '<label>';
	$content .= '<span> </span><input type="submit" name="form_mtn_mobile_money" value="SEND REQUEST" />';
	$content .= '</label>';
	$content .= '</form>';

	 $content.=__form_footer();

	 $content .= '</div>';
	return $content;


}



