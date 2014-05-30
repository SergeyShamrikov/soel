<!DOCTYPE html>
<html lang="en">
<head>
    <title>Подписка</title>
    <meta name = "format-detection" content = "telephone=no" />
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
</head>
<body>
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
      				<span>Подписка на журнал Современная электроника 2014</span>
      			</li>
      		</ul>
      	</div>
  </div>
  <section class="subscription">
    <div class="main wrapper">
      <h2 class="title5">Подписка на журнал &laquo;Современная электроника&raquo;2014</h2>
      <div id="tabs">
        <ul class="subscription_step_list">
          <li class="d_in-block subscription_step_item"><a href="#subscription_step1" class="d_in-block subscription_step_lk">Шаг 1</a></li>
          <li class="d_in-block subscription_step_item"><a href="#subscription_step2" class="d_in-block subscription_step_lk">Шаг 2</a></li>
          <li class="d_in-block subscription_step_item"><a href="#subscription_step3" class="d_in-block subscription_step_lk">Шаг 3</a></li>
          <li class="d_in-block subscription_step_item"><a href="#subscription_step4" class="d_in-block subscription_step_lk">Шаг 4</a></li>
        </ul>

        <div class="wrapper" id="subscription_step1">
          <div class="f_left subscription_img">
            <img src="images/subscription_img.png" class="d_block" alt="picture">
          </div>
          <div class="f_right subscription_box">
            <p class="subscription_box_title">Обращаем ваше внимание, что бесплатная подписка оформляется только для квалифицированных специалистов, аккуратно и полностью заполнивших анкету.</p>
            <p class="subscription_box_text">Если вы по каким-либо причинам не попали в подписную базу или у вас есть жалобы на доставку, можно оформить платную подписку, — это позволит получать журнал гарантированно.</p>
            <p class="subscription_box_text">Желающие получить отдельные ранее вышедшие номера могут заказать журнал.</p>
            <form id="subscription" class="subscription_form">
              <h4 class="subscription_title d_in-block">Укажите, пожалуйста, Ваши персональные данные</h4>
              <fieldset>
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
              </fieldset>
                <h4 class="subscription_title d_in-block">Адрес предприятия</h4>
              <fieldset>
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
                
              </fieldset>
              <h4 class="subscription_title d_in-block">Я хочу получать*</h4>
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
              <hr class="form_bot_bord">
              <button class="modal_btn">Продолжить</button>
              <div class="required">
                <sup class="necessarily_marker">*</sup>
                <span>- поля, обязательные для заполнения</span>
              </div>
            </form>
          </div>
        </div>

        <div class="wrapper" id="subscription_step2">
          <div class="f_left subscription_img">
            <img src="images/subscription_img.png" class="d_block" alt="picture">
          </div>
          <div class="f_right subscription_box">
            <form action="" class="subscription_form">
              <fieldset class="p2">
                <h4 class="subscription_title d_in-block">Тип Вашей должности*</h4>
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
              </fieldset>
              <fieldset class="p3">
                <h4 class="subscription_title d_in-block">Область деятельности Вашей организации*</h4>
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
              </fieldset>
              <hr class="form_bot_bord">
              <button class="modal_btn">Продолжить</button>
              <div class="required">
                <sup class="necessarily_marker">*</sup>
                <span>- поля, обязательные для заполнения</span>
              </div>
            </form>
          </div>
        </div>

        <div class="wrapper" id="subscription_step3">
          <div class="f_left subscription_img">
            <img src="images/subscription_img.png" class="d_block" alt="picture">
          </div>

          <div class="f_right subscription_box">
            <form action="" class="subscription_form">
              <fieldset class="p3">
                <h4 class="subscription_title d_in-block">Вид деятельности Вашей организации:*</h4>
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
              </fieldset>
              <fieldset class="p3">
                <h4 class="subscription_title d_in-block">Вашему предприятию может быть интересно следующее оборудование и ПО:*</h4>
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
              </fieldset>
               <hr class="form_bot_bord">
              <button class="modal_btn">Продолжить</button>
              <div class="required">
                <sup class="necessarily_marker">*</sup>
                <span>- поля, обязательные для заполнения</span>
              </div>
            </form>
          </div>
        </div>
        
        <div class="wrapper" id="subscription_step4">
          <div class="f_left subscription_img">
            <img src="images/subscription_img.png" class="d_block" alt="picture">
          </div>
          <div class="f_right subscription_box">
            <form action="" class="subscription_form">
              <fieldset class="">
                <h4 class="subscription_title">Что Вам нравится в журнале «Современная электроника»</h4>
                <textarea name="" id="" class="modal_inp"></textarea>
              </fieldset>
              <fieldset class="">
                <h4 class="subscription_title">Что Вам не нравится в журнале «Современная электроника»</h4>
                <textarea name="" id="" class="modal_inp"></textarea>
              </fieldset>
              <fieldset class="">
                <h4 class="subscription_title">Предложения и пожелания</h4>
                <textarea name="" id="" class="modal_inp"></textarea>
              </fieldset>
              <fieldset class="p3">
                <h4 class="subscription_title">Укажите, пожалуйста, хотели бы Вы получать на указанный адрес электронной почты новостную рассылку журнала «Современная электроника»*</h4>
                <input type="radio" id="radio1" name="radio_name" value="yas">
                <label for="radio1">Да</label>
                <input type="radio" id="radio2" name="radio_name" value="no">
                <label for="radio2">Нет</label>
              </fieldset>
              <hr class="form_bot_bord">
              <input type="checkbox" class="d_in-block" id="position_type_checkbox-60">
              <label class="d_in-block checkbox-3 p5" for="position_type_checkbox-60"><span class="d_blo">Я согласен на обработку моих персональных данных в объеме содержащихся в анкете данных для оформления подписки*</span></label>
              <button class="modal_btn">Отправить</button>
              <div class="required">
                <sup class="necessarily_marker">*</sup>
                <span>- поля, обязательные для заполнения</span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
	



<!--==============================footer=================================-->
    <?php include("main_blocks/footer.php") ?>
   <script type="text/javascript" src="js/superfish.js"></script>
   <script type="text/javascript" src="js/jquery.flexslider.js"></script>
   <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
   <script type="text/javascript" src="js/jquery.arcticmodal-0.3.min.js"></script>
   <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
   <script type="text/javascript">
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide"
        });
       });
      $(function() {

        $('.list3_it').hover(function(){
          $(this).addClass('flip');
        },function(){
          $(this).removeClass('flip');
        });
        $('.popup_open').live('click',function(){
          var modal = $(this).data("popap");
          $(modal).arcticmodal();
        }); 
        $('.checkbox-2').live('click',function(){
          $('.printed_magazine').slideToggle();
        });
        $( "#tabs" ).tabs();
      });
   </script>
</body>
</html>