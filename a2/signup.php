<html lang='en'>
<head>
      <meta charset="utf-8">
      <title>login</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <script src='../wireframe.js'></script>
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
            <a href="product.php" target='_top' class='link'>Products</a>
</div>

      </nav>
</div>
        <section class='Signup'>
        <fieldset class='fs'>
            <legend>Register</legend>
        <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
            EmailAddress:<input type='text' name='email' value='' placeholder='enter your email address' required /><br>
        UserName: <input type='text' name='username' value='' placeholder='enter your user name' required /><br>
        Password:  <input type='password' name='password' value='' required /><br>
        Gender:<input type='radio' name='gender' value='male' required/>Male,<input type='radio' name='gender' value='female' required/>Female.<br>
        <input type='submit' name='signup' value='SignUp' />
        <input type='reset' name='reset' value='reset' />
</form>
</fieldset>
</section>
<footer>
        <div>&copy;<script>
          document.write(new Date().getFullYear());
        </script> Bowen Zhang, s3617571 and group name here.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
</body>
    </html>