<?php
class Controller_Admin_Product_Kind extends Controller_Admin
{

	public function action_index()
	{
		$data['product_kinds'] = Model_Product_Kind::find('all');
		$this->template->title = "Product_kinds";
		$this->template->content = View::forge('admin/product/kind/index', $data);

	}

	public function action_view($id = null)
	{
		$data['product_kind'] = Model_Product_Kind::find($id);

		$this->template->title = "Product_kind";
		$this->template->content = View::forge('admin/product/kind/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Product_Kind::validate('create');

			if ($val->run())
			{
				$product_kind = Model_Product_Kind::forge(array(
					'name' => Input::post('name'),
					'is_active' => Input::post('is_active'),
					'is_delete' => Input::post('is_delete'),
				));

				if ($product_kind and $product_kind->save())
				{
					Session::set_flash('success', e('Added product_kind #'.$product_kind->id.'.'));

					Response::redirect('admin/product/kind');
				}

				else
				{
					Session::set_flash('error', e('Could not save product_kind.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Product_Kinds";
		$this->template->content = View::forge('admin/product/kind/create');

	}

	public function action_edit($id = null)
	{
		$product_kind = Model_Product_Kind::find($id);
		$val = Model_Product_Kind::validate('edit');

		if ($val->run())
		{
			$product_kind->name = Input::post('name');
			$product_kind->is_active = Input::post('is_active');
			$product_kind->is_delete = Input::post('is_delete');

			if ($product_kind->save())
			{
				Session::set_flash('success', e('Updated product_kind #' . $id));

				Response::redirect('admin/product/kind');
			}

			else
			{
				Session::set_flash('error', e('Could not update product_kind #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$product_kind->name = $val->validated('name');
				$product_kind->is_active = $val->validated('is_active');
				$product_kind->is_delete = $val->validated('is_delete');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('product_kind', $product_kind, false);
		}

		$this->template->title = "Product_kinds";
		$this->template->content = View::forge('admin/product/kind/edit');

	}

	public function action_delete($id = null)
	{
		if ($product_kind = Model_Product_Kind::find($id))
		{
			$product_kind->delete();

			Session::set_flash('success', e('Deleted product_kind #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete product_kind #'.$id));
		}

		Response::redirect('admin/product/kind');

	}

}
