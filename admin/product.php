<?php require_once '../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Product | Erigo Store"); ?>
</head>

<body>
    <div class="flex font-[Poppins]">
        <?php include_once  '../components/core/sidebar.php'; ?>
        <main class="w-full h-screen bg-slate-100   ">
            <?php include_once  '../components/core/header.php'; ?>
            <div className="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 className="text-xl font-semibold text-black">
                    Product
                </h2>
                <nav>
                    <ol className="flex items-end justify-end p-2 xl:p-5">
                        <li>
                            <a className="font-semibold" href="./dashboard.php">
                                Dashboard /
                            </a>
                        </li>
                        <li className="font-semibold text-primary">Product</li>
                    </ol>
                </nav>
            </div>
            <section>
                <div class="max-w-7xl mx-auto mt-10 rounded-md bg-white px-5 pb-2.5 pt-6 shadow-default sm:px-7.5 xl:pb-1">
                    <h4 class="text-xl font-semibold text-black">
                        All Product
                    </h4>
                    <div class="container flex justify-center items-center py-10">
                        <table class="w-full mb-6">
                            <thead class="rounded-sm bg-gray/10">
                                <tr>
                                    <th class="p-2 xl:p-5" width="10%">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            No
                                        </h5>
                                    </th>
                                    <th class="p-2 xl:p-5">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            Product Name
                                        </h5>
                                    </th>
                                    <th class="p-2 xl:p-5">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            Price
                                        </h5>
                                    </th>
                                    <th class="p-2 xl:p-5">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            Description
                                        </h5>
                                    </th>
                                    <th class="p-2 xl:p-5">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            Size
                                        </h5>
                                    </th>
                                    <th class="p-2 xl:p-5">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            Stock
                                        </h5>
                                    </th>
                                    <th class="p-2 xl:p-5">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            Categories
                                        </h5>
                                    </th>
                                    <th class="p-2 xl:p-5" width="20%">
                                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                                            Action
                                        </h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 xl:p-5">
                                        <p class="text-black text-center">1</p>
                                    </td>
                                    <td class="flex items-center justify-center gap-3 p-2 xl:p-5">
                                        <div class="flex-shrink-0">
                                            <img src="../assets/img/products_2.png" alt="Avatar" width="48" height="48" />
                                        </div>
                                        <p class="text-black">Olive T-shirt Unisex</p>
                                    </td>
                                    <td class="p-2 xl:p-5">
                                        <p class="text-center text-black">49000</p>
                                    </td>
                                    <td class="p-2 xl:p-5">
                                        <p class="text-center text-black">lorem ipsum</p>
                                    </td>
                                    <td class="p-2 xl:p-5">
                                        <p class="text-center text-black">XL</p>
                                    </td>
                                    <td class="p-2 xl:p-5">
                                        <p class="text-center text-black">3</p>
                                    </td>
                                    <td class="p-2 xl:p-5">
                                        <p class="text-center text-black">T-shirt</p>
                                    </td>
                                    <td class="items-center justify-center p-2 xl:p-5">
                                        <div class="text-center">
                                            <button class="bg-yellow hover:bg-yellow/90 text-white font-semibold py-2 px-4 rounded-md w-20 flex-col items-center justify-center">
                                                Edit
                                            </button>
                                            <button class="bg-red hover:bg-red/90 text-white font-semibold py-2 px-4 rounded-md w-20 flex-col items-center justify-center">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex items-end justify-end mb-6">
                        <a href="./add-product.php" class="bg-navy hover:bg-navy/90 font-semibold text-white px-3 py-2 rounded-lg transition-all duration-200 ease-linear">
                            Add new product
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>