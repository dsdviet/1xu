<?php
class Controller_Admin_Account_Info_Table extends Controller_Admin
{

	public function action_index()
	{
		$data['account_info_tables'] = Model_Account_Info_Table::find('all');
		$this->template->title = "Account_info_tables";
		$this->template->content = View::forge('admin/account/info/table/index', $data);

	}

	public function action_view($id = null)
	{
		$data['account_info_table'] = Model_Account_Info_Table::find($id);

		$this->template->title = "Account_info_table";
		$this->template->content = View::forge('admin/account/info/table/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Account_Info_Table::validate('create');

			if ($val->run())
			{
				$account_info_table = Model_Account_Info_Table::forge(array(
					'user_id' => Input::post('user_id'),
					'card_pay' => Input::post('card_pay'),
					'card_number' => Input::post('card_number'),
					'card_security' => Input::post('card_security'),
					'date_expiration' => Input::post('date_expiration'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($account_info_table and $account_info_table->save())
				{
					Session::set_flash('success', e('Added account_info_table #'.$account_info_table->id.'.'));

					Response::redirect('admin/account/info/table');
				}

				else
				{
					Session::set_flash('error', e('Could not save account_info_table.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Account_Info_Tables";
		$this->template->content = View::forge('admin/account/info/table/create');

	}

	public function action_edit($id = null)
	{
		$account_info_table = Model_Account_Info_Table::find($id);
		$val = Model_Account_Info_Table::validate('edit');

		if ($val->run())
		{
			$account_info_table->user_id = Input::post('user_id');
			$account_info_table->card_pay = Input::post('card_pay');
			$account_info_table->card_number = Input::post('card_number');
			$account_info_table->card_security = Input::post('card_security');
			$account_info_table->date_expiration = Input::post('date_expiration');
			$account_info_table->is_active = Input::post('is_active');
			$account_info_table->is_delete = Input::post('is_delete');

			if ($account_info_table->save())
			{
				Session::set_flash('success', e('Updated account_info_table #' . $id));

				Response::redirect('admin/account/info/table');
			}

			else
			{
				Session::set_flash('error', e('Could not update account_info_table #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$account_info_table->user_id = $val->validated('user_id');
				$account_info_table->card_pay = $val->validated('card_pay');
				$account_info_table->card_number = $val->validated('card_number');
				$account_info_table->card_security = $val->validated('card_security');
				$account_info_table->date_expiration = $val->validated('date_expiration');
				$account_info_table->is_active = $val->validated('is_active');
				$account_info_table->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('account_info_table', $account_info_table, false);
		}

		$this->template->title = "Account_info_tables";
		$this->template->content = View::forge('admin/account/info/table/edit');

	}

	public function action_delete($id = null)
	{
		if ($account_info_table = Model_Account_Info_Table::find($id))
		{
			$account_info_table->delete();

			Session::set_flash('success', e('Deleted account_info_table #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete account_info_table #'.$id));
		}

		Response::redirect('admin/account/info/table');

	}

}
