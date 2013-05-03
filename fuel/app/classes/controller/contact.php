<?php

class Controller_Contact extends Controller_Template{

	//loads the two collum layout as a default
	public $template = 'layouts/two_col';
	
	public function action_index(){

		$view = View::forge('contact/form');

		if (Input::method() == 'POST'){
			if (Input::post('name') and Input::post('email') and Input::post('message')){
				try{
					Email::forge()
					  ->to('tperlewitz@fullsail.edu')
					  ->from(Input::post('email'), Input::post('name'))
					  ->subject('TuneGenius Contact Form')
					  ->body(Input::post('message'))
					  ->send();

					Response::redirect('contact/sent');
				}
				catch (EmailSendingFailedException $e){
					$view->error = 'Your email did not send, please try again.';
				}

			}
			else{
				$view->error = 'Please fill in all fields';
			}
		}
		$this->template->title = 'Contact us';
		$this->template->content = $view;
	}

	public function action_sent(){
		$this->template->title = 'Contact sent';
		$this->template->content = View::forge('contact/sent');
	}
}