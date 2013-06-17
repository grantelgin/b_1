<?php

namespace Fuel\Migrations;

class Create_complianceitems
{
	public function up()
	{
		\DBUtil::create_table('complianceitems', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'regulator_id' => array('constraint' => 11, 'type' => 'int'),
			'ciName' => array('constraint' => 255, 'type' => 'varchar'),
			'ciDesc' => array('constraint' => 255, 'type' => 'varchar'),
			'ciCar' => array('type' => 'tinyint'),
			'ciHome' => array('type' => 'tinyint'),
			'ciBusiness' => array('type' => 'tinyint'),
			'ciDriversLic' => array('type' => 'tinyint'),
			'ciBizLic' => array('type' => 'tinyint'),
			'ciFreq' => array('constraint' => 255, 'type' => 'varchar'),
			'ciFee' => array('constraint' => 255, 'type' => 'varchar'),
			'ciPenaltyFee' => array('constraint' => 255, 'type' => 'varchar'),
			'ciPenaltyDesc' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('complianceitems');
	}
}