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
    <div class='logo'>
      <img src='../../A2media/CRLogo.jpg' alt='Captain Rouge logo' height=50 width=50/>
    </div>
    <div class='logoword'>
      <h1>CaptainRouge</h1>
    </div>
    <nav class='topbar'>
      <div class='tab'>
        <button type='button' class='link'>
          <a href="index.php" target='_top'>Home</a>
        </button>
        <button type='button' class='link'>
          <a href="products.php" target='_top'>Products</a>
        </button>
      </div>
      <div class='tab2'>
        <button type='button' id='sibtn' class='link'>
          <a>Login</a>
        </button>
        <button type='button' id='subtn' class='link'>
          <a>SignUp</a>
        </button>
      </div>
    </nav>
  </div>
  <div id='bgd1' class='bgdc'>
    <div class="main1">
      <div class="close">
        Login
        <span id="close1" class='close-button'>×</span>
      </div>
      <div class="main2">
        <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login' method='post' enctype=''>
          <div class='alignt'>
            <label>EmailAddress</label>
          </div>
          <div class='alignt'>
            <input type='email' name='emial' value='' class='input' placeholder='enter your user email address' required />
          </div>
          <div>
            <label>Password</label>
          </div>
          <div class='alignt'>
            <input type='password' name='password' class='input' value='' required />
          </div>
          <div class='alignt'>
            <button type='submit' name='signin' class='btn'>Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id='bgd2' class='bgdc'>
        <div class="main1">
          <div class="close">
            SignUp
            <span id="close2" class='close-button'>×</span>
          </div>
          <div class="main2">
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=signup' method='post' enctype=''>
              <div>
                <label>EmailAddress</label>
              </div>
              <div class='alignt'>
                <input type='email' name='email' value='' class='input' placeholder='enter your email address' required />
              </div>
              <div>
                <label>UserName</label>
              </div>
              <div class='alignt'>
                <input type='text' name='username' value='' class='input' placeholder='enter your user name' required />
              </div>
              <div>
                <label>Password</label>
              </div>
              <div class='alignt'>
                <input type='password' name='password' value='' class='input' required />
              </div>
              <div>
                <label>Gender</label>
              </div>
              <div class='alignt'>
              <input type='radio' name='gender' value='male' class='gen' required/>Male
              <input type='radio' name='gender' value='female' class='gen' required/>Female
            </div>
            <div>
                <label>Date of Birth</label>
              </div>
              <div class='alignt'>
                <input type='text' name='DateofBirth' value='' class='input' placeholder='dd/mm/yy' required />
            </div>
                <button type='submit' name='signup' class='btn'>SignUp</button>
            </form>
          </div>
        </div>
      </div>
  <noscript>javascript disabled</noscript>
  <main>
  <div class='fullpro'>
  <span class='pros'>
    <a href="product.php" target='_top'>
      <img src='../../A2media/Chips.jpg' alt='Chips' height=200 width=200/>
    </a>
    <h3>Chips</h3>
        </span>
  <span class='pros'>
    <a href="burger.php" target='_top'>
      <img src='../../A2media/FishBurger.jpg' alt='Chips' height=200 width=200/>
    </a>
    <h3>FishBurger</h3>
        </span>
  <span class='pros'>
    <a href="fishnchips.php" target='_top'>
      <img src='../../A2media/Fish&Chips.jpg' alt='Chips' height=200 width=200/>
    </a>
    <h3>Fish&Chips</h3>
        </span>
  </div>
  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script>Bowen Zhang s3617571, Cheng Chen s3728207 A2-s3617571-s3728207.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming
      course at RMIT University in Melbourne, Australia.</div>
    <div>
      <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </div>
    </main>
  </footer>
  <script src="js/number.js"></script>
</body>
</html>