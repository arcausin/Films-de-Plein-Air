<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blonde - Films - Films en Plein Air</title>
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
                <section class="col-12 col-lg-8">
                    <p class="mt-3 mb-3 text-black"><a class="text-black animate-opacity" href="/">Accueil</a> > <a class="text-black animate-opacity" href="/films">Films</a> > Blonde</p>

                    <h1 class="mt-5 mb-5 imperial-bold text-black text-center text-md-start">Blonde</h1>

                    <div class="row g-4 mb-5">
                        <div class="col-12 col-md-4">
                            <img class="shadow img-fluid rounded-4" src="/images/films/blonde.jpg" alt="">
                        </div>

                        <div class="col-12 col-md-8">
                            <p class="imperial text-black mb-3 text-center text-md-start">Date de sortie : 28 septembre 2022 / 2h 46min / Drame, Biopic</p>
                            <p class="imperial text-black mb-3 text-center text-md-start">Réalisateur : Andrew Dominik</p>
                            <p class="imperial text-black mb-3 text-center text-md-start">Avec : Ana de Armas, Julianne Nicholson, Bobby Cannavale</p>

                            <h2 class="imperial-bold text-black mb-3 text-center text-md-start">Synopsis</h2>
                            <p class="imperial text-black mb-3 text-center text-md-start">Adapté du best-seller de Joyce Carol Oates, BLONDE est une relecture audacieuse de la trajectoire de Marilyn Monroe, l'une des icônes hollywoodiennes les plus atemporelles. De son enfance tumultueuse à son ascension fulgurante et à ses histoires d'amour complexes de Norma Jeane à Marilyn, BLONDE brouille la frontière entre réalité et fiction pour explorer l'écart de plus en plus important entre sa personnalité publique et la personne qu'elle était dans l'intimité.</p>
                        </div>
                    </div>

                    <h2 class="imperial-bold text-black mb-4 text-center">Projection le Mardi 08 août 2023 à 21h30</h2>

                    <div class="mb-5 text-center">
                        <a href="/reservation">
                            <span class="badge text-bg-dark py-2 fs-3 animate-opacity">
                                <h3 class="imperial-bold mb-0 fw-bold">Réserver</h3>
                            </span>
                        </a>
                    </div>

                    <h3 class="imperial-bold mb-3 text-black">Nos derniers articles</h3>

                    <div class="row g-4 mb-5">
                        <div class="col-12 col-md-6 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/actualites/la-projection-d-emily-the-criminal-en-presence-du-realisateur">
                                <div class="position-relative">
                                    <img class="shadow img-fluid rounded-4" src="/images/actualites/la-projection-d-emily-the-criminal-en-presence-du-realisateur.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h4 class="imperial-bold mb-0">La projection d'Emily The Criminal en présence du réalisateur</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/actualites/participez-au-vote-du-public">
                                <div class="position-relative">
                                    <img class="shadow img-fluid rounded-4" src="/images/actualites/participez-au-vote-du-public.jpg" alt="" style="filter: brightness(0.85);">

                                    <div class="p-3 position-absolute bottom-0">
                                        <h4 class="imperial-bold mb-0">Participez au vote du public</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <section class="col-12 col-lg-4">
                    <h3 class="mb-3 imperial-bold text-black mt-0 mt-lg-3">Les prochaines projections</h3>

                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-4 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/films/paranoia">
                                <div class="rounded shadow">
                                    <img class="img-fluid rounded-top" src="/images/films/paranoia.jpg" alt="">
                                    <div class="p-3">
                                        <h3 class="fs-6 text-black text-center mb-0">05/08/2023 - 18h00</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/films/nocturnal-animals">
                                <div class="rounded shadow">
                                    <img class="img-fluid rounded-top" src="/images/films/nocturnal_animals.jpg" alt="">
                                    <div class="p-3">
                                        <h3 class="fs-6 text-black text-center mb-0">05/08/2023 - 20h00</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/films/prisoners">
                                <div class="rounded shadow">
                                    <img class="img-fluid rounded-top" src="/images/films/prisoners.jpg" alt="">
                                    <div class="p-3">
                                        <h3 class="fs-6 text-black text-center mb-0">05/08/2023 - 22h00</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/films/dual">
                                <div class="rounded shadow">
                                    <img class="img-fluid rounded-top" src="/images/films/dual.jpg" alt="">
                                    <div class="p-3">
                                        <h3 class="fs-6 text-black text-center mb-0">06/08/2023 - 18h00</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/films/a-ghost-story">
                                <div class="rounded shadow">
                                    <img class="img-fluid rounded-top" src="/images/films/a_ghost_story.jpg" alt="">
                                    <div class="p-3">
                                        <h3 class="fs-6 text-black text-center mb-0">06/08/2023 - 19h45</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-6">
                            <a class="text-decoration-none text-white animate-opacity" href="/films/memento">
                                <div class="rounded shadow">
                                    <img class="img-fluid rounded-top" src="/images/films/memento.jpg" alt="">
                                    <div class="p-3">
                                        <h3 class="fs-6 text-black text-center mb-0">06/08/2023 - 21h30</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <h2 class="mb-3 imperial-bold text-black text-center text-lg-start">Plan du festival</h2>

                <div class="mb-5">
                    <iframe class="shadow rounded-4 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.873553136649!2d2.306766315824663!3d48.879687007160825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fbe98f714c3%3A0xe62425fddeddc402!2sParc%20Monceau!5e0!3m2!1sfr!2sfr!4v1680574682039!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </main>
        </div>
    </div>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>