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
        $arr = $_SESSION["cart"];
     $id = $arr["id"];
     $opt = $arr["option"];
     $sum = 0;
         echo "<tr>
       <td>{$products[$id]['Title'][$opt]}[{$products[$id]['Option'][$opt]}]</td>
        <td>{$products[$id]['Price'][$opt]}</td>
            <td>{$_SESSION['cart']['qty']}</td>
        </tr>";
        $sum = $sum + $products[$id]['Price'][$opt];
        ?>
    </table>
    <?php echo "<p>sum: $sum</p>" ?>
    </div>
</main>
<?php
end_module();