<?php

namespace Application\Views;
use Application\Libs\StaticView;

class HomeView extends StaticView {
	public function __construct() {
		parent::__construct("home.tpl");
		parent::assign("name", "Ned");
		parent::display();
	}
}