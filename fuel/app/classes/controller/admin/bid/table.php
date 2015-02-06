<?php
class Controller_Admin_Bid_Table extends Controller_Admin
{

	public function action_index()
	{
		$data['bid_tables'] = Model_Bid_Table::find('all');
		$this->template->title = "Bid_tables";
		$this->template->content = View::forge('admin/bid/table/index', $data);

	}

	public function action_view($id = null)
	{
		$data['bid_table'] = Model_Bid_Table::find($id);

		$this->template->title = "Bid_table";
		$this->template->content = View::forge('admin/bid/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bid_Table::validate('create');

			if ($val->run())
			{
				$bid_table = Model_Bid_Table::forge(array(
					'bid_name' => Input::post('bid_name'),
					'bid_info' => Input::post('bid_info'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($bid_table and $bid_table->save())
				{
					Session::set_flash('success', e('Added bid_table #'.$bid_table->id.'.'));

					Response::redirect('admin/bid/table');
				}

				else
				{
					Session::set_flash('error', e('Could not save bid_table.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bid_Tables";
		$this->template->content = View::forge('admin/bid/table/create');

	}

	public function action_edit($id = null)
	{
		$bid_table = Model_Bid_Table::find($id);
		$val = Model_Bid_Table::validate('edit');

		if ($val->run())
		{
			$bid_table->bid_name = Input::post('bid_name');
			$bid_table->bid_info = Input::post('bid_info');
			$bid_table->is_active = Input::post('is_active');
			$bid_table->is_delete = Input::post('is_delete');

			if ($bid_table->save())
			{
				Session::set_flash('success', e('Updated bid_table #' . $id));

				Response::redirect('admin/bid/table');
			}

			else
			{
				Session::set_flash('error', e('Could not update bid_table #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bid_table->bid_name = $val->validated('bid_name');
				$bid_table->bid_info = $val->validated('bid_info');
				$bid_table->is_active = $val->validated('is_active');
				$bid_table->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bid_table', $bid_table, false);
		}

		$this->template->title = "Bid_tables";
		$this->template->content = View::forge('admin/bid/table/edit');

	}

	public function action_delete($id = null)
	{
		if ($bid_table = Model_Bid_Table::find($id))
		{
			$bid_table->delete();

			Session::set_flash('success', e('Deleted bid_table #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete bid_table #'.$id));
		}

		Response::redirect('admin/bid/table');

	}

}
