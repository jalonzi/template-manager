<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
//		{ Template Creation Controller }

//		- Author	: 	Joseph Alonzi
//		- Email		:	j.alonzi@alonzi.com
//		- Website	:	http://www.alonzi.com

//		- Date		:	November 14, 2013

//		Description	:	
//			- This creates a new template either from scratch,
//			- default or based on an existing template.
	
// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

class TEMPLATER
{
	
	var $FILE = '../sys/data/7b2a92506dcbe621183cf7b7924588a6a9f73a95__templates.json';
	var $SETTINGS = '../sys/data/7b2a92506dcbe621183cf7b7924588a6a9f73a95__settings.json';
	
	function create($name,$base){
		
		$name = $this->clean_name($name);
		
		$this->create_dir($name,$base);
		$this->add_to_list($name);
		
		return 'New Template Created.<br /><br />';
		
	}
	
	function get_list(){
		
		$data = file_get_contents($this->FILE);
		return '['.$data.']';
	}
	
	function get_active(){
		$data = file_get_contents($this->SETTINGS);
		$data = json_decode($data,true);
		return $data['active'];
	}
	
	function set_active($template){
		$json = array("active"=>$template);
		$json = json_encode($json);
		file_put_contents($this->SETTINGS,$json);
	}
	
	function return_file_data($name,$file){
		
		$json = $this->file_data($name,$file);
		$json = json_decode($json,true);
		
		$file_code = file_get_contents($json['file']);
		
		$json_return = array("ide"=>$json['ide'],"code"=>$file_code);
		$json_return = json_encode($json_return);
		
		return $json_return;
		
	}
	
	function save_file_data($name,$file,$code){
		
		$json = $this->file_data($name,$file);
		$json = json_decode($json,true);
		
		$file_code = file_put_contents($json['file'],$code);
		
	}
	
	private function file_data($name,$file){
		
		$dir = '../lb/'.$name.'/';
		
		switch($file){
			
			case 'header'	:	$file = 'inc/header.html'; $ide = 'html';
			break;
			
			case 'footer'	:	$file = 'inc/footer.html'; $ide = 'html';
			break;
			
			case 'style'	:	$file = 'css/styles.css'; $ide = 'css';
			break;
			
			case 'js'		:	$file = 'js/actions.js'; $ide = 'javascript';
			break;	
			
		}
		
		$return_array = array("file"=>$dir.$file,"ide"=>$ide);
		$return_array = json_encode($return_array);
		
		return $return_array;
	}
	
	private function clean_name($name){
		
		$replace_array = array(		'"',"'","-","?","!","&","$","#","*","(",")","/","%",
									"@","+","=","`",",",".","<",">",";",":","{","}","]",
									"[","|","~"
		);
		
		$name = str_replace($replace_array,'',$name);
		$name = str_replace(' ','_',$name);
		$name = strtolower($name);
		
		return $name;
		
	}
	
	private function add_to_list($name){
		
		$raw_data = file_get_contents($this->FILE);
		
		$json_data = json_decode('['.$raw_data.']',true);
		$id = count($json_data);
		
		$data = $raw_data.', { "'.$id.'" : "'.$name.'" }';
		
		fopen($this->FILE, 'w');
		file_put_contents($this->FILE,$data);
		
	}
	
	private function create_dir($name,$base){
		
		if($base=='new'){
				
			mkdir('../lb/'.$name,0777);
			mkdir('../lb/'.$name.'/css',0777);
			mkdir('../lb/'.$name.'/js',0777);
			mkdir('../lb/'.$name.'/inc',0777);
		
			fopen('../lb/'.$name.'/inc/header.html','w');
			fopen('../lb/'.$name.'/inc/footer.html','w');
			fopen('../lb/'.$name.'/css/styles.css','w');
			fopen('../lb/'.$name.'/js/actions.js','w');
				
		}else {
			
			$this->copy_dir('../lb/'.$base,'../lb/'.$name);
			
		}
	}
	
	private function copy_dir($src,$dst) { 
		$dir = opendir($src); 
		@mkdir($dst); 
		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' )) { 
				if ( is_dir($src . '/' . $file) ) { 
					$this->copy_dir($src . '/' . $file,$dst . '/' . $file); 
				} 
				else { 
					copy($src . '/' . $file,$dst . '/' . $file); 
				} 
			} 
		} 
		closedir($dir); 
	} 

}


?>