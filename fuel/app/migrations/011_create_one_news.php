<?php

namespace Fuel\Migrations;

class Create_one_news
{
	public function up()
	{
		\DBUtil::create_table('one_news', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 100, 'type' => 'varchar'),
			'content' => array('type' => 'text'),
			'about' => array('constraint' => 11, 'type' => 'int'),
			'is_active' => array('constraint' => 1, 'type' => 'tinyint'),
			'is_delete' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('one_news');
	}
}