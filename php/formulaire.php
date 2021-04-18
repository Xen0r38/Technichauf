<?php 

  foreach($_POST as $name => $value) {

    $$name = $value;
  };

  if($nom != null && $codePostal != null && $email != null && $commentaire != null) {

  }

?>



<html>
<section class="text2">
      <div class="container">
        <h1 class="titre">Techni'chauf, me contacter</h1>
        
        <form method="POST" action="contact.php" class="formulaireText">
          <table>
            <tr>
              <td> <label for="nomInput" class="champsObligatoires"> Nom * :</label> </td>
              <td> <input id="nomInput" type="text" name="nom" required/> </td>
            </tr>

            <tr>
              <td> <label for="prenomInput"> Prénom :</label> </td>
              <td> <input id="prenomInput" type="text" name="prenom" /> </td>
            </tr>

            <tr>
              <td> <label for="adresseInput"> Adresse :</label> </td>
              <td> <input id="adresseInput" type="text" name="adresse"/></td>
            </tr>

            <tr>
              <td> <label for="adresseInput2"> Adresse, suite :</label> </td>
              <td> <input id="adresseInput2" type="text" name="adresse_suite"/> </td> 
            </tr>

            <tr>
              <td> <label for="codePostalInput" class="champsObligatoires"> Code Postal * :</label> </td>
              <td> <input id="codePostalInput" type="number" name="codePostal" required/> </td>
            </tr>

            <tr>
              <td> <label for="villeInput"> Ville :</label> </td>
              <td> <input id="villeInput" type="text" name="ville" /> </td>
            </tr>

            <tr>
              <td> <label for="telInput"> Téléphone :</label> </td>
              <td> <input id="telInput" type="tel" name="telephone" minlength="10"/> </td>
            </tr>

            <tr>
              <td> <label for="emailInput" class="champsObligatoires"> email * :</label> </td>
              <td> <input id="emailInput" type="email" name="email" required/> </td>
            </tr>

            <tr>
              <td> <label for="comInput" class="champsObligatoires"> Commentaires * :</label> </td>
              <td> <textarea name="commentaire" id="comInput" cols="30" rows="10"></textarea> </td>
            </tr>
            
            <?php require 'password.php'?>
            
            <tr>
              <td> <input type="submit" id="sendButton"/></td>
            </tr>

          </table>
        </form>
      </div>
    </section>

</html>

