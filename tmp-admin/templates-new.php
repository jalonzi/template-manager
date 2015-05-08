<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Admin Area - Templates (New) }
//
//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

include('sys/controllers/TMP_TemplateCreate.php');
$templater = new TEMPLATER();
	
// -------------------------------------- //
// -------------------------------------- //
/*
	If New Template POST is set.
*/
// -------------------------------------- //
// -------------------------------------- //
if(isset($_POST['tmp_name'])){
	
	$tmp_name = $_POST['tmp_name'];
	$tmp_base = $_POST['tmp_base'];

	$message = $templater->create($tmp_name,$tmp_base);
	
	
}

$template_list = $templater->get_list();
$template = json_decode($template_list,true);
$count = count($template);

for($i=0;$i<$count;$i++){

	$template_options .= '<option value="'.$template[$i][$i].'">'.$template[$i][$i].'</option>';	
	
}


// -------------------------------------- //
// -------------------------------------- //
/*
	Current Page HTML
*/
// -------------------------------------- //
// -------------------------------------- //
$page_html = (' 

		<h1>Create New Template</h1>
		
		'.$message.'
		
		<form name="new-template" action="templates-new.php" method="post">
			<div class="input-form-item">
				<div class="input-form-label">Template Name:</div>
				<input type="text" name="tmp_name" />
			</div>
			<div class="input-form-item">
				<div class="input-form-label">Based On:</div>
				<select class="input-form-select" name="tmp_base">
					<option value="new">Blank Template</option>
					'.$template_options.'
				</select>
			</div>
			
			<button class="submit-btn">CREATE NEW TEMPLATE</button>
			
		</form>

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