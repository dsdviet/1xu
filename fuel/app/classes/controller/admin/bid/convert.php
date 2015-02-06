<?php
class Controller_Admin_Bid_Convert extends Controller_Admin
{

	public function action_index()
	{
		$data['bid_converts'] = Model_Bid_Convert::find('all');
		$this->template->title = "Bid_converts";
		$this->template->content = View::forge('admin/bid/convert/index', $data);

	}

	public function action_view($id = null)
	{
		$data['bid_convert'] = Model_Bid_Convert::find($id);

		$this->template->title = "Bid_convert";
		$this->template->content = View::forge('admin/bid/convert/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bid_Convert::validate('create');

			if ($val->run())
			{
				$bid_convert = Model_Bid_Convert::forge(array(
					'bid_kind' => Input::post('bid_kind'),
					'price' => Input::post('price'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($bid_convert and $bid_convert->save())
				{
					Session::set_flash('success', e('Added bid_convert #'.$bid_convert->id.'.'));

					Response::redirect('admin/bid/convert');
				}

				else
				{
					Session::set_flash('error', e('Could not save bid_convert.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bid_Converts";
		$this->template->content = View::forge('admin/bid/convert/create');

	}

	public function action_edit($id = null)
	{
		$bid_convert = Model_Bid_Convert::find($id);
		$val = Model_Bid_Convert::validate('edit');

		if ($val->run())
		{
			$bid_convert->bid_kind = Input::post('bid_kind');
			$bid_convert->price = Input::post('price');
			$bid_convert->is_active = Input::post('is_active');
			$bid_convert->is_delete = Input::post('is_delete');

			if ($bid_convert->save())
			{
				Session::set_flash('success', e('Updated bid_convert #' . $id));

				Response::redirect('admin/bid/convert');
			}

			else
			{
				Session::set_flash('error', e('Could not update bid_convert #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bid_convert->bid_kind = $val->validated('bid_kind');
				$bid_convert->price = $val->validated('price');
				$bid_convert->is_active = $val->validated('is_active');
				$bid_convert->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bid_convert', $bid_convert, false);
		}

		$this->template->title = "Bid_converts";
		$this->template->content = View::forge('admin/bid/convert/edit');

	}

	public function action_delete($id = null)
	{
		if ($bid_convert = Model_Bid_Convert::find($id))
		{
			$bid_convert->delete();

			Session::set_flash('success', e('Deleted bid_convert #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete bid_convert #'.$id));
		}

		Response::redirect('admin/bid/convert');

	}

}
