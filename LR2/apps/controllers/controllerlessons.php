<?php

namespace Apps\Controllers;

use Apps\Models\Lessons;
use Core\View;

class ControllerLessons extends \Core\Controller
{
	protected string $path = "lessons";
	protected string $class = Lessons::class;

	/**
	 * Метод добавления новой записи в таблицу базы данных
	 * @throws \Exception
	 */
	public function actionAdd()
	{
		$this->array ['courses'] = \Apps\Models\Courses::getAll();
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->Validation())
			{
				$arr = $_POST;
				$this->class::insert($arr);

				header('Location: /' . $this->path . '/show');
				exit();
			} else
			{
				$this->array ['errors']  = $this->errors;
				View::renderPage($this->path . "/add.php", ["data" => $this->array]);
			}
		} else
		{
			View::renderPage($this->path . "/add.php", ["data" => $this->array]);
		}
	}

	/**
	 * Метод изменения выбранной записи в таблице
	 * @param $id
	 * @throws \Exception
	 */
	public function actionEdit($id)
	{
		$this->array ['selectedItem'] = $this->class::getById($id);
		$this->array ['courses'] = \Apps\Models\Courses::getAll($id);
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->Validation())
			{
				$arr = $_POST;
				$this->class::update($id, $arr);

				header('Location: /' . $this->path . '/show');
				exit();
			} else
			{
				$this->array ['errors'] = $this->errors;
				View::renderPage($this->path . "/edit.php", ["data" => $this->array]);
			}
		} else
		{
			View::renderPage($this->path . "/edit.php", ["data" => $this->array]);
		}
	}
}