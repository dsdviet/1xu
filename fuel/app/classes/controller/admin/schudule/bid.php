<?php
class Controller_Admin_Schudule_Bid extends Controller_Admin
{

	public function action_index()
	{
		$data['schudule_bids'] = Model_Schudule_Bid::find('all');
		$this->template->title = "Schudule_bids";
		$this->template->content = View::forge('admin/schudule/bid/index', $data);

	}

	public function action_view($id = null)
	{
		$data['schudule_bid'] = Model_Schudule_Bid::find($id);

		$this->template->title = "Schudule_bid";
		$this->template->content = View::forge('admin/schudule/bid/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Schudule_Bid::validate('create');

			if ($val->run())
			{
				$schudule_bid = Model_Schudule_Bid::forge(array(
					'product_bids_id' => Input::post('product_bids_id'),
					'time_begin' => Input::post('time_begin'),
					'time_end' => Input::post('time_end'),
					'user_create' => Input::post('user_create'),
					'time_extra' => Input::post('time_extra'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($schudule_bid and $schudule_bid->save())
				{
					Session::set_flash('success', e('Added schudule_bid #'.$schudule_bid->id.'.'));

					Response::redirect('admin/schudule/bid');
				}

				else
				{
					Session::set_flash('error', e('Could not save schudule_bid.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Schudule_Bids";
		$this->template->content = View::forge('admin/schudule/bid/create');

	}

	public function action_edit($id = null)
	{
		$schudule_bid = Model_Schudule_Bid::find($id);
		$val = Model_Schudule_Bid::validate('edit');

		if ($val->run())
		{
			$schudule_bid->product_bids_id = Input::post('product_bids_id');
			$schudule_bid->time_begin = Input::post('time_begin');
			$schudule_bid->time_end = Input::post('time_end');
			$schudule_bid->user_create = Input::post('user_create');
			$schudule_bid->time_extra = Input::post('time_extra');
			$schudule_bid->is_active = Input::post('is_active');
			$schudule_bid->is_delete = Input::post('is_delete');

			if ($schudule_bid->save())
			{
				Session::set_flash('success', e('Updated schudule_bid #' . $id));

				Response::redirect('admin/schudule/bid');
			}

			else
			{
				Session::set_flash('error', e('Could not update schudule_bid #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$schudule_bid->product_bids_id = $val->validated('product_bids_id');
				$schudule_bid->time_begin = $val->validated('time_begin');
				$schudule_bid->time_end = $val->validated('time_end');
				$schudule_bid->user_create = $val->validated('user_create');
				$schudule_bid->time_extra = $val->validated('time_extra');
				$schudule_bid->is_active = $val->validated('is_active');
				$schudule_bid->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('schudule_bid', $schudule_bid, false);
		}

		$this->template->title = "Schudule_bids";
		$this->template->content = View::forge('admin/schudule/bid/edit');

	}

	public function action_delete($id = null)
	{
		if ($schudule_bid = Model_Schudule_Bid::find($id))
		{
			$schudule_bid->delete();

			Session::set_flash('success', e('Deleted schudule_bid #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete schudule_bid #'.$id));
		}

		Response::redirect('admin/schudule/bid');

	}

}
