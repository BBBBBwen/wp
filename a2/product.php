<html lang='en'>
<head>
      <meta charset="utf-8">
      <title>Products</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <script src='../wireframe.js'></script>
    </head>
    <body>
        <script src="js/number.js"></script>
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
  <a href="login.php" class='link'>Login</a>
  <a href="signup.php" class='link'>SignUp</a>
        </div>
      </nav>
</div>
<section class='cart'>
                <img class='prodpic' src = '../../A2media/Chips.jpg' alt='Chips' height=200 width=200/>
    <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
        <h3>Chips</h3><br>
        <input type='hidden' name='id' value='cr001' />
        <select name ='size'>
            <option value='' selected>Size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="Large">Large</option>
            </select><br>
        <button class='minu' type='button' onclick="minu('cqty')" >-</button>
        <input type='text' id='cqty' class='qty'  name='qty' value="0"/>
        <button class='add' type='button' onclick="add('cqty')" >+</button>
<div class='cart'>
    <input type='submit' name='submit cart' value='add to cart'/>
    <input type='reset' name='reset' value='reset'/>
    </div>
    </form>
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