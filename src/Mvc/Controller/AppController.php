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
//		echo "<pre>"; print_r($data); die;
        include PAGE_PATH.'/thank_you.php';
		die;
	}
    
    public function login() {
		include PAGE_PATH.'/login.php';
		die;
	}
    public function user_dashboard() {
		include PAGE_PATH.'/user_dashboard.php';
		die;
	}
     public function doctor_dashboard() {
		include PAGE_PATH.'/doctor_dashboard.php';
		die;
	}
     public function admin_dashboard() {
		include PAGE_PATH.'/admin_dashboard.php';
		die;
	}
    
   
}
