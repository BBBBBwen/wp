<?php
  require_once 'tools.php';
    top_module('chips');
    top_nav();
    sign();
    $id = $_GET['id'];
    $i=0;
?>
<main class='area'>
    <span class="dis-flex inheight">
        <aside class='img-area inheight'>
            <img src='../../A3media/Chips.jpg' alt='Chips' class='sigImg' />
        </aside>
        <div class='pro-detail'>
            <div class='topic'>
                <h1>
                    Chips
                </h1>
                <h2 class='text'>
                    Classic thick cut fries with sea salt made from Australian grown potatoes. Ketchup included with
                    every order. Great companion with burgers.
                </h2>
            </div>
            <?php if (isset($_GET['id'])&&this_id_actually_exists($_GET['id'])) {
    ?>
            <span class='price'>
                <?php printf("Pirce<br/>Small : $%1.2f<br />Medium : $%1.2f<br />Large : $%1.2f", $products[$id]['Price'][0], $products[$id]['Price'][1], $products[$id]['Price'][2]); ?>
            </span>
            <?php echo "<form action='cart.php?id=$id' method='post' enctype=''
                targe=_blank>" ?>
                <?php echo "<input type='hidden' name='id' value=$id />" ?>
            <div class='shop'>
                <div class='select'>
                    <select id='select' name='option' required>
                        <option value='' selected>Size</option>
                        <?php
                        for ($i=0;$i<3;$i++) {
                            echo "<option value=$i>{$products[$id]['Option'][$i]}</option>";
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
                <input type='submit' id='submit1' class='btn1' value='Buy now' />
                <input type='submit' id='submit2' class='btn1' value='add to cart' />
            </div>
            </form>
            <?php
}?>
        </div>
    </span>
</main>
<?php
end_module();
