<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Add Product | Erigo Store"); ?>
</head>

<body>
    <div class="flex font-[Poppins]">
        <?php include_once  '../../components/core/sidebar.php'; ?>
        <main class="w-full h-screen bg-slate-100">
            <?php include_once  '../../components/core/header.php'; ?>
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-xl font-semibold text-black">
                    Product
                </h2>
                <nav>
                    <ol class="flex items-center justify-center p-2 xl:p-5">
                        <li>
                            <a class="font-semibold" href="./dashboard.php">
                                Dashboard /
                            </a>
                        </li>
                        <li class="font-semibold text-primary">Product</li>
                    </ol>
                </nav>
            </div>
            <section>
                <div class="max-w-7xl mx-auto mt-10 rounded-md bg-white px-5 pb-2.5 pt-6 shadow-default sm:px-7.5 xl:pb-1">
                    <h3 class="text-xl font-semibold text-black">Add New Product</h3>
                    <div class="container justify-center w-full mb-6 rounded-md">
                        <form action="../../process/add/add-product.php" method="POST" enctype="multipart/form-data">
                            <div class="p-6">
                                <div class="mb-6">
                                    <label for="pict" class="mb-3 block text-sm font-medium text-black">
                                        Photo Product
                                    </label>
                                    <input type="file" name="pict" id="pict" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="product_name" class="mb-3 block text-sm font-medium text-black">
                                        Product Name
                                    </label>
                                    <input type="text" name="product_name" id="product_name" placeholder="Enter product name" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="price" class="mb-3 block text-sm font-medium text-black">
                                        Price
                                    </label>
                                    <input type="text" name="price" id="price" placeholder="Enter price product" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="desc" class="mb-3 block text-sm font-medium text-black">
                                        Description
                                    </label>
                                    <textarea name="desc" id="desc" placeholder="Enter description product" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40"></textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="size" class="mb-3 block text-sm font-medium text-black">
                                        Size
                                    </label>
                                    <input type="text" name="size" id="size" placeholder="Enter size product" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="stock" class="mb-3 block text-sm font-medium text-black">
                                        Stock
                                    </label>
                                    <input type="text" name="stock" id="stock" placeholder="Enter stock product" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="categories_id" class="mb-3 block text-sm font-medium text-black">
                                        Categories
                                    </label>
                                    <select name="categories_id" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40">
                                        <?php
                                        // Connect to the database
                                        $conn = new mysqli("localhost", "root", "", "db_erigo");

                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Fetch categories
                                        $sql = "SELECT id, categories_name FROM categories";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row["id"] . "'>" . $row["categories_name"] . "</option>";
                                            }
                                        } else {
                                            echo "<option>No categories found</option>";
                                        }
                                        $conn->close();
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="flex w-full justify-center rounded bg-navy p-3 font-medium text-white hover:bg-navy/90">
                                    Create New Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
