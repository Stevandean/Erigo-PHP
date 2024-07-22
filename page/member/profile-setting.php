<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] != true) {
    header("Location: ../../not-found.php");
    exit();
}

require_once '../../lib/seo.php';
require_once '../../db/connection.php';

// Check if users_id is set in session
// if (!isset($_SESSION['users_id'])) {
//     header("Location: ../../not-found.php");
//     exit();
// }

// Fetch user data
$users_id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $users_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Update user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Update query
    $update_sql = "UPDATE users SET name = ?, address = ?, phone = ?, email = ?, password = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ssssss", $name, $address, $phone, $email, $password, $users_id);

    if ($update_stmt->execute()) {
        // Redirect to profile setting page to refresh the data
        header("Location: ./profile-setting.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <?php SEO("Profile Setting | Erigo Store"); ?>
</head>

<body>
    <main class="w-full h-screen font-[Poppins]">
        <?php require_once '../../components/core/navbar.php'; ?>

        <section class="min-h-full p-10">
            <h1
                class="font-['Poppins'] text-black text-2xl font-extrabold place-items-end p-[5px] flex items-center mb-7 xl:mb-0 xl:ml-[17px] uppercase">
                Profile Setting
            </h1>
            <form class="w-full flex flex-col justify-center items-center space-y-8" method="POST" action="">
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Photo</span>
                    <input class="border rounded-lg py-1.5 px-3" type="file">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-1">
                    <span class="font-semibold">Name</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="text" name="name"
                        value="<?php echo htmlspecialchars($user['name']); ?>">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Address</span>
                    <input class="border bg-white rounded-md h-[50px]" type="text" name="address"
                        value="<?php echo htmlspecialchars($user['address']); ?>">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Phone</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="text" name="phone"
                        value="<?php echo htmlspecialchars($user['phone']); ?>">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Email Address</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="email" name="email"
                        value="<?php echo htmlspecialchars($user['email']); ?>">
                </div>
                <div class="flex flex-col w-5/6 xl:w-2/4 space-y-3">
                    <span class="font-semibold">Password</span>
                    <input class="border bg-white rounded-md h-[30px] px-5" type="password" name="password"
                        value="<?php echo htmlspecialchars($user['password']); ?>">
                </div>
                <div class="flex justify-end w-5/6 xl:w-2/4">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-20 flex-col items-center justify-center">
                        Save
                    </button>
                </div>
            </form>
        </section>

        <?php require_once '../../components/core/footer.php'; ?>
    </main>
</body>

</html>