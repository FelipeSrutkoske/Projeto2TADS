<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Site 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Reem+Kufi+Ink&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $url = "projeto 2/api";

    $dadosApi = file_get_contents($url);

    $dadosJogos = json_decode($dadosApi);

    ?>
    <header class="header">
        <nav class="navbar">
            <div class="spiner"></div>
            <a href="index.php">The Circle</a>
            <a href="index.php">Home</a>
            <a href="sobre.php">Sobre</a>
            <a href="contato.php">Contato</a>
        </nav>


    </header>
    <div class="box2"></div>
    <div class="box">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/valorant-305kescxw5dpup7y.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Valorant</h5>
                        <p>Jogo competitivo 5x5. No estilo FPS.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagens/fort.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fornite</h5>
                        <p>Jogo no estilo battle royale. Com o adicional de construcao.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagens/mine.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Minecraft</h5>
                        <p>Jogo de mundo aberto. Com criacao ilimitada.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="boxjogo" data-aos='fade-in'>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/eafc.jpeg" alt="">
            <div class="texto">EAFC 24<a href="fifa.php" class="btn btn-secondary">Jogar</a></div>
        </div>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/fortsm.jpg" alt="">
            <div class="texto">Fortnite<a href="fortnite.php" class="btn btn-secondary">Jogar</a></div>

        </div>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/printjogo.png" alt="">
            <div class="texto">Dead Epidemy<a href="meujogo.php" class="btn btn-secondary">Jogar</a></div>

        </div>

    </div>

    <div class="boxjogo" data-aos='fade-in'>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/counter-strike-counter-strike-global-offensive-game-cg-games-art-wallpaper-preview.jpg" alt="">
            <div class="texto">Counter Strike<a href="cs.php" class="btn btn-secondary">Jogar</a></div>
        </div>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/gta5.jpg" alt="">
            <div class="texto">GTA V<a href="gta.php" class="btn btn-secondary">Jogar</a></div>

        </div>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/rocket-league-q83tcwb7har0kh5h.jpg" alt="">
            <div class="texto">Rocket League<a href="rocket.php" class="btn btn-secondary">Jogar</a></div>

        </div>
    </div>

    <div class="boxjogo" data-aos='fade-in'>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/forza.jpg" alt="">
            <div class="texto">Forza Horizon 5<a href="forza.php" class="btn btn-secondary">Jogar</a></div>
        </div>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/thecrew.jpg" alt="">
            <div class="texto">The Crew 2<a href="thecrew.php" class="btn btn-secondary">Jogar</a></div>

        </div>
        <div class="boxpq" data-aos='fade-in'>
            <img src="imagens/lol.jpg" alt="">
            <div class="texto">League of Legends<a href="lol.php" class="btn btn-secondary">Jogar</a></div>

        </div>

    </div>

    <main>
        <?php
        $pagina = "home";
        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"] ?? "home";
            $pagina = explode("/", $pagina);
            $codigo = $pagina[1] ?? NULL;
            $pagina = $pagina[0] ?? "home";
        }

        $pagina = "pages/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
        ?>
    </main>



    <footer>
        <div class="container">
            <p>&copy; 2024 Felipe Srutkoske. Todos os direitos reservados.</p>
        </div>
    </footer>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>