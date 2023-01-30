<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h3>Задание 1</h3>
    <p>сделать на нативном php перебор массива (https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json) и определить к какой стране относится номера телефонов</p>
    <p>+375(29)123-45-67</p>
    <p>+7 (495) 123 45 67</p>
    <p>7 777 123-45-67</p>
    <p>При проверке номеров телефонов, во входной переменной номер должен быть как указан в тестовом задании с пробелами/тире/скобка/без плюса. Необходимо на странице сделать инпут в форме в который будет введен номер телефона и будет определен.</p>
    <div class="container">
        <form action="phoneCountry.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Укажите номер телефона</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Укажите номер телефона</span>
            <input type="text" class="form-control" placeholder="номер телефона" name="phone" id="phone">
            <button class="btn btn-success" type="submit">Проверить</button>
        </div>
        </form>
    <?php
    if ($_SESSION['country']) {
        echo '<div class="alert alert-success mt-3" role="alert">'.$_SESSION['country'].'</div>';
    }
    unset($_SESSION['country']);
    ?>
    </div>
    <div>
        <h3>Задание 2</h3>
        <p>Необходимо сделать на этой же странице всплывающий попап о том что на странице используются кукисы.</p>
        <p>1. попап должен появляться 1 раз в день</p>
        <p>2. в попапе должна быть кнопка закрыть попап. Если просто закрыли при перезагрузке страницы должен появится попап</p>
        <p>3. в попапе должна быть кнопка принять информацию о том что есть кукисы и после нажатия этой кнопки уведомление пропадает и при перезагрузке страницы попап не появится</p>
        <p>4. внешний вид на собственной вкус, но на десктопе должен появляться справа (подключите бустрап библиотеку последней версии)</p>
        <?php
        if ($_COOKIE['cookiesubmit'] == ''):
        ?>
            <form action="cookiePopup.php" method="post" id="formCookie">
                <div class="wrapper" tabindex="-1" role="dialog" id="modalSheet">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content rounded-4 shadow">
                            <div class="modal-header border-bottom-0">
                                <h1 class="modal-title fs-5">Внимание!</h1>
                            </div>
                            <div class="modal-body py-0">
                                <p>На этом сайте есть кукисы</p>
                            </div>
                            <div class="buttons modal-footer flex-column border-top-0">
                                <button type="submit" class="btn btn-lg btn-primary w-100 mx-0 mb-2">Принять</button>
                                <button type="button" id="hider" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <script>
                document.getElementById('hider').onclick = function() {
                    document.getElementById('formCookie').hidden = true;
                }
            </script>
        <?php endif; ?>
    </div>
    <div>
        <h3>Задание 3</h3>
        <p>Сверстать любой один блок из макета https://www.figma.com/file/2K5CFWkF4wB7xIaegYiwzk/enemer.pl-(Copy)?node-id=1091%3A90 из предложенных</p>
        <p>1. баннер http://joxi.ru/Vrwv483ig8LvxA</p>
        <p>2. услуги http://joxi.ru/L21EPzvsDg1Oq2</p>
        <p>3. этот блок http://joxi.ru/p27BQ9OUZWqx6m</p>
        <p>4. преимущества http://joxi.ru/4Akn4ovUVXaKg2</p>
        <p>5. о компании http://joxi.ru/YmEBxa8ULJ1D42</p>

        <p>При верстке опять таки используйте бустрап для облегчения задачи. И учитывайте адаптивность. В фигме есть макет десктопа и мобилки. Мобильное разрешение до 991px</p>

    </div>
    <section class="section">
        <div class="section-wrapper">
            <div class="section-body">
                <div class="container">
                    <p class="section-title">Wysyłamy paczki pod klucz już od 4,5 zł.</p>
                    <div class="section-btn">
                        <button class="btn">Uzyskaj konsultację teraz</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="title">
            <p class="">Korzyści ze współpracy z nami</p>
        </div>
        <div class="body">
        <div class="list">
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Insertowanieicon.svg" alt="Bezpieczeństwo magazynowanego towaru">
                    </div>
                    <div class="text">
                        <p>Przechowywanie towarów ponadgabarytowych</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Frame%201891.svg" alt="Bezpieczeństwo magazynowanego towaru">
                    </div>
                    <div class="text">
                        <p>Elastyczne warunki współpracy</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Frame%201892.svg" alt="Bezpieczeństwo magazynowanego towaru">
                    </div>
                    <div class="text">
                        <p>Integracja i zarządzanie zamówieniami</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Frame%201890.svg" alt="Bezpieczeństwo magazynowanego towaru">                    </div>
                    <div class="text">
                        <p>Wysyłka zamówień w dniu kompletacji</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Frame%201887.svg" alt="Bezpieczeństwo magazynowanego towaru">
                    </div>
                    <div class="text">
                        <p>Niskie koszty dostawy</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Frame%201888.svg" alt="Bezpieczeństwo magazynowanego towaru">
                    </div>
                    <div class="text">
                        <p>Gwarancja bezpieczeństwa towarów</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Frame%201894.svg" alt="Bezpieczeństwo magazynowanego towaru">
                    </div>
                    <div class="text">
                        <p>Całodobowy wideo monitoring</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="body">
                    <div class="img">
                        <img src="https://enemer.pl/assets/images/Frame%201893.svg" alt="Bezpieczeństwo magazynowanego towaru">
                    </div>
                    <div class="text">
                        <p>Wysyłka zamówień do różnych krajów</p>
                    </div>
                    <div class="btnlink">
                        <a href="#">Opis</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>