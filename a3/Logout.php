<?php if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) { ?>
    <body class='backGround'>
    <header class='titleContainer'>
<div class='topLeft title'>
<a class='logo noUnderLine' href="index.php">CaptainRouge</a>
              </div>
              <div class='title tap'>
                <div class='topRight'>The best fish & chips in Dandenong
                </div>
              </div>
            </header>
            <nav class="shadow topBar">
              <img class='logoImage' src='../../A2media/CRLogo.jpg' alt='Captain Rouge logo' />
          
              <div class='tabLeft'>
                  <a class='link' href="index.php" target='_top'>Home</a>
                  <a class='link' href="products.php" target='_top'>Products</a>
                  <a class='link' href="Cart.php" target='_top'>Cart</a>
              </div>
              <div class='tabRight'>
              <a class='link' href="index.php?action=logout">Log out</a>
            </div>
            </nav>

  }else{
    <body class='backGround'>
    <header class='titleContainer'>
<div class='topLeft title'>
<a class='logo noUnderLine' href="index.php">CaptainRouge</a>
              </div>
              <div class='title tap'>
                <div class='topRight'>The best fish & chips in Dandenong
                </div>
              </div>
            </header>
            <nav class="shadow topBar">
              <img class='logoImage' src='../../A2media/CRLogo.jpg' alt='Captain Rouge logo' />
          
              <div class='tabLeft'>
                  <a class='link' href="index.php" target='_top'>Home</a>
                  <a class='link' href="products.php" target='_top'>Products</a>
              </div>
              <div class='tabRight'>
                <button type='button' id='sibtn' class='link'>
                  <a>Login</a>
                </button>
                <button type='button' id='subtn' class='link'>
                  <a>SignUp</a>
                </button>
              </div>
            </nav>
OUTPUT;
      echo $html;
  }
}
