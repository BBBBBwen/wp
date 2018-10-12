<?php
session_start();
  require 'tools.php';
    top_module('Cart');
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
     foreach ($_SESSION['cart'] as $c) {
         echo "
         <form action='Checkout.php' method='post'>
         <tr>
       <td>{$c[2]} {$c[3]}</td>
        <td>{$c[4]}</td>
            <td>{$c[5]}</td>
        </tr>";
         $sum = $sum + $c[4];
     } ?>
    </table>
    <?php echo "<p class='check'>sum: $$sum</p>"; ?>
    </div>
    <button type='submit' class='btnCheck'>Check out</button>
    <a class='btnCheck' href="products.php?action=clear">Clear</a>
    </form>
</main>
<?php
end_module();
