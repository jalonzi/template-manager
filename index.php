<?php

// ----------------------------------------------------------------- //
// ----------------------------------------------------------------- //

//		Simple Dynamic Template System.
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
	Current Page HTML
    
        - This is temporary; will need to
        - create a controller to read page data.
        
        - Will need to create URL rewrite
        - handlers.
*/
// -------------------------------------- //
// -------------------------------------- //

$page_html = (' 

	<h1>This is the page template.</h1>
	
	<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et 
		erat sapien. Donec blandit lectus vitae orci commodo pharetra. Cras 
		ac pharetra augue. Quisque nisl nisl, molestie vitae nisl at, ultrices 
		feugiat leo. Duis non sem vel leo fringilla iaculis vel sed purus.
		Praesent lacus lectus, euismod et sem eu, gravida viverra ipsum. 
		Aliquam id odio et dui ultrices porttitor. Etiam pulvinar dapibus 
		neque sit amet semper. Donec imperdiet libero nisi, nec sollicitudin 
		lorem lacinia non. Donec accumsan placerat est id auctor. Suspendisse 
		potenti. Morbi eget neque eu velit varius varius. Duis id mattis libero, 
		eu fringilla massa. Aenean suscipit mi quis augue aliquet, nec porttitor
		nibh volutpat. Aliquam volutpat dolor velit, nec ornare magna ultricies vel. </p>

	<p> Pellentesque sodales tortor molestie magna sodales blandit. Quisque ullamcorper 
	nulla ipsum, in viverra dolor accumsan id. Lorem ipsum dolor sit amet, consectetur 
	adipiscing elit. Nam nibh odio, convallis eu sapien at, feugiat cursus libero. Quisque 
	adipiscing justo quis risus auctor hendrerit. Nullam porta lacus quam, a rhoncus metus 
	bibendum vel. Donec posuere magna sed dignissim aliquam. Etiam metus nisl, pellentesque 
	nec nunc quis, pulvinar lobortis nulla.</p>

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