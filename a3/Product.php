<?php
  require_once 'tools.php';
    top_module('Product');
    top_nav();
    sign();
    $id = $_GET['id'];
    foreach ($products[$id] as $key => $value) {
        $Oid[] = $key;
        $Title = $products[$id][$key]['Title'];
        $Description = $products[$id][$key]['Description'];
    }
?>
 <?php 
 if (isset($_POST['id'],$_POST['option'],$_POST['qty'])) {
     $id = $_POST['id'];
     $oid = $_POST['option'];
     $order = $_POST;
     //checkThePostIsValidate
     $order['price'] = $products[$id][$oid]['Price'] * $order['qty'];
     $title = $products[$id][$oid]['Title'];
     $option = $products[$id][$oid]['Option'];
     $qty = $_POST['qty'];
     if (empty($_SESSION['cart'])) {
         $cart = array(array($id, $oid, $title, $option, $order['price'], $qty));
         $_SESSION['cart'] = $cart;
     } else {
         $cart = $_SESSION['cart'];
         $check = false;
         for ($i = 0; $i < count($_SESSION['cart']); ++$i) {
             if ($cart[$i][0] == $id && $cart[$i][1] == $oid) {
                 $check = true;
             }
         }
         if ($check) {
             for ($i = 0; $i < count($_SESSION['cart']); ++$i) {
                 if ($cart[$i][0] == $id && $cart[$i][1] == $oid) {
                     $cart[$i][4] += $products[$id][$oid]['Price'] * $order['qty'];
                     $cart[$i][5] += $qty;
                 }
             }
             $_SESSION['cart'] = $cart;
         } else {
             $ary = array($id, $oid, $title, $option, $order['price'], $qty);
             $cart[] = $ary;
             $_SESSION['cart'] = $cart;
         }
     }
     echo '<script language="javascript">location.href="Cart.php"</script>';
 } elseif (isset($_GET['id'])) {
     ?>
<main class='area'>
    <span class="dis-flex inheight">
        <aside class='img-area inheight'>
            <?php echo "<img src='../../A3media/$id.jpg' alt='$Title' class='sigImg' />"; ?>
        </aside>
        <div class='pro-detail'>
            <div class='topic'>
                <h1>
                    <?php echo "{$Title}"; ?>
                </h1>
                <h2 class='text'>
                    <?php echo "{$Description}"; ?>
                </h2>
            </div>
            <span class='price'>
                <?php foreach ($Oid as $oid) {
         printf("{$products[$id][$oid]['Option']} : $%1.2f <br \>", $products[$id][$oid]['Price']);
     } ?>

            </span>
            <?php echo "<form action='Product.php?id=$id' method='post' enctype=''
                targe=_blank>"; ?>
            <?php echo "<input type='hidden' name='id' value=$id />"; ?>
            <div class='shop'>
                <div class='select'>
                    <select id='select' name='option' required>
                        <option value='' selected>Options</option>
                        <?php
                        foreach ($Oid as $oid) {
                            echo "<option value=$oid>{$products[$id][$oid]['Option']}</option>";
                        } ?>
                    </select>
                </div>
                <div id='qtydiv'>
                    <button class='qty' type='button' onclick="minu('Chipsqty')" name='btn'>-</button>
                    <input type='text' id='Chipsqty' class='qty' name='qty' value="0" />
                    <button class='qty' type='button' onclick="add('Chipsqty')" name='btn'>+</button>
                </div>
            </div>
            <div class='confirm-btn'>
                <input type='submit' id='submit1' class='btn1' value='add to cart' />
            </div>
            </form>
            <?php
 } else {
     ?>
    <main class='area'>
    <div class='dis-flex'>
        <aside class='category'>
            <ul class="menu">
                <li class="menu"><a href="products.php" hreflang="en">Full Menu</a></li>
                <li class="menu"><a href="boxed-meals.php" hreflang="en">Boxed Meals</a></li>
                <li class="menu"><a href="burgers.php" hreflang="en">Burgers</a></li>
                <li class="menu"><a href="sides.php" hreflang="en">Sides</a></li>
            </ul>
        </aside>
        <div class='products'>
            <span class='pro'>
                <a href="Product.php?id=s001" target='_top'>
                    <img src='../../A3media/s001.jpg' alt='Chips' class='proImg' />
                </a>
                <h3>Chips</h3>

            </span>
            <span class='pro'>
                <a href="Product.php?id=b001" target='_top'>
                    <img src='../../A3media/b001.jpg' alt='FishBurger' class='proImg' />
                </a>
                <h3>FishBurger</h3>
            </span>
            <span class='pro'>
                <a href="Product.php?id=bm001" target='_top'>
                    <img src='../../A3media/bm001.jpg' alt='Fish&Chips' class='proImg' />
                </a>
                <h3>Fish&Chips</h3>
            </span>
        </div>
    </div>
</main>
                       <?php
 }?>
        </div>
    </span>
</main>
<?php
end_module();
