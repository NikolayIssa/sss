<?php require 'header_form.php'?>
<?php require 'db.php'?>
<?php require 'OtzivPopup.php'?>
<body>
    <div class="main__conteinter">
        <div class="form__block">
            <div class="h1_form">
                <h1>Оформление заказа</h1>
            </div>
            <form action="send.php" method="post" >

            <div class="menu_section">
                <div class="menu_section_h1"><p>Пиццы</p></div>
                <div class="form__select_item">

                    <div class="form__select__item_img2">
                        <img src="styles/img/assortiment/rcwHgZJgzsviTt49qcxcmGQZUPbvZIQHiBq9L7oEn1iZcE-rAKWxPEH-Z2XJ7a-bjSjXyRS0B7FBwagcc2H0d0M.jpg">
                    </div>
                    
                    <div class="form__select__options__all">
                        <h1>Пицца 35см </h1>
                            <div class="form__select__item_options">
                                        <select class="form__select" id="select" name="sel_pizz30cm[]" multiple="multiple">
                                            <option disabled>Выберите Пиццу</option>
                                            <option value=" ">Не заказывать</option>
                                                <?php 
                                                    $menuitems = get_MenuItems_all();
                                                    foreach ($menuitems as $menuitem): ?>
                                                <option name="Pizza" value="<?php echo $menuitem["pizza_name"] ?> <?php echo $menuitem["pizza_cost"] ?>р" ><?php echo $menuitem["pizza_name"] ?> <?php echo $menuitem["pizza_cost"] ?>р</option>
                                                <?php endforeach; ?>

                                                
                                        </select>
                                        
                                            <div class="buttons-plus_minus__PC">
                                            <div class="button__plus">
                                                <button class="btn-copy" type="button">+</button>
                                            </div>
                                            <div class="button__minus">
                                                <button class="btn-del" type="button">-</button>
                                            </div>


                            </div>
                                        
                    </div>
                                    
                                    <div class="buttons-plus_minus__mobile">
                                        <div class="button__plus">
                                            <button class="btn-copy" type="button">+</button>
                                        </div>
                                        <div class="button__minus">
                                            <button class="btn-del" type="button">-</button>
                                        </div>
                                    </div>


                                    <div class="chose_quantity">
                                    <input type="number" name="quantity" class="number__btn" min="0">
                                    <p>:Укажите количество</p>
                                    </div>

                                    <div class="pizza__name_block">

                                    <div class="pizza__name-cost" id="output">
                                        <p>Наведите на нужную пиццу и с нажатым ctrl нажмите</p>
                                    </div>

                                    </div>  

                                    
                                        <!--
                                    <div>
		                                <button id="js-button" type="button">Цена</button>
	                                </div>      -->      
                    </div>
                    
                        <div class="form__select__item_img">
                            <img src="styles/img/assortiment/rcwHgZJgzsviTt49qcxcmGQZUPbvZIQHiBq9L7oEn1iZcE-rAKWxPEH-Z2XJ7a-bjSjXyRS0B7FBwagcc2H0d0M.jpg">
                        </div>
                </div>

                <div class="form__select_item">

                    <div class="form__select__item_img2">
                        <img src="styles/img/assortiment/rcwHgZJgzsviTt49qcxcmGQZUPbvZIQHiBq9L7oEn1iZcE-rAKWxPEH-Z2XJ7a-bjSjXyRS0B7FBwagcc2H0d0M.jpg">
                    </div>

                    <div class="form__select__options__all">
                        <h1>Пицца 40см </h1>
                        <div class="form__select__item_options">
                            <select class="form__select" id="select2" multiple="multiple" name="sel_pizz40cm[]">
                                <option disabled>Выберите Пиццу</option>
                                <option value=" ">Не заказывать</option>
                                    <?php 
                                        $menuitems = get_MenuItems_all();
                                        foreach ($menuitems as $menuitem): ?>
                                    <option name="Pizza40cm" value="<?php echo $menuitem["pizza_name"] ?> <?php echo $menuitem["pizza_cost40cm"] ?>р"><?php echo $menuitem["pizza_name"] ?></option>
                                    <?php endforeach; ?>
                            </select>
                                <div class="buttons-plus_minus__PC">
                                    <div class="button__plus">
                                        <button class="btn-copy" type="button">+</button>
                                    </div>
                                    <div class="button__minus">
                                        <button class="btn-del" type="button">-</button>
                                    </div>
                                </div>
                        </div>
                                    <div class="buttons-plus_minus__mobile">
                                        <div class="button__plus">
                                            <button class="btn-copy" type="button">+</button>
                                        </div>
                                        <div class="button__minus">
                                            <button class="btn-del" type="button">-</button>
                                        </div>
                                    </div>

                                    <div class="chose_quantity">
                                    <input type="number" name="quantity40cm" class="number__btn">
                                    <p>:Укажите количество</p>
                                    </div>

                                    <div class="pizza__name-cost" id="js-result2">
                                    </div>

                                    <div>
		                                <button id="js-button2" type="button">Цена</button>
	                                </div>            
                    </div>
                    
                        <div class="form__select__item_img">
                            <img src="styles/img/assortiment/rcwHgZJgzsviTt49qcxcmGQZUPbvZIQHiBq9L7oEn1iZcE-rAKWxPEH-Z2XJ7a-bjSjXyRS0B7FBwagcc2H0d0M.jpg">
                        </div>
                </div>
            </div>
                <!--Мясные блюда-->
            <div class="menu_section">
                <div class="menu_section_h1"><p>Мясные блюда</p></div>
                    <div class="form__select_item">

                        <div class="form__select__item_img2">
                            <img src="styles/img/assortiment/ramen/100007830.jpg">
                        </div>

                        <div class="form__select__options__all">
                        <h1>Мясные блюда </h1>
                            <div class="form__select__item_options">
                                <select class="form__select" id="select3"  multiple="multiple" name="Meat[]">
                                    <option disabled>Выберите Блюдо</option>
                                    <option value=" ">Не заказывать</option>
                                <?php 
                                            $Meat_items = get_MeatItems_all();
                                            foreach ($Meat_items as $Meat_item): ?>
                                        <option name="Meat" value="<?php echo $Meat_item["meat_name"] ?> <?php echo $Meat_item["meat_cost"] ?>р"><?php echo $Meat_item["meat_name"] ?></option>
                                        <?php endforeach; ?>
                                </select>
                                    <div class="buttons-plus_minus__PC">
                                        <div class="button__plus">
                                            <button class="btn-copy" type="button">+</button>
                                        </div>
                                        <div class="button__minus">
                                            <button class="btn-del" type="button">-</button>
                                        </div>
                                    </div>
                            </div>
                                    <div class="buttons-plus_minus__mobile">
                                        <div class="button__plus">
                                            <button class="btn-copy" type="button">+</button>
                                        </div>
                                        <div class="button__minus">
                                            <button class="btn-del" type="button">-</button>
                                        </div>
                                    </div>

                                    <div class="chose_quantity">
                                    <input type="number" name="quantityMeat" class="number__btn" min="0">
                                    <p>:Укажите количество</p>
                                    </div>

                                    <div class="pizza__name-cost" id="js-result3">
                                        </div>

                                        <div>
                                            <button id="js-button3" type="button">Цена</button>
                                        </div> 
                        </div>
                        
                            <div class="form__select__item_img">
                                <img src="styles/img/assortiment/ramen/100007830.jpg">
                            </div>
                    </div>
                </div>

                <!--Пиво -->
                        <div class="form__select_item">
                                <div class="form__select__item_img2">
                                    <img src="http://mobimg.b-cdn.net/v3/fetch/59/593dcf15ab7ed237fe7e975bec9a5111.jpeg">
                                </div>

                                <div class="form__select__options__all">
                                    <h1>Пиво</h1>
                                        <div class="form__select__item_options">                                                       
                                            <select class="form__select" id="select6" multiple="multiple" name="Beer">
                                                <option disabled>Выберите Блюдо</option>
                                                <option value=" ">Не заказывать</option>

                                                <?php 
                                                        $Beer_items = get_BeerItems_all();
                                                        foreach ($Beer_items as $Beer_item): ?>
                                                    <option name="Beer" value="<?php echo $Beer_item["Beer_name"] ?> <?php echo $Beer_item["Beer_cost0,5L"] ?>р"><?php echo $Beer_item["Beer_name"] ?></option>
                                                    <?php endforeach; ?>

                                            </select>
                                                <div class="buttons-plus_minus__PC">
                                                    <div class="button__plus">
                                                        <button class="btn-copy" type="button">+</button>
                                                    </div>
                                                    <div class="button__minus">
                                                        <button class="btn-del" type="button">-</button>
                                                    </div>
                                                </div>
                                        </div>
                                            <div class="buttons-plus_minus__mobile">
                                                <div class="button__plus">
                                                    <button class="btn-copy" type="button">+</button>
                                                </div>
                                                <div class="button__minus">
                                                    <button class="btn-del" type="button">-</button>
                                                </div>
                                            </div>

                                            <div class="chose_quantity">
                                                <input type="number" name="quantityBeer" class="number__btn" min="0">
                                                <p>:Укажите количество</p>
                                            </div>
                                        
                                        <!--
                                            <div class="pizza__name-cost" id="js-result6">
                                            </div>

                                                <div>
                                                    <button id="js-button6" type="button">Цена</button>
                                                </div> 
                                                        -->
                                </div>

                            <div class="form__select__item_img">
                                <img src="https://www.rosotravel.com/wp-content/uploads/2020/03/beer-tasting-krakow.jpg">
                            </div>
                        </div>

                        <!--    
                        <div class="form__select_item">
                                <div class="form__select__item_img2">
                                    <img src="https://kartinkin.net/uploads/posts/2022-03/1648025973_6-kartinkin-net-p-kartinki-kokteilei-8.jpg">
                                </div>

                                <div class="form__select__options__all">
                                    <h1>Коктейли</h1>
                                        <div class="form__select__item_options">                                                       
                                            <select class="form__select" id="select7">
                                                <option disabled>Выберите Блюдо</option>
                                                <option value="Не заказывать">Не заказывать</option>

                                                <?php 
                                                        $Coctail_items = get_CoctailItems_all();
                                                        foreach ($Coctail_items as $Coctail_item): ?>
                                                    <option value="<?php echo $Coctail_item["Coctail_name"] ?> <?php echo $Coctail_item["Coctail_cost"] ?>р"><?php echo $Coctail_item["Coctail_name"] ?></option>
                                                    <?php endforeach; ?>

                                            </select>
                                                <div class="buttons-plus_minus__PC">
                                                    <div class="button__plus">
                                                        <button class="btn-copy" type="button">+</button>
                                                    </div>
                                                    <div class="button__minus">
                                                        <button class="btn-del" type="button">-</button>
                                                    </div>
                                                </div>
                                        </div>
                                            <div class="buttons-plus_minus__mobile">
                                                <div class="button__plus">
                                                    <button class="btn-copy" type="button">+</button>
                                                </div>
                                                <div class="button__minus"> 
                                                    <button class="btn-del" type="button">-</button>
                                                </div>
                                            </div>

                                            <div class="pizza__name-cost" id="js-result7">
                                            </div>

                                                <div>
                                                    <button id="js-button7" type="button">Цена</button>
                                                </div> 
                                </div>

                            <div class="form__select__item_img">
                                <img src="https://kartinkin.net/uploads/posts/2022-03/1648025973_6-kartinkin-net-p-kartinki-kokteilei-8.jpg">
                            </div>
                        </div>
                                                        -->
                
                <input type="submit" value="Отправить">
                </div>
                
            </form>
                   

            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    
    <script>
        $(function(){
            $(".btn-copy").on('click', function(){
            var ele = $(this).closest('.form__select__item_options').clone(true);
            $(this).closest('.form__select__item_options').after(ele);
            })
        })

        $(function(){
            $(".btn-del").on('click', function(){
            $(this).closest('.form__select__item_options').hide();
            })
        })

        $('#js-button').click(function(){
	        var value = $('#select').val();
	        $('#js-result').html('Цена: ' + value);
        });

        $('#js-button2').click(function(){
	        var value = $('#select2').val();
	        $('#js-result2').html('Цена: ' + value);
        });

        $('#js-button3').click(function(){
	        var value = $('#select3').val();
	        $('#js-result3').html('Цена: ' + value);
        });

        $('#js-button4').click(function(){
	        var value = $('#select4').val();
	        $('#js-result4').html('Цена: ' + value);
        });

        $('#js-button5').click(function(){
	        var value = $('#select5').val();
	        $('#js-result5').html('Цена: ' + value);
        });

        $('#js-button6').click(function(){
	        var value = $('#select6').val();
	        $('#js-result6').html('Цена: ' + value);
        });

        $('#js-button7').click(function(){
	        var value = $('#select7').val();
	        $('#js-result7').html('Цена: ' + value);
        });
    </script>
</body>
</html>