  <!DOCTYPE html>
  <html lang='en'>
    <head>
      <meta charset="utf-8">
      <title>Assignment 2</title>
      
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <script src='../wireframe.js'></script>
    </head>

    <body>
      <div class='bar'>
      <header>
        <div class='logo'>
          <img src = '../../A2media/CRLogo.jpg' alt='Captain Rouge logo' height=50 width=50 class='L'/> 
      <tt>CaptainRouge</tt>
    </div>
      </header>
      <nav>
        <div class='tab'>
          <ul>
            <a href="index.php" target='_top'><input type='button' class='L' name='Home' value='Home' /></a>
            <a href="products.php" target='_top'><input type='button'  name='Products' value='Products' /></a>
</ul>
</div>
<div class='tab2'>
<ul>
  <a href="login.php"><input type='button' class='L'name='log in' value='log in'  /></a>
  <a href="signup.php"><input type='button' name='sign up' value='sign up' /></a>
</ul>
        </div>
      </nav>
</div>
      <main>
        <section>
        <h2>The best fish & chips you can find in Dandenong</h2>
        <img src='../../A2media/FIsh&salad.jpg'  width='10%' height='5%' alt='FIsh&salad.jpg' />
                <img src='../../A2media/shop.jpg'  width='24%' height='24%' alt='shop' />
                <img src='../../A2media/chicken&schnitzel.jpg'  width='10%' height='5%'alt='chicken&schnitzel' />
</section>
      </main>
      <footer>
        <div>&copy;<script>
          document.write(new Date().getFullYear());
        </script> Bowen Zhang, s3617571 and group name here.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
    </body>
  </html>
