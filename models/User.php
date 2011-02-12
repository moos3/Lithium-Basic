<?php

namespace app\models;

class User extends \lithium\data\Model {}

User::applyFilter('save', function ($self,$params,$chain){
	$document = $params['entity'];
	if(!$document->_id){
		$document->password = \lithium\util\String::hash($document->password);
	}
	if (!empty($params['data'])){
		$document->set($params['data']);
	}
	$params['entity'] = $document;
	return $chain->next($self,$params,$chain);
});

?>
