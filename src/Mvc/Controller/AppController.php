<?php

namespace Mvc\Controller;

class AppController {
	public function home() {
		include VIEW_PATH.'/home.php';
		die;
	}
}
