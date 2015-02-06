<?php

namespace Fuel\Migrations;

class Create_product_infos
{
	public function up()
	{
		\DBUtil::create_table('product_infos', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar'),
			'kind_id' => array('constraint' => 11, 'type' => 'int'),
			'price' => array('type' => 'double'),
			'date' => array('type' => 'date'),
			'info' => array('type' => 'text'),
			'images' => array('constraint' => 100, 'type' => 'varchar'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('product_infos');
	}
}