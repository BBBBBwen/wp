<?php
session_start();
  require_once 'tools.php';
      top_module('Check Out');
      top_nav();
      sign();
      $userName = '/^[a-zA-Z0-9_-]{4,16}$/';
    $mobilePhone = '/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/';
    $creditCard = '/^[0-9]{12,19}$/';
    $address = "/^[A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/";
    if (!preg_match('/^[a-zA-Z0-9_-]{4,16}$/', $_POST['userName'])) {
        echo "<script>alert('wrong username')</script>";
        unset($_SESSION['user']);
    } elseif (!preg_match($mobilePhone, $_POST['mobliePhone'])) {
        echo "<script>alert('wrong moblie phone {$mob}')</script>";
        unset($_SESSION['user']);
    } elseif (!preg_match($creditCard, $_POST['creditCard'])) {
        echo "<script>alert('wrong credit card')</script>";
        unset($_SESSION['user']);
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('wrong email')</script>";
        unset($_SESSION['user']);
    } elseif (!preg_match($address, $_POST['address'])) {
        echo "<script>alert('wrong address')</script>";
        unset($_SESSION['user']);
    } else {
        $_SESSION['user'] = $_POST;
        echo '<script language="javascript">location.href="Receipt.php"</script>';
    }
?>
<main class='area'>
    <div>
        <div>
            <h1>Payment Details</h1>
        </div>
        <form action='Checkout.php?action=validate' method='post'>
        <table class='checkTable'>
            <tr>
                <th>Name</th>
                <td><input type='username' name='userName' class='info' value='' required/></td>
                </tr>
                <tr>
                <th>Email</th>
                <td><input type='email' name='email' class='info' value='' required/></td>
                </tr>
                <tr>
                <th>Address</th>
            <td><textarea rows="2" cols="40" name='address' class='info' value='' required/></textarea></td>
            </tr>
            <tr>
                <th>Mobile Phone</th>
            <td><input type='text' name='mobilePhone' class='info' value='' required/></td>
            </tr>
            <tr>
                <th>Credit Card</th>
            <td><input type='text' id = 'creditCard' name='creditCard'  oninput="OnInput (event)" class='info' value='' required/><img src='../../A3media/visa.jpg' id='visa' class='visa' /></td>
            </tr>
            <tr>
                <th>Expire Date</th>
            <td><input type='date' name='expireDate' class='info' value='' required/></td>
            </tr>
        </table>
            <button type='submit' class='btnCheck'>Submit</button>
</form>
    </div>
</main>
<?php
end_module();
