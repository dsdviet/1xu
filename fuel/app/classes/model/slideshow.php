<?php
class Model_Slideshow extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'title',
		'images',
		'link',
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
		$val->add_field('title', 'Title', 'required|max_length[100]');
		$val->add_field('images', 'Images', 'required|max_length[100]');
		$val->add_field('link', 'Link', 'required|max_length[100]');
		$val->add_field('is_active', 'Is Active', 'required');
		$val->add_field('is_delete', 'Is Delete', 'required');

		return $val;
	}

}
