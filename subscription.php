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
      <ul class="subscription_step_list">
        <li class="d_in-block subscription_step_item"><a href="#" class="d_in-block subscription_step_lk">Шаг 1<a></li>
        <li class="d_in-block subscription_step_item"><a href="#" class="d_in-block subscription_step_lk">Шаг 2</a></li>
        <li class="d_in-block subscription_step_item"><a href="#" class="d_in-block subscription_step_lk">Шаг 3</a></li>
        <li class="d_in-block subscription_step_item"><a href="#" class="d_in-block subscription_step_lk">Шаг 4</a></li>
      </ul>
      <div class="wrapper">
        <div class="f_left subscription_img">
          <img src="images/subscription_img.png" class="d_block" alt="picture">
        </div>
        <div class="f_right subscription_box">
          <p class="subscription_box_title">Обращаем ваше внимание, что бесплатная подписка оформляется только для квалифицированных специалистов, аккуратно и полностью заполнивших анкету.</p>
          <p class="subscription_box_text">Если вы по каким-либо причинам не попали в подписную базу или у вас есть жалобы на доставку, можно оформить платную подписку, — это позволит получать журнал гарантированно.</p>
          <p class="subscription_box_text">Желающие получить отдельные ранее вышедшие номера могут заказать журнал.</p>
          <form id="subscription">
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
            <button class="modal_btn">Войти</button>
            <div class="required">
              <sup class="necessarily_marker">*</sup>
              <span>- поля, обязательные для заполнения</span>
            </div>
          </form>
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
      });
   </script>
</body>
</html>