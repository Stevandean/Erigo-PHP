<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("QRIS | Erigo Store"); ?>
</head>

<body class="min-h-screen bg-navy flex flex-col justify-center items-center">
    <main class="w-full min-h-screen font-[Poppins]">
        <section class="min-h-full flex flex-col p-10">
            <div class="relative bg-white rounded-xl px-5 py-6 xl:w-full max-w-screen-lg w-full mt-10 mx-auto" style="align-self: flex-start;">
                <h1 class="text-[17px] font-bold ml-4 uppercase">Your Purchase</h1>

                <div class="grid grid-cols-5">
                    <div class="col-span-1">
                        <h1 class="text-[15px] font-medium ml-4">Product</h1>
                    </div>

                    <div class="col-span-2">
                        <div class="flex flex-col items-start">
                            <h1 class="text-black text-base font-semibold">Erigo T-Shirt Basic Olive White Unisex</h1>
                            <p class="text-gray text-sm font-normal">Size : XL</p>
                        </div>

                        <div class="flex flex-col items-start mt-2">
                            <h1 class="text-black text-base font-semibold">Erigo Chino Pants Sirius Black</h1>
                            <p class="text-gray text-sm font-normal">Size : 32</p>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <div class="flex items-center justify-evenly">
                            <div class="flex flex-col items-start">
                                <h1 class="text-[15px] font-medium ml-4">Payment Method</h1>
                                <h1 class="text-[15px] font-medium ml-4">Total</h1>
                            </div>

                            <div class="flex flex-col items-start">
                                <img src="./assets/img/qris.jpg" alt="payment_method" class="w-auto h-10">
                                <p class="text-black text-base font-semibold">Rp.750.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container flex flex-col items-center justify-center mx-auto my-[50px]">
                <div class="flex items-center justify-center gap-14">
                    <h3 class="text-xl font-medium text-white">Silakan selesaikan pembayaran Anda dalam</h3>
                    <span class="text-xl font-medium text-white">0:15:09</span>
                </div>

                <div class="mt-[30px]">
                    <h3 class="max-w-lg text-xl font-medium text-white">
                        Buka m-banking atau e-Wallet dan pindai kode QR untuk
                        menyelesaikan pembayaran
                    </h3>
                </div>

                <div class="mt-[50px]">
                    <h3 class="text-3xl font-bold text-white">Pindai Kode QR</h3>
                </div>

                <div class="mt-[50px]">
                    <img src="./assets/img/barcode.png" alt="barcode" class="w-[500px] h-[500px]">
                </div>

                <div class="mt-[70px]">
                    <p class="max-w-xs text-base text-center font-normal text-white">
                        Mohon diingat bahwa kode QR hanya
                        dapat dipindai sekali untuk
                        mencegah saldo terpotong dua kali
                    </p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>