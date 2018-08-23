  <!DOCTYPE html>
  <html lang='en'>
    <head>
      <meta charset="utf-8">
      <title>Assignment 2</title>
      
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <script src='../wireframe.js'></script>
      <script src="js/number.js"></script>  
    </head>

    <body>
    
      <div class='bar'>
        <div class='logo'>
          <img src = '../../A2media/CRLogo.jpg' alt='Captain Rouge logo' height=30 width=30/>  
</div><div class='logoword'> 
       <h1>CaptainRouge</h1>
    </div>
      <nav class='topbar'>
        <div class='tab'>
            <a href="index.php" target='_top' class='link'>Home</a>
            <a href="products.php" target='_top' class='link'>Products</a>
</div>
<div class='tab2'>
  <a href="" name='siin' class='link' onclick="display()" > Login</a>
  <a href="signup.php" class='link'>SignUp</a>
        </div>
      </nav>
</div>
<div class='login' name='login' hidden>
        <fieldset class='fs'>
            <legend>Login your account</legend>
        <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
        UserName: <input type='text' name='username' value='' placeholder='enter your user name' required /><br>
        Password:  <input type='password' name='password' value='' required /><br>
        <input type='submit' name='sign in' value='sign in' />
        <a href="signup.php"><input class='signupr' type='button' name='sign up' value='sign up' /></a>
</form>
</fieldset>
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
