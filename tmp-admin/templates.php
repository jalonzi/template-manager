<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Admin Area - Templates }
//
//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

// -------------------------------------- //
// -------------------------------------- //
/*
	Get Template List DATA
*/
// -------------------------------------- //
// -------------------------------------- //
include('sys/controllers/TMP_TemplateCreate.php');
$templater = new TEMPLATER();

$template_list = $templater->get_list();
$template = json_decode($template_list,true);
$count = count($template);

for($i=0;$i<$count;$i++){

	$template_items .= ('
		<div class="template-item button">
			<a href="templates-edit.php?id='.$i.'">'.$template[$i][$i].'</a>
		</div>
	');	
	
}

// -------------------------------------- //
// -------------------------------------- //
/*
	Current Page HTML
*/
// -------------------------------------- //
// -------------------------------------- //
$page_html = (' 

		<h1>Templates</h1>
		
		<span style="margin-left:15px;"><b>Current Active Template:</b> <i>"'.$templater->get_active().'"</i> - <a href="templates-active.php">Change</a></span>
		
		<div id="template-block">
			'.$template_items.'
		</div>

');


// -------------------------------------- //
// -------------------------------------- //
/*
	Compile the Page.
*/
// -------------------------------------- //
// -------------------------------------- //

define('__pagehtml',$page_html);
include('sys/core/TMP_Boot.php');

// -------------------------------------- //
// -------------------------------------- //

?>