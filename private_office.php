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
          <ul class="menu_list">
            <li class="history_orders menu_list_item active">
              <a class="menu_list_link" href="#">История заказов</a>
            </li>
            <li class="bg_my_questionnaire  menu_list_item">
              <a class="menu_list_link" href="#">Моя анкета</a>
            </li>
            <li class="bg_settings menu_list_item">
              <a class="menu_list_link" href="#">Настройки</a>
            </li>
          </ul>
        </div>  
        <div class="tabel_indent">
          <table class="tabel_private_office">
            <tr>
              <th>Заказ</th>
              <th>Описание</th>
              <th>Дата заказа</th>
              <th>Дата оплаты</th>
            </tr>
            <tr>
              <td class="td_img"><img src="images/img_electronics.jpg" alt=""></td>
              <td class="table_text_blue">Современная электроника<br>
              Подписка на 2013 год</td>
              <td class="table_data">05.02.2013</td>
              <td class="table_data2">06.02.2013</td>
            </tr>
            <tr>
              <td class="td_img"><img src="images/img_electronics.jpg" alt=""></td>
              <td class="table_text_blue">Современная электроника<br>
              Подписка на 2012 год</td>
              <td class="table_data">05.02.2013</td>
              <td class="table_data2">06.02.2013</td>
            </tr>
            <tr>
              <td class="td_img"><img class="table_img_border" src="images/img_electronics2.jpg" alt=""></td>
              <td class="table_text_blue">Современная электроника<br>
              №7 / 2001 год</td>
              <td class="table_data">05.02.2013</td>
              <td class="table_data2">06.02.2013</td>
            </tr>
            <tr>
              <td class="td_img"><img class="table_img_border" src="images/img_electronics3.jpg" alt=""></td>
              <td class="table_text_blue">Современная электроника<br>
              Подписка на 2013 год</td>
              <td class="table_data">05.02.2013</td>
              <td class="table_data2">06.02.2013</td>
            </tr>
            <tr>
              <td class="td_img"><img src="images/img_cta4.jpg" alt=""></td>
              <td class="table_text_blue">Современная электроника<br>
              Подписка на 2013 год</td>
              <td class="table_data">05.02.2013</td>
              <td class="table_data2">06.02.2013</td>
            </tr>
            <tr>
              <td class="td_img"><img src="images/img_electronics.jpg" alt=""></td>
              <td class="table_text_blue">Современная электроника<br>
              Подписка на 2013 год</td>
              <td class="table_data">05.02.2013</td>
              <td class="table_data2">06.02.2013</td>
            </tr>
          </table>
        </div>  
      </div>
    </section>
<!--==============================footer=================================-->
    <?php include("main_blocks/footer.php") ?>
</body>
</html>