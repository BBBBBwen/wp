<?php
  require_once 'tools.php';
    top_module('FishBurger');
    top_nav();
    sign();
?>
<main class='area'>
    <span class="dis-flex inheight">
        <aside class='img-area inheight'>
            <img src='../../A3media/Fish Burger.jpg' alt='Chips' class='sigImg' />
        </aside>
        <div class='pro-detail'>
            <div class='topic'>
                <h1>
                    <?php echo $products['b001']['BBQ']['Title'] ?>
                </h1>
                <h2 class='text'>
                    <?php echo $products['b001']['BBQ']['Description']; ?>
                </h2>
                <p class='price'>
                    <?php printf("Pirce<br/>BBQ : $%1.2f<br />Chilli : $%1.2f<br />Ketchup : $%1.2f", $products['b001']['BBQ']['Price'], $products['b001']['CHI']['Price'], $products['b001']['KET']['Price']);?>
                </p>
            </div>
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product' method='post' enctype=''
                targe=_blank onsubmit="return check();">
                <div class='shop'>
                    <input type='hidden' name='id' value='b001' />
                    <div class='select'>
                        <select id='select' name='sauce' required>
                            <option value='' selected>Sauce</option>
                            <option value="BBQ">
                                <?php echo $products['b001']['BBQ']['Option'] ?>
                            </option>
                            <option value="Chilli">
                                <?php echo $products['b001']['CHI']['Option'] ?>
                            </option>
                            <option value="Ketchup">
                                <?php echo $products['b001']['KET']['Option'] ?>
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
