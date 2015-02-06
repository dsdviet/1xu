<?php
class Controller_Admin_Auction_Time extends Controller_Admin
{

	public function action_index()
	{
		$data['auction_times'] = Model_Auction_Time::find('all');
		$this->template->title = "Auction_times";
		$this->template->content = View::forge('admin/auction/time/index', $data);

	}

	public function action_view($id = null)
	{
		$data['auction_time'] = Model_Auction_Time::find($id);

		$this->template->title = "Auction_time";
		$this->template->content = View::forge('admin/auction/time/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Auction_Time::validate('create');

			if ($val->run())
			{
				$auction_time = Model_Auction_Time::forge(array(
					'user_id' => Input::post('user_id'),
					'date' => Input::post('date'),
					'product_id' => Input::post('product_id'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($auction_time and $auction_time->save())
				{
					Session::set_flash('success', e('Added auction_time #'.$auction_time->id.'.'));

					Response::redirect('admin/auction/time');
				}

				else
				{
					Session::set_flash('error', e('Could not save auction_time.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Auction_Times";
		$this->template->content = View::forge('admin/auction/time/create');

	}

	public function action_edit($id = null)
	{
		$auction_time = Model_Auction_Time::find($id);
		$val = Model_Auction_Time::validate('edit');

		if ($val->run())
		{
			$auction_time->user_id = Input::post('user_id');
			$auction_time->date = Input::post('date');
			$auction_time->product_id = Input::post('product_id');
			$auction_time->is_active = Input::post('is_active');
			$auction_time->is_delete = Input::post('is_delete');

			if ($auction_time->save())
			{
				Session::set_flash('success', e('Updated auction_time #' . $id));

				Response::redirect('admin/auction/time');
			}

			else
			{
				Session::set_flash('error', e('Could not update auction_time #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$auction_time->user_id = $val->validated('user_id');
				$auction_time->date = $val->validated('date');
				$auction_time->product_id = $val->validated('product_id');
				$auction_time->is_active = $val->validated('is_active');
				$auction_time->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('auction_time', $auction_time, false);
		}

		$this->template->title = "Auction_times";
		$this->template->content = View::forge('admin/auction/time/edit');

	}

	public function action_delete($id = null)
	{
		if ($auction_time = Model_Auction_Time::find($id))
		{
			$auction_time->delete();

			Session::set_flash('success', e('Deleted auction_time #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete auction_time #'.$id));
		}

		Response::redirect('admin/auction/time');

	}

}
