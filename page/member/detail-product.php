<?php session_start(); ?>
<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Detail Product | Erigo Store"); ?>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_erigo";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Memeriksa koneksi 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, product_name, price, `desc`, `size`, stock, pict, categories_id FROM product WHERE id='" . $_GET['id'] . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>

<body>
    <main class="w-full h-screen font-[Poppins]">
        <?php require_once '../../components/core/navbar.php'; ?>
        <section class="min-h-full flex">
            <div class="grid xl:grid-cols-5 h-full xl:px-20">
                <div class="flex items-center justify-center h-full xl:col-span-2">
                    <img class="rounded-3xl h-5/6" src="<?php echo htmlspecialchars($row['pict']); ?>" alt="product_name">
                </div>
                <div class="xl:col-span-3 flex flex-col xl:py-16 px-10 space-y-8">
                    <div class="space-y-3 pb-5">
                        <h1 class="text-xl xl:text-3xl font-semibold">
                            <?php echo htmlspecialchars($row['product_name']); ?>
                        </h1>
                        <div class="flex items-center space-x-2">
                            <span class="text-lg">3.9</span>
                            <div class="flex">
                                <!-- Stars Rating -->
                                <svg width="16" height="16" viewBox="0 0 42 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.5734 1.39057C20.0224 0.00860763 21.9776 0.00861025 22.4266 1.39058L26.2761 13.2381C26.4769 13.8561 27.0528 14.2746 27.7027 14.2746H40.1599C41.613 14.2746 42.2171 16.134 41.0416 16.9881L30.9635 24.3103C30.4377 24.6922 30.2177 25.3693 30.4186 25.9873L34.2681 37.8349C34.7171 39.2168 33.1354 40.366 31.9598 39.5119L21.8817 32.1897C21.3559 31.8078 20.6441 31.8078 20.1183 32.1897L10.0402 39.5119C8.86464 40.366 7.28292 39.2168 7.73195 37.8349L11.5814 25.9873C11.7823 25.3693 11.5623 24.6922 11.0365 24.3103L0.958431 16.9881C-0.217139 16.134 0.387027 14.2746 1.84011 14.2746H14.2973C14.9472 14.2746 15.5231 13.8561 15.7239 13.2381L19.5734 1.39057Z"
                                        fill="#FACC15" />
                                </svg>
                                <!-- Repeat for additional stars -->
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-semibold tracking-wider text-lg">Size</h1>
                        <div class="xl:space-x-3 space-y-3 xl:space-y-0">
                            <?php
                            $sizes = explode(',', $row['size']);
                            foreach ($sizes as $size) {
                                echo '<button class="border border-1 rounded-lg px-8 py-1.5 hover:bg-navy hover:text-white transition-all ease-in-out duration-300 focus:bg-navy focus:text-white">' . htmlspecialchars(trim($size)) . '</button>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-semibold tracking-wider text-lg">Quantity</h1>
                        <div class="flex">
                            <button onclick="decrement()" type="button" class="w-8 h-8 border rounded-l-md">-</button>
                            <input id="qtyinput" type="text" class="w-16 h-8 text-center border-y" value="1">
                            <button onclick="increment()" class="w-8 h-8 border rounded-r-md">+</button>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-semibold tracking-wider text-lg">Description</h1>
                        <p class="text-wrap">
                            <?php echo htmlspecialchars($row['desc']); ?>
                        </p>
                    </div>
                    <div class="space-y-3">
                        <h1 class="font-bold tracking-wider text-lg">Sub Total</h1>
                        <span>Rp.<?php echo number_format($row['price'], 0, ',', '.'); ?></span>
                    </div>
                    <div class="flex space-x-2 xl:space-x-5 text-white font-bold pb-10 xl:pb-0">
                        <button
                            class="bg-navy px-3 py-1.5 rounded-lg hover:scale-[1.2] transition-all ease-in-out duration-300">Add
                            to cart</button>
                        <button
                            class="bg-gray px-3 py-1.5 rounded-lg hover:scale-[1.2] transition-all ease-in-out duration-300">Buy
                            Now</button>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once '../../components/core/footer.php'; ?>
    </main>
</body>

</html>