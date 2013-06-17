<?php

namespace Fuel\Migrations;

class Create_cities
{
	public function up()
	{
		\DBUtil::create_table('cities', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'zipCode' => array('constraint' => 255, 'type' => 'varchar'),
			'state' => array('constraint' => 255, 'type' => 'varchar'),
			'city' => array('constraint' => 255, 'type' => 'varchar'),
			'county' => array('constraint' => 255, 'type' => 'varchar'),
			'latitude' => array('constraint' => 255, 'type' => 'varchar'),
			'longitude' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('cities');
	}
}