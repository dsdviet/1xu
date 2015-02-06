<?php
class Controller_Admin_Bid_History extends Controller_Admin
{

	public function action_index()
	{
		$data['bid_histories'] = Model_Bid_History::find('all');
		$this->template->title = "Bid_histories";
		$this->template->content = View::forge('admin/bid/history/index', $data);

	}

	public function action_view($id = null)
	{
		$data['bid_history'] = Model_Bid_History::find($id);

		$this->template->title = "Bid_history";
		$this->template->content = View::forge('admin/bid/history/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bid_History::validate('create');

			if ($val->run())
			{
				$bid_history = Model_Bid_History::forge(array(
					'bid_kind' => Input::post('bid_kind'),
					'user_id' => Input::post('user_id'),
					'bids' => Input::post('bids'),
					'date' => Input::post('date'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($bid_history and $bid_history->save())
				{
					Session::set_flash('success', e('Added bid_history #'.$bid_history->id.'.'));

					Response::redirect('admin/bid/history');
				}

				else
				{
					Session::set_flash('error', e('Could not save bid_history.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bid_Histories";
		$this->template->content = View::forge('admin/bid/history/create');

	}

	public function action_edit($id = null)
	{
		$bid_history = Model_Bid_History::find($id);
		$val = Model_Bid_History::validate('edit');

		if ($val->run())
		{
			$bid_history->bid_kind = Input::post('bid_kind');
			$bid_history->user_id = Input::post('user_id');
			$bid_history->bids = Input::post('bids');
			$bid_history->date = Input::post('date');
			$bid_history->is_active = Input::post('is_active');
			$bid_history->is_delete = Input::post('is_delete');

			if ($bid_history->save())
			{
				Session::set_flash('success', e('Updated bid_history #' . $id));

				Response::redirect('admin/bid/history');
			}

			else
			{
				Session::set_flash('error', e('Could not update bid_history #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bid_history->bid_kind = $val->validated('bid_kind');
				$bid_history->user_id = $val->validated('user_id');
				$bid_history->bids = $val->validated('bids');
				$bid_history->date = $val->validated('date');
				$bid_history->is_active = $val->validated('is_active');
				$bid_history->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bid_history', $bid_history, false);
		}

		$this->template->title = "Bid_histories";
		$this->template->content = View::forge('admin/bid/history/edit');

	}

	public function action_delete($id = null)
	{
		if ($bid_history = Model_Bid_History::find($id))
		{
			$bid_history->delete();

			Session::set_flash('success', e('Deleted bid_history #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete bid_history #'.$id));
		}

		Response::redirect('admin/bid/history');

	}

}
