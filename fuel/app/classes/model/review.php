<?php
use Orm\Model;

class Model_Review extends Model
{
	protected static $_properties = array(
		'id',
		'artist',
		'album',
		'review',
		'author_id',
		'created_at',
		'updated_at',
	);

	protected static $_has_many = array('comments');

	protected static $_belongs_to = array(
		'user' => array(
			'key_from' => 'author_id',
		)
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
		$val->add_field('album', 'Album', 'required|max_length[255]');
		$val->add_field('review', 'Review', 'required');
		$val->add_field('author_id', 'Author Id', 'required|valid_string[numeric]');

		return $val;
	}

}
