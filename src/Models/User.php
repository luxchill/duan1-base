<?php

namespace User\Duan1\Models;

use User\Duan1\Commons\Model;

class User extends Model
{
	public function getAll()
	{
		try {
			$sql = "SELECT * FROM users ORDER BY id DESC ";
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$sql = "SELECT * FROM users WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			return $stmt->fetch();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function insert($username, $email, $password)
	{
		try {
			$sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":password", $password);
			$stmt->execute();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function update($id, $username, $email, $password, $image)
	{
		try {
			$sql = "UPDATE users SET username = :username, email = :email, password = :password, image = :image WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":password", $password);
			$stmt->bindParam(":image", $image);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function deleteByID($id)
	{
		try {
			$sql = "DELETE FROM users WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function getByEmail($email)
	{
		try {
			$sql = "SELECT * FROM users WHERE email = :email";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":email", $email);
			$stmt->execute();
			return $stmt->fetch();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}
}