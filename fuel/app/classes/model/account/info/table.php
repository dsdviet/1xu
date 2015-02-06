<?php
class Model_Account_Info_Table extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'card_pay',
		'card_number',
		'card_security',
		'date_expiration',
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
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');
		$val->add_field('card_pay', 'Card Pay', 'required|max_length[20]');
		$val->add_field('card_number', 'Card Number', 'required|max_length[16]');
		$val->add_field('card_security', 'Card Security', 'required|max_length[5]');
		$val->add_field('date_expiration', 'Date Expiration', 'required');
		$val->add_field('is_active', 'Is Active', 'required');
		$val->add_field('is_delete', 'Is Delete', 'required');

		return $val;
	}

}
