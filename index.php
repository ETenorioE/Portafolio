<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Eduardo Brian Tenorio Quispe</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>


<body>
    <div class="conteiner">
        <div class="burbuja">
            <?php
            for ($i = 1; $i <= 50; $i++) {
                echo '<span style="--i:' . rand(5, 20) . ';"></span>';
            }
            ?>

        </div>

        <div class="wrapper">

            <header>
                <nav class="navbar">
                    <div class="brand">
                        <h2>E <span>T</span></h2>
                    </div>
                    <ul class="menu">
                        <li><a class="active" href="#">Sobre mi</a></li>
                        <li><a href="#">Proyectos</a></li>
                        <li><a href="#">hola</a></li>
                        <li><a href="#">hola</a></li>
                    </ul>
                </nav>
            </header>



            <main class="main">
                <div class="info-content">
                    <h1>Hola Soy <span>Eduardo</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptas velit, nihil commodi
                        optio
                        asperiores earum repudiandae quibusdam quae adipisci repellendus consequatur accusamus
                        reiciendis
                        molestias quam voluptatibus magni vitae laboriosam?</p>
                    <a download href="#">
                        <button class="download-cv" download="" title="Descargar CV">
                            Descargar CV
                        </button>
                    </a>
                    <div>
                        <input class="email" type="text" id="correo" name="correo" value="tenor.eduardo7@gmail.com">

                        <button class="btn-copy" type="button" title="copiar" onclick="mostrar_sms_email()"><i class="fa-solid fa-copy"></i> </button>
                        <div id="copiedMessage" class="copied-message">¡Copiado! 😎</div>
                    </div>

                    <div class="social">
                        <ul>
                            <li><a href="https://www.linkedin.com/in/eduardo-tenor/" target="_blank" title="eduardo-tenor"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="https://github.com/ETenorioE" target="_blank" title="ETenorioE"><i class="bi bi-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <img src="assets/img/foto.jpg" alt="Eduardo Brian Tenorio Quispe imagen">
            </main>

        </div>

    </div>
</body>

</html>
<script src="assets/js/javascript.js"></script>