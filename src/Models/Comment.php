<?php

namespace User\Duan1\Models;

use User\Duan1\Commons\Model;

class Comment extends Model
{
	public function getAll()
	{
		try {
			$sql = "SELECT * FROM comments ORDER BY id DESC ";
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$sql = "SELECT * FROM comments WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			return $stmt->fetch();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function insert($content, $id_user, $id_product, $time_comment)
	{
		try {
			$sql = "INSERT INTO comments (content, id_user, id_product, time_comment) VALUES (:content, :id_user, :id_product, :time_comment)";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":content", $content);
			$stmt->bindParam(":id_user", $id_user);
			$stmt->bindParam(":id_product", $id_product);
			$stmt->bindParam(":time_comment", $time_comment);
			$stmt->execute();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function update($id, $content, $id_user, $id_product, $time_comment)
	{
		try {
			$sql = "UPDATE comments SET content = :content, id_user = :id_user, id_product = :id_product, time_comment = :time_comment WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":content", $content);
			$stmt->bindParam(":id_user", $id_user);
			$stmt->bindParam(":id_product", $id_product);
			$stmt->bindParam(":time_comment", $time_comment);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function deleteById($id)
	{
		try {
			$sql = "DELETE FROM comments WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}


}