<?php
class Controller_Review extends Controller_Template 
{

	//loads the two collum layout as a default
	public $template = 'layouts/two_col';
	
	public function action_index()
	{
		$data['reviews'] = Model_Review::find('all');
		$this->template->title = "Reviews";
		$this->template->content = View::forge('review/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('Review');

		if ( ! $data['review'] = Model_Review::find($id))
		{
			Session::set_flash('error', 'Could not find review #'.$id);
			Response::redirect('Review');
		}

		$this->template->title = "Review";
		$this->template->content = View::forge('review/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Review::validate('create');
			
			if ($val->run())
			{
				$review = Model_Review::forge(array(
					'artist' => Input::post('artist'),
					'album' => Input::post('album'),
					'review' => Input::post('review'),
					'author_id' => Input::post('author_id'),
				));

				if ($review and $review->save())
				{
					Session::set_flash('success', 'Added review #'.$review->id.'.');

					Response::redirect('review');
				}

				else
				{
					Session::set_flash('error', 'Could not save review.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Reviews";
		$this->template->content = View::forge('review/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Review');

		if ( ! $review = Model_Review::find($id))
		{
			Session::set_flash('error', 'Could not find review #'.$id);
			Response::redirect('Review');
		}

		$val = Model_Review::validate('edit');

		if ($val->run())
		{
			$review->artist = Input::post('artist');
			$review->album = Input::post('album');
			$review->review = Input::post('review');
			$review->author_id = Input::post('author_id');

			if ($review->save())
			{
				Session::set_flash('success', 'Updated review #' . $id);

				Response::redirect('review');
			}

			else
			{
				Session::set_flash('error', 'Could not update review #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$review->artist = $val->validated('artist');
				$review->album = $val->validated('album');
				$review->review = $val->validated('review');
				$review->author_id = $val->validated('author_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('review', $review, false);
		}

		$this->template->title = "Reviews";
		$this->template->content = View::forge('review/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('Review');

		if ($review = Model_Review::find($id))
		{
			$review->delete();

			Session::set_flash('success', 'Deleted review #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete review #'.$id);
		}

		Response::redirect('review');

	}


}