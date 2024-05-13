<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("TENTANG KAMI | ERIGO STORE"); ?>
</head>

<body>
    <main class="w-full h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>

        <section class="min-h-full flex items-center">
            <div class="grid xl:grid-cols-5 h-full p-10 gap-x-28">
                <div class="flex items-center justify-center h-full xl:col-span-2">
                    <img class="" src="./assets/img/about-us.jpg" alt="">
                </div>
                <div class="xl:col-span-3 flex flex-col justify-center space-y-6 mt-10 xl:mt-0">
                    <h1 class="text-2xl xl:text-3xl font-extrabold ">Express Yourself with Erigo, <br>Elevate Your
                        Style.</h1>
                    <span class="text-xl font-semibold">About Us</span>
                    <p>
                        Erigo adalah merk fashion Indonesia yang didirikan pada tahun 2011 oleh Muhammad Sadad.
                        Merk ini dikenal karena koleksi pakaian casual dan streetwear-nya yang modern dan stylish.
                        Erigo menawarkan berbagai macam pakaian seperti kaus, kemeja, celana, jaket, dan aksesoris
                        yang cocok untuk gaya sehari-hari dan tampilan santai.
                    </p>
                    <p>
                        Ciri khas Erigo adalah desainnya yang menggabungkan unsur minimalis dengan sentuhan kreatif,
                        serta penggunaan bahan berkualitas tinggi. Merk ini juga dikenal karena harga yang terjangkau
                        dan kualitas produknya yang baik. Erigo memiliki berbagai koleksi yang mengikuti trend fashion
                        terkini, sehingga menjadi favorit di kalangan anak muda.
                    </p>
                    <p>
                        Selain itu, Erigo juga aktif berkolaborasi dengan berbagai seniman, desainer, dan tokoh terkenal
                        untuk menciptakan koleksi-koleksi eksklusif. Merk ini telah memiliki toko fisik di beberapa kota
                        besar di Indonesia dan juga menjual produknya secara online.
                    </p>
                </div>
            </div>
        </section>

        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>