<?php

namespace app\models;
use \lithium\util\Validator;

class Comment extends \lithium\data\Model {
	protected $_schema = array(
				'name' => array('type'=>'string','null'=>false),
				'email'=> array('type'=>'string','null'=>false),
				'body' => array('type'=>'string','null'=>false),
				'created' => array('type'=>'string','null'=>false),
				'url' => array('type'=>'string','null'=>false),
				'approved' => array('default'=>true,'type'=>'boolean','null'=>false)
			);

	public $belongsTo = array('Post');
	public $validates = array(
			'name' => array(
					array('notEmpty','message' => 'You Must have a name'),
					array('validName','message' => 'You need to use a real name'),
				),
			'email' => array(
					array('notEmpty','message' => 'You have to set your email, I promise i will not email you'),
					array('email','message'=> 'Must use a real email address'),
				),
			'body' => array(
					array('notEmpty', 'message' => 'You must put text in for a comment')
			),
			'url' => array('url','skipEmpty'=>true,'message'=>'Enter valid website URI')
		);
	Validator::add('validName', '/^[A-za-z0-9\'\s]+$/');
}

?>
