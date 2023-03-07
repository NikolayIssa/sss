<?php require 'header.php'?>
<?php require 'db.php'?>
<?php require 'OtzivPopup.php'?>

<div class="store_block">
        <?php require "menu_left_column.php" ?>

                            <div id="pizza"> 
                                <div class="Zaglavtext">Пиццы</div>
                                <hr>
                                <div class="menulist">

                                <?php 
                                    $menuitems = get_MenuItems_all();
                                    foreach ($menuitems as $menuitem): ?>

                                            <div class="menuitem wow animate__animated animate__fadeIn">
                                                <h1>Пицца <br> <span class="quotes"><?php echo $menuitem["pizza_name"] ?></span></h1>
                                                <div class="item__img">
                                                    <div class="item__img_fix">
                                                        <img src="<?php echo $menuitem["pizza_img"] ?>" id="pizzabebra_img">
                                                    </div>
                                                </div>


                                                <div class="product__price"><span class="product__price-number price__style"><?php echo $menuitem["pizza_cost"] ?></span> ₽</div>
                                                

            
                                                <div class="product__size product__size_styles">
                                                    
                
                                                <div class="product__size-element size-btn" data-sb-curent-price="<?php echo $menuitem["pizza_cost"] ?>" data-sb-curent-size="35" data-sb-curent-id-or-vendor-code="<?php echo $menuitem["id"] ?>">35 см</div>
                                                <div class="product__size-element size-btn" data-sb-curent-price="<?php echo $menuitem["pizza_cost40cm"] ?>" data-sb-curent-size="40" data-sb-curent-id-or-vendor-code="BIG<?php echo $menuitem["id"] ?>">40 см</div>
                                                                
                                                </div>

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <div class="buttons__buy_about">

                                                    <a class="buy_item" 
                                                    data-sb-id-or-vendor-code="P<?php echo $menuitem["id"] ?>"
                                                    data-sb-product-name="<?php echo $menuitem["pizza_name"] ?>"
                                                    data-sb-product-price="<?php echo $menuitem["pizza_cost"] ?>"
                                                    data-sb-product-quantity="1"
                                                    data-sb-product-img="<?php echo $menuitem["pizza_img"] ?>"

                                                    href="#">Купить</a>

                                                    <a href="#<?php echo $menuitem["id"] ?>" class="order__about"><button class="button-31">?</button></a>
                                                
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
                   $menuitems = get_MenuItems_all();
                    foreach ($menuitems as $menuitem): ?>

                    <div class="popup__menu" id="<?php echo $menuitem["id"] ?>">
                    
                        <div class="popup__content">
                            <div class="close_popup3">
                                <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                            </div>

                                <div class="popup__content_img">
                                    <img src="<?php echo $menuitem["pizza_img"] ?>">
                                </div>

                                <div class="popup__content_main">
                                    <div class="close_popup2">
                                        <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                                    </div>

                                <div class="content__h1">
                                        <h1><?php echo $menuitem["pizza_name"] ?></h1>
                                </div>
                                        <hr>
                                <div class="content__fill">
                                    <p>Состав: <?php echo $menuitem["pizza_sostav"] ?></p>
                                </div>

                                <!-- <div class="content__buttons_size">
                                    <button class="pizza_size" onclick="cm35()">35см</button>
                                    <button class="pizza_size" onclick="cm40()">40см</button>
                                </div> -->

                                <div class="content_cost">
                                    <div id="cost1"><p><?php echo $menuitem["pizza_cost"] ?>р<span> 35см</span></p></div>
                                    <div id="cost2"><p ><?php echo $menuitem["pizza_cost40cm"] ?>р<span> 40см</span></p></div>
                                </div>
                                <div class="content__button_order">
                                    <a href="#popup"><button class="order__button">Отзыв</button></a>
                                    <a href="##"><button class="order__button">Закрыть</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

                
<?php require("footer.php")?>