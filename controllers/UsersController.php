<?php

namespace app\controllers;

use lithium\security\Auth;
use app\models\User;

class UsersController extends \lithium\action\Controller {

	/**
	*	User login
	*/
	public function login(){
		if (Auth::check('blogger', $this->request)){
			return $this->redirect('/');
		}
	}
	
	/**
	*	User log out
	*/
	public function logout() {
		Auth::clear('blogger');
		return $this->redirect('/');
	}
	
	/**
	*	User registration
	*/
	public function register(){
		$user = User::create();
		if ($this->request->data){
			$data = $this->request->data;
			$data['joined'] = mktime();
			unset($data['confirmPassword']);
			if ($user->save($data)){
				return $this->redirect('/');
			}
		}
		return compact('user');
	}
	
	/**
	*	View User Profile
	*/
	public function profile(){
		
	}
}

?>
