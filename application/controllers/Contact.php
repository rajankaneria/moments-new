<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{	
		$headerData = array(
			"pageTitle" => "Contact",
			"stylesheet" => array("contact.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function contactUs(){
		  	$data=array(
		  		"full_name"=>$_POST["full_name"],
		  		"email"=>$_POST["email"],
		  		"mobile"=>$_POST["mobile"],
		  		"message"=>$_POST["message"]
		  	);		  	
		  	$this->load->model("admin_model");
		  	$this->admin_model->contact($data);

		  	/*====for mail============*/
		  	/*$to = "webservices.intelliworkz@gmail.com";
			$subject = "Contact Inquiry";

			$message ="
			<body><div style= height:800px; width:99%;margin-top:50px;>
				
				<table height=200px width=40%>

			   <tr><td>Name:</td><td>Rupal</td></tr> 
			  
			   <tr><td>Phone:</td><td>992483421</td></tr>
			    <tr><td>E-Mail:</td><td>baradrupal92@gmail.com</td></tr>
			        <tr><td>Services:</td><td>good services</td></tr>
			    <tr><td>message:</td><td>For Inqiiry</td></tr>
			    </table></div></body>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <webservices.intelliworkz@gmail.com>' . "\r\n";
			//$headers .= 'Cc: info@delightholidays.co.in' . "\r\n";
			mail($to,$subject,$message,$headers);*/


			error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

			/*set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
			require_once "Mail.php";

			$host = "ssl://smtp.gmail.com";
			$username = "webservices.intelliworkz@gmail.com";
			$password = "Intelli@1234";
			$port = "465";
			$to = "webservices.intelliworkz@gmail.com";
			$email_from = "webservices.intelliworkz@gmail.com";
			$email_subject = "Mail Test: " ;
			$email_body = "Testing...." ;
			$email_address = "webservices.intelliworkz@gmail.com";

			$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
			$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
			$mail = $smtp->send($to, $headers, $email_body);


			if (PEAR::isError($mail)) {
			echo("<p>" . $mail->getMessage() . "</p>");
			} else {
			echo("<p>Message successfully sent!</p>");
			}*/



			require_once(base_url.'PHPMailer_v5.1/class.phpmailer.php'); //library added in download source.
		    $msg  = 'Hello World';
		    $subj = 'test mail message';
		    $to   = 'webservices.intelliworkz.gmail.com';
		    $from = 'webservices.intelliworkz.gmail.com';
		    $name = 'Rupal Barad';

		    echo smtpmailer($to,$from, $name ,$subj, $msg);

		    function smtpmailer($to, $from, $from_name = 'Example.com', $subject, $body, $is_gmail = true)
	   		 {
		        global $error;
		        $mail = new PHPMailer();
		        $mail->IsSMTP();
		        $mail->SMTPAuth = true; 
		        if($is_gmail)
		        {
		            $mail->SMTPSecure = 'ssl'; 
		            $mail->Host = 'smtp.gmail.com';
		            $mail->Port = 465;  
		            $mail->Username = 'webservices.intelliworkz.gmail.com';  
		            $mail->Password = 'Intelli@1234';   
		        }
		        else
		        {
		            $mail->Host = 'smtp.mail.google.com';
		            $mail->Username = 'webservices.intelliworkz.gmail.com';  
		            $mail->Password = 'Intelli@1234';
		        }
		        $mail->IsHTML(true);
		        $mail->From="baradrupal92@gmail.com";
		        $mail->FromName="barad Rupal";
		        $mail->Sender=$from; // indicates ReturnPath header
		        $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers
		        $mail->AddCC('cc@site.com.com', 'CC: to site.com');
		        $mail->Subject = $subject;
		        $mail->Body = $body;
		        $mail->AddAddress($to);
		        if(!$mail->Send())
		        {
		            $error = 'Mail error: '.$mail->ErrorInfo;
		            return true;
		        }
		        else
		        {
		            $error = 'Message sent!';
		            return false;
		        }
		    }
			
	}

		  
}
