<?php

namespace app\models;

class Post extends \lithium\data\Model{
	
/*	protected $_schema = array(
			'title' => array('type' => 'string', 'null' => false),
			'body' => array('type' => 'string', 'null' => false),
			'author' => array('type' => 'string', 'null' => false),
			'created' => array('type' => 'string', 'null' => false),
			'modified' => array('type' => 'string','null' => false),
			'slug' => array('type' => 'string', 'null' => false)
		);
*/	
	public $validates = array(
		'title' => array('notEmpty', 'message' => 'Every Article needs a title'),
		'body' => array('notEmpty', 'message' => 'Every Article needs some content')
	);
	public static function slug($string, $replacement = '-') {
		$map = array(
			'/[^\w\s]/' => ' ', '/\\s+/' => $replacement,
			'/(?<=[a-z])([A-Z])/' => $replacement . '\\1',
			str_replace(':rep', preg_quote($replacement, '/'), '/^[:rep]+|[:rep]+$/') => '',
		);
		return preg_replace(array_keys($map), array_values($map), $string);
	}
}

?>
