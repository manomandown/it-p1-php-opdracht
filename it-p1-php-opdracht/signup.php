<?php
  
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Maak aan</h1>
          <?php
          
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Full alles in!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Ongeldige gebruikersnaam of email!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Ongeldige gebruikersnaam!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Ongeldige e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Je wachtwoorden kloppen niet!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Gebruikersnaam is al genomen!</p>';
            }
          }
        
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Aanmaak voltooid! probeer in te loggen</p>';
            }
          }
          ?>
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <?php
            
            if (!empty($_GET["uid"])) {
              echo '<input type="text" name="uid" placeholder="Gebruikersnaam" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="text" name="uid" placeholder="Gebruikersnaam">';
            }

            
            if (!empty($_GET["mail"])) {
              echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="text" name="mail" placeholder="E-mail">';
            }
            ?>
            <input type="password" name="pwd" placeholder="Wachtwoord">
            <input type="password" name="pwd-repeat" placeholder="Herhaal Wachtwoord">
            <button type="submit" name="signup-submit">Maak aan</button>
          </form>
          
        </section>
      </div>
    </main>

