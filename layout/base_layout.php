<?php require_once './lib/seo.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Fill the string when you want change title of page -->
    <?php SEO(""); ?>
</head>

<body>
    <main class="w-full min-h-screen font-[Poppins]">
        <!-- NAVBAR COMPONENT -->
        <?php require_once './components/core/navbar.php'; ?>

        <!-- CONTENT BELOW!!! -->
        <section class="some-class"></section>
        <!-- CONTENT ABOVE!!! -->

        <!-- FOOOTER COMPONENT -->
        <?php require_once './components/core/footer.php'; ?>
    </main>
</body>

</html>