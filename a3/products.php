<?php
  require_once('tools.php');
    top_module("products");
    top_nav();
    sign();
     if ($_GET['action']=="clear") {
        unset($_SESSION["cart"]);
    }
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
end_module();
