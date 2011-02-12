<?php

namespace app\controllers;

class PagesController extends \lithium\action\Controller {

	public function view() {
		$path = func_get_args();
		
		if (empty($path)) {
			$path = array('index');
		}
		if ($path[0] == 'resume'){
			$this->_render['layout'] = 'resume';
		}
			$this->render(array('template' => join('/', $path)));
	}
}

?>
