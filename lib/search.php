<?php
require_once '../db/connection.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $stmt = $conn->prepare("SELECT * FROM product WHERE product_name LIKE ?");
    $searchTerm = "%$query%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    $products = $result->fetch_all(MYSQLI_ASSOC);

    if ($products) {
        foreach ($products as $product) {
            echo "
            <div class='p-2 border-b'>
                <a href='./product.php?id=" . $product['id'] . "'>" . $product['product_name'] ."</a>
            </div>";
        }
    } else {
        echo "<div class='p-2'>No products found</div>";
    }

    $stmt->close();
}