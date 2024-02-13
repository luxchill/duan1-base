<?php /** @noinspection ALL */

namespace User\Duan1\Commons;

class Model
{
	protected \PDO|null $connect;
	public function __construct()
	{
		$host = DB_HOST;
		$port = DB_PORT;
		$dbname = DB_NAME;

		try {
			$this->connect = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);
			$this->connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$this->connect->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
		}catch (\PDOException $PDOException){
			die($PDOException->getMessage());
		}
	}

	public function testConnect()
	{
		echo '<pre>';
		print_r($this->connect);
		echo '</pre>';
	}

	public function __destruct()
	{
		$this->connect = null;
	}

}