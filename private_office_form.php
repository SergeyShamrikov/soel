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
<body class="private_office_form">
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
            <li class="bg_my_questionnaire  menu_list_item active">
              <a class="menu_list_link" href="private_office_form.php">Моя анкета</a>
            </li>
            <li class="bg_settings menu_list_item">
              <a class="menu_list_link" href="private_office_password.php">Настройки</a>
            </li>
          </ul>
        </div>
        <div class="tabel_indent">
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Ваши персональные данные: <button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Фамилия<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp d_in-block w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Имя<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp d_in-block w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Отчество</label>
	                  <input class="modal_inp d_in-block w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Предприятие<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp d_in-block w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Должность<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp d_in-block w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Отдел<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp d_in-block w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="">Телефон<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp tel_country" type="text" value="+7" onBlur="if(this.value=='') this.value='+7'" onFocus="if(this.value =='+7' ) this.value=''">
	                  (<input class="modal_inp tel_cod" type="text" value="Код" onBlur="if(this.value=='') this.value='Код'" onFocus="if(this.value =='Код' ) this.value=''">)
	                  <input class="modal_inp tel_number" type="text" value="Номер" onBlur="if(this.value=='') this.value='Номер'" onFocus="if(this.value =='Номер' ) this.value=''">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="">Факс<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp tel_country" type="text" value="+7" onBlur="if(this.value=='') this.value='+7'" onFocus="if(this.value =='+7' ) this.value=''">
	                  (<input class="modal_inp tel_cod" type="text" value="Код" onBlur="if(this.value=='') this.value='Код'" onFocus="if(this.value =='Код' ) this.value=''">)
	                  <input class="modal_inp tel_number" type="text" value="Номер" onBlur="if(this.value=='') this.value='Номер'" onFocus="if(this.value =='Номер' ) this.value=''">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Веб-сайт</label>
	                  <input class="modal_inp d_in-block w363" type="text" id="email">
	                </div>
        		</form>

        		<dl class="personal_data">
        			<dt>Фамилия</dt>
        			<dd>Иванов</dd>
        			<dt>Имя</dt>
        			<dd>Иван</dd>
        			<dt>Отчество</dt>
        			<dd>Иванович</dd>
        			<dt>Предприятие</dt>
        			<dd>ЗАО “Очень секретное предприятие”</dd>
        			<dt>Должность</dt>
        			<dd>Менеджер по секретным вопросам</dd>
        			<dt>Отдел</dt>
        			<dd>Отдел секретных разработок</dd>
        			<dt>Телефон</dt>
        			<dd>+7 (495) 123-45-67</dd>
        			<dt>Факс</dt>
        			<dd>+7 (495) 765-43-21</dd>
        			<dt>Веб-сайт</dt>
        			<dd><a href="#">www.top-secret-prom.ru</a></dd>
        		</dl>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Адрес предприятия:<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<div class="clearfix imput_box">
	                  <label class="d_in-block" for="">Страна<sup class="necessarily_marker">*</sup></label>
	                  <select name="страна" id="" class="w363 modal_inp">
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                    <option value="">Украина</option>
	                  </select>
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Почтовый индекс<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Город, район, область<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp w363" type="text" id="email">
	                </div>
	                <div class="clearfix imput_box">
	                  <label class="d_in-block" for="email">Адрес<sup class="necessarily_marker">*</sup></label>
	                  <input class="modal_inp w363" type="text" id="email">
	                </div>
        		</form>

        		<dl class="personal_data">
        			<dt>Страна</dt>
        			<dd>Россия</dd>
        			<dt>Почтовый индекс</dt>
        			<dd>123456</dd>
        			<dt>Город, район, область</dt>
        			<dd>Москва</dd>
        			<dt>Адрес</dt>
        			<dd>ул. Сверхсекретная, д. 1</dd>
        		</dl>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Я хочу получать:<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<div class="wrapper">
		                <div class="f_left version_box-1">
		                  <input type="checkbox" class="d_in-block" id="checkbox-1">
		                  <label class="d_in-block" for="checkbox-1">Электронную версию журнала</label>
		                </div>
		                <div class="f_right version_box-2">
		                  <input type="checkbox" class="d_in-block" id="checkbox-2" checked>
		                  <label class="d_in-block checkbox-2" for="checkbox-2">Печатную версию журнала</label>
		                </div>
		            </div>
		            <div class="printed_magazine">
		                <h4 class="subscription_title d_in-block">Почтовый адрес для доставки журнала</h4>
		                <fieldset class="delivery_address">
		                  <div class="clearfix imput_box">
		                    <label class="d_in-block" for="">Страна<sup class="necessarily_marker">*</sup></label>
		                    <select name="country" id="" class="w363 modal_inp">
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                      <option value="">Украина</option>
		                    </select>
		                  </div>
		                  <div class="clearfix imput_box">
		                    <label class="d_in-block" for="email">Почтовый индекс<sup class="necessarily_marker">*</sup></label>
		                    <input class="modal_inp w363" type="text" id="email">
		                  </div>
		                  <div class="clearfix imput_box">
		                    <label class="d_in-block" for="email">Город, район, область<sup class="necessarily_marker">*</sup></label>
		                    <input class="modal_inp w363" type="text" id="email">
		                  </div>
		                  <div class="clearfix imput_box">
		                    <label class="d_in-block" for="email">Адрес<sup class="necessarily_marker">*</sup></label>
		                    <input class="modal_inp w363" type="text" id="email">
		                  </div>
		                </fieldset>
		              </div>
        		</form>
        		<div class="personal_data">
        			<p class="questionnaire_text">Электронную версию журнала</p>
        		</div>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Тип Вашей должности:<button class="change_btn f_right"></button></h6>
				<form class="questionnaire_form"  action="">
					<input type="checkbox" class="d_in-block" id="position_type_checkbox-1">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-1">Инженерно-технический работник</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-2">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-2">Научный сотрудник, преподаватель, аспирант</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-3">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-3">Программист</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-4">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-4">Руководитель предприятия</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-5">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-5">Руководитель технических подразделений</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-6">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-6">Руководитель отделов автоматизации</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-7">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-7">Сотрудник снабженческо-закупочных подразделений</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-8">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-8">Технический руководитель высшего звена</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-9">
	                <label class="d_in-block checkbox-3 other_checed" for="position_type_checkbox-9"><input type="text" class="modal_inp d_in-block" value="Другое" onblur="if(this.value=='') this.value='Другое'" onfocus="if(this.value =='Другое' ) this.value=''"></label>
				</form>
        		<div class="personal_data">
        			<p class="questionnaire_text">Инженерно-технический работник</p>
        			<p class="questionnaire_text">Руководитель технических подразделений</p>
        		</div>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Область деятельности Вашей организации:<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<input type="checkbox" class="d_in-block" id="position_type_checkbox-10">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-10">Авиационная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-11">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-11">Автоматизация зданий, умный дом</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-12">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-12">Автомобильная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-13">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-13">Атомная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-14">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-14">Горнодобывающая промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-15">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-15">Деревообрабатывающая/целлюлозно-бумажная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-16">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-16">Добыча/транспортировка нефти/газа</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-17">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-17">Железнодорожная отрасль</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-18">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-18">Легкая и пищевая промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-19">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-19">Медицина</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-20">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-20">Металлургия</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-21">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-21">ОПК</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-22">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-22">Приборостроение</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-23">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-23">Производство бытовой электроники</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-24">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-24">Сотрудник снабженческо-закупочных подразделений</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-25">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-25">Технический руководитель высшего звена</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-26">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-26">Инженерно-технический работник</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-27">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-27">Научный сотрудник, преподаватель, аспирант</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-28">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-28">Программист</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-29">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-29">Руководитель предприятия</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-30">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-30">Руководитель технических подразделений</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-31">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-31">Руководитель отделов автоматизации</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-32">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-32">Сотрудник снабженческо-закупочных подразделений</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-33">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-33">Технический руководитель высшего звена</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-34">
	                <label class="d_in-block checkbox-3 other_checed" for="position_type_checkbox-34"><input type="text" class="modal_inp d_in-block" value="Другое" onblur="if(this.value=='') this.value='Другое'" onfocus="if(this.value =='Другое' ) this.value=''"></label>
        		</form>
        		<div class="personal_data">
        			<p class="questionnaire_text">Авиационная промышленность</p>
        			<p class="questionnaire_text">Добыча/транспортировка нефти/газа</p>
        			<p class="questionnaire_text">Железнодорожная отрасль</p>
        			<p class="questionnaire_text">Производство машин и оборудования (для промышленности)</p>
        		</div>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Область деятельности Вашей организации:<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<input type="checkbox" class="d_in-block" id="position_type_checkbox-35">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-35">Инженерно-технический работник</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-36">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-36">Научный сотрудник, преподаватель, аспирант</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-37">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-37">Программист</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-38">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-38">Руководитель предприятия</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-39">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-39">Руководитель технических подразделений</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-40">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-40">Руководитель отделов автоматизации</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-41">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-41">Сотрудник снабженческо-закупочных подразделений</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-42">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-42">Технический руководитель высшего звена</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-43">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-43">Технический руководитель высшего звена</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-44">
	                <label class="d_in-block checkbox-3 other_checed" for="position_type_checkbox-44"><input type="text" class="modal_inp d_in-block" value="Другое" onblur="if(this.value=='') this.value='Другое'" onfocus="if(this.value =='Другое' ) this.value=''"></label>
        		</form>
        		<div class="personal_data">
        			<p class="questionnaire_text">Научные исследования</p>
        			<p class="questionnaire_text">Проектирование и разработка</p>
        		</div>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Вашему предприятию может быть интересно следующее оборудование и ПО:<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<input type="checkbox" class="d_in-block" id="position_type_checkbox-45">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-45">Авиационная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-46">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-46">Автоматизация зданий, умный дом</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-47">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-47">Автомобильная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-48">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-48">Атомная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-49">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-49">Горнодобывающая промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-50">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-50">Деревообрабатывающая/целлюлозно-бумажная промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-51">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-51">Добыча/транспортировка нефти/газа</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-52">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-52">Железнодорожная отрасль</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-53">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-53">Легкая и пищевая промышленность</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-54">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-54">Медицина</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-55">
	                <label class="d_in-block checkbox-3" for="position_type_checkbox-55">Металлургия</label>
	                <input type="checkbox" class="d_in-block" id="position_type_checkbox-56">
	                <label class="d_in-block checkbox-3 other_checed" for="position_type_checkbox-56"><input type="text" class="modal_inp d_in-block" value="Другое" onblur="if(this.value=='') this.value='Другое'" onfocus="if(this.value =='Другое' ) this.value=''"></label>
        		</form>
        		<div class="personal_data">
        			<p class="questionnaire_text">Датчики и преобразователи физических величин</p>
        		</div>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Что Вам нравится в журнале «Современная электроника»<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<textarea name="" id="" class="modal_inp"></textarea>	
        		</form>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Что Вам не нравится в журнале «Современная электроника»<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<textarea name="" id="" class="modal_inp"></textarea>	
        		</form>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Предложения и пожелания<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<textarea name="" id="" class="modal_inp"></textarea>	
        		</form>
        	</div>
        	<div class="questionnaire_it">
        		<h6 class="subscription_title wrapper">Укажите, пожалуйста, хотели бы Вы получать на указанный адрес электронной<br> 
        		почты новостную рассылку журнала «Современная электроника»<button class="change_btn f_right"></button></h6>
        		<form class="questionnaire_form"  action="">
        			<input type="radio" id="radio1" name="radio_name" value="yas">
                <label for="radio1">Да</label>
                <input type="radio" id="radio2" name="radio_name" value="no">
                <label for="radio2">Нет</label>
        		</form>
        		<div class="personal_data">
        			<p class="questionnaire_text">Да</p>
        		</div>
        	</div>
        </div> 
	</div>
</section>

<!--==============================footer=================================-->
    <?php include("main_blocks/footer.php") ?>
    <script type="text/javascript" src="js/jquery.formstyler.min.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
        	$('.change_btn').click(function(){
        		$(this).parents('.questionnaire_it').toggleClass('active'),
        		$(this).parents('.questionnaire_it').find('.questionnaire_form').slideToggle();
        		$(this).parents('.questionnaire_it').find('.personal_data').slideToggle();
        	})
       });
      $(function() {
        $('.popup_open').live('click',function(){
          var modal = $(this).data("popap");
          $(modal).arcticmodal();
        });
        $('.checkbox-2').live('click',function(){
          $('.printed_magazine').slideToggle();
        });
        $( "#tabs" ).tabs();
        $('select').styler();
      });
   </script>
</body>
</html>