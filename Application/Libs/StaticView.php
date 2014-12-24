<?php

namespace Application\Libs;

abstract class StaticView {
	private $template;
	private $smarty;
	
	public function __construct($template) {
		$this->template = $template;
		$this->smarty = $this->newSmartyInstance();
	}
	
	private function newSmartyInstance() {
		require_once 'Application/Libs/SmartyLibs/Smarty.class.php';
		
		$tempSmarty = new \Smarty();
		$tempSmarty->template_dir = "Public/smarty/templates/";
		$tempSmarty->compile_dir  = "Public/smarty/templates_c/";
		$tempSmarty->config_dir   = "Public/smarty/configs/";
		$tempSmarty->cache_dir    = "Public/smarty/cache/";
		$tempSmarty->caching 	  = true;
		$tempSmarty->cache_lifetime = 120;
		
		return $tempSmarty;
	}
	
	public function assign($key, $value) {
		$this->smarty->assign($key, $value);
	}
	
	public function display() {
		$this->smarty->display($this->template);
	}
}