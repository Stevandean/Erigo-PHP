<?php
require_once '../../lib/seo.php';
session_start();

if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

$session_duration = 15 * 60;

if (time() - $_SESSION['start_time'] > $session_duration) {


    session_destroy();
    $session_expired = true;
} else {
    $session_expired = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("QRIS | Erigo Store"); ?>
</head>

<body class="min-h-screen bg-navy flex flex-col justify-center items-center">
    <main class="w-full min-h-screen font-[Poppins]">
        <section class="min-h-full flex flex-col p-10">
            <div class="relative bg-white rounded-xl px-5 py-6 xl:w-full max-w-screen-lg w-full mt-10 mx-auto"
                style="align-self: flex-start;" id="yourpurchase">
                <h1 class="text-[17px] font-bold ml-4 uppercase">Your Purchase</h1>

                <div class="grid grid-cols-5" id="productSection">
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
                                <img src="../../assets/img/qris.jpg" alt="payment_method" class="w-auto h-10">
                                <p class="text-black text-base font-semibold">Rp.750.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container flex flex-col items-center justify-center mx-auto my-[50px]">
                <div class="flex items-center justify-center gap-14">
                    <h3 class="text-xl font-medium text-white" id="selesaikan">Silakan selesaikan pembayaran Anda dalam
                    </h3>
                    <span class="text-xl font-medium text-white" id="countdown">0:15:00</span>
                </div>

                <div class="mt-[30px]" id="instructions">
                    <h3 class="max-w-lg text-xl font-medium text-white">
                        Buka m-banking atau e-Wallet dan pindai kode QR untuk
                        menyelesaikan pembayaran
                    </h3>
                </div>

                <div class="mt-[50px]">
                    <h3 class="text-3xl font-bold text-white" id="scanQRText">Pindai Kode QR</h3>
                </div>

                <div class="mt-[50px]">
                    <img src="../../assets/img/barcode.png" alt="barcode" class="w-[500px] h-[500px]" id="barcode">
                </div>

                <div class="mt-[70px]" id="reminder">
                    <p class="max-w-xs text-base text-center font-normal text-white">
                        Mohon diingat bahwa kode QR hanya
                        dapat dipindai sekali untuk
                        mencegah saldo terpotong dua kali
                    </p>
                </div>

                <button onclick="paymentSuccess()" class="mt-10 px-4 py-2 bg-green-500 text-white rounded">Simulate
                    Payment Success</button>
            </div>
        </section>
    </main>

    <script>
        function startCountdown(duration, display) {
            var timer = duration, minutes, seconds;
            var interval = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = 0;
                    clearInterval(interval);
                }
            }, 1000);
            return interval;
        }

        function paymentSuccess() {
            document.getElementById('yourpurchase').style.display = 'none';
            document.getElementById('selesaikan').textContent = 'Pembayaran Berhasil';
            document.getElementById('countdown').style.display = 'none';
            document.getElementById('instructions').style.display = 'none';
            document.getElementById('scanQRText').textContent = 'Terima Kasih';
            document.getElementById('barcode').style.display = 'none';
            document.getElementById('reminder').style.display = 'none';
        }

        window.onload = function () {
            var countdownDuration = 15 * 60, // 15 minutes in seconds
                display = document.querySelector('#countdown');
            startCountdown(countdownDuration, display);
        };
    </script>
</body>

</html>