<?php
class FDAPlugin extends MantisPlugin {
 
	function register() {
		$this->name        = 'FDA';
		$this->description = lang_get( 'FDA_description' );
		$this->version     = '2.01';
		$this->requires    = array('MantisCore'       => '2.0.0',);
		$this->author      = 'Cas Nuy';
		$this->contact     = 'Cas-at-nuy.info';
		$this->url         = 'http://www.nuy.info';
	}

	function init() { 
		event_declare('EVENT_FDA_FORM1');
		plugin_event_hook('EVENT_FDA_FORM1', 'Check_PWD1');
		event_declare('EVENT_FDA_FORM2');
		plugin_event_hook('EVENT_FDA_FORM2', 'Check_PWD2');
	}


	function Check_PWD1(){
		include 'plugins/FDA/pages/check1.php';
	}
	function Check_PWD2(){
		include 'plugins/FDA/pages/check2.php';
	}

}
