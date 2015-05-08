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
//			- This builds out the "active" template.
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

class TEMPLATE
{
	
	var $DIR = 'lb/';
	var $SETTINGS = 'sys/data/7b2a92506dcbe621183cf7b7924588a6a9f73a95__settings.json';
	
	function compile($page_html){
		
		$settings = file_get_contents($this->SETTINGS);
		$json = json_decode($settings,true);
		$active_tmp = $this->DIR.$json['active'];
		
		$compile_layout = $this->tmp_header($active_tmp).$page_html.$this->tmp_footer($active_tmp);
		echo $compile_layout;
		
	}
	
	private function tmp_header($file){
		
		$tmp_html = (file_get_contents($file.'/inc/header.html'));
		return $tmp_html;
		
	}
	
	private function tmp_footer($file){
		
		$tmp_html = (file_get_contents($file.'/inc/footer.html'));
		return $tmp_html;
		
	}

}


?>