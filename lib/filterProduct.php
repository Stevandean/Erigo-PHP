<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_erigo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$categoryId = isset($_GET['category_id']) ? $_GET['category_id'] : '';

$sql = "SELECT p.id, p.product_name, p.price, p.desc, p.size, p.stock, p.pict, c.categories_name 
        FROM product p 
        JOIN categories c ON p.categories_id = c.id";

if ($categoryId != '') {
    $sql .= " WHERE p.categories_id = ?";
}

$stmt = $conn->prepare($sql);

if ($categoryId != '') {
    $stmt->bind_param('i', $categoryId);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <div class='flex flex-col relative justify-center items-center custom-shadow rounded-lg py-5 px-5'>
            <div class='absolute top-0 left-0 rounded-tl-xl px-3 py-0.5 text-white'>
            </div>
            <img class='w-3/4 rounded-lg mb-5' src='{$row["pict"]}' alt=''>
            <h1 class='font-semibold text-xl mb-10'>
                <p>{$row["product_name"]}</p>
            </h1>
            <h1 class='font-bold text-xl'>
                <p>Rp. {$row["price"]}</p>
            </h1>
        </div>";
    }
} else {
    echo "<div class='text-center w-full'>No products found</div>";
}

$conn->close();
?>
