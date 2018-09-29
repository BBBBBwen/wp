<?php
  require_once 'tools.php';
    top_module('chips');
    top_nav();
    sign();
    addCart();
?>
<main class='area'>
    <span class="dis-flex inheight">
        <aside class='img-area inheight'>
            <img src='../../A3media/Chips.jpg' alt='Chips' class='sigImg' />
        </aside>
        <div class='pro-detail'>
            <div class='topic'>
                <h1>
                    <?php echo $products['s001']['Title'][0] ?>
                </h1>
                <h2 class='text'>
                    <?php echo $products['s001']['Description'][0]; ?>
                </h2>
                <p class='price'>
                    <?php printf("Pirce<br/>Small : $%1.2f<br />Medium : $%1.2f<br />Large : $%1.2f", $products['s001']['Price'][0], $products['s001']['Price'][1], $products['s001']['Price'][2]);?>
                </p>
            </div>
            <form action='cart.php?id=s001' method='post' enctype=''
                targe=_blank>
                <div class='shop'>
                    <input type='hidden' name='id' value='s001' />
                    <div class='select'>
                        <select id='select' name='option' required>
                            <option value='' selected>Size</option>
                            <option value="0">
                                <?php echo $products['s001']['Option'][0] ?>
                            </option>
                            <option value="1">
                                <?php echo $products['s001']['Option'][1] ?>
                            </option>
                            <option value="2">
                                <?php echo $products['s001']['Option'][2] ?>
                            </option>
                        </select>
                    </div>
                    <div id='qtydiv'>
                        <button class='qty' type='button' onclick="minu('Chipsqty')" name='btn'>-</button>
                        <input type='text' id='Chipsqty' class='qty' name='qty' value="0" />
                        <button class='qty' type='button' onclick="add('Chipsqty')" name='btn'>+</button>
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
