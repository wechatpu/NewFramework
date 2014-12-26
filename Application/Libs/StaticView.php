<?php
/**
 * Static view creates new smarty object
 * handles the template engine
 * @author Henrik
 */
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
		$tempSmarty->template_dir   = SMARTY_TEMPLATE_DIR;
		$tempSmarty->compile_dir    = SMARTY_TEMPLATE_C_DIR;
		$tempSmarty->config_dir     = SMARTY_CONFIG_DIR;
		$tempSmarty->cache_dir      = SMARTY_CACHE_DIR;
		$tempSmarty->caching 	    = SMARTY_USE_CACHE;
		$tempSmarty->cache_lifetime = SMARTY_CACHE_LIFETIME;
		
		return $tempSmarty;
	}
	
	public function assign($key, $value) {
		$this->smarty->assign($key, $value);
	}
	
	public function display() {
		$this->smarty->display($this->template);
	}
}