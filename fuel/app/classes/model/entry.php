<?php
use Orm\Model;

class Model_Entry extends Model
{
	protected static $_properties = array(
		'id',
		'artist',
		'venue',
		'city',
		'opener',
		'review',
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
		$val->add_field('artist', 'Artist', 'required|max_length[255]');
		$val->add_field('venue', 'Venue', 'required|max_length[255]');
		$val->add_field('city', 'City', 'required|max_length[255]');
		$val->add_field('opener', 'Opener', 'required|max_length[255]');
		$val->add_field('review', 'Review', 'required');

		return $val;
	}

}
