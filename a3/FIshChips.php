<?php
  require_once 'tools.php';
    top_module('FishChips');
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
                <h1>Fish & Chips</h1>
                <h2 class='text'>Thin cut deep fried chips with classic fried fish. Choose your flavour! (Sea salt and
                    pepper by default)</h2>
                <p class='price'>Price: $8.5</p>
            </div>
            <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product' method='post' enctype=''
                targe=_blank onsubmit="return check();">
                <div class='shop'>
                    <input type='hidden' name='id' value='bm001' />
                    <div class='select'>
                        <option value='' selected>Flavour</option>
                        <option value="Salt & Pepper">Salt & Pepper</option>
                        <option value="Chilli">Chilli</option>
                        <option value="Peri Peri">Peri Peri</option>
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
?>