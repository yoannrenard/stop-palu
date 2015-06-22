<?php
class Introduce
{
	
	const STATUS_OFFLINE	= 0;
	const STATUS_ONLINE		= 1;
	
	public static function add($values)
	{
		$return = array(
			'valid' => '',
			'error'	=> array()
		);
		
		extract($values);
		if(!isset($mode) || $mode=='-1')
			$return['error']['mode']		= 'Merci de reseigner la forme d\'adhésion souhaitée';
		if(!isset($lastname) || empty($lastname))
			$return['error']['lastname']	= 'Merci de reseigner votre nom';
		if(!isset($firstname) || empty($firstname))
			$return['error']['firstname']	= 'Merci de reseigner votre prénom';
		if(!isset($email) || empty($email))
			$return['error']['email']		= 'Merci de reseigner votre email';
		if(!isset($origin) || $origin=='-1')
			$return['error']['origin']		= 'Merci de reseigner comment vous nous avez vous connu';
		if(!isset($captcha) || empty($captcha))
			$return['error']['captcha']		= 'Merci de reseigner le captcha';
		if(isset($captcha) && !empty($captcha) && md5(strtoupper($captcha)) !== $_SESSION['captcha'])
			$return['error']['captcha']		= 'Le code recopié sur l\'image est incorrect.';

		if(count($return['error'])==0) {
			self::insert($values);
			self::sendMail($values);
			$return['valid'] = 'Votre demande a bien été enregistrée';
		}
		
		return $return;
	}
	
	public static function insert($values)
	{
		extract($values);
		// insert dans la bdd
		$pdo = MyPDO::getInstance();
		$query = $pdo->prepare('INSERT INTO member(mode, lastname, firstname, email, phone, origin, status, last_modify) VALUES (:mode, :lastname, :firstname, :email, :phone, :origin, :status, NOW());');
		$query->execute(array( 'mode' => $mode, 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $email, 'phone' => $phone, 'origin' => $origin, 'status' => self::STATUS_OFFLINE ));
		$pdo->catchError($query);
	}
	
	public static function sendMail($values)
	{
		//ENVOIE MAIL
		$body = implode('<br/>', $values);
		
		include('class.phpmailer.php');
		// ENvoi d'un mail a l'admin
		$mail = new phpmailer();
		$mail->IsHTML(true);
		$mail->Subject	= 'mail CONTACT';
		$mail->AddAddress("stop-palu@hotmail.fr");
		$mail->AddAddress("webmaster@stop-palu.com");
		$mail->FromName	= 'Site internet';
		$mail->From		= 'no-replay@stop-palu.com';
		$mail->Body		= $body;
		$mail->Send();
		// Envoyer un mail en retour
		$mail = new phpmailer();
		$mail->IsHTML(true);
		$mail->Subject	= 'Stop-palu - Merci pour votre inscription';
		$mail->AddAddress($values['email']);
		$mail->FromName	= 'Stop-palu';
		$mail->From		= 'no-replay@stop-palu.com';
		$mail->Body		= '<p>Merci pour votre inscription. Vous recevrez bientot un autre mail de notre part apr&egrave;s validation de votre dossier.</p><p>L\'&eacute;quipe Stop-palu</p>';
		$mail->Send();
	}

}