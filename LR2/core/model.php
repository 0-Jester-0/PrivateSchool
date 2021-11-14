<?php
namespace Core;

use Core\Database\Database;
abstract class Model
{
	protected static function getTableName() :string
	{
		return '';
	}

	/**
	 * Запрос на получение данных из всей таблицы
	 * @return array|null
	 */
	public static function getAll(): ?array
	{
		$query = Database::prepare("SELECT * FROM " . static::getTableName() ."  ORDER BY id ASC");
		$query->execute();
		$result = $query->fetchAll(\PDO::FETCH_ASSOC);
		return $result;
	}

	/**
	 * Запрос на удаление одной записи из таблицы по id
	 * @param $id
	 */
	public static function delete($id)
	{
		$query = Database::prepare("DELETE FROM " . static::getTableName() . " WHERE id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
	}

	/**
	 * Получение 1 записи для изменения
	 * @param $id
	 * @return array|null
	 */
	public static function getById($id): ?array
	{
		$query = Database::prepare("SELECT * FROM " . static::getTableName() . " WHERE id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetch(\PDO::FETCH_ASSOC);
		return $result;
	}

	public static function insert($arr)
	{

	}

	public static function update($id, $arr)
	{

	}

	public static function getElement($id)
	{

	}
}