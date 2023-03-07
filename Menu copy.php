<?php require 'header.php'?>
<?php require 'db.php'?>
    <div id="popup" class="popup">
        <div class="popup_body">
                <div class="popup_into">
                        <div class="text_close">
                            <div class="popup_zaglav"><h1>Отзывы наших клиентов!</h1></div>
                                <div class="close_popup">
                                    <a href="##"><img class="close_popup_img" src="img/functions/211652_close_icon.png"></a>
                                </div>
                        </div>       
                        <div class="comments">
                                <div id="vk_comments"></div> 
                        </div> 
                </div>
        </div> 
    </div>

    <?php 
                           $menuitems = get_MenuItems_all();
                           foreach ($menuitems as $menuitem): ?>

                            <div class="popup__menu" id="<?php echo $menuitem["id"] ?>">
                                <div class="popup__content">
                                    <div class="close_popup3">
                                        <a href="##"><img class="close_popup_img" src="img/functions/211652_close_icon.png"></a>
                                    </div>
                                    <div class="popup__content_img">
                                        <img src="<?php echo $menuitem["pizza_img"] ?>">
                                    </div>

                                    <div class="popup__content_main">
                                        <div class="close_popup2">
                                            <a href="##"><img class="close_popup_img" src="img/functions/211652_close_icon.png"></a>
                                        </div>
                                        <div class="content__h1">
                                            <h1><?php echo $menuitem["pizza_name"] ?></h1>
                                        </div>
                                        <hr>
                                        <div class="content__fill">
                                            <p>Состав: Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, incidunt
                                                qui asperiores suscipit doloremque eius nam animi id molestias ut est? Tenetur 
                                                in explicabo voluptate dolore vitae itaque consectetur illum.</p>
                                        </div>

                                        <div class="content__buttons_size">
                                            <button class="pizza_size" onclick="before()">35см</button>
                                            <button class="pizza_size" onclick="afterr()">45см</button>
                                        </div>

                                        <div class="content_cost">
                                            <p id="cost"><?php echo $menuitem["pizza_cost"] ?></p>
                                        </div>

                                        <div class="content__button_order">
                                            <a href="https://vk.com/iiisssaa"><button class="order__button">Заказать</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

    
<div class="store_block">
        <div class="left_column">
            <div class="sidebar">
                <h1>Меню</h1>
                <hr>
                <button class="sidebar_button1"><a class="menu_link"href="#">Пицца</a></button>
                <button class="sidebar_button2"><a class="menu_link"href="ramen.html">Рамен</a></button>
                <button class="sidebar_button3"><a class="menu_link"href="sushi.html">Суши</a></button>
                <button class="sidebar_button4"><a class="menu_link"href="file:///E:/matsurihtml/mainsite/Zakuski.html">Закуски</a></button>
                <button class="sidebar_button5"><a class="menu_link"href="file:///E:/matsurihtml/mainsite/Napitki.html">Напитки</a></button>
            </div>

            <div class="banner">
                <img src="img/banners/photo_2022-08-16_00-21-59.jpg">
            </div>
        </div>

                <div id="pizza"> 
                    <div class="Zaglavtext">Пиццы</div>
                    <hr>
                    <div class="menulist">

                        <?php 
                           $menuitems = get_MenuItems_all();
                           foreach ($menuitems as $menuitem): ?>

                                <div class="menuitem">
                                    <h1 id="pizzaBebra">Пицца <br> <span class="quotes"><?php echo $menuitem["pizza_name"] ?></span></h1>
                                    <img src="<?php echo $menuitem["pizza_img"] ?>" id="pizzabebra_img">
                                    <p id="pizzabebra_cost"><?php echo $menuitem["pizza_cost"] ?></p>
                                    <a href="#<?php echo $menuitem["id"] ?>"><button class="button-31">Заказать</button></a>
                                </div>

                            <?php endforeach; ?>
                            
                    </div>
                </div>
</div>



<div class="banner2">
    <img src="img/banners/баннер.jpg">
</div>

<?php require("footer.php")?>