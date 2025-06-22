<?php
include_once 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/location.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>
<body class="cotamila-wrapper">
    <section clas="home" id="contamilla">
        <div class="home-wrapper">
            <h1> Wake, Caffeinate,</h1>
            <h1>Conquer</h1>
            <p>Fuel with flavor and own every moment.</p>
            <button>Explore</button>
        </div>
        <video class="homeVid" src="assets/videos/v2.mp4" controls loop autoplay type="video/webm"></video>
    </section> 
        <?php include_once 'includes/nav.php'?>
        <?php include_once 'includes/menu.php' ?>
        <?php include_once 'includes/gallery.php' ?>
        <?php include_once 'includes/location.php' ?>
        <?php include_once 'includes/footer.php' ?>
</body>
</html>
