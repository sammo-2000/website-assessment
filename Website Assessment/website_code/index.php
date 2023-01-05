<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Welcome to Cantor, at cantor we belive everyone has hiddens skills our aim is for you to get those skills out and improve yourself even further with us! Join us at Cantor today">
    <title>Cantor | Home</title>
    <?php include("include/head.php") ?>
</head>

<body>
    <?php include("include/header.php") ?>
    <main>
        <div class="span-1 hero">
            <img src="img/index.webp" alt="Cantor picture from outside">
            <h1>Cantor</h1>
        </div>
        <section class="span-1 index">
            <img src="img/indexOne.webp" alt="">
            <div class="pad flex">
                <h2>welcome to Cantor! Where knowleage applies</h2>
                <p>at cantor we belive everyone has hidden skills, we offer range of courses in computing and design
                    fields. Apply now and improve your skills even further!</p>
                <div class="apply">
                    <a class="btn" href="computing.php">computing</a>
                    <a class="btn" href="design.php">Design</a>
                </div>
            </div>
        </section>
        <?php include("include/computing.php") ?>
        <section class="span-1 index reveal">
            <img src="img/learning-resources.webp" alt="book on shelfs with row of lights front of them">
            <div class="pad flex">
                <h2>Learning Resources</h2>
                <p>All students and staff of the College are entitled to register as members of the Learning Resources
                    and to use the facilities of the Learning Resources for the purpose of their course of study or
                    College employment.</p>
                <a class="btn" href="learningResources.php">Learn more</a>
            </div>
        </section>
        <?php include("include/design.php") ?>
        <?php include("include/contact-us.php") ?>
    </main>
    <?php include("include/footer.php") ?>
</body>

</html>