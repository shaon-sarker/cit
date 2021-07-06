<?php require "session.php";  ?>
<?php
require "dashboard_part/dashboard_header.php";
?>

<h1 class="bg-dark text-white text-center p-4">Welcome to <?= $_SESSION['uname']; ?></h1>

<?php
require "dashboard_part/dashboard_footer.php";

?>
      
  
        