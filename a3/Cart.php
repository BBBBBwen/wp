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
        $id =$_POST["id"];;
        $opt =$_POST["option"];
        $title = $products[$id]['Title'][$opt];
        $option = $products[$id]['Option'][$opt];
        $price = $products[$id]['Price'][$opt];
        $qty = $_POST["qty"];
        if (empty($_SESSION["cart"])) {
            $cart = array(array($title,$option,$price,$qty));
            $_SESSION["cart"] = $cart;
        } else {
            $cart = $_SESSION["cart"];
            $check = false;
            foreach ($cart as $val) {
                if ($val[0] = $title&&$val[1] = $option) {
                    $check = true;
                }
            }
            if ($check) {
                for ($i=0;$i<count($cart);$i++) {
                    if ($cart[$i][0] = $title &&$cart[$i][1]=$option&& $cart[$i][2] = $price) {
                        $cart[$i][3]+=1;
                    }
                }
                $_SESSION["$cart"]=$cart;
            } else {
                $ary = array($title,$option,$price,$qty);
                $cart[] = $ary;
                $_SESSION["cart"] = $cart;
            }
        }
        print_r($cart);
        
     $sum = 0;
     foreach ($cart as $c) {
         echo "
         <form action='Checkout.php' method='post'>
         <tr>
       <td>{$c[0]} {$c[1]}</td>
        <td>{$c[2]}</td>
            <td>{$c[3]}</td>
        </tr>";
         $sum = $sum + $products[$id]['Price'][$opt];
     } ?>
    </table>
    <?php echo "<p class='check'>sum: $$sum</p>" ?>
    </div>
    <button type='submit' class='btnCheck'>Check out</button>
    <a class='btnCheck' href="Cart.php?action=clear">Clear</a>
    <?php
            if ($_GET['action']=="clear") {
                unset($_SESSION["cart"]);
            } ?>
    </form>
</main>
<?php
end_module();
