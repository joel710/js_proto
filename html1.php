<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Streaming Website</title>

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Fork Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
        integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stle2.css">
</head>

<body>
    <!-- HEADER::START -->
    <header id="main-header">
        <div class="icons">
            <i class="fa fa-bars" id="menu-bars"></i>
        </div>

        <div class="overlay" id="menu-overlay"></div>
        <div class="side-menu" id="side-menu">
            <button class="btn" id="menu-close-button"><i class="fa fa-angle-left" aria-hidden="true"></i>Close
                menu</button>


            <div class="links">
                <p>Home</p>
                <p>Subbed Anime</p>
                <p>Dubbed Anime</p>
                <p>Most Popular</p>
                <p>Movies</p>
                <p>TV Series</p>
                <p>OVAs</p>
                <p>ONAs</p>
                <p>Specials</p>
                <p>Events</p>
            </div>
            <div class="genre-section">
                <h1>Search by Genres</h1>
                <div class="genre-column">
                    <p id="action">Action</p>
                    <p id="adventure">Adventure</p>
                    <p id="martial-arts">Martial Arts</p>
                    <p id="comedy">Comedy</p>
                    <p id="suspense">Suspense</p>
                    <p id="demons">Demons</p>
                    <p id="drama">Drama</p>
                    <p id="ecchi">Ecchi</p>
                    <p id="fantasy">Fantasy</p>
                    <p id="horror">Horror</p>
                </div>

                <div class="genre-column">
                    <p id="mecha">Mecha</p>
                    <p id="slice-of-life">Slice of Life</p>
                    <p id="isekai">Isekai</p>
                    <p id="idol">Idol</p>
                    <p id="psychological">Psychological</p>
                    <p id="romance">Romance</p>
                    <p id="sci-fi">Sci-Fi</p>
                    <p id="supernatural">Supernatural</p>
                    <p id="mystery">Mystery</p>
                    <p id="magic">Magic</p>
                </div>
            </div>
        </div>

        <a href="index.html" class="logo"><i class="fa fa-star" aria-hidden="true"></i> Hoshi</a>

        <div class="search-container">
            <input type="search" placeholder="Search anime...">
            <span class="search-addon">
                <i class="fa fa-search" aria-hidden="true"></i>
                <a class="filter-btn">Filter</a>
            </span>
        </div>

        <!--<div class="social-media-text">
    <p>Join<br>now</p>
    </div>
    <div class="icons" id="social-media-icons">
      <i class="fa fa-search" id="search-icon"></i>
      <i class="fa fa-discord" id="discord-icon"></i>
      <i class="fa fa-telegram" id="telegram-icon"></i>
      <i class="fa fa-reddit" id="reddit-icon"></i>
      <i class="fa fa-twitter" id="twitter-icon"></i>
    </div>-->

        <!--<div class="icons-container" id="c1">
      <i class="fa fa-users" aria-hidden="true" title="Watch with friends"></i>
      <p>Watch2gether</p>
    </div>

    <div class="icons-container" id="c2">
      <i class="fa fa-random" aria-hidden="true" title="Watch random anime"></i>
      <p>Random</p>
    </div>

    <div class="icons-container" id="c3">
      <i class="fa fa-comments" aria-hidden="true" title="Chat about your favorite shows"></i>
      <p>Community</p>
    </div>-->

        <button class="btn" id="login-button">Login</button>
    </header>
    <!-- HEADER::END -->

    <!-- LOGIN-WINDOW::START -->
    <div class="overlay" id="login-overlay"></div>
    <div class="login-window" id="login-window">
        <div class="login-content">
            <h2>Welcome Back!</h2>
            <form id="display-form">
                <label for="email" id="lb-email">email address</label><br>
                <input type="email" id="email" name="email" autocomplete="off"><br>
                <label for="password" id="lb-password">password</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="checkbox" id="remember-checkbox" name="remember-checkbox">
                <label for="remember-checkbox">remember me</label>
                <a id="forgot-password">forgot password?</a><br>
                <input type="submit" value="login" id="login-submit-button"><br>
                <label>don't have an account? </label><a id="register-button"> register</a><br>
            </form>
            <i id="login-close-button" class="fa fa-window-close"></i>
        </div>
    </div>
    <!-- LOGIN-WINDOW::END -->

    <!-- start reading intro -->

    <section id="presentationSection"
        style="background-color: #070707; display: flex; border-radius: 25px; padding-left: 100px; padding-right: 100px; justify-content: center; align-items: center; height: 100vh;">
        <div class="container my-5" style="background-color: #fdf8f8; padding-left: 2%; padding-right: 20%;">
            <div class="read-intro bg-light"
                style="padding: 10px; border-radius: 8px; box-shadow: 0 0 10px rgba(253, 250, 250, 0.1);">
                <i class="far fa-bookmark fa-3x" style="color: #f1f5f8;"></i>
                <div class="row show" style="display: flex;">
                    <div class="cover col-*" style="flex: 0 0 auto;">
                        <!-- Utilisation de PHP pour afficher l'image de l'anime -->
                        <img class="shadow" style="max-height: 450px;" src="<?php $animeTitle = $_GET['animeTitle'] ?? '';
                        $animeImage = $_GET['animeImage'] ?? '';
                        $animeGenre = $_GET['animeGenre'] ?? '';
                        $animeArtist = $_GET['animeArtist'] ?? '';
                        $animeUpdate = $_GET['animeUpdate'] ?? '';
                        $animeRating = $_GET['animeRating'] ?? '';
                        $animeDescription = $_GET['animeDescription'] ?? ''; echo $animeImage; ?>"
                            alt="<?php echo $animeTitle; ?>">
                    </div>
                    <div class="info col" style="flex: 1; padding-left: 20px;">
                        <!-- Utilisation de PHP pour afficher le titre de l'anime -->
                        <h2 class="head anime-title" style="color: #333; margin-top: 0;"><?php echo $animeTitle; ?></h2>
                        <!-- Autres informations de l'anime générées dynamiquement par PHP -->
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 80px;">Genre:</th>
                                    <td class="anime-genre"><?php echo $animeGenre; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Artist:</th>
                                    <td class="anime-artist"><?php echo $animeArtist; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Update:</th>
                                    <td class="anime-update"><?php echo $animeUpdate; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Rating:</th>
                                    <td class="anime-rating">
                                        <!-- Utilisation de PHP pour afficher la notation de l'anime -->
                                        <?php echo $animeRating; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Utilisation de PHP pour afficher la description de l'anime -->
                        <p style="line-height: 1.6;"><?php echo $animeDescription; ?></p>
                    </div>
                </div>
                <div class="row">
                    <a class="btn btn-red my-3 mx-1 px-5" href="#">Start reading VOL. 1</a>
                </div>
            </div>
        </div>
    </section>

    <!-- end reading intro -->

    <!--google adds-->

    <style>
    .ads-section {
        max-width: 960px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        /* Ajout de flexbox pour aligner les annonces horizontalement */
        justify-content: space-between;
        /* Alignement des annonces avec un espace entre elles */
        flex-wrap: wrap;
        /* Permet aux annonces de passer à la ligne si nécessaire */
    }

    .ad {
        margin-bottom: 20px;
        flex: 0 0 calc(33.33% - 20px);
        /* Définition de la largeur des annonces en pourcentage */
        /* Soustraire 20px pour compenser les marges et éviter le débordement */
    }

    .ad img {
        max-width: 100%;
        height: auto;
    }
    </style>

    <div class="ads-section">
        <div class="ad">
            <a href="https://www.example.com/ad1" target="_blank">
                <img src="https://via.placeholder.com/300x150" alt="Ad 1">
            </a>
        </div>
        <div class="ad">
            <a href="https://www.example.com/ad2" target="_blank">
                <img src="https://via.placeholder.com/300x150" alt="Ad 2">
            </a>
        </div>
        <div class="ad">
            <a href="https://www.example.com/ad3" target="_blank">
                <img src="https://via.placeholder.com/300x150" alt="Ad 3">
            </a>
        </div>
    </div>
    <!--end google adds-->

    <!-- SCROW-TO-TOP-ARROW::START -->
    <button id="scrollToTop" title="Go to top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!-- SCROW-TO-TOP-ARROW::END -->

    <!-- Including Swiper.js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- My own .js file -->
    <script src="script.js"></script>
    <script src="script2.js"></script>
</body>

</html>
