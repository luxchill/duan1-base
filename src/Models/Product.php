<?php

namespace User\Duan1\Models;

use User\Duan1\Commons\Model;

class Product extends Model
{
	public function getAllProducts()
	{
		try {
			$sql = "SELECT * FROM products ORDER BY id DESC";
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
			$sql = "SELECT * FROM products WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			return $stmt->fetch();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	function insert($name, $price, $image, $description, $views, $id_category)
	{
		try {
			$sql = "INSERT INTO products (name, price, image, description, views, id_category) VALUES (:name, :price, :image, :description, :views, :id_category)";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":price", $price);
			$stmt->bindParam(":image", $image);
			$stmt->bindParam(":description", $description);
			$stmt->bindParam(":views", $views);
			$stmt->bindParam(":id_category", $id_category);
			$stmt->execute();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function update($id, $name, $price, $image, $description, $views, $id_category)
	{
		try {
			$sql = "UPDATE products SET name = :name, price = :price, image = :image, description = :description, views = :views, id_category = :id_category WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":price", $price);
			$stmt->bindParam(":image", $image);
			$stmt->bindParam(":description", $description);
			$stmt->bindParam(":views", $views);
			$stmt->bindParam(":id_category", $id_category);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function deleteByID($id)
	{
		try {
			$sql = "DELETE FROM products WHERE id = :id";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function filterCategory($id)
	{
		try {
			$sql = "SELECT * FROM products WHERE id_category = :id_category";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(":id_category", $id);
			$stmt->execute();
			return $stmt->fetch();
		}catch (\Exception $e){
			die($e->getMessage());
		}
	}

	public function getTotalCount()
	{
		try {
			$sql = "SELECT COUNT(*) FROM products";
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
			return $stmt->fetchColumn();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}

	public function getAllPage($limit, $initial_page){
		try {
			$sql = "SELECT * FROM products ORDER BY id DESC LIMIT :limit OFFSET :offset";
			$stmt = $this->connect->prepare($sql);
			$stmt->bindParam(':limit', $limit);
			$stmt->bindParam(':offset', $initial_page);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (\Exception $e) {
			die($e->getMessage());
		}
	}
}