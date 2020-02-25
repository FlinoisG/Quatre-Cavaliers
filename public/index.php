
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="apple-touch-icon" sizes="180x180" href="http://www.quatres-cavaliers.fr/public/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="http://www.quatres-cavaliers.fr/public/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="http://www.quatres-cavaliers.fr/public/img/favicon-16x16.png">
  <link rel="manifest" href="http://www.quatres-cavaliers.fr/public/img/site.webmanifest">
  <link rel="mask-icon" href="http://www.quatres-cavaliers.fr/public/img/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="http://www.quatres-cavaliers.fr/public/img/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Quatre Cavaliers">
  <meta name="application-name" content="Quatre Cavaliers">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="http://www.quatres-cavaliers.fr/public/img/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <title>Quatre Cavaliers</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/queries.css">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

  <script src="https://kit.fontawesome.com/3dc370eaf6.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

</head>

<body>

  <!-- Page Content -->
  <div id="deathbox"><img id="death" alt="death horsemen" class="horsemen" src="img/death.png"></div>
  <div id="warbox"><img id="war" alt="war horsemen" class="horsemen" src="img/war.png"></div>
  <div id="conquestbox"><img id="conquest" alt="conquest horsemen" class="horsemen" src="img/conquest.png"></div>
  <div id="pestilencebox"><img id="pestilence" alt="pestilence horsemen" class="horsemen" src="img/pestilence.png"></div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#page1">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page2">Projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page3">Contact</a>
      </li>
    </ul>
  </div>
</nav>

  <div id="page1" class="page">
    <div class="titlebox"><img id="title" src="img/title.png"></div>
    <div id="P1main" class="container">
      <h1>Bonjour !</h1>
      <p class="lead">Je suis Gauthier Flinois, développeur web junior.</br>Je fabrique des ensembles d'unités de consultation du World Wide Web reliées par des hyperliens.</p>
    </div>
  </div>
  <div id="page2" class="page">
    <img src="img/p2mask.png" class="mask">

    <a class="screenshotbox" href="http://p4.quatre-cavaliers.com/" >
      <p class="screenshottext">Si vous êtes un recruteur expérimenté, vous aurez deviné au permier coup d'oeil où je me suis formé avec ce projet !
      Un blog réalisé entièrement en PHP, JavaScript et Bootstrap. Une interface administrateur qui permet de poster et administrer des article et dans une base de données.
      Pour chaque article, on peut y laisser un commentaires et signaler ceux d'utilisateurs indésirable pour que l'administrateur puisse les modérer.
      L'authentification administrateur se fait via une page de connection, le site compare le mot de passe haché et le nom d'utilisateur dans la base de données et 
      ouvre une session avec un cookie.
      À part pour la partie administrateur, le blog est enièrement responsive et s'affichera correctement ssur téléphone et tablettes.
      </p>
      <img class="screenshot" src="img/screen02.png">
    </a>
    <a class="fab fa-github fa-3x screenshotLink" href="https://github.com/FlinoisG/P4-Blog"></a>
    
    <a class="screenshotbox" href="http://p5.quatre-cavaliers.com/">
    <p class="screenshottext">Ouibonsoir</p>
    <img class="screenshot" src="img/screen01.png">
  </a>
  <a class="fab fa-github fa-3x screenshotLink" href="https://github.com/FlinoisG/P5-Game"></a>

  </div>
  <div id="page3" class="page">
    <h1>Contactez-moi</h1>
    <p>Je suis actuellement à la recherche d'un emplois !</p>
    <div id="contactList">
      <div class="contactIconBox"><a class="fas fa-envelope fa-5x contactIcon" href="mailto:Flinoisg@4cavaliers.com"></a></div>
      <div class="contactIconBox"><a class="fab fa-github fa-5x contactIcon" href="https://github.com/flinoisg"></a></div>
      <div class="contactIconBox"><a class="fab fa-linkedin-in fa-5x contactIcon" href="https://www.linkedin.com/in/gauthier-flinois-917951b7/"></a></div>
    </div>
    <div id="mapid"></div>
  </div>
    

  <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script/map.js"></script>
    
</body>

</html>
