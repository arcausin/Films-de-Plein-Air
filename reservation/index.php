<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Réservation - Films de Plein Air</title>
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
                    <p class="mt-3 mb-3 text-black"><a class="text-black animate-opacity" href="/">Accueil</a> > Réservation</p>

                    <h1 class="mt-5 mb-5 imperial-bold text-black text-center">Réservation</h1>

                    <form class="p-3 rounded-4 shadow mb-3">
                        <h2 class="mb-3 imperial-bold text-black text-center text-lg-start">Formulaire de réservation</h2>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Nom">
                        </div>

                        <div class="mb-3">
                            <label for="firstname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Prénom">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Adresse e-mail">
                        </div>

                        <div class="mb-3">
                            <label class="mb-2" for="films">Films</label>
                            <select class="form-select" id="films">
                                <option selected value="0">Sélectionner un film</option>
                                <option value="0">----- Samedi 05 août 2023 -----</option>
                                <option value="paranoia">Paranoïa - 18h00</option>
                                <option value="nocturnal-animals">Nocturnal Animals - 20h00</option>
                                <option value="prisoners">Prisoners - 22h00</option>
                                <option value="0">----- Dimanche 06 août 2023 -----</option>
                                <option value="dual">Dual - 18h00</option>
                                <option value="a-ghost-story">A Ghost Story - 19h45</option>
                                <option value="memento">Memento - 21h30</option>
                                <option value="0">----- Lundi 07 août 2023 -----</option>
                                <option value="grave">Grave - 18h00</option>
                                <option value="emily-the-criminal">Emily the criminal - 19h45</option>
                                <option value="babylon">Babylon - 21h30</option>
                                <option value="0">----- Mardi 08 août 2023 -----</option>
                                <option value="following">Following - 18h00</option>
                                <option value="mother">Mother! - 19h15</option>
                                <option value="blonde">Blonde - 21h30</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark">Réserver</button>
                    </form>

                    <p class="imperial text-black mb-5">Si vous avez des questions, veuillez <a class="text-black animate-opacity" href="#">nous contacter</a>.</p>

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