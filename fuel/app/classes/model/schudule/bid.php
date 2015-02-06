<?php
class Model_Schudule_Bid extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'product_bids_id',
		'time_begin',
		'time_end',
		'user_create',
		'time_extra',
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
		$val->add_field('product_bids_id', 'Product Bids Id', 'required|valid_string[numeric]');
		$val->add_field('time_begin', 'Time Begin', 'required|valid_string[numeric]');
		$val->add_field('time_end', 'Time End', 'required|valid_string[numeric]');
		$val->add_field('user_create', 'User Create', 'required|valid_string[numeric]');
		$val->add_field('time_extra', 'Time Extra', 'required|valid_string[numeric]');
		$val->add_field('is_active', 'Is Active', 'required');
		$val->add_field('is_delete', 'Is Delete', 'required');

		return $val;
	}

}
