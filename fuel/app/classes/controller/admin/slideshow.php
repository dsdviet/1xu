<?php
class Controller_Admin_Slideshow extends Controller_Admin
{

	public function action_index()
	{
		$data['slideshows'] = Model_Slideshow::find('all');
		$this->template->title = "Slideshows";
		$this->template->content = View::forge('admin/slideshow/index', $data);

	}

	public function action_view($id = null)
	{
		$data['slideshow'] = Model_Slideshow::find($id);

		$this->template->title = "Slideshow";
		$this->template->content = View::forge('admin/slideshow/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Slideshow::validate('create');

			if ($val->run())
			{
				$slideshow = Model_Slideshow::forge(array(
					'title' => Input::post('title'),
					'images' => Input::post('images'),
					'link' => Input::post('link'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($slideshow and $slideshow->save())
				{
					Session::set_flash('success', e('Added slideshow #'.$slideshow->id.'.'));

					Response::redirect('admin/slideshow');
				}

				else
				{
					Session::set_flash('error', e('Could not save slideshow.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Slideshows";
		$this->template->content = View::forge('admin/slideshow/create');

	}

	public function action_edit($id = null)
	{
		$slideshow = Model_Slideshow::find($id);
		$val = Model_Slideshow::validate('edit');

		if ($val->run())
		{
			$slideshow->title = Input::post('title');
			$slideshow->images = Input::post('images');
			$slideshow->link = Input::post('link');
			$slideshow->is_active = Input::post('is_active');
			$slideshow->is_delete = Input::post('is_delete');

			if ($slideshow->save())
			{
				Session::set_flash('success', e('Updated slideshow #' . $id));

				Response::redirect('admin/slideshow');
			}

			else
			{
				Session::set_flash('error', e('Could not update slideshow #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$slideshow->title = $val->validated('title');
				$slideshow->images = $val->validated('images');
				$slideshow->link = $val->validated('link');
				$slideshow->is_active = $val->validated('is_active');
				$slideshow->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('slideshow', $slideshow, false);
		}

		$this->template->title = "Slideshows";
		$this->template->content = View::forge('admin/slideshow/edit');

	}

	public function action_delete($id = null)
	{
		if ($slideshow = Model_Slideshow::find($id))
		{
			$slideshow->delete();

			Session::set_flash('success', e('Deleted slideshow #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete slideshow #'.$id));
		}

		Response::redirect('admin/slideshow');

	}

}
