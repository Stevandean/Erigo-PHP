<?php session_start(); ?>
<?php require_once '../../lib/seo.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php SEO("Product | Erigo Store"); ?>
</head>
<body>
    <main class="w-full h-screen font-[Poppins] ">
        <?php require_once '../../components/core/navbar.php'; ?>
        <section class="min-h-full p-10">
            <h1 class="font-['Poppins'] text-black text-2xl font-extrabold place-items-end p-[5px] flex items-center mb-7 xl:mb-0 xl:ml-[17px] uppercase">Featured Products</h1>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_erigo";
            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT p.id, p.product_name, p.price, p.desc, p.stock, p.pict, c.categories_name FROM product p JOIN categories c ON p.categories_id = c.id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            ?>
                <h1 class='text-2xl font-bold text-black uppercase cursor-default mb-10'>featured products</h1>
                <div class='grid grid-cols-1 xl:grid-cols-4 w-full gap-x-8 gap-y-10 px-10'>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class='flex flex-col relative justify-center items-center custom-shadow rounded-lg py-5'>
                            <div class='absolute top-0 left-0 rounded-tl-xl px-3 py-0.5 text-white'>
                            </div>
                            <a class="flex items-center justify-center" href='detail-product.php?id=<?php echo $row["id"]; ?>'>
                                <img class='w-3/4 rounded-lg mb-5' src='<?php echo $row["pict"]; ?>' alt=''>
                            </a>
                            <h1 class='font-semibold text-xl mb-10'>
                                <a href='detail-product.php?id=<?php echo $row["id"]; ?>'>
                                    <p><?php echo $row["product_name"]; ?></p>
                                </a>
                            </h1>
                            <h1 class='font-bold text-xl'>
                                <p>Rp. <?php echo $row["price"]; ?></p>
                            </h1>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
            ?>
            <button class="bg-navy px-3 py-1.5 rounded-lg text-white text-lg font-semibold mt-10 hover:scale-[1.2] transition-all ease-in-out duration-300">Show More</button>

        </section>
        <?php require_once '../../components/core/footer.php'; ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#categoryDropdown').change(function() {
                var categoryId = $(this).val();
                $.ajax({
                    url: '../../lib/filterProduct.php',
                    type: 'GET',
                    data: {
                        category_id: categoryId
                    },
                    success: function(data) {
                        $('#productContainer').html(data);
                    }
                });
            });
        });
    </script>

    <script>
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        document.addEventListener('DOMContentLoaded', function() {
            var priceElements = document.querySelectorAll('.price');
            priceElements.forEach(function(priceElement) {
                var price = priceElement.textContent;
                priceElement.textContent = formatRupiah(price, 'Rp. ');
            });
        });
    </script>
</body>

</html>