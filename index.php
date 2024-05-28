<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="/main.js" defer></script>
    <title>Mon Portfolio</title>
</head>

<body>
    <div id="container">
        <!-- le header qui contient notre entête de site (logo, nav etc..) -->
        <header class="navbar">
            <nav id="nav">
                <div id="logo"><img src="balise.png" alt="logo balise" class="logo_balise">
                    <span class="header_nom liens"> Victor Ogez</span>
                </div>
                <ul class="menu">
                    <li>
                        <a class="liens" href="#home">Accueil</a>
                    </li>
                    <li>
                        <a class="liens" href="#a-propos">À propos</a>
                    </li>
                    <li>
                        <a class="liens" href="#experiences">Expériences</a>
                    </li>
                    <li>
                        <a class="liens" href="#contact">Contact</a>
                    </li>
                </ul>
                <div id="icons"></div>
            </nav>
        </header>
        <!-- contenu principal changeant a chaque page -->
        <main>
            <section id="home">
                <h1> Bonjour, Je m'appelle Victor Ogez </h1>
                <p class="intro">et je suis en formation développeur web et web mobile</p>
            </section>
            <section id="a-propos">
                <h2>À propos</h2>
                <div class="apropos_content">
                    <div class="apropos_details">
                        <h3>Présentation</h3>
                        <div class="apropos_details_content">
                            <p>Je suis actuellement en formation développeur web et web mobile.</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit odio vel tempus sagittis. Duis venenatis scelerisque gravida. Donec fermentum imperdiet egestas. Nullam congue faucibus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus cursus turpis ante, at accumsan urna malesuada eu. Nam blandit arcu at dolor ultricies, a accumsan risus pretium. Phasellus molestie mattis sem, in tempus diam eleifend sit amet.

                                Praesent ornare eros in libero laoreet scelerisque. Donec imperdiet nisi eget ipsum iaculis dapibus. In vel sapien hendrerit, ornare nulla et, pretium mi. Aliquam erat volutpat. Integer eleifend odio ut ligula blandit ornare. Vestibulum ut pretium ipsum, nec feugiat enim.</p>
                        </div>
                    </div>
                    <div class="apropos_skills">
                        <h3>Compétences</h3>
                        <div class="skills">
                            <div class="skill">HTML</div>
                            <div class="skill">CSS</div>
                            <div class="skill">JavaScript</div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="experiences">
                <h2>Expériences</h2>
                <div class="experiences_content">

                    <div class="slider">
                        <div class="slides">
                            <img class="slide" src="pic\iu-6th-mini-album-the-winning-balmae-annae-1-8c03afe6-cbbf-4641-a853-5dbdee9139ab.webp" alt="IU 6th mini album Love wins all">
                            <img class="slide" src="pic\lilac-334fb40a-34e5-4a65-906f-64614ca5f3f1.webp" alt="IU Lilac">
                            <img class="slide" src="pic\love-poem-871cb32e-fb14-463a-bd8a-84820d7f78c9.webp" alt="IU Love poem">
                        </div>
                        <button id="prev" class="prev">&#10094</button>
                        <button id="next" class="next">&#10095</button>
                    </div>

                </div>
            </section>
            <section id="contact">
                <h2>Contact</h2>
                <p>

                </p>
            </section>
        </main>
        <!-- notre pied de page -->
        <footer>
            <div class="footer">
                <a target="_blank" rel="noreferrer" href="mailto:victor.ogez@laposte.net"><i class="fa-solid fa-envelope fa-2xl" style="color: #333333"></i></a>
                <a target="_blank" rel="noreferrer" href="https://github.com/ogezv"><i class="fa-brands fa-github fa-2xl" style="color: #333333"></i></a>
                <a target="_blank" rel="noreferrer" href=""><i class="fa-brands fa-linkedin fa-2xl" style="color: #333333"></i></a>
            </div>
        </footer>
    </div>
</body>

</html>