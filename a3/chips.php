<?php
  require_once 'tools.php';
    top_module('chips');
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
                <h1>
                    <?php echo $products['s001']['SML']['Title'] ?>
                </h1>
                <h2 class='text'>
                    <?php echo $products['s001']['SML']['Description']; ?>
                </h2>
                <p class='price'>
                    <?php printf("Pirce<br/>Small : $%1.2f<br />Medium : $%1.2f<br />Large : $%1.2f", $products['s001']['SML']['Price'], $products['s001']['MED']['Price'], $products['s001']['LRG']['Price']);?>
                </p>
            </div>
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product' method='post' enctype=''
                targe=_blank onsubmit="return check();">
                <div class='shop'>
                    <input type='hidden' name='id' value='s001' />
                    <div class='select'>
                        <select id='select' name='size' required>
                            <option value='' selected>Size</option>
                            <option value="small">
                                <?php echo $products['s001']['SML']['Option'] ?>
                            </option>
                            <option value="medium">
                                <?php echo $products['s001']['MED']['Option'] ?>
                            </option>
                            <option value="Large">
                                <?php echo $products['s001']['LRG']['Option'] ?>
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
