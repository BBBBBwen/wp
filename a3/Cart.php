<?php
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
        $arr[] = $_SESSION["cart"];
     $sum = 0;
     for($i=0;$i<count($arr);$i++){
        $id = $arr[$i]['id'];
        $opt = $arr[$i]['option'];
        $qty = $arr[$i]['qty'];
         echo "
         <form action='Checkout.php' method='post'>
         <tr>
       <td>{$products[$id]['Title'][$opt]} {$products[$id]['Option'][$opt]}</td>
        <td>{$products[$id]['Price'][$opt]}</td>
            <td>{$qty}</td>
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
