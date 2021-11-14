<?php

namespace Apps\Models;

use Core\Database\Database;

class Diplomas extends \Core\Model
{
	/**
	 * @return string
	 */
	protected static function getTableName(): string
	{
		return "diplomas";
	}

	/**
	 * SQL запрос на добавление записи в таблицу
	 * @param $arr
	 */
	public static function insert($arr)
	{
		$query = Database::prepare("INSERT INTO " . static::getTableName() . " (id_student, year_of_receipt) 
											VALUES (:id_student, :year_of_receipt)");
		$query->bindValue(":id_student", $arr['idStudent'],\PDO::PARAM_INT);
		$query->bindValue(":year_of_receipt", $arr['yearOfReceipt']);
		$query->execute();
	}

	/**
	 * SQL запрос на изменение записи
	 * @param $id
	 * @param $arr
	 */
	public static function update($id, $arr)
	{
		$query = Database::prepare("UPDATE " . static::getTableName() . " SET id_student = :id_student, year_of_receipt = :year_of_receipt
		 																			WHERE id = :id");
		$query->bindValue(":id_student", $arr['idStudent'],\PDO::PARAM_INT);
		$query->bindValue(":year_of_receipt", $arr['yearOfReceipt']);
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
		$query = Database::prepare("SELECT diplomas.*, students.name, students.id_group, students.path_photo, students.date_birthday FROM diplomas 
    										JOIN students ON students.id = id_student WHERE diplomas.id = :id");
		$query->bindValue(":id", $id, \PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetch(\PDO::FETCH_ASSOC);
		return $result;
	}
}