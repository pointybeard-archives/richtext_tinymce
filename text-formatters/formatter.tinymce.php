<?php

	Class formattertinymce extends TextFormatter{
		
		function about(){
			return array(
						 'name' => 'Rich Text (TinyMCE)',
						 'version' => '1.0',
						 'release-date' => '2008-03-25',
						 'author' => array('name' => 'Symphony Team',
										   'website' => 'http://www.symphony21.com',
										   'email' => 'team@symphony21.com')
				 		);
		}
				
		function run($string){
            return str_replace('&nbsp;', '&#160;', $string);
		}		
		
	}
	
