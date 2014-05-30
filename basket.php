<!DOCTYPE html>
<html lang="en">
<head>
    <title>Корзина</title>
    <meta name = "format-detection" content = "telephone=no" />
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>

</head>

<body class="basket_page">
<!--==============================header=================================-->
	<?php include("main_blocks/header.php") ?>
<!--==============================content================================-->

	<div class="breadcrumbs">
        <div class="main">
          <ul class="breadcrumbs_list wrapper">
            <li class="breadcrumbs_it">
              <a href="#" class="breadcrumbs_lk"></a>
            </li>
            <li class="breadcrumbs_it">
              <span>Корзина</span>
            </li>
          </ul>
        </div>
    </div>
    <div class="main">
    	<section class="basket_box">
    		<h2 class="title5">Корзина</h2>

    		<form action="">
                <table class="basket_tamle">
                    <tr>
                        <th class="basket_coll_1" colspan="2">Товары</th>
                        <th class="basket_coll_3">Цена</th>
                        <th class="basket_coll_4">Количество</th>
                        <th class="basket_coll_5">Скидка</th>
                        <th class="basket_coll_6">X</th>
                    </tr>
                    <tr>
                        <td class="basket_coll_1">
                            <img src="images/img_electronics.jpg" alt="">
                        </td>
                        <td class="basket_coll_2">
                            <h6 class="basket_title">Подписка на журнал «Современная электроника» 2013 г.</h6>
                        </td>
                        <td class="basket_coll_3">
                            <span class="basket_price">3500 р.</span>
                        </td>
                        <td class="basket_coll_4">
                            <button class="basket_minus"></button>
                            <input class="basket_qt" value="1">
                            <button class="basket_plus"></button>
                        </td>
                        <td class="basket_coll_5">
                            <span class="discount">5%</span>
                        </td>
                        <td class="basket_coll_6">
                            <button class="basket_delete"></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="basket_coll_1">
                            <img src="images/img_electronics2.jpg" alt="">
                        </td>
                        <td class="basket_coll_2">
                            <h6 class="basket_title">Подписка на журнал «Современная электроника» 2013 г.</h6>
                        </td>
                        <td class="basket_coll_3">
                            <span class="basket_price">3500 р.</span>
                        </td>
                        <td class="basket_coll_4">
                            <button class="basket_minus"></button>
                            <input class="basket_qt" value="1">
                            <button class="basket_plus"></button>
                        </td>
                        <td class="basket_coll_5">
                            <span class="discount">5%</span>
                        </td>
                        <td class="basket_coll_6">
                            <button class="basket_delete"></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="basket_coll_1">
                            <img src="images/img_electronics3.jpg" alt="">
                        </td>
                        <td class="basket_coll_2">
                            <h6 class="basket_title">Подписка на журнал «Современная электроника» 2013 г.</h6>
                        </td>
                        <td class="basket_coll_3">
                            <span class="basket_price">3500 р.</span>
                        </td>
                        <td class="basket_coll_4">
                            <button class="basket_minus"></button>
                            <input class="basket_qt" value="1">
                            <button class="basket_plus"></button>
                        </td>
                        <td class="basket_coll_5">
                            <span class="discount">5%</span>
                        </td>
                        <td class="basket_coll_6">
                            <button class="basket_delete"></button>
                        </td>
                    </tr>
                </table>
                <div class="clearfix">
                    <div class="coll1 f_left">
                       <label for="">Введите код купона на скидку:</label>
                       <input type="text" class="modal_inp w100"> 
                    </div>
                    <div class="coll2 f_right">
                        <span class="bask_amount clearfix d_block">Товаров на:<span class="f_right">4000 р.</span></span>
                        <span class="bask_amount bask_vat clearfix d_block">В том числе НДС:<span class="f_right">0 р.</span></span>
                        <span class="bask_amount color_blue clearfix d_block">Итого:<span class="f_right">4000 р.</span></span>
                    </div>
                </div>
                <hr class="bd1">
                <div class="clearfix">
                    <div class="coll1 f_left">
                        <button class="recalculate">Пересчитать</button>
                    </div>
                    <div class="coll2 f_right">
                        <button class="modal_btn">Оформить заказ</button>
                    </div>
                </div>
            </form>
    	</section>
    </div>


<!--==============================footer=================================-->
    <?php include("main_blocks/footer.php") ?>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script>
        $(function(){
          jQuery('.scroll-pane').jScrollPane({
            showArrows: true,
            resiz: true
          });
          jQuery('.scroll-pane1').jScrollPane({
            showArrows: true,
            resiz: true
          });
          
        });
        $(document).ready(function() {
            $('.basket_minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.basket_plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
    </script>
</body>
</html>