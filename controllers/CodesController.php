<?php

namespace app\controllers;

use app\models\Code;
use \lithium\storage\Session;
use \lithium\util\Set;

class CodesController extends \lithium\action\Controller{
	
	/***
	*
	*  Little Code snippet library
	*
	*/
	
	public function index(){
		defaults = array('page' => 1, 'limit' => 20, 'order' => array('descending' => true));
		$params = Set::merge($defaults, $this->request->params);
		list($limit,$page,$order) = array($params['limit'], $params['page'], $params['order']);
	}
}

?>