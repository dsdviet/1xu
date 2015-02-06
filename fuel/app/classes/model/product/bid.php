<?php
class Model_Product_Bid extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'product_id',
		'price_bid',
		'is_active',
		'is_delete',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('product_id', 'Product Id', 'required|valid_string[numeric]');
		$val->add_field('price_bid', 'Price Bid', 'required');
		$val->add_field('is_active', 'Is Active', 'required');
		$val->add_field('is_delete', 'Is Delete', 'required');

		return $val;
	}

}
