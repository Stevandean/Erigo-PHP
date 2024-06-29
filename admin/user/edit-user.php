<?php require_once '../../lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php SEO("Edit User | Erigo Store"); ?>
</head>

<body>
    <div class="flex font-[Poppins]">
        <?php include_once  '../../components/core/sidebar.php'; ?>
        <main class="w-full h-screen bg-slate-100">
            <?php include_once  '../../components/core/header.php'; ?>
            <div className="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 className="text-xl font-semibold text-black">
                    User
                </h2>

                <nav>
                    <ol className="flex items-center justify-center p-2 xl:p-5">
                        <li>
                            <a className="font-semibold" href="./dashboard.php">
                                Dashboard /
                            </a>
                        </li>
                        <li className="font-semibold text-primary">User</li>
                    </ol>
                </nav>
            </div>
            <section>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_erigo";

                // Membuat koneksi
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Memeriksa koneksi 
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT id, pict, `name`, `address`, phone, email, password, `role` FROM users WHERE id='" . $_GET['id'] . "'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                }
                ?>
                <div class="max-w-7xl mx-auto mt-10 rounded-md bg-white px-5 pb-2.5 pt-6 shadow-default sm:px-7.5 xl:pb-1">
                    <h3 class="text-xl font-semibold text-black">Add New User</h3>
                    <div class="container justify-center w-full mb-6 rounded-md">
                        <form action="../../process/add/add-user.php" method="POST">
                            <div class="p-6">
                                <div class="mb-6">
                                    <label for="pict" class="mb-3 block text-sm font-medium text-black">
                                        Photo User
                                    </label>
                                    <input type="file" name="pict" id="pict" value="<?php echo $row['pict'] ?>" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="name" class="mb-3 block text-sm font-medium text-black">
                                        Name
                                    </label>
                                    <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>" placeholder="Enter your name" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="address" class="mb-3 block text-sm font-medium text-black">
                                        Address
                                    </label>
                                    <textarea name="address" id="address" value="<?php echo $row['address'] ?>" placeholder="Enter your address" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40"></textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="phone" class="mb-3 block text-sm font-medium text-black">
                                        Phone
                                    </label>
                                    <input type="text" name="phone" id="phone" value="<?php echo $row['phone'] ?>" placeholder="Enter your number phone" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="mb-3 block text-sm font-medium text-black">
                                        Email
                                    </label>
                                    <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>" placeholder="Enter your email" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label for="password" class="mb-3 block text-sm font-medium text-black">
                                        Password
                                    </label>
                                    <input type="password" name="password" id="password" value="<?php echo $row['password'] ?>" placeholder="********" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40" />
                                </div>
                                <div class="mb-6">
                                    <label class="mb-2.5 block text-black">Role</label>
                                    <select name="role" value="<?php echo $row['role'] ?>" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-navy/40">
                                        <option value="" disabled class="text-body dark:text-bodydark">
                                            Select role
                                        </option>
                                        <option value="admin" class="text-body dark:text-bodydark">
                                            Admin
                                        </option>
                                        <option value="member" class="text-body dark:text-bodydark">
                                            Member
                                        </option>
                                    </select>
                                    <span class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
                                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.8">
                                                <path fillRule="evenodd" clipRule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill=""></path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <button type="submit" class="flex w-full justify-center rounded bg-navy p-3 font-medium text-white hover:bg-navy/90">
                                    Save
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </section>
        </main>
    </div>
</body>

</html>