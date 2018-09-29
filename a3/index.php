<?php
  require_once 'tools.php';
  if (!isset($_SESSION["user"])){
      top_module('Assaginmnet3');
      top_nav();
      sign();
  } else {
      top_module('Assaginmnet3');
      top_nav_false();
  }
?>
<main class='area'>
  <img src='../../A3media/homepic.jpg' class='picture' alt='img3' />
</main>
<?php
end_module();
