<?php
use Orm\Model;

class Model_ComplianceItem extends Model
{
	protected static $_properties = array(
		'id',
		'regulator_id',
		'homeCityId',
		'homeSt',
		'workCityId',
		'usa',
		'ciname',
		'cidesc',
		'cicar',
		'cihome',
		'cibusiness',
		'cidriverslic',
		'cibizlic',
		'cidog',
		'cifreq',
		'cifee',
		'cipenaltyfee',
		'cipenaltydesc',
		'regulatorName',
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
		$val->add_field('regulator_id', 'Regulator Id', 'required|valid_string[numeric]');
		$val->add_field('ciname', 'Ciname', 'required|max_length[255]');
		$val->add_field('cidesc', 'Cidesc', 'required|max_length[555]');
		$val->add_field('cicar', 'Cicar', 'max_length[1]');
		$val->add_field('cihome', 'Cihome', 'max_length[1]');
		$val->add_field('cibusiness', 'Cibusiness', 'max_length[1]');
		$val->add_field('cidriverslic', 'Cidriverslic', 'max_length[1]');
		$val->add_field('cibizlic', 'Cibizlic', 'max_length[1]');
		$val->add_field('cifreq', 'Cifreq', 'max_length[255]');
		$val->add_field('cifee', 'Cifee', 'max_length[255]');
		$val->add_field('cipenaltyfee', 'Cipenaltyfee', 'max_length[255]');
		$val->add_field('cipenaltydesc', 'Cipenaltydesc', 'max_length[255]');
		$val->add_field('regulatorName', 'Regulator Name', 'max_length[255]');

		return $val;
	}

}
