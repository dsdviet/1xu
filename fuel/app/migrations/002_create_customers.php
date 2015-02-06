<?php

namespace Fuel\Migrations;

class Create_customers
{
	public function up()
	{
		\DBUtil::create_table('customers', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'firstname' => array('constraint' => 50, 'type' => 'varchar'),
			'lastname' => array('constraint' => 50, 'type' => 'varchar'),
			'birthday' => array('type' => 'date'),
			'phone' => array('constraint' => 15, 'type' => 'varchar'),
			'address' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 100, 'type' => 'varchar'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('customers');
	}
}