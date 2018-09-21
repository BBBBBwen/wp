<?php
function top_module($pageTitle) {
$html =<<<"OUTPUT"
<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>$pageTitle</title>
          <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
        <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
        <script src='../wireframe.js'></script>;
    </head>
OUTPUT;
    echo $html;
    }
?>

<?php
function top_nav(){
    $html =<<<"OUTPUT"
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
OUTPUT;
    echo $html;
}
?>

<?php
function Sign(){
    $html=<<<"OUTPUT"
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
                    <input type='email' name='email' value='' class='input' placeholder='enter your mail address' required />
                  </div>
                  <div class='alignt'>
                    <label>Password</label>
                  </div>
                  <div class='alignt'>
                    <input type='password' name='password' class='input' value='' required />
                  </div>
                  <div class='alignt'>
                    <button type='submit' name='signin' class='btn'>Log in</button>
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
                    <input type='radio' name='gender' value='male' class='gen' required />Male
                    <input type='radio' name='gender' value='female' class='gen' required />Female
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
OUTPUT;
echo $html;        
}
?>
<?php
function end_module(){
$html=<<<"OUTPUT"
<script src="js/number.js"></script>
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
OUTPUT;
echo $html;
}
?>
