<!doctype html>
<html lang="en">

<head>
    <title>Image Switcher</title>
    <meta name="Description" content="Switches images on screen responsiveness and display all at the same time." />
</head>

<body>
    <?php require 'img-switcher.php'; ?>
    <h1>Screen Responsiveness</h1>
    <picture>
        <source srcset="<?php echo $_SESSION['stdImg2000'] ?>" alt="responsive image" media="(min-width: 1400px)" />
        <source srcset="<?php echo $_SESSION['stdImg1400'] ?>" alt="responsive image" media="(min-width: 769px)" />
        <source srcset="<?php echo $_SESSION['stdImg800'] ?>" alt="responsive image" media="(min-width: 577px)" />
        <img srcset="<?php echo $_SESSION['stdImg600'] ?>" alt="responsive image" style="width: 100%; height: auto;" />
    </picture>

    <br /><br /><br /><br /><br />

    <h1>All at once</h1>
    <img src="<?php echo $_SESSION['stdImg2000'] ?>" alt="responsive image" />
    <img src="<?php echo $_SESSION['stdImg1400'] ?>" alt="responsive image" />
    <img src="<?php echo $_SESSION['stdImg800'] ?>" alt="responsive image" />
    <img src="<?php echo $_SESSION['stdImg600'] ?>" alt="responsive image" />
</body>

</html>