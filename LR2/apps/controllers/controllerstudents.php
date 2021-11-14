<?php

namespace Apps\Controllers;

use Apps\Models\Students;
use Core\View;

class ControllerStudents extends \Core\Controller
{
	protected string $path = "students";
	protected string $class = Students::class;

	/**
	 * Метод добавления новой записи в таблицу базы данных
	 * @throws \Exception
	 */
	public function actionAdd()
	{
		$this->array ['groups'] = \Apps\Models\Groups::getAll();
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->Validation())
			{
				$image = $_FILES["pathPhoto"];
				$fileName = 's' . time() . basename($image['name']);

				$arr = $_POST;
				$arr['pathPhoto'] = "/img/uploads/" . $fileName;

				move_uploaded_file($image['tmp_name'], $_SERVER["DOCUMENT_ROOT"] . $arr['pathPhoto']);

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
		$this->array ['groups'] = \Apps\Models\Groups::getAll();
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->Validation())
			{
				$arr = $_POST;
				$this->class::update($id, $arr);

				header('Location: /' . $this->path . '/show');
				exit();
			}
			else
			{
				$this->array ["errors"] = $this->errors;
				View ::renderPage($this->path . "/edit.php", ["data" => $this->array]);
			}
		}
		else
		{
			View::renderPage($this->path . '/edit.php', ["data" => $this->array]);
		}
	}

	/**
	 * Метод удаления записи из таблицы вместе с загруженным файлом
	 * с названием соответствующим значению поля
	 * @param $id
	 */
	public function actionDelete($id)
	{
		$image = $this->class::getPathPhoto($id);

		if($image != null)
		{
			unlink($_SERVER['DOCUMENT_ROOT'].$image);
		}

		$object = $this->class::delete($id);

		header('Location: /' . $this->path . '/show');
		exit();
	}
}