<?php
session_start();

if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] != true) {
    header("Location: ./login.php");
    exit();
}

require_once '../../lib/seo.php';

$conn = mysqli_connect('localhost', 'root', '', 'db_erigo');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$user_id = $_SESSION['id'];

// Fetch transaction history for the logged-in user
$sql = "SELECT * FROM transaction WHERE users_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon"
        href="//erigostore.co.id/cdn/shop/files/New_Logo_Erigo_81faf464-002f-434b-bae0-632202133822_32x32.png?v=1692002740"
        type="image/png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gray: '#757575',
                        navy: '#1B2E57',
                        red: '#E95144',
                        yellow: '#FFBB49',
                        grayRating: '#D9D9D9',
                        yellowRating: '#FACC15',
                    }
                }
            }
        }
    </script>
    <title>Transaction History</title>
</head>

<body>
    <div class="w-full h-screen font-[Poppins]">
        <?php require_once '../../components/core/navbar.php'; ?>

        <div class="h-full p-20">
            <h1 class="text-2xl font-extrabold uppercase mb-10">Transaction
                History</h1>
            <div class="flex justify-center items-center p-[20px]">
                <table class="shadow-md sm:rounded-lg table-auto bg-white w-3/4 flex-col text-xs overflow-scroll">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left">Date</th>
                            <th class="px-6 py-3 text-left">Transaction No.</th>
                            <th class="px-6 py-3 text-left">Product Detail</th>
                            <th class="px-6 py-3 text-left">Quantity</th>
                            <th class="px-6 py-3 text-left">Subtotal</th>
                            <th class="px-6 py-3 text-left">Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="odd:bg-[#E5DEDE] even:bg-white">
                                <td class="px-6 py-3"><?php echo date('d/m/Y', strtotime($row['created_at'])); ?></td>
                                <td class="px-6 py-3"><?php echo $row['receipt_number']; ?></td>
                                <td class="px-6 py-3"><?php echo 'Product details here...'; ?></td>
                                <!-- Adjust this based on your product details -->
                                <td class="px-6 py-3"><?php echo 'Quantity here...'; ?></td>
                                <!-- Adjust this based on your quantity details -->
                                <td class="px-6 py-3"><?php echo 'Subtotal here...'; ?></td>
                                <!-- Adjust this based on your subtotal details -->
                                <td class="px-6 py-3"><?php echo $row['payment_method']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php require_once '../../components/core/footer.php'; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var userAcc = localStorage.getItem('userAcc');

            if (userAcc) {
                document.getElementById('cartBtn').style.display = 'inline';
                document.getElementById('profileBtn').style.display = 'inline';

                document.getElementById('loginBtn').style.display = 'none';
                document.getElementById('registerBtn').style.display = 'none';

                document.getElementById('cartBtnMbl').style.display = 'inline';
                document.getElementById('profileBtnMbl').style.display = 'inline';

                document.getElementById('loginBtnMbl').style.display = 'none';
                document.getElementById('registerBtnMbl').style.display = 'none';
            } else {
                document.getElementById('loginBtn').style.display = 'inline';
                document.getElementById('registerBtn').style.display = 'inline';

                document.getElementById('cartBtn').style.display = 'none';
                document.getElementById('profileBtn').style.display = 'none';

                document.getElementById('loginBtnMbl').style.display = 'inline';
                document.getElementById('registerBtnMbl').style.display = 'inline';

                document.getElementById('cartBtnMbl').style.display = 'none';
                document.getElementById('profileBtn').style.display = 'none';
            }
        });

        const menuBtn = document.getElementById('menuBtn');
        const responsiveMenu = document.getElementById('responsiveMenu');

        menuBtn.addEventListener('click', () => {
            responsiveMenu.classList.toggle('hidden');
        });
    </script>
    <?php require_once '../../components/core/footer.php'; ?>
</body>

</html>