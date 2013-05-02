<?php

namespace Fuel\Migrations;

class Create_reviews
{
	public function up()
	{
		\DBUtil::create_table('reviews', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'artist' => array('constraint' => 255, 'type' => 'varchar'),
			'album' => array('constraint' => 255, 'type' => 'varchar'),
			'review' => array('type' => 'text'),
			'author_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('reviews');
	}
}