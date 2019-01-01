<?php  
	function sendMailAttachment($title, $content, $nTo, $mTo,$file,$filename)
	{
      $nFrom = 'homangtrang.net';
	    $mFrom = 'ddnhell169@gmail.com';  
	    $mPass = 'haiau201';      
	    $mail             = new PHPMailer();
	    $body             = $content;
	    $mail->IsSMTP(); 
	    $mail->CharSet   = "utf-8";
	    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	    $mail->SMTPAuth   = true;                    // enable SMTP authentication
	    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	    $mail->Host       = "smtp.gmail.com";        
	    $mail->Port       = 465;
	    $mail->Username   = $mFrom;  // GMAIL username
	    $mail->Password   = $mPass;               // GMAIL password
	    $mail->SetFrom($mFrom, $nFrom);	    
		$mail->Subject    = $title;
	    $mail->MsgHTML($body);
	    $address = $mTo;
	    $mail->AddAddress($address, $nTo);
	    $mail->AddReplyTo('info@homangtrang.net', 'homangtrang.net');
	    $mail->AddAttachment($file,$filename);
	    if(!$mail->Send()) 
		{
	        return 0;
	    } 
		else 
		{
	        return 1;
	    }
	}
?>