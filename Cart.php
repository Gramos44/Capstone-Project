<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	<h1>Shopping Cart</h1>
	<table>
		<tr>
			<th>Product Name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php
			// Start session
			session_start();

			// Connect to database
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "database_name";
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Retrieve products from database
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);

			// Display products in table
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row["product_name"] . "</td>";
					echo "<td>" . $row["price"] . "</td>";
					echo "<td><a href='$_SERVER[PHP_SELF]?action=add&id=" . $row["product_id"] . "'>Add to Cart</a></td>";
					echo "</tr>";
				}
			} else {
				echo "0 results";
			}

			// Add product to cart
			if (isset($_GET["action"]) && $_GET["action"] == "add") {
				$product_id = $_GET["id"];
				if (!isset($_SESSION["cart"])) {
					$_SESSION["cart"] = array();
				}
				if (!in_array($product_id, $_SESSION["cart"])) {
					array_push($_SESSION["cart"], $product_id);
				}
			}

			mysqli_close($conn);
		?>
	</table>
	<h2>Shopping Cart</h2>
	<table>
		<tr>
			<th>Product Name</th>
			<th>Price</th>
		</tr>
		<?php
			// Display cart contents
			if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0) {
				$cart_items = implode(",", $_SESSION["cart"]);
				$sql = "SELECT * FROM products WHERE product_id IN ($cart_items)";
				$result = mysqli_query($conn, $sql);
				$total_price = 0;
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row["product_name"] . "</td>";
					echo "<td>" . $row["price"] . "</td>";
					echo "</tr>";
					$total_price += $row["price"];
				}
				echo "<tr><td>Total</td><td>$total_price</td></tr>";
			} else {
				echo "<tr><td colspan='2'>Your cart is empty.</td></tr>";
			}
		?>
	</table>
</body>
</html>
