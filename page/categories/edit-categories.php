<?php
session_start();

if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] != true) {
    header("Location: ../admin/login.php");
    exit();
}
?>

<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Edit Categories | Admin Panel"); ?>
</head>

<body>
    <div class="flex font-[Poppins]">
        <?php include_once  '../../components/core/sidebar.php'; ?>
        <main class="w-full h-screen bg-slate-100">
            <?php include_once  '../../components/core/header.php'; ?>
            <div class="max-w-7xl mx-auto mt-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-xl font-semibold text-black">
                    Categories
                </h2>
                <nav>
                    <ol class="flex items-end justify-end p-2 xl:p-5">
                        <li>
                            <a class="font-semibold" href="../admin/dashboard.php">
                                Dashboard /
                            </a>
                        </li>
                        <li class="font-semibold text-primary">Categories</li>
                    </ol>
                </nav>
            </div>
            <section>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_erigo";

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT id, categories_name FROM categories WHERE id='" . $_GET['id'] . "'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                }
                ?>
                <div class="max-w-7xl mx-auto mt-2 rounded-md bg-white px-5 pb-2.5 pt-6 shadow-default sm:px-7.5 xl:pb-1">
                    <h3 class="text-xl font-semibold text-black">Edit Categories</h3>
                    <div class="container justify-center w-full mb-6 rounded-md">
                        <form action="../../process/edit/edit-categories.php" method="POST">
                            <div class="p-6">
                                <div class="mb-6">
                                    <label for="categories_name" class="mb-3 block text-sm font-medium text-black">
                                        Categories Name
                                    </label>
                                    <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                    <input type="text" name="categories_name" id="categories_name" value="<?php echo $row['categories_name'] ?>" placeholder="Enter categories name" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <button type="submit" class="flex w-full justify-center rounded bg-navy p-3 font-medium text-white hover:bg-navy/90">
                                    Save
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