<?php
namespace Apps\Controllers;

use Apps\Models\Courses;
use Core\View;

class ControllerCourses extends \Core\Controller
{
	protected string $path = 'courses';
	protected string $class = Courses::class;

	/**
	 * Метод добавления новой записи в таблицу базы данных
	 * @throws \Exception
	 */
	public function actionAdd()
	{
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->validation())
			{
				$name = $_POST['name'];
				$this->class::insert($name);

				header('Location: /'.$this->path.'/show');
				exit();
			}
			else
			{
				$this->array ["errors"] = $this->errors;
				View::renderPage($this->path.'/add.php', ["data" => $this->array]);
			}
		}
		else
		{
			View::renderPage($this->path.'/add.php', ["data" => $this->array]);
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
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->validation())
			{
				$name = $_POST['name'];
				$this->class::update($id, $name);

				header('Location: /'.$this->path.'/show');
				exit();
			}
			else
			{
				$this->array ["errors"] = $this->errors;
				View::renderPage($this->path.'/edit.php', ["data" => $this->array]);
			}
		}
		else
		{
			View::renderPage($this->path . '/edit.php', ["data" => $this->array]);
		}
	}

	/**
	 * Просмотр одной записи
	 * @param $id
	 * @throws \Exception
	 */
	public function actionSingle($id)
	{
		$this->array ['selected'] = $this->class::getElement($id);
		if (!empty($this->array['selected']))
		{
			\Core\View::renderPage($this->path . "/single.php", ["data" => $this->array]);
		} else
		{
			$this->array ['selected'] = $this->class::getById($id);
			\Core\View::renderPage($this->path . "/single.php", ["data" => $this->array]);
		}
	}
}