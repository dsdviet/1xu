<?php
use Orm\Model;

class Model_Customer extends Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'firstname',
		'lastname',
		'birthday',
		'phone',
		'address',
		'email',
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
		$val->add_field('username', 'Username', 'required|max_length[50]');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		$val->add_field('firstname', 'Firstname', 'required|max_length[50]');
		$val->add_field('lastname', 'Lastname', 'required|max_length[50]');
		$val->add_field('birthday', 'Birthday', 'required');
		$val->add_field('phone', 'Phone', 'required|max_length[15]');
		$val->add_field('address', 'Address', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[100]');
		$val->add_field('is_active', 'Is Active', 'required');
		$val->add_field('is_delete', 'Is Delete', 'required');

		return $val;
	}

}
