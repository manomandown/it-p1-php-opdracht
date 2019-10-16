<?php
  
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
         
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '
            <iframe src="profile.php" height="500" width="900" ></iframe>';
          }
          ?>
        </section>
      </div>
    </main>

<?php
  
  require "footer.php";
?>
