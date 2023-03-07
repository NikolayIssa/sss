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
                            $Meat_items = get_MeatItems_all();
                            foreach ($Meat_items as $Meat_item): ?>

                                    <div class="menuitem">
                                        <h1>Суп <br> <span class="quotes"><?php echo $Meat_item["meat_name"] ?></span></h1>

                                        <div class="item__img_fix">

                                            <img src="<?php echo $Meat_item["meat_img"] ?>" id="pizzabebra_img">

                                        </div>

                                        <div class="product__price"><span class="product__price-number price__style"><?php echo $Meat_item["meat_cost"] ?></span> ₽</div>

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <a class="buy_item" 
                                                data-sb-id-or-vendor-code="М<?php echo $Meat_item["id"] ?>"
                                                data-sb-product-name="<?php echo $Meat_item["meat_name"] ?>"
                                                data-sb-product-price="<?php echo $Meat_item["meat_cost"] ?>"
                                                data-sb-product-quantity="1"
                                                data-sb-product-img="<?php echo $Meat_item["meat_img"] ?>"

                                                href="#">Купить</a>
                                    </div>

                        <?php endforeach; ?>
                    </div>
                </div>
</div>

<?php 
                
                   $Meat_items = get_MeatItems_all();
                    foreach ($Meat_items as $Meat_item): ?>

                    <div class="popup__menu" id="<?php echo $Meat_item["id"] ?>">
                    
                        <div class="popup__content">
                            <div class="close_popup3">
                                <a href="##"><img class="close_popup_img" src="img/functions/211652_close_icon.png"></a>
                            </div>

                                <div class="popup__content_img">
                                    <img src="<?php echo $Meat_item["meat_img"] ?>">
                                </div>

                                <div class="popup__content_main">
                                    <div class="close_popup2">
                                        <a href="##"><img class="close_popup_img" src="img/functions/211652_close_icon.png"></a>
                                    </div>

                                <div class="content__h1">
                                        <h1  class="quotes"><?php echo $Meat_item["meat_name"] ?></h1>
                                </div>
                                        <hr>
                                <div class="content__fill">
                                    <p>Состав: <?php echo $Meat_item["meat_disc"] ?></p>
                                </div>

                                <div class="content_cost">
                                    <div id="cost1"><p><?php echo $Meat_item["meat_cost"] ?>р</p></div>
                                </div>
                                <div class="content__button_order">
                                    <a href="https://vk.com/iiisssaa"><button class="order__button">Заказать</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

<?php require("footer.php")?>