<?php
use Orm\Model;

class Model_User extends Model
{
	//lists out the properties available to the user
	protected static $_properties = array(
		'id',
		'username',
		'created_at',
		'updated_at',
	);

	//says that users can have both many reviews and comments
	protected static $_has_many = array(
		'reviews' => array(
			'key_to' => 'author_id',
		),
		'comments' => array(
			'key_to' => 'author_id',
		),
	);

	//protected static $_has_many = array(
	//	'comments' => array(
	//		'key_to' => 'author_id',
	//	)
	//);

	//allows the created at to be created
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

	//requires a username and password
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('username', 'Username', 'required|max_length[255]');
		$val->add_field('password', 'Password', 'required|max_length[255]');

		return $val;
	}

}
