<?php
/**
 * HomeView class using StaticView as a super class.
 * StaticView creates a new Smarty object to handle the template engine
 */
namespace Application\Views;
use Application\Libs\StaticView;

class HomeView extends StaticView {
	public function __construct($template) {
		parent::__construct($template);
	}
}