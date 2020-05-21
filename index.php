<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="node_modules/modern-normalize/modern-normalize.css">
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="assets/style/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap" rel="stylesheet">

    <link rel="icon" href="assets/images/icon.png">
    <title>Ekko - Web Agency</title>
</head>
<body id="accueil">
<div class="responsive">
    <span>Désolé, le site n'est pas encore disponible en responsive !</span>
</div>
<div class="loading">
  <div>
    <div class="c1"></div>
    <div class="c2"></div>
    <div class="c3"></div>
    <div class="c4"></div>
  </div>
  <span>loading</span>
</div>
    <div class="left" >
        <div class="title">Nous sommes</div>

        <img class="mockup" src="assets/images/mockup.png" alt="Mock up">
        <div class="groupe">

        <div class="header">

        </div>

            <div class="runes">
                <img src="assets/images/rune.png" alt="rune">
            </div>
            <a href="#" class="logoTop"><img src="assets/images/logo.svg" alt="Logo de Ekko"></a>
            <div class="menu">
                <a class="link_menu accueilbutton">Accueil</a>
                <a href="#projet" class="link_menu projectbutton">Nos projets</a>
                <a href="#equipe" class="link_menu">L'équipe</a>
                <a href="#contact" class="link_menu">Contact</a>
            </div>

        
            <div class="etudiants" id="equipe">
                <div class="case">
                    <div><img src="assets/images/photo.png" alt="photo"></div>
                    <h1>Denis</h1>
                    <span>Dévelloppeur et chef de projet</span>
                </div>
                <div class="case">
                    <div><img src="assets/images/photo.png" alt="photo"></div>
                    <h1>Juliette</h1>
                    <span>Communicant</span>
                </div>
                <div class="case">
                    <div><img src="assets/images/photo.png" alt="photo"></div>
                    <h1>Tomy</h1>
                    <span>Communicant</span>
                </div>
                <div class="case">
                    <div><img src="assets/images/photo.png" alt="photo"></div>
                    <h1>Victor</h1>
                    <span>Graphiste</span>
                </div>
                <div class="case">
                    <div><img src="assets/images/photo.png" alt="photo"></div>
                    <h1>Mélanie</h1>
                    <span>Communicant</span>
                </div>
                <div class="case">
                    <div><img src="assets/images/photo.png" alt="photo"></div>
                    <h1>Léo</h1>
                    <span>Dévelloppeur</span>
                </div> 
            </div>

            <div class="contact" id="contact">
                <div class="white">

                <div class="formcontact">
            <form action="" method="POST" class="formcontactform">
                <div class="txtb">
                    <input type="text" class="" name="name" value="" required>
                    <span data-placeholder="Prénom & Nom"></span>
                </div>
                <div class="txtb">
                    <input type="email" class="" name="email" value="" required>
                    <span data-placeholder="Mail"></span>
                </div>
                <div class="txtb">
                    <textarea type="text" class="message_input" name="message" value="" required></textarea>
                    <span data-placeholder="Message"></span>
                </div>

                <input type="submit" value="envoyer" class="btn_mail">
            </form>
            <?php
            if (isset($_POST['message'])) {
                $position_arobase = strpos($_POST['email'], '@');
                if ($position_arobase === false)
                    echo '<p>Votre email doit comporter un arobase.</p>';
                else {
                    $retour = mail('delplanqueleomail@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: '.$POST['name'].' '. $_POST['email']);
                    if($retour)
                        echo '<p>Votre message a été envoyé.</p>';
                    else
                        echo '<p>Erreur.</p>';
                }
            }
            ?>
        </div>
                </div>
                <div class="yellow">
                    <div class="infos2 scrolled">
                        <div class="logo">
                            <img src="assets/images/logo.svg" alt="Logo de Ekko">
                        </div>
                        <div class="baseline">Avec nous faites rayonner vos projets.</div>
                        <a href="#" class="btn">
                        INSCRIVEZ-VOUS A LA NEWSLETTER
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <div class="right">

    <a href="#" class="logoTop"><img src="assets/images/logo.svg" alt="Logo de Ekko"></a>
        <div class="menu">
            <a class="link_menu accueilbutton">Accueil</a>
            <a href="#projet" class="link_menu projectbutton">Nos projets</a>
            <a href="#equipe" class="link_menu">L'équipe</a>
            <a href="#contact" class="link_menu">Contact</a>
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
        <div class="caroussel" id="projet">
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