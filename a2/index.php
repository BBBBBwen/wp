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
        <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
          <div class='alignt'>
            <label>UserName</label>
          </div>
          <div class='alignt'>
            <input type='text' name='username' value='' class='input' placeholder='enter your user name' required />
          </div>
          <div>
            <label>Password</label>
          </div>
          <div class='alignt'>
            <input type='password' name='password' class='input' value='' required />
          </div>
          <div class='alignt'>
            <button type='submit' name='signup' class='btn'>SignUp</button>
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
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype=''>
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
  <main>
    <section class='sec'>
      <h2>The best fish & chips you can find in Dandenong</h2>
      <img src='../../A2media/FIsh&salad.jpg' class='picture' alt='img1' />
      <img src='../../A2media/shop.jpg' class='picture' alt='img2' />
      <img src='../../A2media/chicken&schnitzel.jpg' class='picture' alt='img3' />
    </section><br>
  </main>
  <script src="js/number.js"></script>
  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Bowen Zhang, s3617571 and group name here.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming
      course at RMIT University in Melbourne, Australia.</div>
    <div>
      <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </div>
  </footer>
</body>
</html>