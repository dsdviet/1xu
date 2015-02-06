<?php

namespace Fuel\Migrations;

class Create_bid_converts
{
	public function up()
	{
		\DBUtil::create_table('bid_converts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'bid_kind' => array('constraint' => 11, 'type' => 'int'),
			'price' => array('type' => 'double'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('bid_converts');
	}
}