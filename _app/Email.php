<?php
	
	namespace Notification\Email;
	
	use PHPMailer\PHPMailer\PHPMailer;
	
	class Email
	{
		public function __construct()
		{
			$email = new PHPMailer;
		}
		
		public function sendEmail()
		{
			
			echo "Email enviado!";
		}
	}