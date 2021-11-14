<?php
namespace Apps\Models;

use Core\Database\Database;

class Courses extends \Core\Model
{
	/**
	 * @return string
	 */
	protected static function getTableName(): string
	{
		return "courses";
	}

	/**
	 * SQL запрос на добавление записи в таблицу
	 * @param $name
	 */
	public static function insert($name)
	{
		$query = Database::prepare("INSERT INTO " . static::getTableName() . " (name) VALUES (:name)");
		$query->bindValue(":name", $name);
		$query->execute();
	}

	/**
	 * SQL запрос на изменение записи
	 * @param $id
	 * @param $name
	 */
	public static function update($id, $name)
	{
		$query = Database::prepare("UPDATE " .static::getTableName()." SET name = :name WHERE id = :id");
		$query->bindValue(":name", $name);
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
	}

	/**
	 * SQL запрос на получение 1 конкретизированной записи
	 * @param $id
	 * @return array|false
	 */
	public static function getElement($id)
	{
		$query = Database::prepare("SELECT courses.*, groups.name as group_name FROM courses INNER JOIN groups
    										ON courses.id = groups.id_course WHERE courses.id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetchAll(\PDO::FETCH_ASSOC);
		return $result;
	}
}