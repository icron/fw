<?php

class DataBase
{
	/**
	 * Подключение к базе данных mysql
	 */
	public static function connect($host, $dbname, $user, $pass)
	{
		try {
			$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pass);
		} catch (PDOException $e) {
			die('Database error: '.$e->getMessage().'<br/>');
		}
		return $db;
	}

	public function select($condition) {

    }

    // UPDATE users SET name = '...' WHERE ...
    // update('users', ['name' => 'Иван', 'email' => ''], 'is_admin = 1 AND ....')
    public function update($table, array $data, $condition = null) {

    }
}

