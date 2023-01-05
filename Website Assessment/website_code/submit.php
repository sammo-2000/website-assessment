<?php
require_once('include/database.php');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$getCourseID = $_GET["courseID"];
$stmt = $mySQLI->prepare("INSERT INTO form(name, email, message) value (?, ?, ?)");
$stmt->bind_param('sss', $name, $email, $message);
$stmt->execute();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="#"> this page does not have description as it should only be shown when form is submited -->
    <title>Cantor | Thank you</title>
    <?php include("include/head.php") ?>
</head>

<body>
    <?php include("include/header.php") ?>
    <main>
        <div class="span-1 hero">
            <img src="img/thank-you.webp"
                alt="A4 paper on wooden table, word thank you has been written on it with black ink, black marker laying down next to the paper">
            <h1>Thank you</h1>
        </div>
        <section class="span-1">
            <h2>Thank you, we have recived your form!</h2>
            <p>We will be in touch with you soon, if you have any question in the mean while you can
                check out our other pages</p>
            <div class="thank-you-link">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="computing.php">computing course</a></li>
                    <li><a href="design.php">design course</a></li>
                    <li><a href="contact.php">contact us</a></li>
                </ul>
            </div>
        </section>
    </main>
    <?php include("include/footer.php") ?>
</body>

</html>