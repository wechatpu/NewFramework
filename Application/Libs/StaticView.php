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
		$smarty = new Smarty();
		$smarty->template_dir = "Public/smarty/templates/";
		$smarty->compile_dir  = "Public/smarty/templates_c/";
		$smarty->config_dir   = "Public/smarty/configs/";
		$smarty->cache_dir    = "Public/smarty/cache/";
	}
	
	public function assign($key, $value) {
		$this->smarty->assign($key, $value);
	}
	
	public function display() {
		$this->smarty->display($this->template);
	}
}