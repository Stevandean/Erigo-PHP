<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("About Us | Erigo Store"); ?>
</head>

<body>
    <main class="w-full h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>

        <section class="min-h-full flex items-center">
            <div class="grid xl:grid-cols-5 h-full p-10 gap-x-28">
                <div class="flex items-center justify-center h-full xl:col-span-2">
                    <img class="" src="./assets/img/about_us.jpg" alt="">
                </div>
                <div class="xl:col-span-3 flex flex-col justify-center space-y-6 mt-10 xl:mt-0">
                    <h1 class="text-2xl xl:text-3xl font-extrabold ">Express Yourself with Erigo, <br>Elevate Your
                        Style.</h1>
                    <span class="text-xl font-semibold">About Us</span>
                    <p>
                        Erigo adalah salah satu merk fashion e-commerce terkemuka di Indonesia yang dikenal dengan
                        koleksi pakaian streetwear berkualitas tinggi. Perusahaan ini didirikan dengan visi untuk
                        menyediakan produk fashion yang trendi dan terjangkau bagi kalangan muda. Erigo menawarkan
                        berbagai macam produk termasuk kaos, jaket, celana, dan aksesori yang dirancang dengan gaya
                        modern dan urban.
                    </p>
                    <p>
                        Melalui platform online mereka, pelanggan dapat dengan mudah menjelajahi dan
                        membeli produk yang sesuai dengan selera dan kebutuhan fashion mereka. Erigo juga aktif
                        memanfaatkan media sosial untuk membangun hubungan dengan pelanggan dan mempromosikan koleksi
                        terbaru mereka, sehingga tetap relevan dan dekat dengan target pasar.
                    </p>
                    <p>
                        Selain penjualan melalui situs web mereka, Erigo juga berpartisipasi dalam berbagai pameran dan
                        pop-up store untuk memperluas jangkauan pasar dan memberikan pengalaman belanja langsung kepada
                        pelanggan. Pendekatan ini tidak hanya meningkatkan visibilitas merek tetapi juga membangun
                        loyalitas pelanggan melalui interaksi langsung.
                    </p>
                    <p>
                        Dengan fokus pada kualitas produk dan kepuasan
                        pelanggan, Erigo terus berkembang dan bersaing di pasar fashion Indonesia yang semakin kompetitif.
                        Keberhasilan Erigo dalam e-commerce fashion di Indonesia juga ditunjang oleh kemampuan mereka
                        dalam mengikuti tren dan kebutuhan pasar yang dinamis, serta strategi pemasaran yang efektif.
                    </p>
                </div>
            </div>
        </section>

        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>