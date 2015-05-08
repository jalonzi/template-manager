<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Admin Area - Templates Active }
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

// -------------------------------------- //
// -------------------------------------- //
/*
	If POST Request has been made.
*/
// -------------------------------------- //
// -------------------------------------- //
if(isset($_POST['tmp_active'])){
			
	$active = $_POST['tmp_active'];
	$templater->set_active($active);
			
	$message = 'Saved!';
}


$template_list = $templater->get_list();
$template = json_decode($template_list,true);
$count = count($template);

for($i=0;$i<$count;$i++){

	if($template[$i][$i]==$templater->get_active()){
		$selected = ' selected';
	}else { 
		$selected = '';
	}
	
	$template_options .= ('
		<option value="'.$template[$i][$i].'"'.$selected.'>'.$template[$i][$i].'</option>
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

		<h1>Change Active Template</h1>
		
		<span style="margin-left:15px;"><b>Current Default:</b> <i>"'.$templater->get_active().'"</i></span>
		
		<div id="template-block">
			<form name="active_template" method="post" action="templates-active.php">
				<div class="input-form-item">
				<div class="input-form-label">Set Active:</div>
				<select class="input-form-select" name="tmp_active">
					'.$template_options.'
				</select>
				<button class="submit-btn">SET ACTIVE</button>
			</form>
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