<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Admin Area - Logout }
//
//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

session_start();
session_destroy();

header('location: login.php');
exit();

?>