<?php

class Controller_Base extends Controller_Template{
	
	//removes sidebar from template
	public $template = 'layouts/full_width';

	//
	public function before(){

		//tells template to run
		parent::before();

		if (Auth::check()){

			list($driver, $user_id) = Auth::get_user_id();

			//finds user id and assigns it to the current user
			$this->current_user = Model_User::find($user_id);
		}
		else{

			$this->current_user = null;
		}
		//Refers to this curent user
		View::set_global('current_user', $this->current_user);
	}
}