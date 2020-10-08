<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рекламно-информационное агенство</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet" />
    <link href="./css/header.css" rel="stylesheet" />
    <link href="./css/index.css" rel="stylesheet" />
    <link href="./css/news.css" rel="stylesheet" />
    <link href="./css/footer.css" rel="stylesheet" />
    <link href="./css/mobileMenu.css" rel="stylesheet" />
    <link href="./css/mobile.css" rel="stylesheet" />
</head>

<body>
    <!-- connect db and get news  -->
    <?php include './php/db.php'; ?>
    <?php include './php/newsAPI.php'; ?>
    <?php $posts = get9News($db); ?>
    <!-- connect db and get news  -->
    <header>
        <!-- mobileMenu -->
        <div id="mobileMenu">
            <div class="firstPart">
                <a class="mobileMenuIcon" id="menuClose" onclick="mobileMenuClose()"><img src="./pablic/close.svg" alt="назад" /></a>
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
        <!-- mobileMenu -->
        <div class="container header">
            <div class="d-flex align-items-center">
                <a class="mobileMenuIcon p-2 mr-5" id="menuOpen" onclick="mobileMenuOpen()"><img src="./pablic/menu.svg" alt="меню" /></a>
                <div class="icon p-2">
                    <a href="#"><img src="./pablic/icon.svg" /></a>
                </div>
                <nav class="menu p-2">
                    <ul class="row align-items-center">
                        <li class="col"><a href="#">Услуги</a></li>
                        <li class="col"><a href="#">Портфолио</a></li>
                        <li class="col"><a href="#">Отзывы</a></li>
                        <li class="col"><a href="#">Вакансии</a></li>
                        <li class="col"><a href="#">Контакты</a></li>
                    </ul>
                </nav>
                <div class="contacts ml-auto p-2">
                    <div><b><a href="tel:+1234567890">1(234)567890</a></b></div>
                    <div>Ростов-на-Дону</div>
                </div>
            </div>
        </div>
    </header>
    <div class="welcomeBlock d-flex align-items-center">
        <div class="container align-items-center">
            <div class="welcomContext col-lg-6">
                <h2 class="row font-weight-bold">Рекламно-информационное агенство</h2>
                <p class="row">Будем рады, если Вы обратитеь в наше Агениство. Мы готовы предложить Вам передовые решения для
                    продвижения Вашего бизнеса.</p>
                <form class="row">
                    <div class="formItem col-lg-4 p-0 pr-1 mr-n1"><input class="p-4 pr-4 pl-4 mt-2 w-100" id="phone" type="tel" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="+7(___)___-__-__"></input></div>
                    <div class="formItem col-lg-4 p-0 pr-1 ml-3"><button class="btn btn-danger mt-2 w-100" type="submit"><span>Обратный звонок</span></button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="news container pt-5">
        <h3 class="font-weight-bold pb-4 text-center">Новости</h3>
        <div class="newsSlider">
            <input class="rNews" type="radio" name="rNews" id="r1" checked>
            <input class="rNews" type="radio" name="rNews" id="r2">
            <input class="rNews" type="radio" name="rNews" id="r3">
            <div class="bgNews first d-flex justify-content-around ml-n3 mt-n3">
                <div class="m-4 p-4"></div>
                <div class="m-4 p-4"></div>
                <div class="m-4 p-4"></div>
            </div>
            <div class="bgNews last d-flex justify-content-around ml-3 mt-3">
                <div class="m-4 p-4"></div>
                <div class="m-4 p-4"></div>
                <div class="m-4 p-4"></div>
            </div>
            <div class="newsBlock sliderContaner d-flex justify-content-around">

                <?php if (!is_null($posts)) foreach ($posts as $post) {
                    echo '<div class="newBlock m-4 p-4"><div class="date">';
                    echo $post['date'];
                    echo '</div><div class="newTitle">';
                    echo $post['title'];
                    echo '</div><button class="btn btn-outline-danger"><span>Подробнее</span></button></div>';
                } ?>

            </div>
            <nav class="newsNav text-center">
                <label for="r1" onclick="newsNavChecked(1)"></label>
                <label for="r2" onclick="newsNavChecked(2)"></label>
                <label for="r3" onclick="newsNavChecked(3)"></label>
            </nav>
        </div>
    </div>
    <footer>
        <div class="footerContainer container d-flex align-items-center">
            <div class="icon">
                <a href="#"><img src="./pablic/icon.svg" /></a>
            </div>
            <nav class="footerMenu w-100">
                <ul class="row d-flex justify-content-center">
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
<script>
    window.onload = function() {
        newsNavChecked(1)
    };
</script>

</html>