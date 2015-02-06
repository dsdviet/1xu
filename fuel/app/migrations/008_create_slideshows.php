<?php

namespace Fuel\Migrations;

class Create_slideshows
{
	public function up()
	{
		\DBUtil::create_table('slideshows', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 100, 'type' => 'varchar'),
			'images' => array('constraint' => 100, 'type' => 'varchar'),
			'link' => array('constraint' => 100, 'type' => 'varchar'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('slideshows');
	}
}