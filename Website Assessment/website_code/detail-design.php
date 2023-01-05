<?php
require_once('include/database.php');
$getCourseID = $_GET["courseID"];
$stmt = $mySQLI->prepare("SELECT * FROM design WHERE ID = ?");
$stmt->bind_param('i', $getCourseID);
$stmt->execute();
$result = $stmt->get_result();
$obj = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Join our course <?= $obj->Title ?> where you can improve your knowlage about <?= $obj->Title ?>!">
    <title>Cantor | <?= $obj->Title ?></title>
    <?php include("include/head.php") ?>
</head>

<body>
    <?php include("include/header.php") ?>
    <main id="detail">
        <div class="span-1 hero">
            <img src="<?= $obj->IMGName ?>" alt="<?= $obj->IMGAlt ?>">
            <h1>
                <?= $obj->Title ?>
            </h1>
        </div>
        <section class="span-1 grid">
            <h2 class="span-1">
                <?= $obj->Title ?>, <?= $obj->AwardName ?>
            </h2>

            <div class="span-3">
                <p>Subject: <?= $obj->Subject ?></p>
                <p>Type: <?= $obj->Type ?></p>
                <p>Start Date: <?= $obj->Year ?></p>
                <p>Length: <?= $obj->Length ?></p>
                <p>
                    <?= $obj->Attandance ?>
                </p>
            </div>
            <div class="span-3">
                <p>UCAS code: <?= $obj->UCASCode ?></p>
                <p>UCAS point: <?= $obj->UCASPoint ?></p>
                <p>Foundation year: <?= $obj->Foundation ?></p>
                <p>Currently recruiting: <?= $obj->Recruiting ?></p>
            </div>
            <div class="span-3">
                <h3>Short summary</h3>
                <p class="summary">
                    <?= $obj->Summary ?>
                </p>
            </div>
            <p class="span-1">To apply please search course code on UCAS <a href="https://www.ucas.com/">here</a></p>
        </section>
        <?php include("include/design.php") ?>
        <?php include("include/contact-us.php") ?>
    </main>
    <?php include("include/footer.php") ?>
</body>

</html>