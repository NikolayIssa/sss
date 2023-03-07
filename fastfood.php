<?php require 'header.php'?>
<?php require 'db.php'?>
<?php require 'OtzivPopup.php'?>

<div class="store_block">
        <?php require "menu_left_column.php" ?>

                <div id="pizza"> 
                    <div class="Zaglavtext">Фастфуд</div>
                    <hr>
                    <div class="menulist">
                        <?php 
                            $fastfooditems = get_FastFoodItems_all();
                            foreach ($fastfooditems as $fastfooditem): ?>

                                    <div class="menuitem">
                                        <div class="name_items">
                                            <h1>Фастфуд <br> <span class="quotes"><?php echo $fastfooditem["fastfood_name"] ?></span></h1>
                                        </div>
                                        <img src="<?php echo $fastfooditem["fastfood_img"] ?>" id="pizzabebra_img">

                                        <div class="product__price"><span class="product__price-number price__style"><?php echo $fastfooditem["fastfood_cost"] ?></span> ₽</div>

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <a class="buy_item" 
                                                data-sb-id-or-vendor-code="FF<?php echo $fastfooditem["id"] ?>"
                                                data-sb-product-name="<?php echo $fastfooditem["fastfood_name"] ?>"
                                                data-sb-product-price="<?php echo $fastfooditem["fastfood_cost"] ?>"
                                                data-sb-product-quantity="1"
                                                data-sb-product-img="<?php echo $fastfooditem["fastfood_img"] ?>"

                                                href="#">Купить</a>

                                    </div>

                        <?php endforeach; ?>
                    </div>
                </div>
</div>


<?php require("footer.php")?>