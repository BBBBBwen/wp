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
            <a href="index.php" target='_top'><input type='button' class='L' name='Home' value='Home' /></a>
            <a href="products.php" target='_top'><input type='button'  name='Products' value='Products' /></a>
</ul>
</div>
      </nav>
</div>
        <section class='Signup'>
        <fieldset>
            <legend>Register</legend>
        <form action='' method='post' enctype=''>
            EmailAddress:<input type='text' name='email' value='' placeholder='enter your email address' required /><br>
        UserName: <input type='text' name='username' value='' placeholder='enter your user name' required /><br>
        Password:  <input type='password' name='password' value='' required /><br>
        Gender:<input type='radio' name='gender' value='male' required/>Male,<input type='radio' name='gender' value='female' required/>Female.<br>
        <input type='submit' name='signup' value='SignUp' />
        <input type='reset' name='reset' value='reset' />
</form>
</fieldset>
</section>
</body>
    </html>