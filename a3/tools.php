<?php
function top_module($pageTitle)
{
    $html = <<<"OUTPUT"
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

function top_nav()
{
    $html = <<<"OUTPUT"
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
                  <a class='link' href="index.php" target='_top'>Home</a>
                  <a class='link' href="products.php" target='_top'>Products</a>
                  <a class='link' href="Cart Page.php" target='_top'>Cart</a>
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

function Sign()
{
    $html = <<<"OUTPUT"
    <div id='bgd1' class='bgdc'>
            <div class="main1">
              <div class="close">
                Login
                <span id="close1" class='close-button'>×</span>
              </div>
              <div class="main2">
                <form action='processing.php' method='get' enctype=''>
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
                <form action='processing.php' method='post' enctype=''>
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
                  <button type='submit' class='btn'>SignUp</button>
                </form>
              </div>
            </div>
          </div>
OUTPUT;
    echo $html;
}

function end_module()
{
    $html = <<<"OUTPUT"
<script src="js/number.js"></script>
<footer>
<div>&copy;
<script>
document.write(new Date().getFullYear());
</script> Bowen Zhang s3617571, Cheng Chen s3728207 A2-s3617571-s3728207</div>
<div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
Programming course at RMIT University in Melbourne, Australia.</div>
<div>Maintain links to your <a href='products.csv'>products spreadsheet</a> and <a href='orders.csv'>orders
spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
</footer>
</body>
</html>
OUTPUT;
    echo $html;
}


  $products;
    $file = fopen("products.csv", "r");
    flock($file, LOCK_SH);
    if (($headings = fgetcsv($file, 0, "\t")) !== false) {
        while ($cells = fgetcsv($file, 0, "\t")) {
            for ($i = 2;$i<count($cells); $i++) {
                $products[$cells[0]][$cells[1]][$headings[$i]]=$cells[$i];
            }
        }
    }
    fclose($file);
    flock(LOCK_UN);
