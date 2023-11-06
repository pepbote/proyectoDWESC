<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylecontact.css" rel="stylesheet">
    <link href="css/stylesection.css" rel="stylesheet">
    <title>ProNewsHub</title>
</head>
<body>
    <?php include 'header.html'; ?>
    <section>
        <div class="contenido-seccion">
            <span class="title-text">CONTACT</span>
        </div>
    </section>

    <div id="container-contact">
        <div id="form-contact">
            <div class="title-container">
                <span class="title">INFO</span>
            </div>
            <div id="form">
                <form method="post">
                    <p class="textform">
                        <label for="name"></label>
                        Name <br> <input class="text" name="name" type="text">
                    </p>
                    <p>
                        <label for="surname"></label>
                        Surname <br> <input class="text" name="surname" type="text">
                    </p class="textform">
                    <p>
                        <label for="email"></label>
                        Email <br> <input name="email" class="text" type="email">
                    </p>
                    <p class="textform">
                        <label for="phone"></label>
                        Phone <br> <input name="phone" class="text" type="tel">
                    </p>
                    <p class="textform">
                        <label for="comment"></label>
                        Comment <br> <input name="comment" class="comment" type="text">
                    </p>
                    <div id="button-container">
                        <button id="send" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="vertical"></div>
        <div id="container-map">
            <div class="title-container">
                <span class="title">WHERE</span>
            </div>
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1528595.0389979177!2d-0.19495123060072064!3d41.55761710000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4929349e46807%3A0xb657d0f13ba6dd0e!2sMercadona!5e0!3m2!1sca!2ses!4v1698666361946!5m2!1sca!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <?php include 'footer.html'?>
</body>
</html>