<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Front-end - Page Compiler }
//
//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

include('sys/controllers/TMP_Template.php');
$template = new TEMPLATE();
$template->compile(__pagehtml);

?>