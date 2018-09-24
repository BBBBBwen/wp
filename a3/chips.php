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
                <h1>Chips</h1>
                <h2 class='text'>Classic thick cut fries with sea salt made from Australian grown potatoes. Ketchup
                    included with every order. Great companion with burgers.</h2>
                <p class='price'>Price<br />Small : $3.5<br />Medium : $4.5<br />Large : $5.5</p>
            </div>
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product' method='post' enctype=''
                targe=_blank onsubmit="return check();">
                <div class='shop'>
                    <input type='hidden' name='id' value='s001' />
                    <div class='select'>
                        <select id='select' name='size' required>
                            <option value='' selected>Size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                    </div>
                    <div id='qtydiv'>
                        <button class='qty' type='button' onclick="minu('Chipsqty')" name='btn'>-</button>
                        <input type='text' id='Chipsqty' class='qty' name='qty' value="0" />
                        <button class='qty' type='button' onclick="add('Chipsqty')" name='btn'>+</button>
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