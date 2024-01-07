<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episodios</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .right-align {
            float: right;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="container">
        <h1 class="text-center">Episodios en los que aparece el personaje</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Episodio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($episodios as $episodio): ?>
                    <tr>
                        <td>
                            <?php echo $episodio->getNombreEpisodio(); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="<?php echo $_SESSION['previous_page']; ?>" class="btn btn-primary right-align">Pagina anterior</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
</body>

</html>