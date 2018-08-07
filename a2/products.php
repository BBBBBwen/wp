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
<section class='cart'>
    <fieldset>
    <table>

        <tr>
            <th>
                <img src = '../../A2media/Chips.jpg' alt='Chips' height=200 width=200/>
</th>
<td>
    <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
        <h3>Chips</h3><br>
        <imput type='hidden' name='id' value='cr001' />
        <select name ='size'>
            <option value='' selected>Size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="Large">Large</option>
            </select>
        <button calss='adjust' type='button'>-</button>
        <input type='text' class='T' name='qty' value='' />
        <button calss='adjust' type='button'>+</button>
</form>
</td>
</tr>
<tr>
            <th>
                <img src = '../../A2media/FishBurger.jpg' alt='Chips' height=200 width=200/>
</th>
<td>
    <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
        <h3>FishBurger</h3><br>
        <imput type='hidden' name='id' value='cr002' />
        <select name ='size'>
            <option value='' selected>Size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="Large">Large</option>
    </select>
        <button calss='adjust' type='button'>-</button>
        <input type='text' class='T' name='qty' value='' />
        <button calss='adjust' type='button'>+</button>
</form>
</td>
</tr>
<tr>
            <th>
                <img src = '../../A2media/Fish&Chips.jpg' alt='Chips' height=200 width=200/>
</th>
<td>
    <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
        <h3>Fish&Chips</h3><br>
        <imput type='hidden' name='id' value='cr003' />
        <select name ='size'>
            <option value='' selected>Size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="Large">Large</option>
            </select>
        <button calss='adjust' type='button'>-</button>
        <input type='text' class='T' name='qty' value='' />
        <button calss='adjust' type='button'>+</button>
</form>
</td>
</tr>
</table>
<div class='cartR'>
    <input type='submit' name='submit cart' value='add to cart'/>
    <input type='reset' name='reset' value='reset'/>
    </div>
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