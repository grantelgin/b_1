<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'token' => array('constraint' => 255, 'type' => 'varchar'),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'home_city' => array('constraint' => 255, 'type' => 'varchar'),
			'home_st' => array('constraint' => 255, 'type' => 'varchar'),
			'homeCity_id' => array('constraint' => 11, 'type' => 'int'),
			'work_city' => array('constraint' => 255, 'type' => 'varchar'),
			'work_st' => array('constraint' => 255, 'type' => 'varchar'),
			'workCity_id' => array('constraint' => 11, 'type' => 'int'),
			'ownsHome' => array('type' => 'tinyint'),
			'hasDriversLic' => array('type' => 'tinyint'),
			'hasAutomobile' => array('type' => 'tinyint'),
			'garage_city' => array('constraint' => 255, 'type' => 'varchar'),
			'garage_st' => array('constraint' => 255, 'type' => 'varchar'),
			'garageCity_id' => array('constraint' => 11, 'type' => 'int'),
			'hasBiz' => array('type' => 'tinyint'),
			'hasBizLic' => array('type' => 'tinyint'),
			'first_name' => array('constraint' => 255, 'type' => 'varchar'),
			'last_name' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}