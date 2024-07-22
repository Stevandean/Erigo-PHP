<?php
require_once "../../db/connection.php";

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email . "' AND id = '" . $id . "'");

    if (mysqli_num_rows($sql) > 0) {
        $dt = mysqli_fetch_array($sql);
    }
} else {
    echo "Session variables not set.";
}
?>

<header class="sticky top-0 z-999 w-full bg-white shadow-md">
    <div class="flex flex-grow items-center justify-between lg:justify-end px-4 py-4 shadow-2 md:px-6 2xl:px-11">
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <button aria-controls="sidebar" class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-navy lg:hidden">
                <span class="relative block h-5 w-5 cursor-pointer">
                    <span class="du-block absolute right-0 h-full w-full">
                        <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out"></span>
                        <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out"></span>
                        <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out"></span>
                    </span>
                    <span class="absolute right-0 h-full w-full rotate-45">
                        <span class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out"></span>
                        <span class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out"></span>
                    </span>
                </span>
            </button>
            <a class="block flex-shrink-0 lg:hidden" href="/">
                <img class="bg-red" width="32" height="32" src="../assets/img/products_1.png" alt="Logo">
            </a>
        </div>
        <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
                <?php if (isset($dt)) : ?>
                    <span><?= htmlspecialchars($dt['name']) ?></span>
                    <img class="rounded-full" width="32" height="32" src="<?= htmlspecialchars($dt['pict']) ?>" alt="User Photo">
                <?php else : ?>
                    <span>User not found</span>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</header>