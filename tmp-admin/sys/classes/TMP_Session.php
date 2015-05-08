<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Session Class }

//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013

//		Description	:	
//			- The purpose of this class is to check if any sessions
//			- currently exist. If no session exists or if any of the
//			- session data does not match, it will return FALSE.
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

session_start();

class SESSION
{
	
	
	function check($api_key,$sess_key,$remote_ip){
		
		$ip_check = $this->check_match($_SESSION['remote_ip'],$remote_ip);
		
		if($ip_check!='false'){
			
			$key_check = $this->check_match($_SESSION['tmp_key'],$sess_key);
			
			if($key_check!='false'){
				$data='true';
			}else {
				$data='false';
			}
			
		}else {
			$data = 'false';
		}
		return $data;
		
	}
		
		
	private function check_match($object,$match){
		
		if($object!=$match){
			$data='false';
		}
		
		return $data;
		
	}

}


?>