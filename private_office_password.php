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
<body class="private_office_password">
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
            <li class="history_orders menu_list_item">
              <a class="menu_list_link" href="private_office.php">Мои заказы</a>
            </li>
            <li class="bg_my_questionnaire  menu_list_item">
              <a class="menu_list_link" href="private_office_form.php">Моя анкета</a>
            </li>
            <li class="bg_settings menu_list_item active">
              <a class="menu_list_link" href="private_office_password.php">Настройки</a>
            </li>
          </ul>
        </div>
        <div class="tabel_indent">
        	<form action="" class="password_box">
        		<h6 class="subscription_title wrapper">Смена пароля</h6>
        		<div class="clearfix imput_box">
                  <label class="f_left" for="password">Текущий пароль</label>
                  <input class="modal_inp d_in-block f_right" type="password" id="password">
                </div>
                <div class="clearfix imput_box">
                  <label class="f_left" for="password">Новый пароль</label>
                  <input class="modal_inp d_in-block f_right" type="password" id="password">
                </div>
                <div class="clearfix imput_box">
                  <label class="f_left" for="password">Повторите пароль</label>
                  <input class="modal_inp d_in-block f_right" type="password" id="password">
                </div>
                <button class="modal_btn">Сменить пароль</button>
        	</form>
        </div>
	</div>
</section>


<!--==============================footer=================================-->
    <?php include("main_blocks/footer.php") ?>
</body>
</html>