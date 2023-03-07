<?php require 'header.php'?>
<?php require 'db.php'?>
<?php require 'OtzivPopup.php'?>

<div class="store_block">
        <?php require "menu_left_column.php" ?>

                <div id="pizza"> 
                    <div class="Zaglavtext">Лапша</div>
                    <hr>
                    <div class="menulist">
                        <?php 
                            $lapshaitems = get_lapshaItems_all();
                            foreach ($lapshaitems as $lapshaitem): ?>

                                    <div class="menuitem">
                                        <div class="name_items">
                                            <h1>Лапша <br> <span class="quotes"><?php echo $lapshaitem["Lapsha_name"] ?></span></h1>
                                        </div>

                                        <div class="item__img_fix">

                                            <img src="<?php echo $lapshaitem["Lapsha_img"] ?>" id="pizzabebra_img">

                                        </div>

                                        <div class="product__price"><span class="product__price-number price__style"><?php echo $lapshaitem["Lapsha_cost"] ?></span> ₽</div>

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <a class="buy_item" 
                                                data-sb-id-or-vendor-code="L<?php echo $lapshaitem["id"] ?>"
                                                data-sb-product-name="<?php echo $lapshaitem["Lapsha_name"] ?>"
                                                data-sb-product-price="<?php echo $lapshaitem["Lapsha_cost"] ?>"
                                                data-sb-product-quantity="1"
                                                data-sb-product-img="<?php echo $lapshaitem["Lapsha_img"] ?>"

                                                href="#">Купить</a>

                                    </div>

                        <?php endforeach; ?>
                    </div>
                </div>
</div>


<?php require("footer.php")?>