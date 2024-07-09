<?php
session_start();
require_once '../../lib/seo.php';

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

$id = $_SESSION['id']; // Pastikan user sudah login dan id disimpan di sesi

$sql = "SELECT o.id, u.id AS users_id, p.id AS product_id, p.product_name, p.size, p.price, o.quantity
        FROM `order` o
        JOIN users u ON o.users_id = u.id
        JOIN product p ON o.product_id = p.id
        WHERE u.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Shopping Cart | Erigo Store"); ?>
</head>

<body>
    <main>
        <?php require_once '../../components/core/navbar.php'; ?>

        <section class="min-h-full p-10">
            <h1 class="text-2xl font-extrabold uppercase mb-10">shopping cart</h1>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="border border-gray rounded-lg grid grid-cols-5 px-5 flex justify-center items-center gap-x-10 mb-5">
                        <img class="w-5/6 h-5/6 overflow-clip object-cover rounded-lg" alt="">' . htmlspecialchars($row["pict"]) . ' 
                        <div class="flex flex-col">
                            <span class="text-lg font-bold">' . htmlspecialchars($row["product_name"]) . '</span>
                            <span class="text-lg text-gray">Size : ' . htmlspecialchars($row["size"]) . '</span>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <span class="text-lg font-semibold">Rp.' . number_format($row["price"], 0, ',', '.') . '</span>
                            <div class="flex">
                                <button onclick="decrement(' . $row['id'] . ')" class="w-8 h-8 border rounded-l-md">-</button>
                                <input id="qtyinput' . $row['id'] . '" type="text" class="w-16 h-8 text-center border-y" value="' . $row['quantity'] . '">
                                <button onclick="increment(' . $row['id'] . ')" class="w-8 h-8 border rounded-r-md">+</button>
                            </div>
                        </div>
                        <span class="text-lg font-semibold flex justify-center">Rp.' . number_format($row["price"] * $row["quantity"], 0, ',', '.') . '</span>
                        <button onclick="deleteItem(' . $row['id'] . ')" class="bg-red text-white text-lg font-semibold tracking-wider px-5 py-2 w-40 rounded-lg hover:scale-[1.2] transition-all ease-in-out duration-300">Delete</button>
                    </div>';
                }
            } else {
                echo '<p>Your cart is empty.</p>';
            }
            ?>
            <div class="flex justify-end mt-10">
                <a href="../../payment.html"
                    class="bg-navy text-white px-5 py-2 rounded-lg font-semibold transition-all ease-in-out duration-300 hover:scale-[1.2]">Payment
                    Process</a>
            </div>
        </section>

        <?php require_once '../../components/core/footer.php'; ?>
    </main>

    <script>
        function increment(orderId) {
            // Function to increment quantity
        }

        function decrement(orderId) {
            // Function to decrement quantity
        }

        function deleteItem(orderId) {
            if (confirm("Are you sure you want to delete this item?")) {
                window.location.href = "remove_from_order.php?id=" + orderId;
            }
        }
    </script>
</body>

</html>