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
          <table>
            <tr>
            <th>
          <img src = '../../A2media/CRLogo.jpg' alt='Captain Rouge logo' height=25 width=25/> 
</th>
     <td>     
       <h1>CaptainRouge</h1>
    </td>
    </tr>
</table>
    </div>
      </header>
      <nav>
        <div class='tab'>
          <ul>
            <a href="index.php" target='_top' class='L'>Home</a>
            <a href="products.php" target='_top'>Products</a>
</ul>
</div>
<div class='tab2'>
<ul>
  <a href="login.php"class='L'>Login</a>
  <a href="signup.php">SignUp</a>
</ul>
        </div>
      </nav>
</div>
      <main>
        <section>
        <h2>The best fish & chips you can find in Dandenong</h2>
        <img src='../../A2media/FIsh&salad.jpg'  width='20%' height='10%' alt='FIsh&salad.jpg' />
                <img src='../../A2media/shop.jpg'  width='48%' height='48%' alt='shop' />
                <img src='../../A2media/chicken&schnitzel.jpg'  width='20%' height='10%'alt='chicken&schnitzel' />
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
