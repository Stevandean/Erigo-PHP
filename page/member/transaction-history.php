<?php
session_start();

if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] != true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="//erigostore.co.id/cdn/shop/files/New_Logo_Erigo_81faf464-002f-434b-bae0-632202133822_32x32.png?v=1692002740" type="image/png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gray: '#757575',
                        navy: '#1B2E57',
                        red: '#E95144',
                        yellow: '#FFBB49',
                        grayRating: '#D9D9D9',
                        yellowRating: '#FACC15',
                    }
                }
            }
        }
    </script>
    <title>Transaction history</title>
</head>

<body>
    <div class="w-full h-screen font-[Poppins]">
        <?php require_once '../../components/core/navbar.php'; ?>

        <div class="min-h-full p-10">
            <h1 class="text-black text-2xl font-extrabold place-items-end p-[5px] ml-[17px] uppercase">transaction
                history</h1>
            <div class="flex justify-center items-center p-[20px]">
                <table class=" shadow-md sm:rounded-lg table-auto bg-white w-3/4 flex-col text-xs overflow-scroll">
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
</div>
<?php require_once '../../components/core/footer.php'; ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var userAcc = localStorage.getItem('userAcc');

        if (userAcc) {
            document.getElementById('cartBtn').style.display = 'inline';
            document.getElementById('profileBtn').style.display = 'inline';

            document.getElementById('loginBtn').style.display = 'none';
            document.getElementById('registerBtn').style.display = 'none';

            document.getElementById('cartBtnMbl').style.display = 'inline';
            document.getElementById('profileBtnMbl').style.display = 'inline';

            document.getElementById('loginBtnMbl').style.display = 'none';
            document.getElementById('registerBtnMbl').style.display = 'none';
        } else {
            document.getElementById('loginBtn').style.display = 'inline';
            document.getElementById('registerBtn').style.display = 'inline';

            document.getElementById('cartBtn').style.display = 'none';
            document.getElementById('profileBtn').style.display = 'none';

            document.getElementById('loginBtnMbl').style.display = 'inline';
            document.getElementById('registerBtnMbl').style.display = 'inline';

            document.getElementById('cartBtnMbl').style.display = 'none';
            document.getElementById('profileBtn').style.display = 'none';
        }
    });
    const menuBtn = document.getElementById('menuBtn');
    const responsiveMenu = document.getElementById('responsiveMenu');

    menuBtn.addEventListener('click', () => {
        responsiveMenu.classList.toggle('hidden');
    });
</script>

</body>

</html>

</html>