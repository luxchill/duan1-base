<?php

namespace User\Duan1\Models;

use User\Duan1\Commons\Model;

class Category extends Model
{
	public function getAll()
	{
		try {
			$sql = "SELECT * FROM category ORDER BY id DESC ";
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function getAllPage($limit, $initial_page)
	{
		try {
			$sql = "SELECT * FROM category ORDER BY id DESC LIMIT :limit OFFSET :offset";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(':limit', $limit);
			$stmt->bindParam(':offset', $initial_page);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$sql = "SELECT * FROM category WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			return $stmt->fetch();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function insert($name)
	{
		try {
			$sql = "INSERT INTO category (name) VALUES (:name)";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":name", $name);
			$stmt->execute();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function update($id, $name)
	{
		try {
			$sql = "UPDATE category SET name = :name WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function deleteById($id)
	{
		try {
			$sql = "DELETE FROM category WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function getForMenu()
	{
		try {
			$sql = "SELECT id, name FROM category";

			$stmt = $this->connect->prepare($sql);

			$stmt->execute();

			return $stmt->fetchAll();
		} catch (\Exception $e) {
			echo 'ERROR: ' . $e->getMessage();
			die;
		}
	}

	public function getTotalCount()
	{
		try {
			$sql = "SELECT COUNT(*) FROM category";
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
			return $stmt->fetchColumn();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}
}
