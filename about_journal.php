<!DOCTYPE html>
<html lang="en">
<head>
    <title>Подшивка</title>
    <meta name = "format-detection" content = "telephone=no" />
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
</head>
<body class="about_journal_page">
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
              <a href="#" class="breadcrumbs_lk">Журнал</a>
            </li>
            <li class="breadcrumbs_it">
              <span>О журнале</span>
            </li>
          </ul>
        </div>
    </div>
    <div class="main">
      <h2 class="title5">О журнале</h2>
      <div class="wrapper">
        <?php include("main_blocks/sidebar.php") ?>
        <section role="main" class="f_right">
          <div class="box1">
            <h3 class="title3">Уважаемые читатели!</h3>
            <h4 class="title6">Представляем журнал об электронике, каким он должен быть.</h4>
            <p>Он доступен каждому специалисту, поскольку для его приобретения 
            достаточно лишь желания и минимум времени, требующегося на 
            заполнение анкеты подписчика. Здесь нет обилия рекламы. 
            В рамках проекта выдерживается оптимальный объём рекламной 
            информации.</p>
            <p>В журнале нет сложных научных статей, ведь обо всём сложном можно 
            рассказать просто. Однако на страницах журнала всегда можно найти 
            много практической информации об электронных компонентах, 
            схемотехнических решениях, узлах и приборах, с которыми вы имеете 
            дело каждый день. Именно здесь регулярно появляются самые интересные 
            и актуальные новости со всего мира о научных и технологических 
            прорывах в области электроники.</p>
            <h4 class="title6">
            Отличительные особенности журнала «Современная электроника» (в сравнении с другими однопрофильными изданиями):
            </h4>
            <ul class="list5">
              <li class="list5_it">Большой для специализированного издания тираж до 15 000 экземпляров</li>
              <li class="list5_it">Журнал «Современная электроника» для специалистов распространяется бесплатно. 
              Это является концепцией журнала, а не временной маркетинговой акцией</li>
              <li class="list5_it">Издательство обладает уникальной адресно-именной базой подписчиков, 
              позволяющей делать рассылки рекламных вложений по территориальным и профессиональным критериям.</li>
            </ul>
          </div>
          <div class="box1">
            <h3 class="title3">Схема распространения журнала</h3>
            <p>Бесплатная подписка для специалистов и платная для всех желающих, 
            в розницу, через региональных распространителей, на семинарах и 
            выставках, прямая рассылка ведущим компаниям стран СНГ – позволит 
            вашей рекламе попасть в руки людей, принимающих решения о приобретении 
            компонентов, приборов и оборудования, а также об организации 
            производства изделий электроники.</p>
            <p>После выхода бумажной версии журнала на этом сайте можно 
            ознакомиться с его аннотированным содержанием и скачать файлы, 
            необходимые для повторения описанных в журнале устройств, а через 
            некоторое время – прочитать полную версию статьи.</p>
          </div>
          <div class="box1">
            <h3 class="title3">Подписка</h3>
            <p>На сайте можно оформить бесплатную подписку на журнал и заказать статью, 
            которая ещё не выложена  в свободный доступ. Познакомившись с журналом, 
            Вы по достоинству оцените его полезность и необходимость, 
            а сайт журнала станет регулярно посещаемым.</p>
          </div>
          <div class="photo_gallery">
            <h3 class="title3 wrapper">Фотогалерея 
              <a href="#" class="f_right button1">перейти в фотогалерею</a>
            </h3>
            <div class="scroll-pane horizontal-only">
              <ul class="gallery">
                <li class="gallery_it">
                  <img src="images/gallery_img1.png" alt="">
                </li>
                <li class="gallery_it">
                  <img src="images/gallery_img2.png" alt="">
                </li>
                <li class="gallery_it">
                  <img src="images/gallery_img3.png" alt="">
                </li>
                <li class="gallery_it">
                  <img src="images/gallery_img2.png" alt="">
                </li>
                <li class="gallery_it">
                  <img src="images/gallery_img1.png" alt="">
                </li>
                <li class="gallery_it">
                  <img src="images/gallery_img2.png" alt="">
                </li>
                <li class="gallery_it">
                  <img src="images/gallery_img3.png" alt="">
                </li>
                <li class="gallery_it">
                  <img src="images/gallery_img1.png" alt="">
                </li>
              </ul>
            </div>
          </div>
          <p class="text2">
            Более подробную информацию о нашем журнале можно получить из нашего 
            информационного буклета на <a href="#" class="text2_lk">русском</a> и <a href="#" class="text2_lk">английском</a> языках.
          </p>
          <span class="signature">
            С уважением,<br>
            Алексей Смирнов,<br>
            главный редактор.<br>
          </span>
        </section> 
      </div>
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
        });
    </script>
</body>
</html>