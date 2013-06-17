<?php

namespace Fuel\Migrations;

class Create_map_regulatorscities
{
	public function up()
	{
		\DBUtil::create_table('map_regulatorscities', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'regulator_id' => array('constraint' => 11, 'type' => 'int'),
			'city_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('map_regulatorscities');
	}
}