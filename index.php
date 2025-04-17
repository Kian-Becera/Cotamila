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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section id="Home">
        <div class="home">
            <h1> Wake, Caffeinate,</h1>
            <h1>Conquer</h1>
            <p>Fuel with flavor and own every moment.</p>
            <button>Explore</button>
        </div>
        <video class="homeVid" src="assets/videos/v2.mp4" controls loop autoplay type="video/webm"></video>
        
        <?php include_once 'includes/nav.php'?>
    </section>
</body>
</html>
