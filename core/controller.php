<?php
class Controller {
	var $vars=array();
	var $layout='default';
	function __construct(){
		if(isset($this->models)){
			foreach($this->models as $v){
				$this->loadModel($v);
			}
		}
	}
	
	function set($d){
		$this->vars=array_merge($this->vars,$d);
		}
	function loadModel($name){
	
		require_once(ROOT.'/models/'.strtolower($name).'.php');
		$this->$name = new $name();
	
	}
	function render($filename){
		ob_start();
		extract($this->vars);
		require(ROOT.'/views/'.get_class($this).'/'.$filename.'.php');
		$this->loadModel('Message');
		$m=count($this->Message->find());
		$content_for_layout= ob_get_clean();
		if($this->layout==false)
		{
			echo $content_for_layout;
		}else{
			require(ROOT.'/views/'.'layout'.'/'.$this->layout.'.php');
			
		}
	}
}
?>