<?php
session_start();
  require_once 'tools.php';
      top_module('Assaginmnet3');
      top_nav();
      sign();
      $da = strtotime($_POST['expireDate']);
      $da1 = strtotime($_POST['expireDate'] + '30 days');
      preShow($_POST['expireDate']);
      preShow($da);
    $userName = '/^[a-zA-Z0-9_-]{4,16}$/';
    $mobilePhone = '/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/';
    $creditCard = '/^[0-9]{12,19}$/';
    $address = "/^[A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/";
    if (preg_match('/^[a-zA-Z0-9_-]{4,16}$/', $_POST['userName'])) {
        $_SESSION['user'] = $_POST;
    } else {
        unset($_SESSION['user']);
        echo '<script language="javascript">location.href="Checkout.php"</script>';
    }$receipt['Date'] = date('Y/m/d');
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
