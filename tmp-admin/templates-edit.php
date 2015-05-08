<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Admin Area - Templates - Edit Template }
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

if(isset($_GET['id'])){
	
	$tmp_id = $_GET['id'];
	
	include('sys/controllers/TMP_TemplateCreate.php');
	$templater = new TEMPLATER();
	
	$template_list = $templater->get_list();
	$template = json_decode($template_list,true);
	$template_name = $template[$tmp_id][$tmp_id];
	
	if(isset($_GET['file'])){
		
		$file_data = $_GET['file'];
		
		
		// -------------------------------------- //
		// -------------------------------------- //
		/*
			If POST Request has been made.
		*/
		// -------------------------------------- //
		// -------------------------------------- //
		if(isset($_POST['plugin_code'])){
			
			$code = $_POST['plugin_code'];
			$templater->save_file_data($template_name,$file_data,$code);
			
			$message = 'Saved!';
		}


		$filedata = $templater->return_file_data($template_name,$file_data);
		$filedata = json_decode($filedata,true);
		
		$code = htmlentities($filedata['code']);
		
		$render_html = ($message.'
			
			<div id="plugin-data">
				<div id="plugin-editor" style="position:relative;width:99%;height:450px;background:#222;text-shadow:0 1px 0 #000;">'.$code.'</div>
			</div>
			
			<form name="save_code" method="post" action="templates-edit.php?id='.$tmp_id.'&file='.$file_data.'">
				<textarea id="plugin_code" name="plugin_code" style="display:none">'.$code.'</textarea>
				<button class="submit-btn">SAVE</button>
			</form>
			
			<script>
				var editor = ace.edit("plugin-editor");
									
				editor.setTheme("ace/theme/senicity");
				editor.getSession().setMode("ace/mode/'.$filedata['ide'].'");
				editor.getSession().setUseWrapMode(true);
				editor.setShowPrintMargin(false);
				editor.setReadOnly(false);
									
				var textarea_form = document.getElementById("plugin_code");
				textarea_form.value = editor.getSession().getValue();
											
				$("#plugin-data").keyup(function(){
					textarea_form.value = editor.getSession().getValue();
				});
			</script>
		
		
		
		');
		
	}else {
		$render_html = ('
			<div class="template-item button">
				<a href="templates-edit.php?id='.$tmp_id.'&file=header">header.html</a>
			</div>
			
			<div class="template-item button">
				<a href="templates-edit.php?id='.$tmp_id.'&file=footer">footer.html</a>
			</div>
			
			<div class="template-item button">
				<a href="templates-edit.php?id='.$tmp_id.'&file=style">styles.css</a>
			</div>
			
			<div class="template-item button">
				<a href="templates-edit.php?id='.$tmp_id.'&file=js">actions.js</a>
			</div>
		');	
	}
	
}else {
	
	$render_html = ('No template found.');
	
}

// -------------------------------------- //
// -------------------------------------- //
/*
	Current Page HTML
*/
// -------------------------------------- //
// -------------------------------------- //
$page_html = (' 

		<h1>Edit Template</h1>
		
		<span style="margin-left:15px;"><b>Template Name:</b> <i>"'.$template_name.'"</i></span>
		
		<div id="template-block">
			'.$render_html.'
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