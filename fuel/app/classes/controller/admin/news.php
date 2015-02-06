<?php
class Controller_Admin_News extends Controller_Admin
{

	public function action_index()
	{
		$data['news'] = Model_News::find('all');
		$this->template->title = "News";
		$this->template->content = View::forge('admin/news/index', $data);

	}

	public function action_view($id = null)
	{
		$data['news'] = Model_News::find($id);

		$this->template->title = "News";
		$this->template->content = View::forge('admin/news/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_News::validate('create');

			if ($val->run())
			{
				$news = Model_News::forge(array(
					'title' => Input::post('title'),
					'content' => Input::post('content'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($news and $news->save())
				{
					Session::set_flash('success', e('Added news #'.$news->id.'.'));

					Response::redirect('admin/news');
				}

				else
				{
					Session::set_flash('error', e('Could not save news.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "News";
		$this->template->content = View::forge('admin/news/create');

	}

	public function action_edit($id = null)
	{
		$news = Model_News::find($id);
		$val = Model_News::validate('edit');

		if ($val->run())
		{
			$news->title = Input::post('title');
			$news->content = Input::post('content');
			$news->is_active = Input::post('is_active');
			$news->is_delete = Input::post('is_delete');

			if ($news->save())
			{
				Session::set_flash('success', e('Updated news #' . $id));

				Response::redirect('admin/news');
			}

			else
			{
				Session::set_flash('error', e('Could not update news #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$news->title = $val->validated('title');
				$news->content = $val->validated('content');
				$news->is_active = $val->validated('is_active');
				$news->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('news', $news, false);
		}

		$this->template->title = "News";
		$this->template->content = View::forge('admin/news/edit');

	}

	public function action_delete($id = null)
	{
		if ($news = Model_News::find($id))
		{
			$news->delete();

			Session::set_flash('success', e('Deleted news #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete news #'.$id));
		}

		Response::redirect('admin/news');

	}

}
