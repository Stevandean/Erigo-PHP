
<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Home | Erigo Store"); ?>
</head>

<body>
    <main class="w-full min-h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>

        <section>
            <div class="flex justify-center items-center py-10">
                <img class="w-5/6 xl:h-[750px]" src="./assets/img/heroBanner.png" alt="">
            </div>
            <div class="flex justify-center">
                <hr class="border-2 w-[80%] xl:w-[90%]">
            </div>
            <div class="py-10 px-16 flex flex-col items-center justify-center">
                <h1 class="text-2xl font-bold text-black uppercase cursor-default mb-5">new arrivals</h1>
                <div class="grid grid-col-1 xl:grid-cols-3 w-full gap-x-8 gap-y-5 xl:gap-y-0">
                    <div class="flex flex-col items-center space-y-5 cursor-default">
                        <img class="rounded-xl" src="./assets/img/new arrivals_1.png" alt="">
                        <h1 class="font-bold text-2xl uppercase">erigo parfume</h1>
                        <p>Koleksi Perfume Erigo sebuah rahasia tampil beda dengan aroma yang menarik perhatian, pilih
                            aroma yang sesuai dengan kepribadian dan penampilanmu.</p>
                        <button class="bg-navy text-white rounded-lg px-3 py-1.5 text-xl font-semibold hover:scale-[1.2] transition-all ease-in-out duration-300">Shop
                            Now</button>
                    </div>
                    <img class="rounded-lg cursor-pointer" src="./assets/img/new arrivals_2.png" alt="">
                    <img class="rounded-lg cursor-pointer" src="./assets/img/new arrivals_3.png" alt="">
                </div>
            </div>
            <div class="flex justify-center">
                <hr class="border-2 w-[80%] xl:w-[90%]">
            </div>
            <div class="py-10 px-16 flex flex-col items-center justify-center">
                <h1 class="text-2xl font-bold text-black uppercase cursor-default mb-5">collections</h1>
                <div class="grid grid-cols-1 xl:grid-cols-3 w-full gap-x-8 gap-y-5 xl:gap-y-0">
                    <img class="rounded-lg cursor-pointer" src="./assets/img/collections_1.png" alt="">
                    <img class="rounded-lg cursor-pointer" src="./assets/img/collections_2.png" alt="">
                    <img class="rounded-lg cursor-pointer" src="./assets/img/collections_3.png" alt="">
                </div>
            </div>
            <div class="flex justify-center">
                <hr class="border-2 w-[80%] xl:w-[90%]">
            </div>
            <div class="py-10 px-16 flex flex-col items-center justify-center">
                <h1 class="text-2xl font-bold text-black uppercase cursor-default mb-5">featured products</h1>
                <div class="grid grid-cols-1 xl:grid-cols-4 w-full gap-x-8 gap-y-10">
                    <div class="flex flex-col relative justify-center items-center custom-shadow rounded-lg py-5">
                        <div class="absolute top-0 left-0 bg-red rounded-tl-xl px-3 py-0.5 text-white">
                            New
                        </div>
                        <img class="w-3/4 rounded-lg mb-5" src="./assets/img/products_2.png" alt="">
                        <h1 class="font-semibold text-xl mb-10">Erigo Last Stock T-Shirt </h1>
                        <h1 class="font-bold text-xl">Rp.49.000</h1>
                    </div>
                </div>
                <button class="bg-navy px-3 py-1.5 rounded-lg text-white text-lg font-semibold mt-10 hover:scale-[1.2] transition-all ease-in-out duration-300">Show
                    More</button>
            </div>
        </section>

        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html