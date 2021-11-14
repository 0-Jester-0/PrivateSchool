<?php

namespace Apps\Models;

use Core\Database\Database;

class Groups extends \Core\Model
{
	/**
	 * @return string
	 */
	protected static function getTableName(): string
	{
		return "groups";
	}

	/**
	 * SQL запрос на добавление записи в таблицу
	 * @param $arr
	 */
	public static function insert($arr)
	{
		$query = Database::prepare("INSERT INTO " . static::getTableName() . " (name, path_photo_group, id_course, start_date) 
											VALUES (:name, :path_photo_group, :id_course, :start_date)");
		$query->bindValue(":name", $arr['name']);
		$query->bindValue(":path_photo_group", $arr['pathPhoto']);
		$query->bindValue(":id_course", $arr['idCourse'], \PDO::PARAM_INT);
		$query->bindValue(":start_date", $arr['startDate']);
		$query->execute();
	}

	/**
	 * SQL запрос на изменение записи
	 * @param $id
	 * @param $arr
	 */
	public static function update($id, $arr)
	{
		$query = Database::prepare("UPDATE " . static::getTableName() . " SET name = :name, id_course = :id_course, start_date = :start_date WHERE id = :id" );
		$query->bindValue(":name", $arr['name']);
		$query->bindValue(":id_course", $arr['idCourse'], \PDO::PARAM_INT);
		$query->bindValue(":start_date", $arr['startDate']);
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
	}

	/**
	 * SQL запрос на получение пути к файлу по id конкретной записи
	 * @param $id
	 * @return string|null
	 */
	public static function getPathPhoto($id): ?string
	{
		$query = Database::prepare("SELECT path_photo_group FROM " . static::getTableName() . " WHERE id = :id");
		$query->bindValue(":id", $id);
		$query->execute();
		$result = $query->fetch(\PDO::FETCH_ASSOC);
		return $result = array_shift($result);
	}

	/**
	 * SQL запрос на получение 1 конкретизированной записи
	 * @param $id
	 * @return mixed
	 */
	public static function getElement($id)
	{
		$query = Database::prepare("SELECT groups.*, courses.name as course_name FROM groups 
    										JOIN courses on groups.id_course = courses.id WHERE groups.id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetch(\PDO::FETCH_ASSOC);
		return $result;
	}
}