<?php
use Orm\Model;

class Model_Regulator extends Model
{
	protected static $_properties = array(
		'id',
		'regname',
		'regweb',
		'regadddesc',
		'regstreet1',
		'regstreet2',
		'regcityid',
		'regadddesc2',
		'regaddstreet12',
		'regaddstreet22',
		'regcity2',
		'regadddesc3',
		'regaddstreet13',
		'regaddstreet23',
		'regcity3',
		'regphone',
		'reglogo',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('regname', 'Regname', 'required|max_length[255]');
		$val->add_field('regweb', 'Regweb', 'valid_url');
		$val->add_field('regadddesc', 'Regadddesc', 'max_length[255]');
		$val->add_field('regstreet1', 'Regstreet1', 'max_length[255]');
		$val->add_field('regstreet2', 'Regstreet2', 'max_length[255]');
		$val->add_field('regcityid', 'Regcityid', 'valid_string[numeric]');
		$val->add_field('regadddesc2', 'Regadddesc2', 'max_length[255]');
		$val->add_field('regaddstreet12', 'Regaddstreet12', 'max_length[255]');
		$val->add_field('regaddstreet22', 'Regaddstreet22', 'max_length[255]');
		$val->add_field('regcity2', 'Regcity2', 'max_length[255]');
		$val->add_field('regadddesc3', 'Regadddesc3', 'max_length[255]');
		$val->add_field('regaddstreet13', 'Regaddstreet13', 'max_length[255]');
		$val->add_field('regaddstreet23', 'Regaddstreet23', 'max_length[255]');
		$val->add_field('regcity3', 'Regcity3', 'max_length[255]');
		$val->add_field('regphone', 'Regphone', 'max_length[255]');
		$val->add_field('reglogo', 'Reglogo', 'max_length[255]');

		return $val;
	}

}
