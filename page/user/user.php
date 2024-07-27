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
    <?php SEO("User | Admin Panel"); ?>
</head>

<body>
    <div class="flex font-[Poppins]">
        <?php include_once  '../../components/core/sidebar.php'; ?>
        <main class="w-full min-h-screen bg-slate-100">
            <?php include_once  '../../components/core/header.php'; ?>
            <div class="max-w-7xl mx-auto mt-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-xl font-semibold text-black">
                    User
                </h2>
                <nav>
                    <ol class="flex items-end justify-end p-2 xl:p-5">
                        <li>
                            <a class="font-semibold" href="../admin/dashboard.php">
                                Dashboard /
                            </a>
                        </li>
                        <li class="font-semibold text-primary">User</li>
                    </ol>
                </nav>
            </div>
            <section class="pb-10">
                <div class="max-w-7xl mx-auto mt-2 rounded-md bg-white px-5 pb-2.5 pt-6 shadow-default sm:px-7.5 xl:pb-1">
                    <h4 class="text-xl font-semibold text-black">
                        All Users
                    </h4>
                    <div class="container flex justify-center items-center py-10">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "db_erigo";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT id, pict, `name`, `address`, phone, email, role FROM users";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table id='data-table' class='w-full mb-6'>
                            <thead class='rounded-md bg-gray/10'>
                                <tr>
                                    <th class='p-2 xl:p-5' width='10%'>
                                        <h5 class='text-sm font-medium uppercase xsm:text-base'>
                                            No
                                        </h5>
                                    </th>
                                    <th class='p-2 xl:p-5'>
                                        <h5 class='text-sm font-medium uppercase xsm:text-base'>
                                            Name
                                        </h5>
                                    </th>
                                    <th class='p-2 xl:p-5'>
                                        <h5 class='text-sm font-medium uppercase xsm:text-base'>
                                            Address
                                        </h5>
                                    </th>
                                    <th class='p-2 xl:p-5'>
                                        <h5 class='text-sm font-medium uppercase xsm:text-base'>
                                            Phone
                                        </h5>
                                    </th>
                                    <th class='p-2 xl:p-5'>
                                        <h5 class='text-sm font-medium uppercase xsm:text-base'>
                                            Email
                                        </h5>
                                    </th>
                                    <th class='p-2 xl:p-5'>
                                        <h5 class='text-sm font-medium uppercase xsm:text-base'>
                                            Role
                                        </h5>
                                    </th>
                                    <th class='p-2 xl:p-5' width='20%'>
                                        <h5 class='text-sm font-medium uppercase xsm:text-base'>
                                            Action
                                        </h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td class='text-center p-2 xl:p-5'></td>
                                    <td class='flex items-center justify-center gap-3 p-2 xl:p-5'>
                                        <div class='flex-shrink-0'>
                                            <img src='" . $row["pict"] . "' alt='Product Image' width='48' height='48' />
                                        </div>
                                        <p class='text-black'>" . $row["name"] . "</p>
                                    </td>
                                    <td class='p-2 xl:p-5'>
                                        <p class='text-center text-black'>" . $row["address"] . "</p>
                                    </td>
                                    <td class='p-2 xl:p-5'>
                                        <p class='text-center text-black'>" . $row["phone"] . "</p>
                                    </td>
                                    <td class='p-2 xl:p-5'>
                                        <p class='text-center text-black'>" . $row["email"] . "</p>
                                    </td>
                                    <td class='p-2 xl:p-5'>
                                        <div class='flex items-center justify-center'>
                                            <p class='text-center text-black'>" . $row["role"] . "</p>
                                        </div>
                                    </td>
                                    <td class='flex items-center justify-center p-2 xl:p-5'>
                                    <div class='text-center'>
                                    <a href='./edit-user.php?id=" . $row['id'] . "'><button class='bg-warning hover:bg-warning/90 text-white font-semibold py-2 px-4 rounded-md w-20 flex-col items-center justify-center'>
                                                Edit
                                            </button></a>
                                    <a href='../../process/delete/delete-user.php?id=" . $row['id'] . "'><button class='bg-danger hover:bg-danger/90 text-white font-semibold py-2 px-4 rounded-md w-20 flex-col items-center justify-center'>
                                                Delete
                                            </button></a>
                                            </div>
                                    </td>
                                </tr>";
                            }
                            echo "</tbody>
                        </table>";
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                    <div class="flex items-end justify-end mb-6">
                        <a href="./add-user.php" class="bg-navy hover:bg-navy/90 font-semibold text-white px-3 py-2 rounded-lg transition-all duration-200 ease-linear">
                            Add new user
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var table = document.getElementById("data-table");
        var rows = table.getElementsByTagName("tr");
        for (var i = 1; i < rows.length; i++) {
            rows[i].getElementsByTagName("td")[0].textContent = i;
        }
    });
</script>

</html>