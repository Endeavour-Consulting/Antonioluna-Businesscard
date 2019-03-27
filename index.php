<!DOCTYPE html>
<html lang="en">
  <head>
    <meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" />
    <meta property="og:image" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>images/profile-picture.png" /> 
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Antonio Luna: Direccíon" />
    <meta property="og:description" content="Compañía de música independiente especializada en genero latino con sede en España y USA" />
    <meta property="og:image" content="./images/profile-picture.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400i|Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/left-column.css">
    <link rel="stylesheet" href="./css/btn-panel.css">
    <link rel="stylesheet" href="./css/icons-panel.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/media.css">
    <title>Antonio Luna</title>
  </head>
  <body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v3.2';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div style="display: none;" id="wrap" class="main row">
      <div class="col half">
        <div class="profile">
          <div class="header">
            <div class="header-image">
              <img
                src="./images/background.png"
                alt="Mimmi - header image">
            </div>
            <img src="./images/logo.png" alt="Logo" class="logo">
          </div>
          <div class="content">
            <div class="user-picture">
              <img
                src="./images/profile-picture.png"
                alt="Antonio Luna: Direccíon">
            </div>
            <div class="profile_name text-center">
              <span>Antonio Luna</span>
            </div>
            <div class="profile_description text-center">
              <span>Direccíon</span>
            </div>
          </div>
        </div>
      </div>
      <div
        class="col half"
        id="rightCol">
        <div class="contact-menu">
          <ul>
            <li>
              <a
                target="_blank"
                href="http://www.miamimoon.es/">
                <img
                  src="./images/icons/webpage.svg"
                  alt="world wide web"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="tel:+34618300660">
                <img
                  src="./images/icons/phone.svg"
                  alt="call"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="sms:+34618300660">
                <img
                  src="./images/icons/sms.svg"
                  alt="sms"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="mailto:luna@miamimoon.es">
                <img
                  src="./images/icons/mail.svg"
                  alt="mail"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                target="_blank"
                href="./files/Antonio-Luna-business-card.vcf">
                <img
                  src="./images/icons/download.svg"
                  alt="download"
                  class="svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="social-media">
          <ul>
            <li>
              <a
                id="btn-instagram"
                onclick="openModal('instagram')">
                <img
                  src="./images/icons/instagram.svg"
                  alt="instagram"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-facebook"
                onclick="openModal('facebook')">
                <img
                  src="./images/icons/facebook.svg"
                  alt="facebook"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-youtube"
                target="_blank"
                href="https://www.youtube.com/channel/UC2p636l4ifv4o6RuS6xGjIw">
                <img
                  src="./images/icons/youtube.svg"
                  alt="youtube"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-google"
                target="_blank"
                href="https://www.google.com.ua/search?q=Avda.+Reyes+Cat%C3%B3licos+6%2C+28220+Majadahonda&oq=Avda.+Reyes+Cat%C3%B3licos+6%2C+28220+Majadahonda&aqs=chrome..69i57j69i60l2.877j0j7&sourceid=chrome&ie=UTF-8">
                <img
                  src="./images/icons/google-review.svg"
                  alt="google"
                  class="svg">
              </a>
            </li>
              <li>
              <a
                id="btn-twitter"
                target="_blank"
                href="https://twitter.com/MiamiMoonMusic">
                <img
                  src="./images/icons/twitter.svg"
                  alt="twitter"
                  class="svg">
              </a>
            </li>      
          </ul>
        </div>
        <div class="btn-panel">
          <a
            class="btn"
            id="btn-shop"
            href="http://www.miamimoon.es/servicios"
            target="_blank">
            <span>Servicios</span>
          </a>
          <a
            class="btn"
            id="btn-members"
            href="http://www.miamimoon.es/novedades"
            target="_blank">
            <span>Novedades</span>
          </a>
          <a
            class="btn"
            id="btn-subscribe"
            href="http://www.miamimoon.es/noticias"
            target="_blank">
            <span>Noticias</span>
          </a>
          <a
            class="btn"
            id="btn-about"
            href="http://www.miamimoon.es/artistas"
            target="_blank">
            <span>Artistas</span>
          </a>
        </div>
      </div>
    </div>
    
    <div id="instagram" class="modal">
      <header>
        <div onclick="closeModal('instagram')" class="close-btn"></div>
      </header>

      <div class="modal__modal-content scrollable">
        <!-- InstaWidget -->   

	      <a href="https://instawidget.net/v/user/miamimoonmusic" id="link-8295e095eda82446569712a54d88be0dfdabaee6480767e8d174a4f4ce9b0a33"></a>
	      <script src="https://instawidget.net/js/instawidget.js?u=8295e095eda82446569712a54d88be0dfdabaee6480767e8d174a4f4ce9b0a33&width=100%"></script>
      </div>
      <iframe width="320" height="440" data-src="https://instawidget.net/v/user/miami" frameborder="0"></iframe>
    </div>

    <div id="facebook" class="modal">

      <header>
        <div onclick="closeModal('facebook')" class="close-btn"></div>
      </header>

      <div class="modal__modal-content scrollable">
        <div class="fb-page-wrap">
          <div class="fb-page" 
            data-href="https://www.facebook.com/miamimoonmusic" 
            data-tabs="timeline"
            data-small-header="false"
            data-width="500"
            data-adapt-container-width="true"
            data-hide-cover="false"
            data-show-facepile="true">
            <blockquote 
              cite="https://www.facebook.com/miamimoonmusic" 
              class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/miamimoonmusic">Miami Moon Music</a>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <!-- Loader -->
    <div class="loader">
      <div class="loader_inner"></div>
    </div>

    <!-- Scripts -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./js/svg-img.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/tools.js"></script>
    <script src="./js/modal.js"></script>
  </body>
</html>
