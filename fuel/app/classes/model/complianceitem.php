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
		'cifreq',
		'cifee',
		'cipenaltyfee',
		'cipenaltydesc',
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
		$val->add_field('cidesc', 'Cidesc', 'required|max_length[255]');
		$val->add_field('cicar', 'Cicar', 'required');
		$val->add_field('cihome', 'Cihome', 'required');
		$val->add_field('cibusiness', 'Cibusiness', 'required');
		$val->add_field('cidriverslic', 'Cidriverslic', 'required');
		$val->add_field('cibizlic', 'Cibizlic', 'required');
		$val->add_field('cifreq', 'Cifreq', 'required|max_length[255]');
		$val->add_field('cifee', 'Cifee', 'required|max_length[255]');
		$val->add_field('cipenaltyfee', 'Cipenaltyfee', 'required|max_length[255]');
		$val->add_field('cipenaltydesc', 'Cipenaltydesc', 'required|max_length[255]');

		return $val;
	}

}
