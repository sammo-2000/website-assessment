<?php
require_once('include/database.php');
$SQL = "SELECT * FROM design";
$Result = $mySQLI->query($SQL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We offer range of courses in designs including graphic design, game design & product design. We offer courses with foundation years & postgraduate coures as well! Join us today at Cantor">
    <title>Cantor | Design Courses</title>
    <?php include("include/head.php") ?>
</head>

<body>
    <?php include("include/header.php") ?>
    <main>
        <div class="span-1 hero">
            <img src="img/design-course.webp" alt="white wall showing six arts being displayed">
            <h1>design course</h1>
        </div>
        <section class="span-1 grid">
            <h2 class="span-1 pad">about design course</h2>
            <p class="span-3 pad">The College is an internationally connected creative community of diverse disciplines housed under one roof. We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.</p>
            <p class="span-3 pad">The College's art and design courses don't just train you, they promote alternative ways of thinking, making and communicating; they provide you with space, tools and inspiration to develop your creative practice and a clear career path. You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.</p>
            <p class="span-3 pad">You’ll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.</p>
        </section>
        <section class="span-1 grid">
            <?php while ($obj = $Result->fetch_object()) { ?>
                <div class="card span-3 pad reveal">
                    <div class="img"><img src="<?= $obj->IMGName ?>" alt="<?= $obj->IMGAlt ?>"></div>
                    <h2><?= $obj->Title ?></h2>
                    <ul>
                        <li><p><?= $obj->Type ?></p></li>
                        <li><p><p><?= $obj->Attandance ?></p></p></li>
                        <li><p><?= $obj->Length ?></p></li>
                        <li><p>UCAS point: <?= $obj->UCASPoint ?></p></li>
                    </ul>
                    <a class="btn" href="detail-design.php?courseID=<?= $obj->ID ?>">More Info</a>
                </div>
            <?php } ?>
        </section>
        <?php include("include/contact-us.php") ?>
    </main>
    <?php include("include/footer.php") ?>
</body>

</html>