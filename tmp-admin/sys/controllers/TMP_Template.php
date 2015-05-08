<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Template Controller }

//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013

//		Description	:	
//			- This builds out the admin layout template.
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

class TEMPLATE
{
	
	function compile($title,$page_html){
		
		$compile_layout = $this->tmp_header($title).$page_html.$this->tmp_footer();
		echo $compile_layout;
		
	}
	
	
	private function tmp_header($title){
		
		$tmp_html = (

'<!DOCTYPE HTML> 
<html>
<head>
						
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
						
	<title>[ ADMIN ] - Simple Dynamic Template System - '.$title.'</title>
	
	<link rel="stylesheet" href="lb/css/styles.css" />
	
	<script type="text/javascript" src="lb/js/jquery/2.0.3.min.js"></script>
	<script type="text/javascript" src="lb/js/ace/ace.js"></script>
						
</head>
						
<body>

	<div id="header">
		<div id="header-left">Admin Portal</div>
		<div id="header-right" class="button"><a href="logout.php">Log Out</a></div>
	</div>
	
	<div id="navigation">
		<div class="nav"><a href="index.php">Dashboard</a></div>
		<div class="nav"><a href="templates-new.php">Create New Template</a></div>
		<div class="nav"><a href="templates.php">Edit Templates</a></div>
	</div>
	
	<div id="content">

'					);
		
		return $tmp_html;
		
	}
	
	private function tmp_footer(){
		
		$tmp_html = (

'
	</div>

</body>
</html>'

					);
		
		return $tmp_html;
		
	}

}


?>