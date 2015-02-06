<?php

namespace Fuel\Migrations;

class Create_schudule_bids
{
	public function up()
	{
		\DBUtil::create_table('schudule_bids', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'product_bids_id' => array('constraint' => 11, 'type' => 'int'),
			'time_begin' => array('constraint' => 11, 'type' => 'int'),
			'time_end' => array('constraint' => 11, 'type' => 'int'),
			'user_create' => array('constraint' => 11, 'type' => 'int'),
			'time_extra' => array('constraint' => 2, 'type' => 'int'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('schudule_bids');
	}
}