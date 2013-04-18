<?php
class Controller_Entry extends Controller_Template 
{

	public function action_index()
	{
		$data['entries'] = Model_Entry::find('all');
		$this->template->title = "Entries";
		$this->template->content = View::forge('entry/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('Entry');

		if ( ! $data['entry'] = Model_Entry::find($id))
		{
			Session::set_flash('error', 'Could not find entry #'.$id);
			Response::redirect('Entry');
		}

		$this->template->title = "Entry";
		$this->template->content = View::forge('entry/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Entry::validate('create');
			
			if ($val->run())
			{
				$entry = Model_Entry::forge(array(
					'artist' => Input::post('artist'),
					'venue' => Input::post('venue'),
					'city' => Input::post('city'),
					'opener' => Input::post('opener'),
					'review' => Input::post('review'),
				));

				if ($entry and $entry->save())
				{
					Session::set_flash('success', 'Added entry #'.$entry->id.'.');

					Response::redirect('entry');
				}

				else
				{
					Session::set_flash('error', 'Could not save entry.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Entries";
		$this->template->content = View::forge('entry/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Entry');

		if ( ! $entry = Model_Entry::find($id))
		{
			Session::set_flash('error', 'Could not find entry #'.$id);
			Response::redirect('Entry');
		}

		$val = Model_Entry::validate('edit');

		if ($val->run())
		{
			$entry->artist = Input::post('artist');
			$entry->venue = Input::post('venue');
			$entry->city = Input::post('city');
			$entry->opener = Input::post('opener');
			$entry->review = Input::post('review');

			if ($entry->save())
			{
				Session::set_flash('success', 'Updated entry #' . $id);

				Response::redirect('entry');
			}

			else
			{
				Session::set_flash('error', 'Could not update entry #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$entry->artist = $val->validated('artist');
				$entry->venue = $val->validated('venue');
				$entry->city = $val->validated('city');
				$entry->opener = $val->validated('opener');
				$entry->review = $val->validated('review');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('entry', $entry, false);
		}

		$this->template->title = "Entries";
		$this->template->content = View::forge('entry/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('Entry');

		if ($entry = Model_Entry::find($id))
		{
			$entry->delete();

			Session::set_flash('success', 'Deleted entry #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete entry #'.$id);
		}

		Response::redirect('entry');

	}


}