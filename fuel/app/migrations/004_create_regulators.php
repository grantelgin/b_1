<?php

namespace Fuel\Migrations;

class Create_regulators
{
	public function up()
	{
		\DBUtil::create_table('regulators', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'regName' => array('constraint' => 255, 'type' => 'varchar'),
			'regWeb' => array('constraint' => 255, 'type' => 'varchar'),
			'regAddDesc' => array('constraint' => 255, 'type' => 'varchar'),
			'regStreet1' => array('constraint' => 255, 'type' => 'varchar'),
			'regStreet2' => array('constraint' => 255, 'type' => 'varchar'),
			'regCityId' => array('constraint' => 11, 'type' => 'int'),
			'regAddDesc2' => array('constraint' => 255, 'type' => 'varchar'),
			'regAddStreet12' => array('constraint' => 255, 'type' => 'varchar'),
			'regAddStreet22' => array('constraint' => 255, 'type' => 'varchar'),
			'regCity2' => array('constraint' => 255, 'type' => 'varchar'),
			'regAddDesc3' => array('constraint' => 255, 'type' => 'varchar'),
			'regAddStreet13' => array('constraint' => 255, 'type' => 'varchar'),
			'regAddStreet23' => array('constraint' => 255, 'type' => 'varchar'),
			'regCity3' => array('constraint' => 255, 'type' => 'varchar'),
			'regPhone' => array('constraint' => 255, 'type' => 'varchar'),
			'regLogo' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('regulators');
	}
}