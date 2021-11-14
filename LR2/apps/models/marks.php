<?php

namespace Apps\Models;

use Core\Database\Database;

class Marks extends \Core\Model
{
	/**
	 * @return string
	 */
	protected static function getTableName(): string
	{
		return "marks";
	}

	/**
	 * SQL запрос на добавление записи в таблицу
	 * @param $arr
	 */
	public static function insert($arr)
	{
		$query = Database::prepare("INSERT INTO " . static::getTableName() . " (id_student, id_lesson, value) 
											VALUES (:id_student, :id_lesson, :value)");
		$query->bindValue(":id_student", $arr['idStudent'], \PDO::PARAM_INT);
		$query->bindValue(":id_lesson", $arr['idLesson'], \PDO::PARAM_INT);
		$query->bindValue(":value", $arr['value'], \PDO::PARAM_INT);
		$query->execute();
	}

	/**
	 * SQL запрос на изменение записи
	 * @param $id
	 * @param $arr
	 */
	public static function update($id, $arr)
	{
		$query = Database::prepare("UPDATE " . static::getTableName() . " SET  id_student = :id_student, id_lesson = :id_lesson, value = :value WHERE id = :id");
		$query->bindValue(":id_student", $arr['idStudent'], \PDO::PARAM_INT);
		$query->bindValue(":id_lesson", $arr['idLesson'], \PDO::PARAM_INT);
		$query->bindValue(":value", $arr['value'], \PDO::PARAM_INT);
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
	}

	/**
	 * SQL запрос на получение 1 конкретизированной записи
	 * @param $id
	 * @return mixed
	 */
	public static function getElement($id)
	{
		$query = Database::prepare("SELECT marks.*, students.name AS student_name, lessons.name AS lesson_name FROM marks
    										JOIN students ON marks.id_student = students.id
    										JOIN lessons ON marks.id_lesson = lessons.id
											where marks.id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetch(\PDO::FETCH_ASSOC);
		return $result;
	}
}