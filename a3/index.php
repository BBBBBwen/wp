<?php
  require_once ('tools.php'); // now contains module and other helpful functions
  top_module("Assaginmnet3"); // Now a function call 
?>

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
  <section class="shadow topBar">
    <img class='logoImage' src='../../A2media/CRLogo.jpg' alt='Captain Rouge logo' height=50 width=50 />
    <nav calss='topNav'>
      <div class='tabLeft'>
        <button type='button' class='link'>
          <a class='noUnderLine' href="index.php" target='_top'>Home</a>
        </button>
        <button type='button' class='link'>
          <a class='noUnderLine' href="products.php" target='_top'>Products</a>
        </button>
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
  </section>
  <main>
    <img src='../../A3media/homepic.jpg' class='picture' alt='img3' />
  </main><br>

  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders
        spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>

</html>