<?php
  require_once 'tools.php';
    top_module('FishBurger');
    top_nav();
    sign();
?>
<main class='area'>
    <span class="dis-flex inheight">
        <aside class='img-area inheight'>
            <img src='../../A3media/Chips.jpg' alt='Chips' class='sigImg' />
        </aside>
        <div class='pro-detail'>
            <div class='topic'>
                <h1>FishBurger</h1>
                <h2 class='text'>Deep fried fish with fresh lettuce. Gluten free grilled bun. Choose the sauce of your own!</h2>
                <p class='price'>Price: $9.5</p>
            </div>
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product' method='post' enctype=''
                targe=_blank onsubmit="return check();">
                <div class='shop'>
                    <input type='hidden' name='id' value='b001' />
                    <div class='select'>
                        <select id='select' name='sauce' required>
                            <option value='' selected>Sauce</option>
                            <option value="BBQ">BBQ</option>
                            <option value="Chilli">Chilli</option>
                            <option value="Ketchup">Ketchup</option>
                        </select>
                    </div>
                    <div id='qtydiv'>
                        <button class='qty' type='button' onclick="minu('FishBurgerqty')">-</button>
                        <input type='text' id='FishBurgerqty' class='qty' name='qty' value="0" />
                        <button class='qty' type='button' onclick="add('FishBurgerqty')">+</button>
                    </div>
                </div>
                <div class='confirm-btn'>
                    <input type='submit' id='submit1' class='btn1' name='submit cart' value='Buy now' />
                    <input type='submit' id='submit2' class='btn1' name='submit cart' value='add to cart' />
                </div>
            </form>
        </div>
    </span>
</main>
<?php
end_module();
?>