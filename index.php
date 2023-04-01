<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil | Films en Plein Air</title>
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
            <a class="navbar-brand animate-opacity" href="/"><h1 class="hardome text-c22015 fs-2 ms-lg-5">Festival des Films en Plein Air</h1></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link imperial text-black animate-opacity ps-0">Le festival</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link imperial text-black animate-opacity">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link imperial text-black animate-opacity">Films</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link imperial text-black animate-opacity pe-0 me-lg-5">Réservation</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="main-content" class="container-fluid bg-f7f4ee">
        <main class="row d-flex flex-column-reverse flex-lg-row">
            <section class="col-12 col-lg-4">
                <h2 class="mt-5 mb-5 dinengschriftstd text-black text-center fs-1">Le festival</h2>

                <div class="row">
                    <div class="offset-lg-2 col-12 col-lg-8">
                        <div class="p-4 mx-5 mx-lg-0 mb-4 rounded rounded-4 bg-white shadow">
                            <div class="text-start">
                                <h3 class="imperial-bold text-black fs-2 mb-3">Histoire</h3>
                                <p class="imperial text-black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum quaerat tempora nulla sunt unde magnam cupiditate earum dolores, molestiae maxime harum odio libero, dolore consequuntur fuga at quam! Enim, ex!</p>
                            </div>

                            <div class="text-end">
                                <h3 class="imperial-bold text-black fs-2 mb-3">Equipes</h3>
                                <p class="imperial text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempora culpa dolores doloremque voluptas ex, qui, dignissimos adipisci, repellat magnam modi at alias maiores repudiandae iure sapiente enim praesentium sint?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 text-center">
                    <button type="button" class="btn btn-outline-dark btn-lg bg-white border-0 animate-opacity text-black imperial-bold shadow">Contact</button>
                </div>
            </section>

            <section class="col-12 col-lg-4">
                <div class="text-center">
                    <img class="mt-5 mb-5 img-fluid rounded rounded-4 shadow" src="https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/26/15/21/0089085.jpg" alt="">
                </div>

                <h2 class="mb-4 dinengschriftstd text-black text-center fs-1">A Ghost Story</h2>

                <div class="mb-4 text-center">
                    <button type="button" class="btn btn-outline-dark btn-lg bg-white border-0 animate-opacity text-black imperial-bold shadow">Plus de films</button>
                </div>
            </section>

            <section class="col-12 col-lg-4">
                <h2 class="mt-5 mb-5 dinengschriftstd text-black text-center fs-1">Actualités</h2>

                <div class="mb-4 mx-5">
                    <div class="mb-3 rounded rounded-4 bg-white shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)), url('https://st.depositphotos.com/1003368/5028/i/950/depositphotos_50283209-stock-photo-street-in-paris-illustration.jpg');">
                        <a class="text-decoration-none" href="">
                            <div class="p-3">
                                <h3 class="fs-4 imperial-bold text-white mb-3">Titre de l'article 1</h3>
                                <p class="imperial text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, quibusdam magnam ab odio ex vel nam repellendus illum, deleniti ullam vitae.</p>
                            </div>
                        </a>
                    </div>

                    <div class="mb-3 rounded rounded-4 bg-white shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)), url('https://st.depositphotos.com/1003368/5028/i/950/depositphotos_50283209-stock-photo-street-in-paris-illustration.jpg');">
                        <a class="text-decoration-none" href="">
                            <div class="p-3">
                                <h3 class="fs-4 imperial-bold text-white mb-3">Titre de l'article 2</h3>
                                <p class="imperial text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, quibusdam magnam ab odio ex vel nam repellendus illum, deleniti ullam vitae.</p>
                            </div>
                        </a>
                    </div>

                    <div class="mb-3 rounded rounded-4 bg-white shadow" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)), url('https://st.depositphotos.com/1003368/5028/i/950/depositphotos_50283209-stock-photo-street-in-paris-illustration.jpg');">
                        <a class="text-decoration-none" href="">
                            <div class="p-3">
                                <h3 class="fs-4 imperial-bold text-white mb-3">Titre de l'article 3</h3>
                                <p class="imperial text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, quibusdam magnam ab odio ex vel nam repellendus illum, deleniti ullam vitae.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mb-4 text-center">
                    <button type="button" class="btn btn-outline-dark btn-lg bg-white border-0 animate-opacity text-black imperial-bold shadow">Plus d'articles</button>
                </div>
            </section>
        </main>
    </div>

    <footer id="footer-content" class="container-fluid bg-c22015">
        <div class="row">
            <div class="col-12 col-lg-4 align-self-center">
                <a class="text-decoration-none animate-opacity" href="/"><p class="mt-2 mb-2 hardome text-white fs-2 text-center text-lg-start ms-lg-5">Festival des Films en Plein Air</p></a>
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