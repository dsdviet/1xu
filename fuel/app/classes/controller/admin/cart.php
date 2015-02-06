<?php
class Controller_Admin_Cart extends Controller_Admin
{

	public function action_index()
	{
		$data['carts'] = Model_Cart::find('all');
		$this->template->title = "Carts";
		$this->template->content = View::forge('admin/cart/index', $data);

	}

	public function action_view($id = null)
	{
		$data['cart'] = Model_Cart::find($id);

		$this->template->title = "Cart";
		$this->template->content = View::forge('admin/cart/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Cart::validate('create');

			if ($val->run())
			{
				$cart = Model_Cart::forge(array(
					'product_id' => Input::post('product_id'),
					'user_id' => Input::post('user_id'),
					'date' => Input::post('date'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($cart and $cart->save())
				{
					Session::set_flash('success', e('Added cart #'.$cart->id.'.'));

					Response::redirect('admin/cart');
				}

				else
				{
					Session::set_flash('error', e('Could not save cart.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Carts";
		$this->template->content = View::forge('admin/cart/create');

	}

	public function action_edit($id = null)
	{
		$cart = Model_Cart::find($id);
		$val = Model_Cart::validate('edit');

		if ($val->run())
		{
			$cart->product_id = Input::post('product_id');
			$cart->user_id = Input::post('user_id');
			$cart->date = Input::post('date');
			$cart->is_active = Input::post('is_active');
			$cart->is_delete = Input::post('is_delete');

			if ($cart->save())
			{
				Session::set_flash('success', e('Updated cart #' . $id));

				Response::redirect('admin/cart');
			}

			else
			{
				Session::set_flash('error', e('Could not update cart #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$cart->product_id = $val->validated('product_id');
				$cart->user_id = $val->validated('user_id');
				$cart->date = $val->validated('date');
				$cart->is_active = $val->validated('is_active');
				$cart->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('cart', $cart, false);
		}

		$this->template->title = "Carts";
		$this->template->content = View::forge('admin/cart/edit');

	}

	public function action_delete($id = null)
	{
		if ($cart = Model_Cart::find($id))
		{
			$cart->delete();

			Session::set_flash('success', e('Deleted cart #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete cart #'.$id));
		}

		Response::redirect('admin/cart');

	}

}
