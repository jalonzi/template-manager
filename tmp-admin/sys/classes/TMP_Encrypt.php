<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Encryption Class }

//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013

//		Description	:	
//			- The purpose of this class is to encrypt any incoming
//			- data. This will be mainly used for passwords or 
//			- to create unique keys as these encryptions are not
//			- reversable.
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

class ENCRYPT
{
	
	function encrypt_string($string,$s1,$s2,$s3){
		
				
		$data = $this->encrypt_data($string,$s1,$s2,$s3);
		return $data;
		
		
	}
	
	function create_salt($timer){
		
		$salt = sha1(sha1($timer.sha1($timer)));
		return $salt;	
		
	}

	private function encrypt_data($string,$salt1,$salt2,$salt3){
		
		$encrypted = sha1(sha1($salt1).sha1($string.$salt2).sha1($salt2.sha1($salt1).$salt3));
		return $encrypted;
		
	}
	

}


?>