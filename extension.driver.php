<?php

	Class extension_richtext_tinymce extends Extension{

		public function about(){
			return array('name' => 'Formatter: Rich Text (TinyMCE)',
						 'version' => '1.01',
						 'release-date' => '2009-07-23',
						 'author' => array('name' => 'Symphony Team',
										   'website' => 'http://www.symphony21.com',
										   'email' => 'team@symphony21.com')
				 		);
		}
		
		public function getSubscribedDelegates(){
			return array(
						array(
							'page' => '/backend/',
							'delegate' => 'ModifyTextareaFieldPublishWidget',
							'callback' => 'modifyTextarea'
						),
						
			);
		}
		
		public function modifyTextarea($context){
			if($context['field']->get('formatter') != 'tinymce') return;
			
			
			if(!defined('__TINYMCE_SCRIPTS_IN_HEAD__') || !__TINYMCE_SCRIPTS_IN_HEAD__){
				define_safe('__TINYMCE_SCRIPTS_IN_HEAD__', true);
			
				Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/lib/tiny_mce.js', 200);
				Administration::instance()->Page->addScriptToHead(URL . '/extensions/richtext_tinymce/assets/applyMCE.js', 210);
			}
			
			$context['textarea']->setAttribute('id', trim($context['textarea']->getAttribute('id') . ' ' . $context['field']->get('element_name')));
				
		}
		
		
	}

