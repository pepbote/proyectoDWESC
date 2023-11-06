<?php

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$comments = $conexion->query("SELECT comentario, usuario FROM grupo5_comentarios");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylechat.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesection.css">
    <script src="js/scriptchat.js" defer></script>
    <title>ProNewsHub</title>
</head>
<body>
    <?php include 'header.html'; ?>
    <section>
        <div class="contenido-seccion">
            <span class="title-text">CHAT</span>
        </div>
    </section>
    <div id="title-container">
        <span id="title">HOGWARTS NFT</span>
    </div>
    <div id="section-nft">
        <img src="img/nft1.png" alt="nft1">
        <div id="vertical"></div>
        <div id="descripcion">
            <p id="fecha">19/09/2020</p>
            <p id="texto">
                Su mirada está fija en el exterior, como si estuviera observando algo con detenimiento. El arte digital del NFT crea un ambiente mágico y enigmático en la habitación, con colores vibrantes y detalles meticulosos. A través de la ventana, se puede apreciar un paisaje encantador, con un cielo estrellado y elementos fantásticos como dragones voladores o criaturas mágicas.
            </p>
        </div>
    </div>
    <div class="horizontal"></div>
    <div id="chat-container">
        <div id="chat-box">
            <div class="message-container">
                <img src="img/perfil2.png" class="perfil">
                <span class="message">Estoy orgulloso de mi NFT, es una expresión genuina de mí mismo.</span> 
                <p class="autor">Leo (autor)</p>
            </div>
            <?php foreach ($comments as $comment) : ?>
                <div class="message-container">
                    <img src="img/perfil2.png" class="perfil">
                    <span class="message"><?php echo htmlspecialchars($comment['comentario']); ?></span>
                    <p class="autor"><?php echo htmlspecialchars($comment['usuario']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="chat-send">
            <img src="img/porfile.png" class="perfil">
            <form id="form" method="post" action="comentarios.php">
                <label for="comentario">
                    <input type="text" name="comentario" id="comentario" placeholder="Send a message...">
                </label>
                <button type="submit" id="submit"><img src="img/send.png" alt="send"></button>
            </form>
        </div>
    </div>
    <div class="horizontal" class="margin-top"></div>
    <div id="button-container">
        <a href="index.php"><button id="show-all">Show all</button></a>
    </div>
    <?php include 'footer.html' ?>
</body>
</html>