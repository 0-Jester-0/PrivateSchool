<?php

namespace Apps\Models;

use Core\Database\Database;

class Students extends \Core\Model
{
	/**
	 * @return string
	 */
	protected static function getTableName(): string
	{
		return "students";
	}

	/**
	 * SQL запрос на добавление записи в таблицу
	 * @param $arr
	 */
	public static function insert($arr)
	{
		$query = Database::prepare("INSERT INTO " . static ::getTableName() . " (name, path_photo, id_group, date_birthday) 
											VALUES (:name, :path_photo, :id_group, :date_birthday)");
		$query -> bindValue(":name", $arr['name']);
		$query -> bindValue(":path_photo", $arr['pathPhoto']);
		$query -> bindValue(":id_group", $arr['idGroup'], \PDO::PARAM_INT);
		$query -> bindValue(":date_birthday", $arr['dateBirthday']);
		$query -> execute();
	}

	/**
	 * SQL запрос на изменение записи
	 * @param $id
	 * @param $arr
	 */
	public static function update($id, $arr)
	{
		$query = Database::prepare("UPDATE " . static::getTableName() . " SET name = :name, id_group = :id_group, date_birthday = :date_birthday WHERE id = :id" );
		$query->bindValue(":name", $arr['name']);
		$query->bindValue(":id_group", $arr['idGroup'], \PDO::PARAM_INT);
		$query->bindValue(":date_birthday", $arr['dateBirthday']);
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
		$query = Database::prepare("SELECT path_photo FROM " . static::getTableName() . " WHERE id = :id");
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
		$query = Database::prepare("SELECT students.*, `groups`.name as group_name FROM students JOIN `groups` ON id_group = `groups`.id
											WHERE students.id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetch(\PDO::FETCH_ASSOC);
		return $result;
	}
}