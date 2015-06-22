<?php
class Contact
{
	
	const STATUS_NEW		= 0;
	const STATUS_ARCHIVED	= 1;
	
	public static function add($values)
	{
		$return = array(
			'valid' => '',
			'error'	=> array()
		);
		
		extract($values);
		if(!isset($lastname) || empty($lastname))
			$return['error']['lastname']	= 'Merci de reseigner votre nom';
		if(!isset($firstname) || empty($firstname))
			$return['error']['firstname']	= 'Merci de reseigner votre prénom';
		if(!isset($email) || empty($email))
			$return['error']['email']		= 'Merci de reseigner votre email';
		if(!isset($msg) || empty($msg))
			$return['error']['msg']			= 'Merci de reseigner votre message';
		if(!isset($captcha) || empty($captcha))
			$return['error']['captcha']		= 'Merci de reseigner le captcha';
		if(isset($captcha) && !empty($captcha) && md5(strtoupper($captcha)) !== $_SESSION['captcha'])
			$return['error']['captcha']		= 'Le code recopié sur l\'image est incorrect.';

		if(count($return['error'])==0) {
			self::insert($values);
			self::sendMail($values);
			$return['valid'] = 'Votre mail a bien été envoyé';
		}
		
		return $return;
	}
	
	public static function insert($values)
	{
		extract($values);
		// insert dans la bdd
		$pdo = MyPDO::getInstance();
		$query = $pdo->prepare('INSERT INTO contact(lastname, firstname, email, phone, object, msg, status, last_modify) VALUES (:lastname, :firstname, :email, :phone, :object, :msg, :status, NOW());');
		$query->execute(array( 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $email, 'phone' => $phone, 'object' => $object, 'msg' => $msg, 'status' => self::STATUS_NEW ));
		$pdo->catchError($query);
	}
	
	public static function sendMail($values)
	{
		//ENVOIE MAIL
		$body = implode('<br/>', $values);
		
		include('class.phpmailer.php');
		$mail = new phpmailer();
		$mail->IsHTML(true);
		$mail->Subject	= 'mail CONTACT';
		$mail->AddAddress("stop-palu@hotmail.fr");
		$mail->AddAddress("webmaster@stop-palu.com");
		$mail->FromName	= 'Site internet';
		$mail->From		= 'no-replay@stop-palu.com';
		$mail->Body		= $body;
		$mail->Send();
	}

}