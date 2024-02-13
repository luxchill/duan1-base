<?php /** @noinspection ALL */

namespace User\Duan1\Commons;

class Model
{
	protected \PDO|null $connect;
	public function __construct()
	{
		$host = $_ENV['DB_HOST'];
		$port = $_ENV['DB_PORT'];
		$dbname = $_ENV['DB_NAME'];

		try {
			$this->connect = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname", $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
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