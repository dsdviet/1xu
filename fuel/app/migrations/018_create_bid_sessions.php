<?php

namespace Fuel\Migrations;

class Create_bid_sessions
{
	public function up()
	{
		\DBUtil::create_table('bid_sessions', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'product_id' => array('constraint' => 11, 'type' => 'int'),
			'lasted_bid' => array('type' => 'double'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('bid_sessions');
	}
}