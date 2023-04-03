<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualités | Films en Plein Air</title>
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
    <?php require_once("include/header.php"); ?>

    <div class="bg-f7f4ee">
        <div id="main-content" class="container">
            <main class="row">
                <section class="col-12 mb-3">
                    <p class="mt-3 mb-3 text-black"><a class="text-black animate-opacity" href="/">Accueil</a> > Actualités</p>

                    <h2 class="mt-5 mb-5 dinengschriftstd text-black text-center fs-1">Actualités</h2>

                    <p class="imperial text-black mb-3">Retrouvez toutes les actualités concernant le Festival des Films en Plein Air</p>

                    <div class="row g-4 mb-4">
                        <div class="col-12 col-md-6 col-lg-4">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://st.depositphotos.com/1003368/5028/i/950/depositphotos_50283209-stock-photo-street-in-paris-illustration.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h3 class="fs-4 mb-0">Test d'un article du festival</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <a class="text-decoration-none text-white animate-opacity" href="/">
                                <div class="shadow position-relative">
                                    <img class="img-fluid rounded" src="https://st.depositphotos.com/1003368/5028/i/950/depositphotos_50283209-stock-photo-street-in-paris-illustration.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h3 class="fs-4 mb-0">Test d'un article du festival</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
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
                </section>
            </main>
        </div>
    </div>

    <?php require_once("include/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>