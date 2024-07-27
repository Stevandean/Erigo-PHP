<?php
session_start();

if ($_SESSION['status_login'] != true) {
    header("Location: ../../not-found.php");
    exit();
}

require_once '../../lib/seo.php';

$conn = mysqli_connect('localhost', 'root', '', 'db_erigo');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$user_id = $_SESSION['id']; 

// Fetch user details
$query = $conn->prepare("SELECT name, phone, email, address FROM users WHERE id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$query->bind_result($name, $phone, $email, $address);
$query->fetch();
$query->close();

// Fetch order details
$order_query = $conn->prepare("
    SELECT p.product_name, o.size, o.quantity, p.price 
    FROM `order` o
    JOIN `product` p ON o.product_id = p.id
    WHERE o.users_id = ?
");
$order_query->bind_param("i", $user_id);
$order_query->execute();
$order_query->bind_result($product_name, $product_size, $quantity, $price);
$orders = [];
while ($order_query->fetch()) {
    $orders[] = [
        'product_name' => $product_name,
        'product_size' => $product_size,
        'quantity' => $quantity,
        'price' => $price
    ];
}
$order_query->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Payment | Erigo Store"); ?>
</head>

<body>
    <main class="w-full min-h-screen font-[Poppins]">
        <?php require_once '../../components/core/navbar.php'; ?>
        <section class="min-h-full flex flex-col p-10">
            <h1 class="text-2xl font-extrabold uppercase mb-10">Payment Method</h1>
            <div class="space-y-10 xl:px-10">
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-x-28 space-y-7 xl:space-y-4">
                    <div class="flex flex-col justify-center">
                        <span class="font-medium">Name</span>
                        <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                        <svg width="30" height="30" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.3503 33.275C31.1462 33.2458 30.8837 33.2458 30.6503 33.275C25.517 33.1 21.4336 28.9 21.4336 23.7374C21.4336 18.4583 25.692 14.1708 31.0003 14.1708C36.2795 14.1708 40.567 18.4583 40.567 23.7374C40.5378 28.9 36.4837 33.1 31.3503 33.275Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M50.6584 52.5253C45.4668 57.2795 38.5834 60.167 31.0001 60.167C23.4168 60.167 16.5335 57.2795 11.3418 52.5253C11.6335 49.7836 13.3835 47.1003 16.5043 45.0003C24.496 39.692 37.5626 39.692 45.4959 45.0003C48.6168 47.1003 50.3668 49.7836 50.6584 52.5253Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M31.0006 60.1667C47.1088 60.1667 60.1673 47.1082 60.1673 31C60.1673 14.8917 47.1088 1.83333 31.0006 1.83333C14.8923 1.83333 1.83398 14.8917 1.83398 31C1.83398 47.1082 14.8923 60.1667 31.0006 60.1667Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="name" id="name" placeholder="Ainu Azaria" class="px-2 focus:outline-none w-full" value="<?php echo htmlspecialchars($name); ?>">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-medium">Phone</span>
                        <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                        <svg width="30" height="30" viewBox="0 0 58 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.5022 37.5151L40.8307 36.1942L37.7458 33.0917L36.4175 34.4127L39.5022 37.5151ZM45.2921 35.6409L50.8644 38.6701L52.9539 34.8265L47.3816 31.7973L45.2921 35.6409ZM51.9371 44.6907L47.7937 48.8105L50.8784 51.913L55.0218 47.7932L51.9371 44.6907ZM45.269 50.137C41.0402 50.531 30.0992 50.1799 18.2533 38.4012L15.1686 41.5037C28.0954 54.3571 40.3988 54.9848 45.675 54.493L45.269 50.137ZM18.2533 38.4012C6.96182 27.1738 5.09139 17.7306 4.85856 13.6339L0.490616 13.8821C0.783624 19.0383 3.09966 29.5033 15.1686 41.5037L18.2533 38.4012ZM22.2647 20.3754L23.1012 19.5436L20.0165 16.4412L19.18 17.273L22.2647 20.3754ZM23.7671 8.94086L20.0893 4.02803L16.587 6.64993L20.2647 11.5628L23.7671 8.94086ZM7.71966 2.95872L3.14166 7.51073L6.22645 10.6131L10.8044 6.06112L7.71966 2.95872ZM20.7224 18.8242C19.18 17.273 19.1779 17.275 19.1758 17.2771C19.1751 17.2778 19.173 17.28 19.1716 17.2814C19.1687 17.2843 19.1658 17.2872 19.1629 17.2902C19.1569 17.2962 19.1508 17.3025 19.1445 17.309C19.1319 17.3221 19.1185 17.3363 19.1045 17.3516C19.0763 17.3821 19.0454 17.4171 19.0124 17.4565C18.9462 17.5354 18.8713 17.6326 18.7926 17.7488C18.6347 17.9818 18.4626 18.2899 18.3167 18.6774C18.0188 19.4679 17.8591 20.5101 18.0593 21.8006C18.4508 24.3243 20.1889 27.658 24.6412 32.0849L27.7259 28.9824C23.5594 24.8396 22.5669 22.3184 22.3825 21.1298C22.2947 20.5642 22.3857 20.2858 22.4108 20.2199C22.426 20.1791 22.4333 20.175 22.4146 20.2028C22.4053 20.2164 22.3898 20.2378 22.3656 20.2665C22.3537 20.2809 22.3394 20.2971 22.3227 20.3146L20.7224 18.8242ZM24.6412 32.0849C29.0935 36.5118 32.7308 38.8792 35.2576 39.4525C36.5473 39.7532 37.5891 39.602 38.3805 39.3042C38.7685 39.1587 39.0764 38.9869 39.309 38.8291C39.4256 38.7503 39.5231 38.6756 39.6024 38.6093C39.6418 38.5762 39.6768 38.5453 39.7073 38.5171C39.7226 38.5028 39.7367 38.4891 39.7491 38.4764L36.6644 35.3739C36.6478 35.3914 36.631 35.4085 36.614 35.4254C36.5975 35.442 36.5804 35.4585 36.5634 35.4741C36.5311 35.5041 36.499 35.5317 36.4672 35.5565C36.4036 35.6061 36.3415 35.6354 36.2796 35.6563C36.1565 35.698 35.9444 35.7018 35.6956 35.6409C34.507 35.4565 31.9857 34.464 27.8193 30.3212L24.6412 32.0849Z" fill="black" stroke="black" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                            <input type="text" name="phone" id="phone" placeholder="6288xxxxx" class="px-2 focus:outline-none w-full" value="<?php echo htmlspecialchars($phone); ?>">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-medium">Email</span>
                        <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                        <svg width="30" height="30" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.9998 19.3542C21.1476 19.3542 22.8844 17.6175 22.8844 15.4696C22.8844 13.3218 21.1476 11.585 18.9998 11.585C16.852 11.585 15.1152 13.3218 15.1152 15.4696C15.1152 17.6175 16.852 19.3542 18.9998 19.3542Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.35768 13.0825C10.8133 -0.587494 27.1863 -0.587494 33.642 13.0825C39.0988 25.1292 27.1863 35.2667 18.9997 35.2667C10.813 35.2667 -1.71447 25.1292 4.35768 13.0825Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                            <input type="text" name="email" id="email" placeholder="test@gmail.com" class="px-2 focus:outline-none w-full" value="<?php echo htmlspecialchars($email); ?>">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center">
                    <span class="font-medium">Address</span>
                    <div class="flex border py-1.5 px-3 rounded-md space-x-3">
                        <textarea name="address" id="address" cols="30" rows="2" placeholder="Your address here..." class="px-2 focus:outline-none w-full"><?php echo htmlspecialchars($address); ?></textarea>
                    </div>
                </div>
            </div>
            <div class="space-y-3">
                <span class="text-xl font-semibold">Payment</span>
                <div class="flex flex-col bg-[#F7F9FC] rounded-xl py-10 px-20">
                    <div class="flex space-x-10">
                        <span class="font-semibold mt-0.5">Product</span>
                        <table class="table-fixed w-full">
                            <tbody>
                                <?php foreach ($orders as $order): ?>
                                <tr class="font-semibold text-lg flex flex-row justify-between items-start">
                                    <td class="w-[40%] flex justify-start">
                                        <div class="flex flex-col">
                                            <span><?php echo htmlspecialchars($order['product_name']); ?></span>
                                            <span class="text-gray text-base font-normal mb-5">Size: <?php echo htmlspecialchars($order['product_size']); ?></span>
                                        </div>
                                    </td>
                                    <td class="w-[20%] flex justify-center">
                                        <span>x<?php echo htmlspecialchars($order['quantity']); ?></span>
                                    </td>
                                    <td class="w-[40%] flex justify-end">
                                        <span>Rp. <?php echo htmlspecialchars(number_format($order['price'], 0, ',', '.')); ?></span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <hr class="border w-full border-[#757575]">
                    <div class="flex justify-between mt-3 text-lg">
                        <span class="font-semibold">Total</span>
                        <?php
                        $total = array_sum(array_column($orders, 'price'));
                        ?>
                        <span class="font-semibold">Rp. <?php echo htmlspecialchars(number_format($total, 0, ',', '.')); ?></span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-semibold">Select Method</span>
                <div class="w-36 text-lg font-medium flex justify-between">
                    <span>QRIS</span>
                    <a href="../../qris.php"><span>></span></a>
                </div>
                <div class="w-36 text-lg font-medium flex justify-between">
                    <span>E-wallet</span>
                </div>
                <div class="flex justify-end items-center space-x-3">
                    <span class="font-semibold text-lg">Total: Rp. <?php echo htmlspecialchars(number_format($total, 0, ',', '.')); ?></span>
                    <button class="text-white bg-navy rounded-md px-3 py-2">
                        <a href="./qris.php">Payment</a>
                    </button>
                </div>
            </div>
        </section>
        <?php require_once '../../components/core/footer.php'; ?>
    </main>
</body>

</html>
