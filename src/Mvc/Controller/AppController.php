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

	public function register_form($data) {
		echo "<pre>"; print_r($data); die;
		die;
		//include PAGE_PATH.'/thank_you.php';
	}
}
