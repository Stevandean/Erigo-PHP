<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Shopping Cart | ERIGO STORE"); ?>
</head>

<body>
    <main>
        <?php require_once './components/core/navbar.php'; ?>

        <section class="min-h-full p-10">
            <h1 class="text-2xl font-extrabold uppercase mb-10">shopping cart</h1>
            <div class="border border-gray rounded-lg grid grid-cols-5 px-5 flex justify-center items-center gap-x-10">
                <img class="w-5/6 h-5/6 overflow-clip object-cover rounded-lg" src="./assets/img/Rectangle 4.png" alt="">
                <div class="flex flex-col">
                    <span class="text-lg font-bold">Erigo T-Shirt Basic Olive White Unisex</span>
                    <span class="text-lg text-gray">Size : XL</span>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <span class="text-lg font-semibold">Rp.250.000</span>
                    <div class="flex">
                        <button onclick="decrement()" class="w-8 h-8 border rounded-l-md">-</button>
                        <input id="qtyinput" type="text" class="w-16 h-8 text-center border-y" value="1">
                        <button onclick="increment()" class="w-8 h-8 border rounded-r-md">+</button>
                    </div>
                </div>
                <span class="text-lg font-semibold flex justify-center">Rp.250.000</span>
                <button class="bg-red text-white text-lg font-semibold tracking-wider px-5 py-2 w-40 rounded-lg hover:scale-[1.2] transition-all ease-in-out duration-300">Delete</button>
            </div>
            <div class="flex justify-end mt-10">
                <a href="./payment.html" class="bg-navy text-white px-5 py-2 rounded-lg font-semibold transition-all ease-in-out duration-300 hover:scale-[1.2]">Payment
                    Process</a>
            </div>
        </section>
        
        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>
</html>