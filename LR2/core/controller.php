<?php

namespace Core;

abstract class Controller
{
	protected string $path;
	protected string $class;

	public array $errors = [];
	public array $array = [];

	protected array $fieldsCheck = [
		'name',
		'idCourse',
		'idStudent',
		'idLesson',
		'idGroup',
		'value',
		'startDate',
		'dateBirthday',
		'yearOfReceipt'
	];

	public function __construct()
	{
	}

	/**
	 * Метод просмотра всей таблицы
	 * @throws \Exception
	 */
	public function actionShow()
	{
		$arrayData = $this->class::getAll();
		\Core\View::renderPage($this->path . '/show.php', ["data" => $arrayData]);
	}

	/**
	 * Удаление записи из таблицы
	 * @param $id
	 */
	public function actionDelete($id)
	{
		$this->class::delete($id);

		header('Location: /' . $this->path . '/show');
		exit();

	}

	/**
	 * Просмотр одной записи
	 * @param $id
	 * @throws \Exception
	 */
	public function actionSingle($id)
	{
		$this->array ['selected'] = $this->class::getElement($id);
		\Core\View::renderPage($this->path . "/single.php", ["data" => $this->array]);
	}

	/**
	 * Метод добавления новой записи в таблицу базы данных
	 */
	public function actionAdd()
	{

	}

	/**
	 * Метод изменения выбранной записи в таблице
	 * @param $id
	 */
	public function actionEdit($id)
	{

	}

	/**
	 * Валидация полей ввода
	 * @return bool
	 */
	public function validation(): bool
	{
		$count = 0;
		$statusField = false;
		foreach ($_POST as $field => $value)
		{
			if (in_array($field, $this->fieldsCheck))
			{
				if ($value == "" || ctype_space($value))
				{
					$this -> errors [] = "Поле \"$field\" пустое либо состоит из пробелов";
					$count++;
				}
			}
		}
		$count == 0 ? $statusField = true : $statusField = false;

		if (isset($_FILES['pathPhoto']))
		{
			$statusFile = $this -> validateFile();
			if($statusField == true && $statusFile == true)
			{
				return true;
			} else
				return false;
		} else
			return $statusField;
	}

	/**
	 * Валидация файловых полей
	 * @return bool
	 */
	public function validateFile(): bool
	{
		$status = false;

		$types = ["image/jpeg", "image/png"];
		$file = $_FILES['pathPhoto'];
		if ($file['error'] == 4)
		{
			$this->errors [] = "Файл не был загружен";
		} elseif (!in_array($file['type'], $types) && $file['type'] != '')
		{
			$this->errors [] = "Недопустимый формат файла";
		} elseif (($file['size']) / 1000000 > 1)
		{
			$this->errors [] = "Размер файла не должен превышать 1 МБ";
		} else
			$status = true;

		return $status;
	}
}