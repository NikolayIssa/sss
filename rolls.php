<?php require 'header.php'?>
<?php require 'db.php'?>
<?php require 'OtzivPopup.php'?>

<div class="store_block">
        <?php require "menu_left_column.php" ?>

                            <div id="pizza"> 
                                <div class="Zaglavtext">Жареные Роллы</div>
                                <hr>
                                <div class="menulist">

                                <?php 
                                    $rollsitems = get_RollsItems_all();
                                    foreach ($rollsitems as $rollsitem): ?>

                                            <div class="menuitem wow animate__animated animate__fadeIn">
                                                <div class="name_items">
                                                    <h1>Роллы <br> <span class="quotes"><?php echo $rollsitem["roll_name"] ?></span></h1>
                                                </div>

                                                <div class="item__img_fix">

                                                    <img src="<?php echo $rollsitem["roll_img"] ?>" id="pizzabebra_img">

                                                </div>

                                                <div class="product__price"><span class="product__price-number price__style"><?php echo $rollsitem["roll_cost"] ?></span> ₽</div>
                                        

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <div class="buttons__buy_about">

                                                    <a class="buy_item" 
                                                    data-sb-id-or-vendor-code="R<?php echo $rollsitem["id"] ?>"
                                                    data-sb-product-name="<?php echo $rollsitem["roll_name"] ?>"
                                                    data-sb-product-price="<?php echo $rollsitem["roll_cost"] ?>"
                                                    data-sb-product-quantity="1"
                                                    data-sb-product-img="<?php echo $rollsitem["roll_img"] ?>"

                                                    href="#">Купить</a>

                                                    <a href="#<?php echo $rollsitem["id"] ?>" class="order__about"><button class="button-31">?</button></a>
                                                
                                                </div>
                                            </div>

                                <?php endforeach; ?>
                            
                                </div>
                            </div>
</div>

<div class="banner2" >
    <img src="styles/img/banners/баннер.jpg">
</div>
                <?php
                   $rollsitems = get_MenuItems_all();
                    foreach ($rollsitems as $rollsitem): ?>

                    <div class="popup__menu" id="<?php echo $rollsitem["id"] ?>">
                    
                        <div class="popup__content">
                            <div class="close_popup3">
                                <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                            </div>

                                <div class="popup__content_img">
                                    <img src="<?php echo $rollsitem["pizza_img"] ?>">
                                </div>

                                <div class="popup__content_main">
                                    <div class="close_popup2">
                                        <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                                    </div>

                                <div class="content__h1">
                                        <h1  class="quotes"><?php echo $rollsitem["pizza_name"] ?></h1>
                                </div>
                                        <hr>
                                <div class="content__fill">
                                    <p>Состав: <?php echo $rollsitem["pizza_sostav"] ?></p>
                                </div>

                                <div class="content__buttons_size">
                                    <button class="pizza_size" onclick="cm35()">35см</button>
                                    <button class="pizza_size" onclick="cm40()">40см</button>
                                </div>

                                <div class="content_cost">
                                    <div id="cost1"><p><?php echo $rollsitem["pizza_cost"] ?>р</p></div>
                                    <div id="cost2"><p ><?php echo $rollsitem["pizza_cost40cm"] ?>р</p></div>
                                </div>
                                <div class="content__button_order">
                                    <a href="https://vk.com/iiisssaa"><button class="order__button">Заказать</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

                
<?php require("footer.php")?>