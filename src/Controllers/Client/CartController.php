<?php

namespace User\Duan1\Controllers\Client;

use User\Duan1\Commons\Controller;

class CartController extends Controller
{
	public function __construct()
	{
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = [];
		}
	}

	public function index()
	{
		//		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		////			// Xử lý POST request
		//			echo '123';
		//		} else {
		//			// Xử lý GET request
		//			// Trả về trạng thái không hợp lệ
		//			echo 'Yêu cầu không hợp lệ';
		//		}

		if (!empty($_POST)) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$price = $_POST['price'];
			$image = $_POST['image'];
			$id_category = $_POST['id_category'];


			$index = false;
			if (!empty($_SESSION['cart'])) {
				$index = array_search($id, array_column($_SESSION['cart'], 'id'));
			}

			// array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
			if ($index !== false) {
				$_SESSION['cart'][$index]['quantity'] += 1;
			} else {
				// Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
				$product = [
					'id' => $id,
					'name' => $name,
					'price' => $price,
					'image' => $image,
					'id_category' => $id_category,
					'quantity' => 1
				];
				$_SESSION['cart'][] = $product;
				// var_dump($_SESSION['cart']);die;
			}
			// Trả về số lượng sản phẩm của giỏ hàng
			echo count($_SESSION['cart']);
		}

		echo "<pre>";
		var_dump($_SESSION['cart']);
		echo "</pre>";
	}
}
