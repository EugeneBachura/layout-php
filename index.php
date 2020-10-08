<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рекламно-информационное агенство</title>
    <link href="./css/style.css" rel="stylesheet" />
    <link href="./css/header.css" rel="stylesheet" />
    <link href="./css/index.css" rel="stylesheet" />
    <link href="./css/news.css" rel="stylesheet" />
    <link href="./css/footer.css" rel="stylesheet" />
    <link href="./css/mobileMenu.css" rel="stylesheet" />
    <link href="./css/mobile.css" rel="stylesheet" />
</head>

<body>
<?php include './php/db.php'; ?>
<?php include './php/newsAPI.php'; ?>
<?php $posts = get9News($db); ?>

    <header>
        <!-- for mobile -->
        <div id="mobileMenu">
            <div class="firstPart">
                <a class="mobileMenuIcon" id="menuClose" onclick="mobileMenuClose()"><img src="./pablic/close.svg"
                        alt="назад" /></a>
                <nav>
                    <ul>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Портфолио</a></li>
                        <li><a href="#">Отзывы</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mobileContacts">
                <div>Ростов-на-Дону,<br />Ленина, 21</div>
                <div><b><a href="tel:+1234567890">1(234)567890</a></b></div>
            </div>
        </div>
        <!-- for mobile -->
        <a class="mobileMenuIcon" id="menuOpen" onclick="mobileMenuOpen()"><img src="./pablic/menu.svg"
                alt="меню" /></a>
        <div class="icon">
            <a href="#"><img src="./pablic/icon.svg" /></a>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Вакансии</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
        <div class="contacts">
            <div><b><a href="tel:+1234567890">1(234)567890</a></b></div>
            <div>Ростов-на-Дону</div>
        </div>
    </header>
    <div class="welcomeBlock">
        <div>
            <div class="welcomContext">
                <h1>Рекламно-информационное агенство</h1>
                <p>Будем рады, если Вы обратитеь в наше Агениство. Мы готовы предложить Вам передовые решения для
                    продвижения Вашего бизнеса.</p>
                <form>
                    <div class="formItem"><input id="phone" type="tel"
                            pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                            placeholder="+7(___)___-__-__"></input></div>
                    <div class="formItem"><button type="submit">Обратный звонок</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="news">
        <h2>Новости</h2>
        <div class="newsSlider">
            <input class="rNews" type="radio" name="rNews" id="r1" checked>
            <input class="rNews" type="radio" name="rNews" id="r2">
            <input class="rNews" type="radio" name="rNews" id="r3">
            <div class="bgNews first">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="bgNews last">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="newsBlock sliderContaner">

                <?php if (!is_null($posts)) foreach ($posts as $post) {
                    echo '<div class="newBlock"><div class="date">';
                    echo $post['date'];
                    echo '</div><div class="newTitle">';
                    echo $post['title'];
                    echo '</div><button>Подробнее</button></div>';
                } ?>

            </div>
            <nav class="newsNav">
                <label for="r1" onclick="newsNavChecked(1)"></label>
                <label for="r2" onclick="newsNavChecked(2)"></label>
                <label for="r3" onclick="newsNavChecked(3)"></label>
            </nav>
        </div>
    </div>
    <footer>
        <div class="footerContainer">
            <div class="icon">
                <a href="#"><img src="./pablic/icon.svg" /></a>
            </div>
            <nav class="footerMenu">
                <ul>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Вакансии</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
<script src="./js/mobileMenu.js"></script>
<script src="./js/phoneImput.js"></script>
<script src="./js/activeNewsNav.js"></script>
<script>window.onload = function() {newsNavChecked(1)};</script>
</html>