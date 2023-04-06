<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Ghost Story - Films - Films en Plein Air</title>
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
                <section class="col-12">
                    <p class="mt-3 mb-3 text-black"><a class="text-black animate-opacity" href="/">Accueil</a> > <a class="text-black animate-opacity" href="/films">Films</a> > A Ghost Story</p>

                    <h1 class="mt-5 mb-5 imperial-bold text-black text-center text-md-start">A Ghost Story</h1>

                    <div class="row g-4 mb-5">
                        <div class="col-12 col-md-4">
                            <img class="shadow img-fluid rounded-4" src="/images/films/a_ghost_story.jpg" alt="">
                        </div>

                        <div class="col-12 col-md-8">
                            <p class="imperial text-black mb-3 text-center text-md-start">Date de sortie : 20 decembre 2017 / 1h 32min / Drame, Fantastique</p>
                            <p class="imperial text-black mb-3 text-center text-md-start">Réalisateur : David Lowery</p>
                            <p class="imperial text-black mb-3 text-center text-md-start">Avec : Casey Affleck, Rooney Mara, McColm Cephas Jr</p>

                            <h2 class="imperial-bold text-black mb-3 text-center text-md-start">Synopsis</h2>
                            <p class="imperial text-black mb-3 text-center text-md-start">Apparaissant sous un drap blanc, le fantôme d'un homme rend visite à sa femme en deuil dans la maison de banlieue qu'ils partageaient encore récemment, pour y découvrir que dans ce nouvel état spectral, le temps n'a plus d'emprise sur lui. Condamné à ne plus être que simple spectateur de la vie qui fut la sienne, avec la femme qu'il aime, et qui toutes deux lui échappent inéluctablement, le fantôme se laisse entraîner dans un voyage à travers le temps et la mémoire, en proie aux ineffables questionnements de l'existence et à son incommensurabilité.</p>
                        </div>
                    </div>

                    <h2 class="imperial-bold text-black mb-4 text-center">Projection le dimanche 06 août 2023 à 19h45</h2>

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

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>