<?php
 if(!isset($_SESSION)){
  session_start();
}


?>
<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../styles/section-homepage.css">
    <link rel="stylesheet" href="../styles/nav.css">
    <style>

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light colorBrown">
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn searchBtn bg-white" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="section-services.php">Agendamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informações</a>
                    </li>
                </ul>
                <span class="navbar-text">

                    <div class="profile " onclick="window.location.href='section-profile.php'">

                        <div class="mini-picture">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="name" id="nameProfile">
                            <?php echo $_SESSION['name']; ?>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </nav>

    <main>
        <div class="container1">
            <div class="container2 row">
                <div class="row m-0">
                    <div class="col-3 col position-relative">
                        <div class="image-overlay">
                            <img class="img-maquina img-fluid" src="../images/maquina-cabelo.png" alt="">
                            <img class="img-tesoura img-fluid" src="../images/tesoura-cabelo.png" alt="">
                        </div>
                    </div>

                    <div class="col-6 text-center col d-flex flex-column justify-content-center">
                        <h2>Vai um corte?</h2>
                        <h3 class="text-light">Temos ofertas pra você</h3>
                        <button class="btn btn-dark btn-lg p-x-5 w-25 btn-agendar">Agendar</button>
                    </div>

                    <div class="col-3 col position-relative">
                        <img class="img-navalha img-fluid" src="../images/navalha.png" alt="">
                    </div>

                </div>
            </div>
            <div class="container3">


                <div class="carousel-container container-fluid mt-5">
                    <div class="carousel-arrow left" onclick="moveCarousel(-1)">
                        &#10094;
                    </div>

                    <div class="carousel-inner" id="carouselInner">
                        <!-- Card 1 -->
                        <div class="carousel-card">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/OIP.wsTNUvkvGBXWvwAMcTkgpQHaHa?w=281&h=211&c=7&r=0&o=5&pid=1.7"
                                    class="card-img-top" alt="Serviço 1">
                                <div class="card-body">
                                    <h5 class="card-title">R$ 50</h5>
                                    <p class="card-text">Descrição do serviço 1</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="carousel-card">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/OIP.sArj4Mf73N_jBdZWIO6ETwHaHa?w=194&h=194&c=7&r=0&o=5&pid=1.7"
                                    class="card-img-top" alt="Serviço 2">
                                <div class="card-body">
                                    <h5 class="card-title">R$ 20</h5>
                                    <p class="card-text">Descrição do serviço 2</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="carousel-card">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/OIP.GenpCL-nt7gpNsPOQySlUAHaJw?w=156&h=207&c=7&r=0&o=5&pid=1.7"
                                    class="card-img-top" alt="Serviço 3">
                                <div class="card-body">
                                    <h5 class="card-title">R$ 45</h5>
                                    <p class="card-text">Descrição do serviço 3</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="carousel-card">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/OIP.detdKTcYYg5KJLgDM8AUGAHaHa?w=177&h=180&c=7&r=0&o=5&pid=1.7"
                                    class="card-img-top" alt="Serviço 4">
                                <div class="card-body">
                                    <h5 class="card-title">R$ 30</h5>
                                    <p class="card-text">Descrição do serviço 4</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="carousel-card">
                            <div class="card">
                                <img src="https://th.bing.com/th/id/OIP.Pf8Bi9MH_JBLcfruv7m56wHaIk?w=173&h=201&c=7&r=0&o=5&pid=1.7"
                                    class="card-img-top" alt="Serviço 5">
                                <div class="card-body">
                                    <h5 class="card-title">R$ 20</h5>
                                    <p class="card-text">Descrição do serviço 5</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="carousel-arrow right" onclick="moveCarousel(1)">
                        &#10095;
                    </div>

                </div>
            </div>
        </div>
        </div>



    </main>
    <footer>

    </footer>
    <script>
    let currentIndex = 0;

    function moveCarousel(direction) {
        const carousel = document.getElementById('carouselInner');
        const cards = carousel.querySelectorAll('.carousel-card');
        const cardWidth = cards[0].offsetWidth;

        // Calcula quantos cards cabem na tela dinamicamente
        const visibleCards = Math.floor(carousel.offsetWidth / cardWidth);
        const maxIndex = cards.length - visibleCards;

        currentIndex += direction;

        if (currentIndex < 0) currentIndex = 0;
        if (currentIndex > maxIndex) currentIndex = maxIndex;

        carousel.scrollTo({
            left: cardWidth * currentIndex,
            behavior: 'smooth'
        });
    }

    // Opcional: reinicia a posição se a tela for redimensionada (melhor UX)
    window.addEventListener('resize', () => {
        const carousel = document.getElementById('carouselInner');
        const cards = carousel.querySelectorAll('.carousel-card');
        const cardWidth = cards[0].offsetWidth;
        carousel.scrollTo({
            left: cardWidth * currentIndex,
            behavior: 'auto'
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../scripts/section-homepage.js"></script>
</body>

</html>