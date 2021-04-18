<!DOCTYPE html>


<html lang="en" dir="ltr">


  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Techni'chauf</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>


  <body>
    <header>
      <div class="container">
        <img id="logoTechnichauf" src="Images/logo-technichauf.jpg" alt="logoTechnichauf">
        <img id="technichaufContact" src="Images/technichauf-tel.jpg" alt="06 82 58 98 80">
      </div>

      <nav>
         <a class="lienNav" href="index.html"> Accueil</a>  |
         <a class="lienNav" href="contact.php"> Contact </a>
      </nav>
    </header>

    <?php
      require "php/formulaire.php"
    ?>

    <div class="decoration">
      <!-- Autre bordure -->
    </div>

    <footer>
      <div class="elementsGras"> TECHNI'CHAUF </div>
      LES AVENIERES <br/>
      <div class="elementsGras"> Tel: O6.82.58.98.80 </div>
    </footer>
  </body>
</html>
