<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualités - Films de Plein Air</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css">

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let windowHeight = window.innerHeight;

            let headerHeight = document.querySelector("#header-content").offsetHeight;

            let footerHeight = document.querySelector("#footer-content").offsetHeight;

            let bodyHeight = windowHeight - footerHeight;

            // Ajouter la hauteur de la barre de navigation au "padding-top" du conteneur de contenu
            document.querySelector("#main-content").style.paddingTop = headerHeight + "px";
            document.querySelector("#main-content").style.minHeight = bodyHeight + "px";
        });
    </script>
</head>
<body>
    <header id="header-content" class="container-fluid bg-white fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="py-1 d-flex align-items-center">
                <img class="img-fluid" src="/images/logo.png" alt="" style="height: 35px;">

                <a class="navbar-brand animate-opacity ms-3" href="/"><p class="hardome text-c22015 fs-3 mb-0">Les Films de Plein Air</p></a>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/le-festival" class="nav-link imperial text-black animate-opacity ps-0">Le festival</a>
                    </li>
                    <li class="nav-item">
                        <a href="/actualites" class="nav-link imperial text-black animate-opacity">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a href="/films" class="nav-link imperial text-black animate-opacity">Films</a>
                    </li>
                    <li class="nav-item">
                        <a href="/reservation" class="nav-link imperial text-black animate-opacity pe-0 me-lg-5">Réservation</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="bg-f7f4ee">
        <div id="main-content" class="container">
            <main class="row">
                <section class="col-12">
                    <p class="mt-3 mb-3 text-black"><a class="text-black animate-opacity" href="/">Accueil</a> > Actualités</p>

                    <h1 class="mt-5 mb-5 imperial-bold text-black text-center">Actualités</h1>

                    <p class="imperial text-black mb-5">Retrouvez toutes les actualités concernant le Festival des Films de Plein Air ce tenant du 05 au 08 août 2023.</p>

                    <div class="row g-4 mb-4">
                        <div class="col-12 col-md-6 col-lg-4">
                            <a class="text-decoration-none text-white animate-opacity" href="/actualites/la-projection-d-emily-the-criminal-en-presence-du-realisateur">
                                <div class="position-relative">
                                    <img class="shadow img-fluid rounded-4" src="/images/actualites/la-projection-d-emily-the-criminal-en-presence-du-realisateur.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h3 class="fs-4 imperial-bold mb-0">La projection d'Emily The Criminal en présence du réalisateur</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a class="text-decoration-none text-white animate-opacity" href="/actualites/participez-au-vote-du-public">
                                <div class="position-relative">
                                    <img class="shadow img-fluid rounded-4" src="/images/actualites/participez-au-vote-du-public.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h3 class="fs-4 imperial-bold mb-0">Participez au vote du public</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <a class="text-decoration-none text-white animate-opacity" href="/actualites/la-selection-du-festival">
                                <div class="position-relative">
                                    <img class="shadow img-fluid rounded-4" src="/images/actualites/la-selection-du-festival.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h3 class="fs-4 imperial-bold mb-0">La sélection du festival</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-5 text-center">
                        <a href="/reservation">
                            <span class="badge text-bg-dark py-2 fs-3 animate-opacity">
                                <h3 class="imperial-bold mb-0 fw-bold">Réserver</h3>
                            </span>
                        </a>
                    </div>

                    <h2 class="mb-3 imperial-bold text-black text-center text-lg-start">Plan du festival</h2>

                    <div class="mb-5">
                        <iframe class="shadow rounded-4 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.873553136649!2d2.306766315824663!3d48.879687007160825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fbe98f714c3%3A0xe62425fddeddc402!2sParc%20Monceau!5e0!3m2!1sfr!2sfr!4v1680574682039!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <footer id="footer-content" class="container-fluid bg-c22015">
        <div class="row">
            <div class="col-12 col-lg-4 py-2 d-flex align-items-center justify-content-center justify-content-lg-start">
                <img class="img-fluid" src="/images/logo-alternative.png" alt="" style="height: 35px;">

                <a class="navbar-brand animate-opacity ms-3" href="/"><p class="hardome text-white fs-3 mb-0">Les Films de Plein Air</p></a>
            </div>

            <div class="col-12 col-lg-4 align-self-lg-center">
                <nav class="navbar-expand-lg mx-2 text-center mx-md-5 mx-lg-0 mt-2 mb-2">
                    <ul class="navbar-nav d-lg-flex justify-content-lg-around">
                        <li class="nav-item"><a class="text-decoration-none nav-link text-white animate-opacity" href="#">Mentions légales</a></li>
                        <li class="nav-item"><a class="text-decoration-none nav-link text-white animate-opacity" href="#">Politique de confidentialités</a></li>
                        <li class="nav-item"><a class="text-decoration-none nav-link text-white animate-opacity" href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="col-12 col-lg-4 d-lg-flex justify-content-lg-around mt-2 mb-2">
                <p class="text-center text-white align-self-center mb-0">Du 5 au 8 août 2023</p>
                <p class="text-center text-white align-self-center mb-0">Parc Monceau <br>
                35 Boulevard de Courcelles <br>
                75008 Paris</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>