<?php

namespace Core\Router;

class Router
{
	private $routes;

	/**
	 * Получение всех роутов из массива
	 */
	public function __construct()
	{
		$routesPath = $_SERVER["DOCUMENT_ROOT"]."/core/router/routesconfig.php";
		$this->routes = require $routesPath;
	}

	/**
	 * Функция получения URL в формате строки
	 * @return string|null
	 */
	private function getRequestPath(): ?string
	{
		return !empty($_SERVER["REQUEST_URI"]) ? trim($_SERVER["REQUEST_URI"], '/'): null;
	}

	/**
	 * Метод запуска маршрутизатора
	 */
	public function run()
	{
		$uri = $this->getRequestPath();
		$uri = str_replace(['.php'], '', $uri);
		foreach ($this->routes as $uriPattern => $path)
		{
			if(preg_match("~$uriPattern~", $uri))
			{
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				$section = explode('/', $internalRoute);

				$controllerName = 'Apps\Controllers\Controller'.ucfirst(array_shift($section));
				$actionName = 'action'.ucfirst(array_shift($section));

				if(isset($section))
				{
					$param = array_shift($section);
					$controllerObject = new $controllerName();
					$controllerObject->$actionName($param);
				} else
				{
					$controllerObject = new $controllerName();
					$controllerObject->$actionName();
				}


			}
		}
	}
}