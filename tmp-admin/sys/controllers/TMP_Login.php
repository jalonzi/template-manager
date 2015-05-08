<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Login Controller }

//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013

//		Description	:	
//			- This is the main login controller for the admin area.
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

class LOGIN
{
	
	function __construct(ENCRYPT $encrypt){
		$this->ENCRYPT = $encrypt;	
	}
	
	public function check_login($user,$pass){
		
		$user_check = $this->data_check($user,__tmpuser,__s1,__s2,__s3);
		if($user_check=='false'){
			$error=1;
		}
		
		$pass_check = $this->data_check($pass,__tmppass,__s1,__s2,__s3);
		if($pass_check=='false'){
			$error=1;
		}
		
		if($error==1){
			$return = 'Username or Password Incorrect';
		}
		return $return;
		
	}

	private function data_check($object,$match,$s1,$s2,$s3){
		
		$post_object = $this->ENCRYPT->encrypt_string($object,$s1,$s2,$s3);
		
		if($post_object!=$match){
			$return = 'false';
		}
		
		return $return;
		
		
	}

}


?>