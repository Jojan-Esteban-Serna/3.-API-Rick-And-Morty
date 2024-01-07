<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de Rick and Morty</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body{
            margin-bottom: 80px;
        }
        .personaje-container {
            /*border: 1px solid #ccc;*/
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            height: 96%;
            box-shadow: 3px 3px 5px 2px rgba(0, 0, 0, 0.25);
            position: relative;
            margin-bottom: 50px;
        }

        .personaje-container img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        .personaje-container h1 {
            font-size: 2rem;
            text-align: center;
            font-weight: 700;
        }

        .personaje-container h2 {
            font-size: 1.5rem;
            text-align: center;
            font-weight: 500;
        }

        .personaje-container .link-container {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
        }

        #scroll-up-btn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #0d6efd;
            color: white;
            cursor: pointer;
            padding: 5px;
            border-radius: 4px;
        }

    </style>
</head>

<body>
    <?php $_SESSION['previous_page'] = $_SERVER['REQUEST_URI']; ?>

    <?php include 'navbar.php' ?>

    <div class="container">
        <div class="row">
            <?php foreach ($personajes as $personaje): ?>
                <div class="col-md-4">
                    <div class="personaje-container">
                        <h1>
                                <?php echo $personaje->getNombre() ?>

                        </h1>
                        <img src="<?php echo $personaje->getImagen() ?>" alt="">

                        
                        <h2>Estado:
                            <em>
                                <?php echo $personaje->getEstado() ?>
                            </em>
                        </h2>
                        <h2>Tipo:
                            <?php echo $personaje->getTipo() ?>
                        </h2>
                        <div class="link-container">
                            <a href="?c=Episodios&a=Listar&id=<?php echo $personaje->getId(); ?>"
                                class="btn btn-primary" style="position: relative;">Episodios</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'pagination.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

    <script>
        var scrollUpBtn = document.createElement("button");
        scrollUpBtn.id = "scroll-up-btn";
        scrollUpBtn.innerHTML = "Subir";
        document.body.appendChild(scrollUpBtn);

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollUpBtn.style.display = "block";
            } else {
                scrollUpBtn.style.display = "none";
            }
        }

        scrollUpBtn.addEventListener("click", function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
</body>

</html>