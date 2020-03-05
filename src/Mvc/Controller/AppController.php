<?php

namespace Mvc\Controller;

class AppController {
	public function home() {
		include PAGE_PATH.'/home.php';
		die;
	}

	public function register() {
		include PAGE_PATH.'/register.php';
		die;
	}

	public function about() {
		include PAGE_PATH . '/about_us.php';
		die;
	}

	public function register_form() {
		include PAGE_PATH.'/register_submit.php';
		die;
	}
}
