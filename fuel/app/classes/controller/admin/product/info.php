<?php
class Controller_Admin_Product_Info extends Controller_Admin
{

	public function action_index()
	{
		$data['product_infos'] = Model_Product_Info::find('all');
		$this->template->title = "Product_infos";
		$this->template->content = View::forge('admin/product/info/index', $data);

	}

	public function action_view($id = null)
	{
		$data['product_info'] = Model_Product_Info::find($id);

		$this->template->title = "Product_info";
		$this->template->content = View::forge('admin/product/info/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Product_Info::validate('create');

			if ($val->run())
			{
				$product_info = Model_Product_Info::forge(array(
					'name' => Input::post('name'),
					'kind_id' => Input::post('kind_id'),
					'price' => Input::post('price'),
					'date' => Input::post('date'),
					'info' => Input::post('info'),
					'images' => Input::post('images'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($product_info and $product_info->save())
				{
					Session::set_flash('success', e('Added product_info #'.$product_info->id.'.'));

					Response::redirect('admin/product/info');
				}

				else
				{
					Session::set_flash('error', e('Could not save product_info.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Product_Infos";
		$this->template->content = View::forge('admin/product/info/create');

	}

	public function action_edit($id = null)
	{
		$product_info = Model_Product_Info::find($id);
		$val = Model_Product_Info::validate('edit');

		if ($val->run())
		{
			$product_info->name = Input::post('name');
			$product_info->kind_id = Input::post('kind_id');
			$product_info->price = Input::post('price');
			$product_info->date = Input::post('date');
			$product_info->info = Input::post('info');
			$product_info->images = Input::post('images');
			$product_info->is_active = Input::post('is_active');
			$product_info->is_delete = Input::post('is_delete');

			if ($product_info->save())
			{
				Session::set_flash('success', e('Updated product_info #' . $id));

				Response::redirect('admin/product/info');
			}

			else
			{
				Session::set_flash('error', e('Could not update product_info #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$product_info->name = $val->validated('name');
				$product_info->kind_id = $val->validated('kind_id');
				$product_info->price = $val->validated('price');
				$product_info->date = $val->validated('date');
				$product_info->info = $val->validated('info');
				$product_info->images = $val->validated('images');
				$product_info->is_active = $val->validated('is_active');
				$product_info->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('product_info', $product_info, false);
		}

		$this->template->title = "Product_infos";
		$this->template->content = View::forge('admin/product/info/edit');

	}

	public function action_delete($id = null)
	{
		if ($product_info = Model_Product_Info::find($id))
		{
			$product_info->delete();

			Session::set_flash('success', e('Deleted product_info #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete product_info #'.$id));
		}

		Response::redirect('admin/product/info');

	}

}
