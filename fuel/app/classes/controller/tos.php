<?php
class Controller_TOS extends Controller_Template 
{

	//loads the two collum layout as a default
	public $template = 'layouts/two_col';

	public function action_index()
	{
		
		$this->template->title = "Terms of Service";
		$this->template->content = View::forge('tos/index');

	}
}
