<?php 
	
	$path = preg_replace('/wp-content.*$/','',__DIR__);

	require_once($path."wp-load.php");
	require_once("BPalGateway.php");


	/*---------------------------------------------------
	|
	|	AIRTEL MONEY
	|*---------------------------------------------------*/
	

	if(isset($_POST['form_airtel_money']))
	{
		
		/* get the data from the fields */
		$amount = sanitize_text_field($_POST['amount']);
		$phone = sanitize_text_field($_POST['phone']);
		$name = sanitize_text_field($_POST['name']);
		$reason = sanitize_text_field($_POST['reason']);
		$redirect_url = sanitize_text_field($_POST['redirect_url']);
		//$serviceId = 1; 
		$serviceId = 2; 
		$tranId = rand(1111,9999);

		

		$message="";

		if(empty($phone) || empty($name) || empty($amount) || empty($reason)) {
			$message = "please fill all the fields";

			
		} else {

			if($phone != str_starts_with($phone, '256')){

				$message ='Phone should start with 256';
			} 

			else if($amount != ['0-9']){
				$message ='Amount should be Numbers';
			}
			else{
			$message = '';
			}
		}



		if($message == ''){
			$bpal = new BPalGateway();		
			//$result = $bpal->CollectFunds($serviceId, $tranId, $amount, $phone, $name, $reason);		
			
			//if($result->status == 1100 || $result->status == 1000){
			if(true){
				$message='Request submited. Please confirm on your phone to complete the transaction.';

			}else{
				//$message = $result->status_desc;
				$message ='Try again';			
			}
		}

		

		wp_redirect($redirect_url.'?message='.$message);		
	}


	/*---------------------------------------------------
	|
	|	MTN MOBILE MONEY
	|*---------------------------------------------------*/


	elseif(isset($_POST['form_mtn_mobile_money']))
	{
		
		/* get the data from the fields */
		$amount = sanitize_text_field($_POST['amount']);
		$phone = sanitize_text_field($_POST['phone']);
		$name = sanitize_text_field($_POST['name']);
		$reason = sanitize_text_field($_POST['reason']);
		$redirect_url = sanitize_text_field($_POST['redirect_url']);
		//$serviceId = 5; 
		$serviceId = 2; 
		$tranId = rand(1111,9999);

		

		$message="";

		if(empty($phone) || empty($name) || empty($amount) || empty($reason)) {
			$message = "please fill all the fields";

			
		} else {

			if($phone != str_starts_with($phone, '256')){

				$message ='Phone should start with 256';
			} 

			else if($amount != ['0-9']){
				$message ='Amount should be Numbers';
			}
			else{
			$message = '';
			}
		}



		if($message == ''){
			$bpal = new BPalGateway();		
			//$result = $bpal->CollectFunds($serviceId, $tranId, $amount, $phone, $name, $reason);		
			
			//if($result->status == 1100 || $result->status == 1000){
			if(true){
				$message='Request submited. Please confirm on your phone to complete the transaction.';

			}else{
				//$message = $result->status_desc;
				$message ='Try again';			
			}
		}

		

		wp_redirect($redirect_url.'?message='.$message);		
	}


?>