<?php
use Orm\Model;

class Model_City extends Model
{
	protected static $_properties = array(
		'id',
		'zipcode',
		'state',
		'city',
		'county',
		'latitude',
		'longitude',
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
		$val->add_field('zipcode', 'Zipcode', 'required|max_length[255]');
		$val->add_field('state', 'State', 'required|max_length[255]');
		$val->add_field('city', 'City', 'required|max_length[255]');
		$val->add_field('county', 'County', 'required|max_length[255]');
		$val->add_field('latitude', 'Latitude', 'required|max_length[255]');
		$val->add_field('longitude', 'Longitude', 'required|max_length[255]');

		return $val;
	}

}
