<?php


	$client = new SoapClient('http://www.novinpayamak.com/services/SMSBox/wsdl', array('encoding' => 'UTF-8'));

	$result = $client->Send(
						array(
								'Auth' 	=> array('number' => $number,'pass' => $pass),
								'Recipients' => array($Recipients),
								'Message' => array($Message),
								'Flash' => false
							)
	);

	//Redirect to URL You can do it also by creating a form
	if($result->Status == 1000)
	{
		echo'Sent';
	} else {
		echo'ERR: '.$result->Status;
	}
?>