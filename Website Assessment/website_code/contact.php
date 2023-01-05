<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Have any question? You can contact us at Cantor in my different ways such as calling, emailing or filling the form on our site. Contact us now for any details you would like to know">
    <title>Cantor | Contact Us</title>
    <?php include("include/head.php") ?>
</head>

<body>
    <?php include("include/header.php") ?>
    <main>
        <div class="span-1 hero">
            <img src="img/contact-us.webp"
                alt="wooden cubes placed next to each others with letters written on top spelling ASK FOR HELP">
            <h1>Contact Us</h1>
        </div>
        <section class="span-1 grid">
            <div class="span-2 contact pad flex">
                <h3>Phone</h3>
                <p>01321-2340-235</p>
                <h3>Email</h3>
                <p>info@cantorcollege.ac.uk</p>
                <h3>Address</h3>
                <p>Cantor College</p>
                <p>Main Street</p>
                <p>Sheffield</p>
                <p>SC4 2BB</p>
            </div>
            <div class="span-2 pad">
                <form rel="nofollow" action="submit.php" method="post">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <textarea name="message" id="message" placeholder="Your message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
        <div class="span-1 map reveal">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9520.912023286064!2d-1.4885028035590127!3d53.37496977975933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487982831b2243e9%3A0x37add1086f57be4f!2sSheffield%20Hallam%20University!5e0!3m2!1sen!2suk!4v1672855021062!5m2!1sen!2suk"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <?php include("include/footer.php") ?>
</body>

</html>