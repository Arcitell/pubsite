

<?php  
	if(isset($_POST))
	{
		$name=$_POST['full_name'];
		$email=$_POST['email_id'];
		$phone=$_POST['phone_number'];
		$message=$_POST['message'];
	



		/*email to admin*/
		$data=$_POST;

		$to ="sales@arcitell.com";
		$subject = "New Inquiry";

		$message = "Hello Admin,";
		$message.= "\r\n"."\r\n"."You got a new message. Below are the details please go through it.";
		$message.="\r\n"."\r\n"."Details:-";

		foreach ($data as $key => $value) 
		{
		    $message.="\r\n".str_replace('_',' ',$key) . ":- ".$value;
		    
		}

		$message.="\r\n"."\r\n"."Thank You.";
		$message.="\r\n"."Arcitell";

		$from="-f".$_POST['email_id'];
		mail($to,$subject,$message,null,$from)
			
		/*email to user*/

		$data=$_POST;

		$to =$_POST['email_id'];
		$subject = "Thanks for contacting us";

		$message = "Hello".$_POST['full_name'];
		$message.= "\r\n"."\r\n"."Thanks for conting us";
		$message.= "\r\n"."\r\n"."We will reach you back as soon as possible";

		$message.="\r\n"."\r\n"."Thank You.";
		$message.="\r\n"."Arcitell";

		$from="-f sales@arcitell.com";

		mail($to,$subject,$message,null,$from)
		echo json_encode(array('error'=>'','message'=>'Thank you for your response, we\'ll contact you as soon as possible'));
	}
	else
	echo json_encode(array('error'=>'1','message'=>'unable to process your request!'));


?>
