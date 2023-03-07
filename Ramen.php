<?php require 'header.php'?>
<?php require 'db.php'?>
<?php require 'OtzivPopup.php'?>

<div class="store_block">
        <?php require "menu_left_column.php" ?>

                <div id="pizza"> 
                    <div class="Zaglavtext">Супы</div>
                    <hr>
                    <div class="menulist">
                        <?php 
                            $soupitems = get_SoupItems_all();
                            foreach ($soupitems as $soupitem): ?>

                                    <div class="menuitem">
                                        <div class="name_items">
                                            <h1>Суп <br> <span class="quotes"><?php echo $soupitem["soup_name"] ?></span></h1>
                                        </div>

                                        <div class="item__img_fix">
                                            <img src="<?php echo $soupitem["soup_img"] ?>" id="pizzabebra_img">
                                        </div>
                                        
                                        <div class="product__price"><span class="product__price-number price__style"><?php echo $soupitem["soup_cost"] ?></span> ₽</div>

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <a class="buy_item" 
                                                data-sb-id-or-vendor-code="S<?php echo $soupitem["id"] ?>"
                                                data-sb-product-name="<?php echo $soupitem["soup_name"] ?>"
                                                data-sb-product-price="<?php echo $soupitem["soup_cost"] ?>"
                                                data-sb-product-quantity="1"
                                                data-sb-product-img="<?php echo $soupitem["soup_img"] ?>"

                                                href="#">Купить</a>

                                    </div>

                        <?php endforeach; ?>
                    </div>
                </div>
</div>


<?php require("footer.php")?>