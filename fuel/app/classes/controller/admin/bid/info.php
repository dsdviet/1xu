<?php
class Controller_Admin_Bid_Info extends Controller_Admin
{

	public function action_index()
	{
		$data['bid_infos'] = Model_Bid_Info::find('all');
		$this->template->title = "Bid_infos";
		$this->template->content = View::forge('admin/bid/info/index', $data);

	}

	public function action_view($id = null)
	{
		$data['bid_info'] = Model_Bid_Info::find($id);

		$this->template->title = "Bid_info";
		$this->template->content = View::forge('admin/bid/info/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bid_Info::validate('create');

			if ($val->run())
			{
				$bid_info = Model_Bid_Info::forge(array(
					'bid_kind' => Input::post('bid_kind'),
					'user_id' => Input::post('user_id'),
					'bids' => Input::post('bids'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($bid_info and $bid_info->save())
				{
					Session::set_flash('success', e('Added bid_info #'.$bid_info->id.'.'));

					Response::redirect('admin/bid/info');
				}

				else
				{
					Session::set_flash('error', e('Could not save bid_info.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bid_Infos";
		$this->template->content = View::forge('admin/bid/info/create');

	}

	public function action_edit($id = null)
	{
		$bid_info = Model_Bid_Info::find($id);
		$val = Model_Bid_Info::validate('edit');

		if ($val->run())
		{
			$bid_info->bid_kind = Input::post('bid_kind');
			$bid_info->user_id = Input::post('user_id');
			$bid_info->bids = Input::post('bids');
			$bid_info->is_active = Input::post('is_active');
			$bid_info->is_delete = Input::post('is_delete');

			if ($bid_info->save())
			{
				Session::set_flash('success', e('Updated bid_info #' . $id));

				Response::redirect('admin/bid/info');
			}

			else
			{
				Session::set_flash('error', e('Could not update bid_info #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bid_info->bid_kind = $val->validated('bid_kind');
				$bid_info->user_id = $val->validated('user_id');
				$bid_info->bids = $val->validated('bids');
				$bid_info->is_active = $val->validated('is_active');
				$bid_info->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bid_info', $bid_info, false);
		}

		$this->template->title = "Bid_infos";
		$this->template->content = View::forge('admin/bid/info/edit');

	}

	public function action_delete($id = null)
	{
		if ($bid_info = Model_Bid_Info::find($id))
		{
			$bid_info->delete();

			Session::set_flash('success', e('Deleted bid_info #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete bid_info #'.$id));
		}

		Response::redirect('admin/bid/info');

	}

}
