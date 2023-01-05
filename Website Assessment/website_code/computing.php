<?php
require_once('include/database.php');
$SQL = "SELECT * FROM computer";
$Result = $mySQLI->query($SQL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We offer range of courses in computing including software engineering, cyber security & computer games. We offer courses with foundation years & postgraduate coures as well! Join us today at Cantor">
    <title>Cantor | Computing Courses</title>
    <?php include("include/head.php") ?>
</head>

<body>
    <?php include("include/header.php") ?>
    <main>
        <div class="span-1 hero">
            <img src="img/computer-course.webp" alt="open laptop screen with code being displayed on the screen">
            <h1>Computing course</h1>
        </div>
        <section class="span-1 grid">
            <h2 class="span-1 pad">about computing course</h2>
            <p class="span-3 pad">The College offers a range of courses to suit applicants with varying backgrounds and
                educational abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing,
                Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.</p>
            <p class="span-3 pad">The College teaches undergraduate and postgraduate courses in a wide range of
                specialisms,
                including computer science, software development, information systems, networking and software
                engineering. It is at the heart of a passionate computing community, including student societies devoted
                to games development, digital forensics and programming.</p>
            <p class="span-3 pad">The courses are British Computer Society accredited and are highly relevant to modern
                industry. They are designed to prepare students for professional occupations in Computing and related
                fields. Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
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
                    <a class="btn" href="detail-computing.php?courseID=<?= $obj->ID ?>">More Info</a>
                </div>
            <?php } ?>
        </section>
        <?php include("include/contact-us.php") ?>
    </main>
    <?php include("include/footer.php") ?>
</body>

</html>