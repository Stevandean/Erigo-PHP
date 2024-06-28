<?php function SEO($title)
{ ?>
    <title><?php echo $title ? $title : "Welcome to Erigo Store!" ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ERIGO">
    <meta name="description" content="E-COMMERCE ERIGO">
    <meta property="og:title" content="<?php echo $title ? $title : "Welcome to Erigo Store!" ?>">
    <meta property="og:description" content="E-COMMERCE ERIGO">
    <meta property="og:image" content="./assets/img/about-us.jpg">
    <!-- <meta property="og:url" content="/this-page.html"> -->
    <meta property="og:site_name" content="ERIGO STORE">
    <meta name="twitter:card" content="./assets/img/about-us.jpg">
    <meta name="twitter:image:alt" content="E-COMMERCE ERIGO">
    <link rel="apple-touch-icon" sizes="180x180" href="https://erigostore.co.id/cdn/shop/files/New_Logo_Erigo_81faf464-002f-434b-bae0-632202133822_32x32.png?v=1692002740">
    <link rel="icon" type="image/png" sizes="32x32" href="https://erigostore.co.id/cdn/shop/files/New_Logo_Erigo_81faf464-002f-434b-bae0-632202133822_32x32.png?v=1692002740">
    <link rel="icon" type="image/png" sizes="16x16" href="https://erigostore.co.id/cdn/shop/files/New_Logo_Erigo_81faf464-002f-434b-bae0-632202133822_32x32.png?v=1692002740">
    <link rel="icon" href="https://erigostore.co.id/cdn/shop/files/New_Logo_Erigo_81faf464-002f-434b-bae0-632202133822_32x32.png?v=1692002740">
    <!-- <link rel="manifest" href="./public/site.webmanifest"> -->

    <?php include_once "./components/partials/styles.php"; ?>
    <?php include_once "./components/partials/scripts.php"; ?>
<?php } ?>