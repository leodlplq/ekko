<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="node_modules/modern-normalize/modern-normalize.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="assets/style/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap" rel="stylesheet">
    <title>Ekko - Web Agency</title>
</head>
<body>
    <div class="left">
        <div class="title">Nous sommes</div>

        <img class="mockup" src="assets/images/mockup.png" alt="Mock up">

    </div>
    <div class="right">
        <div class="menu">
            <a href="#" class="link_menu">Accueil</a>
            <a href="#" class="link_menu">Nos projets</a>
            <a href="#" class="link_menu">L'équipe</a>
            <a href="#" class="link_menu">Contact</a>
        </div>

        <div class="runes">
            <img src="assets/images/rune.png" alt="rune">
        </div>

        <div class="infos">
            <div class="logo">
                <img src="assets/images/logo.svg" alt="Logo de Ekko">
            </div>
            <div class="baseline">Avec nous faites rayonner vos projets.</div>
            <a href="#" class="btn">
                Un projet ?
            </a>
        </div>
        <div class="caroussel">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                        <img src="assets/images/mockup.png" alt="mockup">
                            <div class="texte_projet">
                                <div class="title_projet">Enl'air</div>
                                <div class="desc_projet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. </div>
                                <div class="avis_projet">
                                    <span class="texte_avis_projet">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. ”</span>
                                    <span class="nom_avis_projet">Mme Laure.M, Agence de Voyage ENl’AIR</span>
                                </div>
                                <a href="#" class="lien_projet">www.enlair.fr</a>
                            </div>
                        </li>
                        <li class="glide__slide">
                        <img src="assets/images/mockup.png" alt="mockup">
                            <div class="texte_projet">
                                <div class="title_projet">Enl'air</div>
                                <div class="desc_projet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. </div>
                                <div class="avis_projet">
                                    <span class="texte_avis_projet">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. ”</span>
                                    <span class="nom_avis_projet">Mme Laure.M, Agence de Voyage ENl’AIR</span>
                                </div>
                                <a href="#" class="lien_projet">www.enlair.fr</a>
                            </div>
                         </li>
                         <li class="glide__slide">
                         <img src="assets/images/mockup.png" alt="mockup">
                            <div class="texte_projet">
                                <div class="title_projet">Enl'air</div>
                                <div class="desc_projet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. </div>
                                <div class="avis_projet">
                                    <span class="texte_avis_projet">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. ”</span>
                                    <span class="nom_avis_projet">Mme Laure.M, Agence de Voyage ENl’AIR</span>
                                </div>
                                <a href="#" class="lien_projet">www.enlair.fr</a>
                            </div>
                         </li>
                         <li class="glide__slide">
                         <img src="assets/images/mockup.png" alt="mockup">
                            <div class="texte_projet">
                                <div class="title_projet">Enl'air</div>
                                <div class="desc_projet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. </div>
                                <div class="avis_projet">
                                    <span class="texte_avis_projet">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus scelerisque odio aliquet eleifend eget. ”</span>
                                    <span class="nom_avis_projet">Mme Laure.M, Agence de Voyage ENl’AIR</span>
                                </div>
                                <a href="#" class="lien_projet">www.enlair.fr</a>
                            </div>
                         </li>
                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img src="assets/images/leftarrow.png" alt="fleche gauche"></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img src="assets/images/rightarrow.png" alt="fleche droite"></button>
                </div>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                </div>
            </div>
        
        </div>
        
        
    </div>


    
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="assets/script/script.js"></script>
</body>
</html>