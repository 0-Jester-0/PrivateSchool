<?php

namespace Apps\Models;

use Core\Database\Database;

class Lessons extends \Core\Model
{
	/**
	 * @return string
	 */
	protected static function getTableName(): string
	{
		return "lessons";
	}

	/**
	 * SQL запрос на добавление записи в таблицу
	 * @param $arr
	 */
	public static function insert($arr)
	{
		$query = Database::prepare("INSERT INTO " . static::getTableName() . " (name, id_course) VALUES (:name, :id_course)");
		$query->bindValue(":name", $arr['name']);
		$query->bindValue(":id_course", $arr['idCourse'], \PDO::PARAM_INT);
		$query->execute();
	}

	/**
	 *  SQL запрос на изменение записи
	 * @param $id
	 * @param $arr
	 */
	public static function update($id, $arr)
	{
		$query = Database::prepare("UPDATE " . static::getTableName() . " SET name = :name, id_course = :id_course WHERE id = :id");
		$query->bindValue(":name", $arr['name']);
		$query->bindValue(":id_course", $arr['idCourse'], \PDO::PARAM_INT);
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
		$query = Database::prepare("SELECT lessons.*, courses.name as course_name FROM lessons JOIN courses 
    										ON lessons.id_course = courses.id WHERE lessons.id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetch(\PDO::FETCH_ASSOC);
		return $result;
	}
}