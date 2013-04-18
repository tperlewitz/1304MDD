<?php

namespace Fuel\Migrations;

class Create_entries
{
	public function up()
	{
		\DBUtil::create_table('entries', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'artist' => array('constraint' => 255, 'type' => 'varchar'),
			'venue' => array('constraint' => 255, 'type' => 'varchar'),
			'city' => array('constraint' => 255, 'type' => 'varchar'),
			'opener' => array('constraint' => 255, 'type' => 'varchar'),
			'review' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('entries');
	}
}