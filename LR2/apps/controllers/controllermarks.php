<?php

namespace Apps\Controllers;

use Apps\Models\Marks;
use Core\View;

class ControllerMarks extends \Core\Controller
{
	protected string $path = 'marks';
	protected string $class = Marks::class;

	/**
	 * Метод добавления новой записи в таблицу базы данных
	 * @throws \Exception
	 */
	public function actionAdd()
	{
		$this->array ['students'] = \Apps\Models\Students::getAll();
		$this->array ['lessons'] = \Apps\Models\Lessons::getAll();
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
				$this->array ['errors'] = $this->errors;
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
		$this->array ['students'] = \Apps\Models\Students::getAll();
		$this->array ['lessons'] = \Apps\Models\Lessons::getAll();
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