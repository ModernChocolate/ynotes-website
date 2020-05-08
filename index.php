<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yNotes: application de gestion des notes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-mobile.css">

    <link rel="icon" href="src/assets/favicon.ico" />
    <script src="main.js"></script>
    <script src="src/scripts/jquery-3.5.0.min.js"></script>
</head>




<body>
    <header class="header hideNotMobile">

        <div id="ynLogoContainer"> <img src="src/assets/brandLogo.png" id="ynLogo"></div>


        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#sec2">Commencer</a></li>
            <li><a href="#sec3">Le projet</a></li>
            <li><a href="#sec4">Pourquoi changer ?</a></li>
            <li><a href="#sec5">Contact</a></li>
        </ul>
    </header>
    <div id="completeHeader" class="hideMobile">
        <div id="header">
            <img src="src/assets/brandLogo.png" id="ynLogo">
            <div id="headerText" class="hideMobile">Notes</div>

        </div>

        <hr class="hideMobile">
        <div id="headerChoices">
            <div class="headerChoice"><a href="#sec2">Commencer</a></div>
            <div class="headerChoice"><a href="#sec3">Le projet</a></div>
            <div class="headerChoice"><a href="#sec4">Pourquoi changer ?</a></div>
            <div class="headerChoice"><a href="#sec5">Contact</a></div>
        </div>
    </div>
    <div class="section" id="sec1">
        <div id=circles1></div>
        <img src="src/assets/screenShot.png" alt="" id="screen1">
        <div id="presentationTextsContainer">
            <h1 class="presentation" id="presentationText">yNotes est votre application de gestion de <b>notes</b>, de <b>devoirs</b> et <b>d'emploi du temps</b> scolaires connectée</h1>
            <h1 class="presentation" id="presentationText2">Contrôlez votre contenu en toute <b>sécurité</b></b></h1>
            <h1 class="presentation" id="presentationText3">Accédez à vos notes dans une interface <b>élégante</b></h1>

        </div>
    </div>
    <div class="section" id="sec1-5">

        <p id="infosec1-5"><u><b>Attention :</b></u> Notez que yNotes est un client open source <u>non-officiel</u> actuellement compatible avec le service <b>EcoleDirecte</b> une marque déposée. La compatibilité devrait s'élargir mais peut également changer à tout moment après décision des services officiels.</p>
    </div>
    <div class="section" id="sec2">
        <h2 class="titleSection">Commencer</h2>
        <h2 id="availability">L'application sera disponible sur les systèmes d'exploitations suivants :</h2>
        <div id="platforms">
            <div class="platformBlock">
                <svg class="platformLogo android" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                    <g>
                        <rect fill="" />
                        <path d="M17.6,9.48l1.84-3.18c0.16-0.31,0.04-0.69-0.26-0.85c-0.29-0.15-0.65-0.06-0.83,0.22l-1.88,3.24 c-2.86-1.21-6.08-1.21-8.94,0L5.65,5.67c-0.19-0.29-0.58-0.38-0.87-0.2C4.5,5.65,4.41,6.01,4.56,6.3L6.4,9.48 C3.3,11.25,1.28,14.44,1,18h22C22.72,14.44,20.7,11.25,17.6,9.48z M7,15.25c-0.69,0-1.25-0.56-1.25-1.25 c0-0.69,0.56-1.25,1.25-1.25S8.25,13.31,8.25,14C8.25,14.69,7.69,15.25,7,15.25z M17,15.25c-0.69,0-1.25-0.56-1.25-1.25 c0-0.69,0.56-1.25,1.25-1.25s1.25,0.56,1.25,1.25C18.25,14.69,17.69,15.25,17,15.25z" />
                    </g>
                </svg>
                <p class="platformLabel">Android, <b>bientôt</b></p>
            </div>
            <div class="platformBlock">
                <svg class="platformLogo ios" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                    <g>
                        <path fill="" d="M2.09 16.8H3.75V9.76H2.09M2.92 8.84C3.44 8.84 3.84 8.44 3.84 7.94C3.84 7.44 3.44 7.04 2.92 7.04C2.4 7.04 2 7.44 2 7.94C2 8.44 2.4 8.84 2.92 8.84M9.25 7.06C6.46 7.06 4.7 8.96 4.7 12C4.7 15.06 6.46 16.96 9.25 16.96C12.04 16.96 13.8 15.06 13.8 12C13.8 8.96 12.04 7.06 9.25 7.06M9.25 8.5C10.96 8.5 12.05 9.87 12.05 12C12.05 14.15 10.96 15.5 9.25 15.5C7.54 15.5 6.46 14.15 6.46 12C6.46 9.87 7.54 8.5 9.25 8.5M14.5 14.11C14.57 15.87 16 16.96 18.22 16.96C20.54 16.96 22 15.82 22 14C22 12.57 21.18 11.77 19.23 11.32L18.13 11.07C16.95 10.79 16.47 10.42 16.47 9.78C16.47 9 17.2 8.45 18.28 8.45C19.38 8.45 20.13 9 20.21 9.89H21.84C21.8 8.2 20.41 7.06 18.29 7.06C16.21 7.06 14.73 8.21 14.73 9.91C14.73 11.28 15.56 12.13 17.33 12.53L18.57 12.82C19.78 13.11 20.27 13.5 20.27 14.2C20.27 15 19.47 15.57 18.31 15.57C17.15 15.57 16.26 15 16.16 14.11H14.5Z" />
                    </g>
                </svg>
                <p class="platformLabel">iOS, <b>l'année prochaine</b></p>
            </div>
        </div>
        <h2>Pas envie d'attendre ? <br>Vous pouvez rejoindre la file d'attente pour devenir bêta testeur <b>Android</b></h2>
        <button class="skewBtn blue" id="btnMail">Je suis pressé</button>
        <div class="hiddenInput">
            <h3>Entrez votre mail ici :</h3>
            <input type="text" class="formInput" id="mail" placeholder="Votre adresse mail" required="" />
            <label for="name" class="formLabel"><i>Nous ne vendons pas votre adresse mail.</i></label>
            <div id="btnWithDoneLabel">
                <button id="sendBtn">Envoyer</button>
                <div id="doneLabel">&#10003; C'est fait : nous vous recontacterons d'ici peu !</div>
            </div>
        </div>
        <h3 id="cautionText"><i>L'application bêta peut présenter des problèmes car l'application est encore en phase de développement.</i></h3>
    </div>
    <div class="section" , id="sec3">
        <h2 class="titleSection">Le projet</h2>
        <div id="storiesContainer">

            <div class="storyContainer">
                <div id="circleBag" class="circleIllu">
                    <img src="src/assets/bag.png" class="illu" id="bag">
                </div>
                <p id="story1" class="story">Le projet débute en 2019 son objectif est de trouver une alternative puissante aux clients (applications mobiles) des applications scolaires (<b>comme EcoleDirecte et Pronote</b>) aux fonctionnalités limitées. Les utilisateurs doivent retrouver leur espace mais aussi accéder <b>à de toutes nouvelles fonctionnalités utiles.</b></p>
            </div>
            <div class="storyContainer">
                <div id="circleHashtag" class="circleIllu">
                    <img src="src/assets/hashtag.png" class="illu" id="hashtag">
                </div>
                <p id="story2" class="story">yNotes est développé avec le nouveau framework <a href="https://flutter.dev/"><b style="color: #548CE8  ">Flutter</b></a> : plus <b>rapide</b>, plus <b>léger</b> et plus <b>efficace</b>. Le compromis idéal. Accessible à tous, Dart permet à n'importe qui de participer au projet.</p>
            </div>
            <div class="storyContainer">
                <div id="circleDove" class="circleIllu">
                    <img src="src/assets/dove.png" class="illu" id="dove">
                </div>
                <p id="story3" class="story">Un problème se pose : les données des utilisateurs se doivent de <b>ne pas être collectées</b>. Le code doit également être <a href="https://github.com/ModernChocolate/ynotes"><b style="color: #548CE8 ">OpenSource</b></a> et se veut ainsi modifiable. Ajoutez votre propre touche au <a href="https://github.com/ModernChocolate/ynotes"><b style="color: #548CE8 ">projet</b></a> !</p>
            </div>
        </div>
    </div>
    <div class="section" , id="sec4">
        <h2 class="titleSection">Pourquoi changer ?</h2>
        <h2 class="changeTitle">Notre charte de confidentialité :</h2>
        <div id="whyChange1">
            <img src="src/assets/man.png" id="manAskingHimself" class="hideMobile">
            <div class="rules">

                <ul id="rulesList">
                    <li class="rulesItem">Vos données sont et <b>restent</b> sur votre appareil.</li>
                    <li class="rulesItem">Les services que nous utilisons <b>ne collectent pas vos données.</b>*</li>
                    <li class="rulesItem">Pas de cookies, de publicités, d'espionnage ou de vente de quoi que ce soit vous concernant. Ce qui est à vous <b>reste à vous.</b></b></li>
                    <li class="rulesItem">Un doute sur l'utilisation de vos données ? Consultez le code source.</li>
                </ul>

                <a href="files/legal/PDCYNotes.html"><button class="skewBtn blue" id="accessPolicyConf">Voir la politique de confidentialité en entier</button></a>
            </div>

        </div>
        <h3 id="cautionText"><i>*Les règles de collecte de données varient lors de l'utilisation de la version bêta de l'application qui possède un dispositif d'envoi automatiques des bugs.</i></h3>
        <h2 class="changeTitle">Le fonctionnement :</h2>

        <div id="whyChange2">

            <div class="howitworks">

                <ol id="workModeList">
                    <li class="workModeItem">Vous vous connectez avec vos identifiants scolaires (<b>EcoleDirecte ou Pronote</b>) qui sont conservés <b>localement.</b></li>
                    <li class="workModeItem">Nous utilisons les <b>API</b>, des services fournis par votre site scolaire, officiels pour obtenir vos notes.</li>
                    <li class="workModeItem">Nous récupérons vos données scolaires (<b>toujours localement</b>) et vous y accédez librement.</li>
                    <li class="workModeItem">Vous accédez à vos données et profitez des fonctionnalités de yNotes !</li>
                </ol>
            </div>
            <img src="src/assets/machines.png" id="machines" class="hideMobile">
        </div>

    </div>
    <div class="section" , id="sec5">
        <h2 class="titleSection" id="contactTitle">Contact</h2>
        <div id="whoAmI">

            <p id="contact">
                L'histoire des prémices du projet pourraient débuter par un "je". J'ai effectivement assumé le début du développement de l'application. Mais comme tout projet ouvert, <b>n'importe qui peut le rejoindre à tout moment</b>, c'est donc un appel à candidature que je lance ! Inscrivez-vous pour candidater au rôle que vous souhaitez dans le développement de l'application principale. J'espère que cette section des collaborateurs principaux s'emplira vite !
            </p>
            <div><i><b>JsonLines</b>, développeur</i></div>
        </div>

        <div id="share">
            <p>Contactez yNotes :</p>
            <button class="shareBtn"><a href="mailto:contact@ynotes.fr">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,15C12.81,15 13.5,14.7 14.11,14.11C14.7,13.5 15,12.81 15,12C15,11.19 14.7,10.5 14.11,9.89C13.5,9.3 12.81,9 12,9C11.19,9 10.5,9.3 9.89,9.89C9.3,10.5 9,11.19 9,12C9,12.81 9.3,13.5 9.89,14.11C10.5,14.7 11.19,15 12,15M12,2C14.75,2 17.1,3 19.05,4.95C21,6.9 22,9.25 22,12V13.45C22,14.45 21.65,15.3 21,16C20.3,16.67 19.5,17 18.5,17C17.3,17 16.31,16.5 15.56,15.5C14.56,16.5 13.38,17 12,17C10.63,17 9.45,16.5 8.46,15.54C7.5,14.55 7,13.38 7,12C7,10.63 7.5,9.45 8.46,8.46C9.45,7.5 10.63,7 12,7C13.38,7 14.55,7.5 15.54,8.46C16.5,9.45 17,10.63 17,12V13.45C17,13.86 17.16,14.22 17.46,14.53C17.76,14.84 18.11,15 18.5,15C18.92,15 19.27,14.84 19.57,14.53C19.87,14.22 20,13.86 20,13.45V12C20,9.81 19.23,7.93 17.65,6.35C16.07,4.77 14.19,4 12,4C9.81,4 7.93,4.77 6.35,6.35C4.77,7.93 4,9.81 4,12C4,14.19 4.77,16.07 6.35,17.65C7.93,19.23 9.81,20 12,20H17V22H12C9.25,22 6.9,21 4.95,19.05C3,17.1 2,14.75 2,12C2,9.25 3,6.9 4.95,4.95C6.9,3 9.25,2 12,2Z" />
                    </svg>
                </a></button>
            <button class="shareBtn"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                </svg></button>
            <button class="shareBtn"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
                </svg></button>

        </div>
        <div style="position: relative; width: 100%; height: 5vmin; margin-top: 10vmin">

            <div style="position: absolute; bottom: 0px;  margin-left:  1vmin;">
                <div id="bottomText">yNotes 2020 - <a href="files/legal/PDCYNotes.pdf">Politique de confidentialité</a> - <a href="files/legal/CGUYNotes.pdf">Conditions d'utilisation</a> </div>

            </div>
        </div>


</body>

</html>