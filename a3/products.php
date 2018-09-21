<?php
  require_once('tools.php'); 
    top_module("products");
    top_nav();
    sign();
?>
<main class='area'>
    <div class='dis-flex'>
    <aside class='category'>
            <ul class="menu">
                <li class="menu"><a href="/menu/chicken" hreflang="en">Chicken</a></li>
                <li class="menu"><a href="/menu/boxed-meals" hreflang="en">Boxed Meals</a></li>
                <li class="menu"><a href="/menu/burgers" hreflang="en">Burgers</a></li>
                <li class="menu"><a href="/menu/snacks" hreflang="en">Snacks</a></li>
                <li class="menu"><a href="/menu/sides" hreflang="en">Sides</a></li>
                <li class="menu"><a href="/menu/drinks" hreflang="en">Drinks</a></li>
            </ul>
    </aside>
    <div class='products'>
        <span class='pro'>
            <a href="chips.php" target='_top'>
                <img src='../../A3media/Chips.jpg' alt='Chips' class='proImg' />
            </a>
            <h3>Chips</h3>

        </span>
        <span class='pro'>
            <a href="burger.php" target='_top'>
                <img src='../../A3media/Fish Burger.jpg' alt='FishBurger' class='proImg' />
            </a>
            <h3>FishBurger</h3>
        </span>
        <span class='pro'>
            <a href="fishnchips.php" target='_top'>
                <img src='../../A3media/Fish&Chips.jpg' alt='Fish&Chips' class='proImg' />
            </a>
            <h3>Fish&Chips</h3>
        </span>
    </div>
</div>
</main>
<?php
end_module(); 
?>