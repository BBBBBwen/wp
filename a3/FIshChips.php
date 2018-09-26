<?php
  require_once 'tools.php';
    top_module('FishChips');
    top_nav();
    sign();
?>
<main class='area'>
    <span class="dis-flex inheight">
        <aside class='img-area inheight'>
            <img src='../../A3media/Fish&Chips.jpg' alt='Chips' class='sigImg' />
        </aside>
        <div class='pro-detail'>
            <div class='topic'>
                <h1>
                    <?php echo $products['bm001']['SAL']['Title']; ?>
                </h1>
                <h2 class='text'>
                    <?php echo $products['bm001']['SAL']['Description']; ?>
                </h2>
                <p class='price'>
                    <?php printf("Pirce<br/>Salt&Pepper : $%1.2f<br />Chilli : $%1.2f<br />PeriPeri : $%1.2f", $products['bm001']['SAL']['Price'], $products['bm001']['CHI']['Price'], $products['bm001']['PER']['Price']);?>
                </p>
            </div>
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product' method='post' enctype=''
                targe=_blank onsubmit="return check();">
                <div class='shop'>
                    <input type='hidden' name='id' value='bm001' />
                    <div class='select'>
                    <select id='select' name='flavour' required>
                        <option value='' selected>Flavour</option>
                        <option value="Salt & Pepper">
                            <?php echo $products['bm001']['SAL']['Option'] ?>
                        </option>
                        <option value="Chilli">
                            <?php echo $products['bm001']['CHI']['Option'] ?>
                        </option>
                        <option value="Peri Peri">
                            <?php echo $products['bm001']['PER']['Option'] ?>
                        </option>
                        </select>
                    </div>
                    <div id='qtydiv'>
                        <button class='qty' type='button' onclick="minu('Fish&Chipsqty')">-</button>
                        <input type='text' id='Fish&Chipsqty' class='qty' name='qty' value="0" />
                        <button class='qty' type='button' onclick="add('Fish&Chipsqty')">+</button>
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
