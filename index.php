<?php
require_once 'send.php';
?>

<!DOCTYPE html>
<html lang="RU">
<head>

<meta charset="UTF-8">
<title>стоматология</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">

<link href="main.css" rel="stylesheet" type="text/css">

</head>


<body>


    <div class="e1">
        <div class="ee1">

            <nav class="navbar navbar-expand-lg navbar-dark bg">
                <div class="container-fluid">
                    <div class="d-flex nowrap" >
                <a class="navbar-brand col-lg-5" href="#"><img src="img/Лого.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button></div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#">Главная  </a>
                    <a class="nav-link" href="#yslygu">Услуги  </a>
                    <a class="nav-link" href="#oklinike">О клинике</a>
                    <a class="nav-link" href="#contact">Контакты   </a>
                    </div>
                </div>
                </div>
            </nav>

    <div class="row tee">
                <div class="col-lg-6 imgteeMB">
                    <img class="teeth" src="img/teeth.png" alt="">
                </div>
        <div class="inf col-lg-6">
          <div id="headerwrap">
            <div class="container">
              <div>
                <div class="col-lg-offset-2">
                  <h1>Ваше<br class="br"> здоровье</h1>
                  <h1>важно<br class="br"> для нас</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div>
              <br>
              <div>
                <i class="fa fa-heart"></i>
                <h4></h4>
                <p>Демократичные цены <br> Квалифицированные сотрудники <br> Большой спектр оказываемых услуг</p>
              </div>
               <div class="butzap">
                <i class="fa fa-laptop"></i>
                    <a href="#popup" class="butwr">Записаться на консультацию</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 imgteePC">
            <img class="teeth" src="img/teeth.png" alt="">
        </div>
    </div>
        </div>
        </div>


        <div class="e2 flex-column">
        <a name="yslygu"></a>
            <h2 class="zag">Предоставляемые услуги</h2>
            <div class=" d-flex flex-row flex-wrap yslygu">
                <div class="flex-column ots">
                    <p class="row service"><span class="boxsq" style="background-color: #A3E1F4;"></span> Лечение зубов </p>
                    <p class="row service"><span class="boxsq" style="background-color: #FAB3B3;"></span> Удаление зубов </p>
                    <p class="row service"><span class="boxsq" style="background-color: #B3FADC;"></span> Имплантация </p>
                    <p class="row service"><span class="boxsq" style="background-color: #CDB6F1;"></span> Брекеты  </p>
                </div>
                <div class="flex-column">
                    <p class="row service"><span class="boxsq" style="background-color: #F1D6B6;"></span> Лечение дёсен </p>
                    <p class="row service"><span class="boxsq" style="background-color: #FAF7B3;"></span> Установка коронок </p>
                    <p class="row service"><span class="boxsq" style="background-color: #B3FAB6;"></span> Протезирование </p>
                    <p class="row service"><span class="boxsq" style="background-color: #F1A4F8;"></span> Отбеливание  </p>
                </div>
            </div>
        </div>

        <div class="e3 flex-column">
        <a name="oklinike"></a>
            <h2>О клинике</h2>
            <div class="oklin">текст текст текст текст текст текст текст текст текст текст текст текст 
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст </div>
        </div>
        
        <div class="e4 flex-column">
            <h2 class="zag">О врачах</h2>
            <div class="d-flex flex-row odoc">
                <p class="row doc"><span class="docimg"><img src="img/kisspng-dentistry-computer-icons-toothbrush-dentista-5b178a0d39d921.053454551528269325237.png" alt=""> </span>
                    <div class="flex-column text"><h3>Текст1 Текст Текст</h3> текст текст текст текст текст текст 
                    текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                    текст текст текст текст текст текст текст текст текст текст текст текст </div></p>
            </div>
            <div class="d-flex flex-row odoc">
                <p class="row doc"><span class="docimg"><img src="img/kisspng-dentistry-computer-icons-toothbrush-dentista-5b178a0d39d921.053454551528269325237.png" alt=""> </span>
                    <div class="flex-column text"><h3>Текст2 Текст Текст</h3> текст текст текст текст текст текст 
                    текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                    текст текст текст текст текст текст текст текст текст текст текст текст </div></p>
            </div>
            <div class="d-flex flex-row odoc">
                <p class="row doc"><span class="docimg"><img src="img/kisspng-dentistry-computer-icons-toothbrush-dentista-5b178a0d39d921.053454551528269325237.png" alt=""> </span>
                    <div class="flex-column text"><h3>Текст3 Текст Текст</h3> текст текст текст текст текст текст 
                    текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                    текст текст текст текст текст текст текст текст текст текст текст текст </div></p>
            </div>        
        </div>

        <div class="e5 flex-column">
            <a name="contact"></a>
            <div class="footer">
                <p>+7-(8442)-00-00-00</p>
                <div class="d-flex flex-row align-items-center">
                    +7-(900)-000-00-00 &ensp;
                    <img class="imgfooter" src="img/tg.png" alt="">
                    <img class="imgfooter" src="img/wa.png" alt="">
                </div>
                <p style="margin-top: 20px;">г. Волгоград ул. Прекрасная д. 000</p> 
            </div>
        </div>

    <form enctype="send.php" action="" method="post">
        <div id="popup" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <a href="##" class="popup_close"><img src="img/x.png" alt=""></a>
                    <div class="popup_form">
                        <p class="lbl">Имя</p>
                        <input type="text" name="name" placeholder="Укажите имя" required>

                        <p class="lbl">Телефон</p>
                        <input type="text" name="phone" placeholder="Укажите телефон" required>

                        <p class="lbl">Тема звонка</p>
                        <select name="tema" required>
                            <option value="0">Выберите тему звонка</option>
                            <option value="1">Консультация</option>
                            <option value="2">Запись на прием</option>
                        </select>

                        <p class="lbl">Удобный день для осмотра</p>
                        <input type="date" name="date">
                        <p class="primech">*если звонок о записи на прием</p>

                        <p class="lbl">Стоматолог</p>
                        <select name="stomatolog">
                            <option value="0">Выберите стоматолога</option>
                            <option value="1">Текст1</option>
                            <option value="2">Текст2</option>
                            <option value="3">Текст3</option>
                        </select>
                        <p class="primech">*если звонок о записи на прием</p>

                        <p class="lbl">Время звонка</p>
                        <p class="d-flex flex-row">
                        <input type="date" name="dateCall" placeholder="Укажите дату" style="width: 175px; margin-right: 50px;">
                        <select name="timeCall" style="width: 175px;">
                            <option value="0">Выберите время</option>
                            <option value="1">9:00</option>
                            <option value="2">12:00</option>
                            <option value="3">15:00</option>
                            <option value="3">18:00</option>
                        </select></p>
                    </div>
                    
                    <div class="dbform">
                        <button type="submit" name="send" class="bform"> Отправить </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
        </body>
        </html> 