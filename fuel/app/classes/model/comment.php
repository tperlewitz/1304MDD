<?php
use Orm\Model;

class Model_Comment extends Model
{

	//shows what is available from the comment database
	protected static $_properties = array(
		'id',
		'author_id',
		'comment',
		'post_id',
		'created_at',
		'updated_at',
	);

	//states that the author_id belongs to user
	protected static $_belongs_to = array(
		'user' => array(
			'key_from' =>'author_id'
		)
	);

	//allows for created at to be created for comment database
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
		$val->add_field('author_id', 'Author Id', 'required|valid_string[numeric]');
		$val->add_field('comment', 'Comment', 'required');
		$val->add_field('post_id', 'Post Id', 'required|valid_string[numeric]');

		return $val;
	}

}
