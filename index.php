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
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>

    <div class="bg-f7f4ee">
        <div id="main-content" class="container">
            <main class="row">
                <section class="col-12 mb-3">
                    <h2 class="mt-5 mb-5 dinengschriftstd text-black fs-1">Nos derniers articles</h2>

                    <div class="row g-4 mb-4">
                        <div class="col-12 col-md-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://st.depositphotos.com/1003368/5028/i/950/depositphotos_50283209-stock-photo-street-in-paris-illustration.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h3 class="fs-4 mb-0">Test d'un article du festival</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://st.depositphotos.com/1003368/5028/i/950/depositphotos_50283209-stock-photo-street-in-paris-illustration.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h3 class="fs-4 mb-0">Test d'un article du festival</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-4 text-center">
                        <button type="button" class="btn btn-outline-dark btn-lg bg-white border-0 animate-opacity text-black imperial-bold shadow">Plus d'articles</button>
                    </div>
                </section>

                <section class="col-12 mb-3">
                    <h2 class="mt-5 mb-5 dinengschriftstd text-black fs-1">Les prochaines projections</h2>

                    <div class="row g-4 mb-4">
                        <div class="col-6 col-md-3 col-lg-2">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/26/15/21/0089085.jpg" alt="" style="filter: brightness(0.85);">
                                    
                                    <div class="p-3 w-100 position-absolute bottom-0">
                                        <h3 class="fs-6 text-center mb-0">A Ghost Story</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/26/15/21/0089085.jpg" alt="" style="filter: brightness(0.85);">
                                    
                                    <div class="p-3 w-100 position-absolute bottom-0">
                                        <h3 class="fs-6 text-center mb-0">A Ghost Story</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/26/15/21/0089085.jpg" alt="" style="filter: brightness(0.85);">
                                    
                                    <div class="p-3 w-100 position-absolute bottom-0">
                                        <h3 class="fs-6 text-center mb-0">A Ghost Story</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/26/15/21/0089085.jpg" alt="" style="filter: brightness(0.85);">
                                    
                                    <div class="p-3 w-100 position-absolute bottom-0">
                                        <h3 class="fs-6 text-center mb-0">A Ghost Story</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/26/15/21/0089085.jpg" alt="" style="filter: brightness(0.85);">
                                    
                                    <div class="p-3 w-100 position-absolute bottom-0">
                                        <h3 class="fs-6 text-center mb-0">A Ghost Story</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/26/15/21/0089085.jpg" alt="" style="filter: brightness(0.85);">
                                    
                                    <div class="p-3 w-100 position-absolute bottom-0">
                                        <h3 class="fs-6 text-center mb-0">A Ghost Story</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mb-4 text-center">
                        <button type="button" class="btn btn-outline-dark btn-lg bg-white border-0 animate-opacity text-black imperial-bold shadow">Plus de films</button>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>