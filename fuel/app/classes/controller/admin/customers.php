<?php
class Controller_Admin_Customers extends Controller_Admin
{

	public function action_index()
	{
		$data['customers'] = Model_Customer::find('all');
		$this->template->title = "Customers";
		$this->template->content = View::forge('admin/customers/index', $data);

	}

	public function action_view($id = null)
	{
		$data['customer'] = Model_Customer::find($id);

		$this->template->title = "Customer";
		$this->template->content = View::forge('admin/customers/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Customer::validate('create');

			if ($val->run())
			{
				$customer = Model_Customer::forge(array(
					'username' => Input::post('username'),
					'password' => \Auth::instance()->hash_pasword(Input::post('password')),
					'firstname' => Input::post('firstname'),
					'lastname' => Input::post('lastname'),
					'birthday' => Input::post('birthday'),
					'phone' => Input::post('phone'),
					'address' => Input::post('address'),
					'email' => Input::post('email'),
					'is_active' => 1,
					'is_delete' => 0,
				));

				if ($customer and $customer->save())
				{
					Session::set_flash('success', e('Added customer #'.$customer->id.'.'));

					Response::redirect('admin/customers');
				}

				else
				{
					Session::set_flash('error', e('Could not save customer.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Customers";
		$this->template->content = View::forge('admin/customers/create');

	}

	public function action_edit($id = null)
	{
		$customer = Model_Customer::find($id);
		$val = Model_Customer::validate('edit');

		if ($val->run())
		{
			$customer->username = Input::post('username');
			$customer->password = Input::post('password');
			$customer->firstname = Input::post('firstname');
			$customer->lastname = Input::post('lastname');
			$customer->birthday = Input::post('birthday');
			$customer->phone = Input::post('phone');
			$customer->address = Input::post('address');
			$customer->email = Input::post('email');
			$customer->is_active = Input::post('is_active');
			$customer->is_delete = Input::post('is_delete');

			if ($customer->save())
			{
				Session::set_flash('success', e('Updated customer #' . $id));

				Response::redirect('admin/customers');
			}

			else
			{
				Session::set_flash('error', e('Could not update customer #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$customer->username = $val->validated('username');
				$customer->password = $val->validated('password');
				$customer->firstname = $val->validated('firstname');
				$customer->lastname = $val->validated('lastname');
				$customer->birthday = $val->validated('birthday');
				$customer->phone = $val->validated('phone');
				$customer->address = $val->validated('address');
				$customer->email = $val->validated('email');
				$customer->is_active = $val->validated('is_active');
				$customer->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('customer', $customer, false);
		}

		$this->template->title = "Customers";
		$this->template->content = View::forge('admin/customers/edit');

	}

	public function action_delete($id = null)
	{
		if ($customer = Model_Customer::find($id))
		{
			$customer->delete();

			Session::set_flash('success', e('Deleted customer #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete customer #'.$id));
		}

		Response::redirect('admin/customers');

	}

}
