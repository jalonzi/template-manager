<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Admin Area - Page Compiler }
//
//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

/*
	
	Check for SESSION, kick out if none exist.

*/
include('sys/classes/TMP_Session.php');
$session = new SESSION();
$sess_chk = $session->check(__apikey,$_SESSION['tmp_key'],sha1($_SERVER['REMOTE_ADDR']));
if($sess_chk=='false'){
	header('location: login.php');
	exit();
}

include('sys/controllers/TMP_Template.php');
$template = new TEMPLATE();
$template->compile('Dashboard',__pagehtml);

?>