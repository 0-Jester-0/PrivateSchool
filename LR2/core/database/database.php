<?php

namespace Core\Database;

class Database
{
	private \PDO $pdo;
	private static ?Database $instance = null;

	/**
	 * Организация подключения к бд
	 */
	private function __construct()
	{
		$db = require_once $_SERVER['DOCUMENT_ROOT'] .'/core/database/pdoconfig.php';
		$dsn = 'mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'];
		try
		{
			$this->pdo = new \PDO($dsn, $db['user'], $db['password']);
		}catch (\PDOException $exception)
		{
			die($exception->getMessage());
		}
	}

	/**
	 * Создание нового подключения или использование существующего
	 * @return Database|null
	 */
	public static function getInstance(): ?Database
	{
		if (!self::$instance)
		{
			self::$instance = new Database();
		}
		return self::$instance;
	}

	/**
	 * Подключение к базе данных
	 * @return \PDO
	 */
	public static function connection(): \PDO
	{
		return static::getInstance()->pdo;
	}

	/**
	 * Подготовка SQL запроса
	 * @param $statement
	 * @return \PDOStatement
	 */
	public static function prepare($statement): \PDOStatement
	{
		return static::connection()->prepare($statement);
	}
}