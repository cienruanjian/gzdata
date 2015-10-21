<?php

class Util {
	/**
	 * 发送短信
	 * Enter description here .
	 * @param unknown_type $mobile        	
	 * @param unknown_type $content        	
	 */
	static public function sendSMS($mobile, $content) {
		import ( "Home.Util.Nusoap" );
		
		$client = new \nusoap_client ( 'http://106.ihuyi.com/webservice/sms.php?WSDL', 'wsdl' );
		
		$err = $client->getError ();
		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
		}
		
		$client->soap_defencoding = 'UTF-8';
		$client->decode_utf8 = false;
		$client->xml_encoding = 'UTF-8';
		$parameters = array (
				'account' => 'cf_qdnz',
				'password' => 'welcome2013-',
				'content' => $content,
				'mobile' => $mobile 
		);
		
		return $client->call ( 'Submit', $parameters );
	}
}