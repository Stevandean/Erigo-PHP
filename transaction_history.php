<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO(""); ?>
</head>

<body>
    <main class="w-full min-h-screen font-[Poppins]">
        <?php require_once './components/core/navbar.php'; ?>

        <section class="min-h-full p-10">
            <h1 class="text-black text-2xl font-extrabold place-items-end p-[5px] ml-[17px] uppercase">transaction
                history</h1>
            <div class="flex justify-center items-center p-[20px]">
                <table class=" shadow-md sm:rounded-lg table-auto w-3/4 flex-col text-xs overflow-scroll">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left">date</th>
                            <th class="px-6 py-3 text-left">Transaction No.</th>
                            <th class="px-6 py-3 text-left">Product Detail</th>
                            <th class="px-6 py-3 text-left">Quantity</th>
                            <th class="px-6 py-3 text-left">Subtotal</th>
                            <th class="px-6 py-3 text-left">Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-[#E5DEDE] even:bg-white">
                            <td class="px-6 py-3">01/04/2004</td>
                            <td class="px-6 py-3">ERG001042024001</td>
                            <td class="px-6 py-3">Erigo T-Shirt...</td>
                            <td class="px-6 py-3">1</td>
                            <td class="px-6 py-3">Rp. 250.000</td>
                            <td class="px-6 py-3">shopeepay</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">01/04/2004</td>
                            <td class="px-6 py-3">ERG001042024001</td>
                            <td class="px-6 py-3">Erigo Short...</td>
                            <td class="px-6 py-3">2</td>
                            <td class="px-6 py-3">Rp. 700.000</td>
                            <td class="px-6 py-3">Dana</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>