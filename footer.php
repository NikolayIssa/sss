<footer>
    <div class="footer_block">
        <span>Все права защищены 2021-2030 Мацури©</span>
    </div>
    <div class="socials">
        <a class="twitter" href=""></a>
        <a class="youtube" href=""></a>
        <a class="facebook" href=""></a>
    </div>
</footer>

            
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

                <link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">

                <div class="smart-basket__wrapper"></div>

                <script src="./smartbasket/js/smartbasket.min.js"></script>

                <script>
                    $(function () {
                        $('.smart-basket__wrapper').smbasket({
                            productElement: 'menuitem',
                            buttonAddToBasket: 'buy_item',
                            productPrice: 'product__price-number',
                            productSize: 'product__size-element',
                            
                            productQuantityWrapper: 'product__quantity',
                            smartBasketMinArea: 'busket',
                            countryCode: '+7',
                            smartBasketCurrency: '₽',
                            smartBasketMinIconPath: './smartbasket/img/shopping-basket-wight.svg',

                            agreement: {
                                isRequired: true,
                                isChecked: true,
                                isLink: 'https://artstranger.ru/privacy.html',
                            },
                            nameIsRequired: false,
                        });
                    });
                </script>

</body>
</html>