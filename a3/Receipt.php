<?php
session_start();
  require_once 'tools.php';
      top_module('Assaginmnet3');
      top_nav();
      sign();
      $userName = '/^[a-zA-Z0-9_-]{4,16}$/';
    $mobilePhone = '/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/';
    $creditCard = '/^[0-9]{12,19}$/';
    $address = '/^\d+\s[A-z]+\s[A-z]+/';
    $date = $_POST['expireDate'];
    $currentDate = date('Y/m/d');
    $date1 = date('Y/m/d', strtotime("$date +30 day"));
    if ($_GET['action'] == 'validate') {
        if (!preg_match($userName, $_POST['userName'])) {
            echo '<script language="javascript">location.href="Checkout.php"</script>';
            echo "<script>alert('invalid username')</script>";
        } elseif (!preg_match($mobilePhone, $_POST['mobilePhone'])) {
            echo "<script>alert('invalid moblie phone {$_POST['mobilePhone']}')</script>";
            echo '<script language="javascript">location.href="Checkout.php"</script>';
        } elseif (!preg_match($creditCard, $_POST['creditCard'])) {
            echo "<script>alert('invalid credit card')</script>";
            echo '<script language="javascript">location.href="Checkout.php"</script>';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('invalid email')</script>";
            echo '<script language="javascript">location.href="Checkout.php"</script>';
        } elseif (!preg_match($address, $_POST['address'])) {
            echo "<script>alert('invalid address')</script>";
            echo '<script language="javascript">location.href="Checkout.php"</script>';
        } elseif ($date1 < $currentDate) {
            echo "<script>alert('expire date should be longer than 1 month')</script>";
            echo '<script language="javascript">location.href="Checkout.php"</script>';
        } else {
            $_SESSION['user'] = $_POST;
        }
    }
     $receipt['Date'] = date('Y/m/d');
      $receipt['Name'] = $_SESSION['user']['userName'];
      $receipt['Address'] = $_SESSION['user']['address'];
      $receipt['Mobile'] = $_SESSION['user']['mobilePhone'];
      $receipt['Email'] = $_SESSION['user']['email'];
?>
<main class='area'>
  <article>
  <table class='checkTable recTable'>
  <tr>
                <th>Product ID</th>
                <th>Product OID</th>
                <th>Quanlity</th>
                <th>UnitPrice</th>
                <th>Subtotal</th>
                </tr>
                <?php
                for ($i = 0; $i < count($_SESSION[cart]); ++$i) {
                    $receipt['ID'] = $_SESSION[cart][$i][0];
                    $receipt['OID'] = $_SESSION[cart][$i][1];
                    $receipt['qty'] = $_SESSION[cart][$i][5];
                    $receipt['Price'] = $products[$_SESSION[cart][$i][0]][$_SESSION[cart][$i][1]]['Price'];
                    $receipt['Total'] = $_SESSION[cart][$i][4];
                    $file = fopen('orders.csv', 'a');
                    flock($file, LOCK_EX);
                    fputcsv($file, $receipt);
                    flock($file, LOCK_UN);
                    fclose($file);
                    echo "<tr>
                <td>{$receipt['ID']}</td>
                <td>{$_SESSION[cart][$i][1]}</td>
                <td>{$_SESSION[cart][$i][5]}</td>
                <td>{$products[$_SESSION[cart][$i][0]][$_SESSION[cart][$i][1]]['Price']}</td>
                <td>{$_SESSION[cart][$i][4]}</td></tr>";
                }?>
        </table>
  </article>
  <br \>
  <article>
  <table class='checkTable recTable'>
  <tr>
                <th>Name :</th>
                <?php echo "<td>{$receipt['Name']}</td>"; ?>
                </tr>
                <tr>
                <th>Email :</th>
                <?php echo "<td>{$receipt['Email']}</td>"; ?>
                </tr>
                <tr>
                <th>Address :</th>
                <?php echo "<td>{$receipt['Address']}</td>"; ?>
            </tr>
            <tr>
                <th>Mobile Phone :</th>
                <?php echo "<td>{$receipt['Mobile']}</td>"; ?>
            </tr>
            <tr>
                <th>Purchase Date :</th>
                <?php echo "<td>{$receipt['Date']}</td>"; ?>
            </tr>
        </table>
  </article>
</main>
<?php
end_module();
