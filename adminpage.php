<?php

  require "header.php";

?>

    <main>
      <link rel="stylesheet" href="style.css">
      <div class="wrapper-main">
        <section class="section-default">
         
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">Je bent uitgelogd!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '
            <iframe src="admin/updatecijfers.php" height="500" width="900" ></iframe>';
          }
          ?>
        </section>
      </div>
    </main>

