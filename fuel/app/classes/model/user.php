<?php
use Orm\Model;

class Model_User extends Orm\Model
{
	protected static $_properties = array(
		'id',
		'token',
		'password',
		'email',
		'home_city',
		'home_st',
		'home_zip',
		'homecity_id',
		'work_city',
		'work_st',
		'work_zip',
		'workcity_id',
		'ownshome',
		'hasdriverslic',
		'hasautomobile',
		'garage_city',
		'garage_st',
		'garagecity_id',
		'hasbiz',
		'hasbizlic',
		'first_name',
		'last_name',
		'created_at',
		'updated_at',
	);
	
	protected static $_has_many = array('cities');
	protected static $_has_many = array('regulators');
	protected static $_has_many = array('complianceitems');
	
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
		$val->add_field('token', 'Token', 'max_length[255]');
		$val->add_field('password', 'Password', 'required|min_length[4]|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('home_city', 'Home City', 'required|max_length[255]');
		$val->add_field('home_st', 'Home St', 'required|max_length[255]');
		$val->add_field('homecity_id', 'Homecity Id', 'valid_string[numeric]');
		$val->add_field('work_city', 'Work City', 'max_length[255]');
		$val->add_field('work_st', 'Work St', 'max_length[255]');
		$val->add_field('workcity_id', 'Workcity Id', 'valid_string[numeric]');
		$val->add_field('ownshome', 'Ownshome', 'valid_string[numeric]');
		$val->add_field('hasdriverslic', 'Hasdriverslic', 'valid_string[numeric]');
		$val->add_field('hasautomobile', 'Hasautomobile', 'valid_string[numeric]');
		$val->add_field('garage_city', 'Garage City', 'max_length[255]');
		$val->add_field('garage_st', 'Garage St', 'max_length[255]');
		$val->add_field('garagecity_id', 'Garagecity Id', 'valid_string[numeric]');
		$val->add_field('hasbiz', 'Hasbiz', 'valid_string[numeric]');
		$val->add_field('hasbizlic', 'Hasbizlic', 'valid_string[numeric]');
		$val->add_field('first_name', 'First Name', 'max_length[255]');
		$val->add_field('last_name', 'Last Name', 'max_length[255]');

		return $val;
	}

	public static function validateAccount($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('token', 'Token', 'max_length[255]');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('first_name', 'First Name', 'required|max_length[255]');
		$val->add_field('last_name', 'Last Name', 'required|max_length[255]');
		
		return $val;
	}
	public static function validateHome($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('home_zip', 'Home Zip', 'required|max_length[5]');
			
		return $val;
	}
	public static function validateWork($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('work_zip', 'Work Zip', 'required|max_length[5]');
				
		return $val;
	}
	public static function validateOwner($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('ownshome', 'Ownshome', 'required');
		$val->add_field('hasdriverslic', 'Hasdriverslic', 'required');
		$val->add_field('hasautomobile', 'Hasautomobile', 'required');
		$val->add_field('hasbiz', 'Hasbiz', 'required');
		$val->add_field('hasbizlic', 'Hasbizlic', 'required');		
		
		return $val;
	}
	public static function validateGarage($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('garage_city', 'Garage City', 'required|max_length[255]');
		$val->add_field('garage_st', 'Garage St', 'required|max_length[255]');
		$val->add_field('garagecity_id', 'Garagecity Id', 'required|valid_string[numeric]');		
		
		return $val;
	}

}
