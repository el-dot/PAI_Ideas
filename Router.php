<?php class Router {
	private static $controllers = array(
		'Main','Register','Login'
	);
	private $controller;
	private $action;
	private $params;
	function __construct($route) {
		$route = explode('/',$route);
		$this->controller = $route[0];
		$this->action = $route[1];
		$this->params = array_slice($route,2);
		if (strlen($this->controller) < 2)  {
			$this->controller = 'Main';
		}
		if (strlen($this->action) < 2) {
			$this->action = 'call';
		}
		if (!in_array($this->controller, self::$controllers)) {
			header('Location: ' . '/notFound404');
			exit;
		}

	}
	function getController() {
			return new $this->controller;
	}
	function getAction() {
		return $this->action;
	}
	function getParams() {
		return $this->params;
	}
} ?>