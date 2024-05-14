<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Product | ERIGO STORE"); ?>
</head>

<body>
    <main class="w-full h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>

        <section class="min-h-full mb-10">
            <h1 class="text-2xl font-extrabold p-10 uppercase">featured products</h1>
            <div class="grid grid-cols-1 xl:grid-cols-4 w-full gap-x-20 gap-y-10 px-10">
                <a href="./detail_product.html" class="flex flex-col justify-center items-center custom-shadow rounded-lg py-5">
                    <img class="w-4/6 rounded-lg mb-5" src="./assets/img/products_2.png" alt="">
                    <h1 class="font-semibold text-lg mb-5">Erigo Last Stock T-Shirt </h1>
                    <h1 class="font-semibold text-lg">Rp.49.000</h1>
                </a>
                <a href="./detail_product.html" class="flex flex-col justify-center items-center custom-shadow rounded-lg py-5">
                    <img class="w-4/6 rounded-lg mb-5" src="./assets/img/products_2.png" alt="">
                    <h1 class="font-semibold text-lg mb-5">Erigo Last Stock T-Shirt </h1>
                    <h1 class="font-semibold text-lg">Rp.49.000</h1>
                </a>
                <a href="./detail_product.html" class="flex flex-col justify-center items-center custom-shadow rounded-lg py-5">
                    <img class="w-4/6 rounded-lg mb-5" src="./assets/img/products_2.png" alt="">
                    <h1 class="font-semibold text-lg mb-5">Erigo Last Stock T-Shirt </h1>
                    <h1 class="font-semibold text-lg">Rp.49.000</h1>
                </a>
                <a href="./detail_product.html" class="flex flex-col justify-center items-center custom-shadow rounded-lg py-5">
                    <img class="w-4/6 rounded-lg mb-5" src="./assets/img/products_2.png" alt="">
                    <h1 class="font-semibold text-lg mb-5">Erigo Last Stock T-Shirt </h1>
                    <h1 class="font-semibold text-lg">Rp.49.000</h1>
                </a>
            </div>
            <div class="flex justify-end p-10">
                <button class="text-lg font-semibold text-white bg-navy px-3 py-1.5 rounded-lg hover:scale-[1.2] transition-all ease-in-out duration-300">Show More</button>
            </div>
        </section>

        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>