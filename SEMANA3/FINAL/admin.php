<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="css/stylesection.css">
    <script src="js/scriptadmin.js" defer></script>
    <title>ProNewsHub</title>
</head>
<body>
    <?php include 'header.html'?>
    <section>
        <div class="contenido-seccion">
            <span class="title-text">ADMIN</span>
        </div>
    </section>
    <div id="section">
        <div id="add-form">
            <span id="title-add" class="title"><p>ADD ARTICLE</p></span>
            <form id="add" method="post" action="add.php" class="hidden">
                <p>
                    <label for="id">
                        ID:
                        <input name="id" type="number" required>
                    </label>
                </p>
                <p>
                    <label for="titulo">
                        Title:
                        <input name="titulo" type="text" required>
                    </label>
                </p>
                <p>
                    <label for="descripcion">
                        Description:
                        <input name="descripcion" type="text" required>
                    </label>
                </p>
                <p>
                    <label for="resumen">
                        Summary:
                        <input name="resumen" type="text" required>
                    </label>
                </p>
                <p>
                    <label for="autor">
                        Author:
                        <input name="autor" type="text" required>
                    </label>
                </p>
                <button type="submit" id="submit">ADD</button>
            </form>
        </div>
        <div id="edit-form">
            <span id="title-edit" class="title"><p>EDIT ARTICLE</p></span>
            <form id="edit" method="post" action="edit.php" class="hidden">
                <p>
                    <label for="id">
                        ID:
                        <input name="id" type="number" required>
                    </label>
                </p>
                <p>
                    <label for="titulo">
                        Title:
                        <input name="titulo" type="text">
                    </label>
                </p>
                <p>
                    <label for="descripcion">
                        Description:
                        <input name="descripcion" type="text">
                    </label>
                </p>
                <p>
                    <label for="resumen">
                        Summary:
                        <input name="resumen" type="text">
                    </label>
                </p>
                <p>
                    <label for="autor">
                        Author:
                        <input name="autor" type="text">
                    </label>
                </p>
                <button type="submit" id="submit">EDIT</button>
            </form>
        </div>
        <div id="delete-form">
            <span id="title-delete" class="title"><p>DELETE ARTICLE</p></span>
            <form id="delete" method="post" action="delete.php" class="hidden">
                <p>
                    <label for="id">
                        ID:
                        <input name="id" type="number" required>
                    </label>
                </p>
                <button type="submit" id="submit">DELETE</button>
            </form>
        </div>
    </div>
</body>
</html>