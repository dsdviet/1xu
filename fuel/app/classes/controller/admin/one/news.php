<?php
class Controller_Admin_One_News extends Controller_Admin
{

	public function action_index()
	{
		$data['one_news'] = Model_One_News::find('all');
		$this->template->title = "One_news";
		$this->template->content = View::forge('admin/one/news/index', $data);

	}

	public function action_view($id = null)
	{
		$data['one_news'] = Model_One_News::find($id);

		$this->template->title = "One_news";
		$this->template->content = View::forge('admin/one/news/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_One_News::validate('create');

			if ($val->run())
			{
				$one_news = Model_One_News::forge(array(
					'title' => Input::post('title'),
					'content' => Input::post('content'),
					'about' => Input::post('about'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($one_news and $one_news->save())
				{
					Session::set_flash('success', e('Added one_news #'.$one_news->id.'.'));

					Response::redirect('admin/one/news');
				}

				else
				{
					Session::set_flash('error', e('Could not save one_news.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "One_News";
		$this->template->content = View::forge('admin/one/news/create');

	}

	public function action_edit($id = null)
	{
		$one_news = Model_One_News::find($id);
		$val = Model_One_News::validate('edit');

		if ($val->run())
		{
			$one_news->title = Input::post('title');
			$one_news->content = Input::post('content');
			$one_news->about = Input::post('about');
			$one_news->is_active = Input::post('is_active');
			$one_news->is_delete = Input::post('is_delete');

			if ($one_news->save())
			{
				Session::set_flash('success', e('Updated one_news #' . $id));

				Response::redirect('admin/one/news');
			}

			else
			{
				Session::set_flash('error', e('Could not update one_news #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$one_news->title = $val->validated('title');
				$one_news->content = $val->validated('content');
				$one_news->about = $val->validated('about');
				$one_news->is_active = $val->validated('is_active');
				$one_news->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('one_news', $one_news, false);
		}

		$this->template->title = "One_news";
		$this->template->content = View::forge('admin/one/news/edit');

	}

	public function action_delete($id = null)
	{
		if ($one_news = Model_One_News::find($id))
		{
			$one_news->delete();

			Session::set_flash('success', e('Deleted one_news #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete one_news #'.$id));
		}

		Response::redirect('admin/one/news');

	}

}
