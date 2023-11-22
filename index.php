<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="main.js" defer></script>
    <title>Mon Portfolio</title>
</head>

<body>
    <div id="container">
        <!-- le header qui contient notre entête de site (logo, nav etc..) -->
        <header class="navbar">
            <nav>
                <!-- id = unique (1 seul par page) -->
                <div id="logo"><img src="balise.png" alt="logo balise" class="logo_balise">
                    <span class="header_nom"> Victor Ogez</span>
                </div>
                <!-- <input type="checkbox" role="button" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="menu"> -->

                <ul class="menu">
                    <li>
                        <a class="liens" href="./">Accueil</a>
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
                <p>Bonjour, Je m'appelle Victor Ogez et je suis en formation développeur web et web mobile</p>
            </section>
            <section id="experiences">
                <h2>Expériences</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim sem libero, vel vestibulum nulla tincidunt nec. Aliquam risus tellus, finibus convallis sollicitudin eu, facilisis in sem. Aliquam erat volutpat. Donec nec lectus nec massa bibendum sodales et ut libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris cursus metus ut ipsum efficitur, at tincidunt ligula maximus. Curabitur vel dapibus lectus, convallis suscipit arcu. Fusce congue elementum felis nec lobortis. Aenean ac felis vulputate purus mollis tempus.

                    In convallis consequat facilisis. Phasellus eu congue velit, non tempus est. Fusce tristique fermentum libero nec vulputate. Maecenas ornare faucibus tincidunt. Nunc aliquet rutrum vestibulum. Nunc pretium nunc quam, nec pharetra odio malesuada id. Proin eu magna ornare, varius dui ac, hendrerit metus. Praesent at augue a dui lobortis viverra. Etiam porttitor molestie nisi, et imperdiet dolor rhoncus a. In ut orci sapien. Ut sed sodales nunc, eu tincidunt augue. Quisque malesuada magna at nunc dictum lobortis. Fusce auctor varius enim, vel ullamcorper est scelerisque at. Integer nisl mi, consequat sit amet nulla in, scelerisque mattis neque.

                    Phasellus sed ex a mi porttitor feugiat. Etiam ultrices ac dui et malesuada. Nunc non imperdiet orci, facilisis rutrum ipsum. Integer maximus gravida feugiat. Maecenas sit amet molestie libero. Aenean vel erat magna. Nulla euismod porttitor elit, id facilisis erat lobortis id. Duis a ornare risus, eget pharetra augue. Mauris laoreet mauris eget urna consectetur vehicula. Morbi nunc odio, dignissim blandit purus non, commodo maximus leo.

                    In non sem ullamcorper, egestas odio a, malesuada metus. Donec vel magna euismod, euismod ex a, rutrum enim. Duis pulvinar venenatis ex id eleifend. In sed egestas felis. Quisque bibendum tempor orci at ultrices. Sed urna augue, mollis non lacus eget, sodales semper dolor. Vivamus elementum sem quis tellus aliquet dapibus.
                </p>
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