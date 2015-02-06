<?php
class Controller_Admin_Product_Sale extends Controller_Admin
{

	public function action_index()
	{
		$data['product_sales'] = Model_Product_Sale::find('all');
		$this->template->title = "Product_sales";
		$this->template->content = View::forge('admin/product/sale/index', $data);

	}

	public function action_view($id = null)
	{
		$data['product_sale'] = Model_Product_Sale::find($id);

		$this->template->title = "Product_sale";
		$this->template->content = View::forge('admin/product/sale/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Product_Sale::validate('create');

			if ($val->run())
			{
				$product_sale = Model_Product_Sale::forge(array(
					'product_id' => Input::post('product_id'),
					'price_sale' => Input::post('price_sale'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($product_sale and $product_sale->save())
				{
					Session::set_flash('success', e('Added product_sale #'.$product_sale->id.'.'));

					Response::redirect('admin/product/sale');
				}

				else
				{
					Session::set_flash('error', e('Could not save product_sale.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Product_Sales";
		$this->template->content = View::forge('admin/product/sale/create');

	}

	public function action_edit($id = null)
	{
		$product_sale = Model_Product_Sale::find($id);
		$val = Model_Product_Sale::validate('edit');

		if ($val->run())
		{
			$product_sale->product_id = Input::post('product_id');
			$product_sale->price_sale = Input::post('price_sale');
			$product_sale->is_active = Input::post('is_active');
			$product_sale->is_delete = Input::post('is_delete');

			if ($product_sale->save())
			{
				Session::set_flash('success', e('Updated product_sale #' . $id));

				Response::redirect('admin/product/sale');
			}

			else
			{
				Session::set_flash('error', e('Could not update product_sale #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$product_sale->product_id = $val->validated('product_id');
				$product_sale->price_sale = $val->validated('price_sale');
				$product_sale->is_active = $val->validated('is_active');
				$product_sale->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('product_sale', $product_sale, false);
		}

		$this->template->title = "Product_sales";
		$this->template->content = View::forge('admin/product/sale/edit');

	}

	public function action_delete($id = null)
	{
		if ($product_sale = Model_Product_Sale::find($id))
		{
			$product_sale->delete();

			Session::set_flash('success', e('Deleted product_sale #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete product_sale #'.$id));
		}

		Response::redirect('admin/product/sale');

	}

}
