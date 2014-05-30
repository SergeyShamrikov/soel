<!DOCTYPE html>
<html lang="en">
<head>
    <title>Личный кабинет</title>
    <meta name = "format-detection" content = "telephone=no" />
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
</head>
<body class="private_office">
<!--==============================header=================================-->
   <?php include("main_blocks/header.php") ?>
<!--==============================content================================-->
    <section id="content">
      <div class="breadcrumbs">
        <div class="main">
          <ul class="breadcrumbs_list wrapper">
            <li class="breadcrumbs_it">
              <a href="index.html" class="breadcrumbs_lk"></a>
            </li>
            <li class="breadcrumbs_it">
              <a href="#" class="breadcrumbs_lk">
                Магазин
              </a>
            </li>
            <li class="breadcrumbs_it">
              <span>Личный кабинет</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="main">
        <div class="wrapper">
          <h1 class="title_5">Личный кабинет</h1>
          <ul class="menu_list wrapper">
            <li class="history_orders menu_list_item active">
              <a class="menu_list_link" href="private_office.php">Мои заказы</a>
            </li>
            <li class="bg_my_questionnaire  menu_list_item">
              <a class="menu_list_link" href="private_office_form.php">Моя анкета</a>
            </li>
            <li class="bg_settings menu_list_item">
              <a class="menu_list_link" href="private_office_password.php">Настройки</a>
            </li>
          </ul>
        </div>
        <div class="tabel_indent">
          <h6 class="subscription_title wrapper">Мои заказы</h6>
          <table class="my_orders">
            <tr class="my_orders_title">
              <th>Номер заказа:<span>245</span></th>
              <th>Дата заказа:<span>02.01.2014</span></th>
              <th>Стоимость:<span>3500 р.</span></th>
              <th class="status">Статус:<span></span></th>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:1</span></td>
            </tr>
          </table>

          <table class="my_orders">
            <tr class="my_orders_title">
              <th>Номер заказа:<span>215</span></th>
              <th>Дата заказа:<span>14.03.2013</span></th>
              <th>Стоимость:<span>4250 р.</span></th>
              <th class="status">Статус:<span></span></th>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:1</span></td>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics2.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:2</span></td>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics3.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:1</span></td>
            </tr>
          </table>

          <table class="my_orders">
            <tr class="my_orders_title">
              <th>Номер заказа:<span>106</span></th>
              <th>Дата заказа:<span>21.11.2012</span></th>
              <th>Стоимость:<span>3000 р.</span></th>
              <th class="status">Статус:<span class="not_paid"></span></th>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics2.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:1</span></td>
            </tr>
          </table>

          <table class="my_orders">
            <tr class="my_orders_title">
              <th>Номер заказа:<span>215</span></th>
              <th>Дата заказа:<span>14.03.2013</span></th>
              <th>Стоимость:<span>4250 р.</span></th>
              <th class="status">Статус:<span></span></th>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:1</span></td>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics2.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:2</span></td>
            </tr>
            <tr>
              <td class="td_img">
                <img src="images/img_electronics3.jpg">
              </td>
              <td class="table_text_blue" colspan="2">
                Подписка на журнал<br>
                "Современная электроника" 2014 г.
              </td>
              <td class="table_data"><span>Количество:1</span></td>
            </tr>
          </table>
          
          <div class="my_orders_nav_box al_center">
            <a href="#" class="my_orders_nav_prev"></a>
            <ul class="my_orders_nav d_in-block clearfix">
              <li class="my_orders_nav_it f_left active">
                <a href="#" class="my_orders_nav_lk">1</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">2</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">3</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">4</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">5</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">6</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">7</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">8</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">9</a>
              </li>
              <li class="my_orders_nav_it f_left">
                <a href="#" class="my_orders_nav_lk">10</a>
              </li>
            </ul>
            <a href="#" class="my_orders_nav_next"></a>
          </div>

        </div>  
      </div>
    </section>
<!--==============================footer=================================-->
    <?php include("main_blocks/footer.php") ?>

</body>
</html>