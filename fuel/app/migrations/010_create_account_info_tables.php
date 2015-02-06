<?php

namespace Fuel\Migrations;

class Create_account_info_tables
{
	public function up()
	{
		\DBUtil::create_table('account_info_tables', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'card_pay' => array('constraint' => 20, 'type' => 'varchar'),
			'card_number' => array('constraint' => 16, 'type' => 'varchar'),
			'card_security' => array('constraint' => 5, 'type' => 'varchar'),
			'date_expiration' => array('type' => 'date'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('account_info_tables');
	}
}