<?php

class Controller_Blog extends Controller_Base {
	
	//has blog call the two col template found in the layouts folder under views
	public $template = 'layouts/two_col';

	//finds all reviews and loads them in a streamed format for tunegenius
	public function action_index(){

		$reviews = Model_Review::find('all');

		$this->template->artist = 'Blog $raquo; Index';
		$this->template->review = View::forge('blog/index', array(
			'reviews' => $reviews	
		));
	}

	//finds all of the associated comments for the reviews
	public function action_view($id){

		$review = Model_Review::find($id, array('related' => array('comments')));

		$this->template->artist = 'Blog &raquo; View';
		$this->template->review = View::forge('blog/view', array(
			'review' => $review
		), false);
	}
}