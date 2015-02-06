<?php
class Controller_Admin_Product_Bid extends Controller_Admin
{

	public function action_index()
	{
		$data['product_bids'] = Model_Product_Bid::find('all');
		$this->template->title = "Product_bids";
		$this->template->content = View::forge('admin/product/bid/index', $data);

	}

	public function action_view($id = null)
	{
		$data['product_bid'] = Model_Product_Bid::find($id);

		$this->template->title = "Product_bid";
		$this->template->content = View::forge('admin/product/bid/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Product_Bid::validate('create');

			if ($val->run())
			{
				$product_bid = Model_Product_Bid::forge(array(
					'product_id' => Input::post('product_id'),
					'price_bid' => Input::post('price_bid'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($product_bid and $product_bid->save())
				{
					Session::set_flash('success', e('Added product_bid #'.$product_bid->id.'.'));

					Response::redirect('admin/product/bid');
				}

				else
				{
					Session::set_flash('error', e('Could not save product_bid.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Product_Bids";
		$this->template->content = View::forge('admin/product/bid/create');

	}

	public function action_edit($id = null)
	{
		$product_bid = Model_Product_Bid::find($id);
		$val = Model_Product_Bid::validate('edit');

		if ($val->run())
		{
			$product_bid->product_id = Input::post('product_id');
			$product_bid->price_bid = Input::post('price_bid');
			$product_bid->is_active = Input::post('is_active');
			$product_bid->is_delete = Input::post('is_delete');

			if ($product_bid->save())
			{
				Session::set_flash('success', e('Updated product_bid #' . $id));

				Response::redirect('admin/product/bid');
			}

			else
			{
				Session::set_flash('error', e('Could not update product_bid #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$product_bid->product_id = $val->validated('product_id');
				$product_bid->price_bid = $val->validated('price_bid');
				$product_bid->is_active = $val->validated('is_active');
				$product_bid->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('product_bid', $product_bid, false);
		}

		$this->template->title = "Product_bids";
		$this->template->content = View::forge('admin/product/bid/edit');

	}

	public function action_delete($id = null)
	{
		if ($product_bid = Model_Product_Bid::find($id))
		{
			$product_bid->delete();

			Session::set_flash('success', e('Deleted product_bid #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete product_bid #'.$id));
		}

		Response::redirect('admin/product/bid');

	}

}
