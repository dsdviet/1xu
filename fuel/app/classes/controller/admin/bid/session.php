<?php
class Controller_Admin_Bid_Session extends Controller_Admin
{

	public function action_index()
	{
		$data['bid_sessions'] = Model_Bid_Session::find('all');
		$this->template->title = "Bid_sessions";
		$this->template->content = View::forge('admin/bid/session/index', $data);

	}

	public function action_view($id = null)
	{
		$data['bid_session'] = Model_Bid_Session::find($id);

		$this->template->title = "Bid_session";
		$this->template->content = View::forge('admin/bid/session/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bid_Session::validate('create');

			if ($val->run())
			{
				$bid_session = Model_Bid_Session::forge(array(
					'user_id' => Input::post('user_id'),
					'product_id' => Input::post('product_id'),
					'lasted_bid' => Input::post('lasted_bid'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($bid_session and $bid_session->save())
				{
					Session::set_flash('success', e('Added bid_session #'.$bid_session->id.'.'));

					Response::redirect('admin/bid/session');
				}

				else
				{
					Session::set_flash('error', e('Could not save bid_session.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bid_Sessions";
		$this->template->content = View::forge('admin/bid/session/create');

	}

	public function action_edit($id = null)
	{
		$bid_session = Model_Bid_Session::find($id);
		$val = Model_Bid_Session::validate('edit');

		if ($val->run())
		{
			$bid_session->user_id = Input::post('user_id');
			$bid_session->product_id = Input::post('product_id');
			$bid_session->lasted_bid = Input::post('lasted_bid');
			$bid_session->is_active = Input::post('is_active');
			$bid_session->is_delete = Input::post('is_delete');

			if ($bid_session->save())
			{
				Session::set_flash('success', e('Updated bid_session #' . $id));

				Response::redirect('admin/bid/session');
			}

			else
			{
				Session::set_flash('error', e('Could not update bid_session #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bid_session->user_id = $val->validated('user_id');
				$bid_session->product_id = $val->validated('product_id');
				$bid_session->lasted_bid = $val->validated('lasted_bid');
				$bid_session->is_active = $val->validated('is_active');
				$bid_session->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bid_session', $bid_session, false);
		}

		$this->template->title = "Bid_sessions";
		$this->template->content = View::forge('admin/bid/session/edit');

	}

	public function action_delete($id = null)
	{
		if ($bid_session = Model_Bid_Session::find($id))
		{
			$bid_session->delete();

			Session::set_flash('success', e('Deleted bid_session #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete bid_session #'.$id));
		}

		Response::redirect('admin/bid/session');

	}

}
