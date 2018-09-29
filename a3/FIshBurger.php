<?php
  require_once 'tools.php';
    top_module('FishBurger');
    top_nav();
    sign();
    addCart();
?>
<main class='area'>
    <span class="dis-flex inheight">
        <aside class='img-area inheight'>
            <img src='../../A3media/Fish Burger.jpg' alt='Chips' class='sigImg' />
        </aside>
        <div class='pro-detail'>
            <div class='topic'>
                <h1>
                    <?php echo $products['b001']['Title'][0] ?>
                </h1>
                <h2 class='text'>
                    <?php echo $products['b001']['Description'][0]; ?>
                </h2>
                <p class='price'>
                    <?php printf("Pirce<br/>BBQ : $%1.2f<br />Chilli : $%1.2f<br />Ketchup : $%1.2f", $products['b001']['Price'][0], $products['b001']['Price'][1], $products['b001']['Price'][2]);?>
                </p>
            </div>
            <form action='FishBurger.php?id=b001' method='post' enctype=''
                targe=_blank>
                <div class='shop'>
                    <input type='hidden' name='id' value='b001' />
                    <div class='select'>
                        <select id='select' name='option' required>
                            <option value='' selected>Sauce</option>
                            <option value="0">
                                <?php echo $products['b001']['Option'][0] ?>
                            </option>
                            <option value="1">
                                <?php echo $products['b001']['Option'][1] ?>
                            </option>
                            <option value="2">
                                <?php echo $products['b001']['Option'][2] ?>
                            </option>
                        </select>
                    </div>
                    <div id='qtydiv'>
                        <button class='qty' type='button' onclick="minu('FishBurgerqty')">-</button>
                        <input type='text' id='FishBurgerqty' class='qty' name='qty' value="0" />
                        <button class='qty' type='button' onclick="add('FishBurgerqty')">+</button>
                    </div>
                </div>
                <div class='confirm-btn'>
                    <input type='submit' id='submit1' class='btn1' value='Buy now' />
                    <input type='submit' id='submit2' class='btn1' value='add to cart' />
                </div>
            </form>
        </div>
    </span>
</main>
<?php
end_module();
