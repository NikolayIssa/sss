<?php require 'header.php'?>
<?php require 'db.php'?>
<?php require 'OtzivPopup.php'?>

<div class="store_block">
    <?php require "menu_left_column.php" ?>

                <div id="pizza"> 
                    <div class="Zaglavtext">Коктейли</div>
                    <hr>

                    <div class="menulist">
                        <?php 
                            $coctailitems = get_CoctailItems_all();
                            foreach ($coctailitems as $coctailitem): ?>

                                    <div class="menuitem">
                                        <h1>Пиво <br> <span class="quotes"><?php echo $coctailitem["Coctail_name"] ?></span></h1>

                                            <div class="item__img_fix">

                                                <img src="<?php echo $coctailitem["Coctail_img"] ?>" id="pizzabebra_img">
                                                
                                            </div>

                                        <div class="drinks__cost">

                                            <div class="product__price"><span class="product__price-number price__style"><?php echo $coctailitem["Coctail_cost"]?></span> ₽</div>                                     

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <div class="buttons__buy_about">

                                                    <a class="buy_item" 
                                                    data-sb-id-or-vendor-code="P<?php echo $coctailitem["id"] ?>"
                                                    data-sb-product-name="<?php echo $coctailitem["Coctail_name"] ?>"
                                                    data-sb-product-price="<?php echo $coctailitem["Coctail_cost"]?>"
                                                    data-sb-product-quantity="1"
                                                    data-sb-product-img="<?php echo $coctailitem["Coctail_img"] ?>"

                                                    href="#">Купить</a>

                                                    <a href="#<?php echo $coctailitem["id"] ?>" class="order__about"><button class="button-31">?</button></a>
                                                
                                                </div>
                                        </div>
                                    </div>

                        <?php endforeach; ?>
                    </div>

                    <div class="Zaglavtext">Пиво</div>
                    <hr>

                    <div class="menulist">
                        <?php 
                            $Beers_items = get_BeerItems_all();
                            foreach ($Beers_items as $Beer_item): ?>

                                    <div class="menuitem">
                                        <h1>Пиво <br> <span class="quotes"><?php echo $Beer_item["Beer_name"] ?></span></h1>

                                            <div class="item__img_fix">

                                                <img src="<?php echo $Beer_item["Beer_IMG"] ?>" id="pizzabebra_img">

                                            </div>

                                        <div class="drinks__cost">

                                            <div class="product__price"><span class="product__price-number price__style"><?php echo $Beer_item["Beer_cost0,5L"]?></span> ₽</div>                                     

                                                <div class="product__quantity product__quantity__styles"></div>


                                                <div class="buttons__buy_about">

                                                    <a class="buy_item" 
                                                    data-sb-id-or-vendor-code="P<?php echo $Beer_item["id"] ?>"
                                                    data-sb-product-name="<?php echo $Beer_item["Beer_name"] ?>"
                                                    data-sb-product-price="<?php echo $Beer_item["Beer_cost0,5L"]?>"
                                                    data-sb-product-quantity="1"
                                                    data-sb-product-img="<?php echo $Beer_item["Beer_IMG"] ?>"

                                                    href="#">Купить</a>

                                                    <a href="#<?php echo $Beer_item["id"] ?>" class="order__about"><button class="button-31">?</button></a>
                                                
                                                </div>
                                        </div>
                                    </div>

                        <?php endforeach; ?>
                    </div>

                    <div class="Zaglavtext">Чай,кофе</div>
                    <hr>
                    <div class="menulist">

                        <?php 
                            $Coffee_items = get_CoffeeItems_all();
                            foreach ($Coffee_items as $Coffee_item): ?>

                                    <div class="menuitem">
                                        <h1>Напиток <br> <span class="quotes"><?php echo $Coffee_item["Cofee_name"] ?></span></h1>
                                        <img src="<?php echo $Coffee_item["Coffee_img"] ?>" id="pizzabebra_img">
                                        <p> <span><?php echo $Coffee_item["Cofee_cost"] ?>р</span> </p>
                                        <a href="#<?php echo $Coffee_item["id"] ?>l"><button class="button-31">Подробнее</button></a>
                                    </div>

                        <?php endforeach; ?>

                        <?php 
                            $Tea_items = get_TeaItems_all();
                            foreach ($Tea_items as $Tea_item): ?>

                                    <div class="menuitem">
                                        <h1>Напиток <br> <span class="quotes"><?php echo $Tea_item["Tea_name"] ?></span></h1>
                                        <img src="<?php echo $Tea_item["Tea_IMG"] ?>" id="pizzabebra_img">
                                        <p> <span><?php echo $Tea_item["Tea_cost400ml"] ?>р</span> </p>
                                        <a href="#<?php echo $Tea_item["link"] ?>"><button class="button-31">Подробнее</button></a>
                                    </div>

                        <?php endforeach; ?>
                    </div>
                </div>
                
</div>

<div class="banner2">
    <img src="img/banners/баннер.jpg">
</div>

                <?php 
                
                $Tea_items = get_TeaItems_all();
                foreach ($Tea_items as $Tea_item): ?>

                <div class="popup__menu" id="<?php echo $Tea_item["link"] ?>">
                
                    <div class="popup__content">
                        <div class="close_popup3">
                            <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                        </div>

                            <div class="popup__content_img">
                                <img src="<?php echo $Tea_item["Tea_IMG"] ?>">
                            </div>

                            <div class="popup__content_main">
                                <div class="close_popup2">
                                    <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                                </div>

                            <div class="content__h1">
                                    <h1  class="quotes"><?php echo $Tea_item["Tea_name"] ?></h1>
                            </div>
                                    <hr>
                            <div class="content__fill2">
                                    <select id="select_tea">
                                        <option><?php echo $Tea_item["Tea_description"] ?></option>
                                        <option><?php echo $Tea_item["Tea_description2"] ?></option>
                                        <option><?php echo $Tea_item["Tea_description3"] ?></option>
                                        <option><?php echo $Tea_item["Tea_description4"] ?></option>
                                    </select>
                            </div>

                            <div class="content_cost">
                            <form>
                                <div class="Cost__choice1">
                                    <label class="Cost__choice1">
                                    <input type="radio" id="cost1" name="menu__item_cost">
                                    <span class="item__cost"><?php echo $Tea_item["Tea_cost400ml"]?>р</span>
                                    </label>
                                </div>

                                <div class="Cost__choice2">
                                    <label class="Cost__choice2">
                                    <input type="radio" id="cost1" name="menu__item_cost">
                                    <span class="item__cost2"><?php echo $Tea_item["Tea_cost600ml"]?>р</span>
                                    </label>
                                </div>
                            </form>
                            </div>
                            <div class="content__button_order">
                                <a href="https://vk.com/iiisssaa"><button class="order__button">Заказать</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php 
                
                $Coffee_items = get_CoffeeItems_all();
                foreach ($Coffee_items as $Coffee_item): ?>

                <div class="popup__menu" id="<?php echo $Coffee_item["id"] ?>l">
                
                    <div class="popup__content">
                        <div class="close_popup3">
                            <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                        </div>

                            <div class="popup__content_img">
                                <img src="<?php echo $Coffee_item["Coffee_img"] ?>">
                            </div>

                            <div class="popup__content_main">
                                <div class="close_popup2">
                                    <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                                </div>

                            <div class="content__h1">
                                    <h1  class="quotes"><?php echo $Coffee_item["Cofee_name"] ?></h1>
                            </div>
                                    <hr>
                            <div class="content__fill">
                                    <p><?php echo $Coffee_item["Cofee_description"] ?></p>
                            </div>

                            <div class="content_cost">
                                <div class="cost1"><p> <?php echo $Coffee_item["Cofee_cost"] ?>р <span class="cost_ml"></span></p></div>
                            </div>
                            <div class="content__button_order">
                                <a href="https://vk.com/iiisssaa"><button class="order__button">Заказать</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php
                   $coctailitems = get_CoctailItems_all();
                    foreach ($coctailitems as $coctailitem): ?>

                    <div class="popup__menu" id="<?php echo $coctailitem["id"] ?>">
                    
                        <div class="popup__content coctailspopup">
                            <div class="close_popup3">
                                <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                            </div>

                                <div class="popup__content_img">
                                    <img src="<?php echo $coctailitem["Coctail_img"] ?>">
                                </div>

                                <div class="popup__content_main">
                                    <div class="close_popup2">
                                        <a href="##"><img class="close_popup_img" src="styles/img/functions/211652_close_icon.png"></a>
                                    </div>

                                <div class="content__h1">
                                        <h1><?php echo $coctailitem["Coctail_name"] ?></h1>
                                </div>
                                        <hr>
                                <div class="content__fill">
                                    <p>Состав: <?php echo $coctailitem["Coctail_disc"] ?></p>
                                </div>

                                <div class="content_cost">
                                    <div id="cost1"><p><?php echo $coctailitem["Coctail_cost"] ?>р<span> 35см</span></p></div>
                                </div>
                                <div class="content__button_order">
                                    <a href="#popup"><button class="order__button">Отзыв</button></a>
                                    <a href="##"><button class="order__button">Закрыть</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

<?php require("footer.php")?>