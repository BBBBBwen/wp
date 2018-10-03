<?php
session_start();
  require 'tools.php';
    top_module('Assaginmnet3');
    top_nav();
    sign();
?>
<main class='area'>
    <div class="row">
        <h2>Shopping Cart</h2>
    </div>
    <table class="row border">
        <tr class="border">
            <th class="nameCol">Name</th>
            <th class="priceCol">Price</th>
            <th class="qtyCol">Quantity</th>
        </tr>
        <?php
        if (isset($_POST['id'],$_POST['option'],$_POST['qty'])) {
            $id =$_POST["id"];
            $oid = $_POST["option"];
            $order = $_POST;
            //checkThePostIsValidate
            $order["price"]=$products[$id][$oid]['Price']*$order["qty"];
            $title = $products[$id][$oid]['Title'];
            $option = $products[$id][$oid]['Option'];
            $qty = $_POST["qty"];
            if (empty($_SESSION["cart"])) {
                $cart = array(array($oid,$title,$option,$order["price"],$qty));
                $_SESSION["cart"] = $cart;
            } else {
                $cart = $_SESSION["cart"];
                $check = false;
                for ($i = 0 ;$i<count($_SESSION["cart"]);$i++) {
                    if ($cart[$i][0] == $oid) {
                        $cart[$i][3] += $products[$id][$oid]['Price']*$order["qty"];
                        $cart[$i][4]+=$qty;
                        break;
                    } else {
                        $ary = array($oid,$title,$option,$order["price"],$qty);
                        $cart[] = $ary;
                        break;
                    }
                }
                
                
                $_SESSION["cart"]=$cart;
            }
        }
     foreach ($cart as $c) {
         echo "
         <form action='Checkout.php' method='post'>
         <tr>
       <td>{$c[1]} {$c[2]}</td>
        <td>{$c[3]}</td>
            <td>{$c[4]}</td>
        </tr>";
         $sum = $sum + $c[3];
     } ?>
    </table>
    <?php echo "<p class='check'>sum: $$sum</p>" ?>
    </div>
    <button type='submit' class='btnCheck'>Check out</button>
    <a class='btnCheck' href="products.php?action=clear">Clear</a>
    </form>
</main>
<?php
end_module();
