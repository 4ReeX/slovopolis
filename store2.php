<?php

header('Last-Modified: ' . strftime('%F %T'));
    header('ETag: ' . mt_rand(10000, 99999));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Словополис</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/animations.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, user-scalable=no">

    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <!--    <link rel="manifest" href="fav/site.webmanifest">-->
    <link rel="mask-icon" href="fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
     <!-- place this in a head section -->
     <link href="/apple_splash_2048.png" sizes="2048x2732" rel="apple-touch-startup-image" />
     <link href="/apple_splash_1668.png" sizes="1668x2224" rel="apple-touch-startup-image" />
     <link href="/apple_splash_1536.png" sizes="1536x2048" rel="apple-touch-startup-image" />
     <link href="/apple_splash_1125.png" sizes="1125x2436" rel="apple-touch-startup-image" />
     <link href="/apple_splash_1242.png" sizes="1242x2208" rel="apple-touch-startup-image" />
     <link href="/apple_splash_750.png" sizes="750x1334" rel="apple-touch-startup-image" />
     <link href="/apple_splash_640.png" sizes="640x1136" rel="apple-touch-startup-image" />
</head>
<body class="bg">
<div class="layout">
    <div class="header">
        <a class="coin" href="store.html">
            <div class="amount">
                <div class="icon-block">
                    <img src="img/wallet/star.svg" alt="">
                </div>5
            </div>
        </a>
        <div class="lvl">
            3
        </div>
        <a class="cri" href="store.html">
            <div class="amount">
                125<div class="icon-block">
                <img src="img/cri.png" alt="">
            </div>
            </div>
        </a>
    </div>
    <div class="center">
        <div class="table-deck">
            <a href="index.html" class="link back">
                <span class="icon-back">
                <span class="text">Назад в игру</span>
                </span>
            </a>
            <div class="store_title">ыыы</div>
            <div class="points">
                <input type="range" min="5" max="100" step="5" value="5" id="point2diamond" list="list">
                <datalist id="list">
                    <option>5</option>
                    <option>15</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </datalist><div class="value point">0</div>
                <div class="txt"><img src="img/right.png" alt=""></div>
                <div class="value diamond">0</div>
                <div class="btn-block">
                    <div class="label">
                        за очки
                    </div>
                    <div class="btn buy disable" onclick="buyLink();">Купить</div>
                </div>


            </div>

            <div class="rub">
                <input type="range" value="0" step="20" min="0" max="500"  list="datalist"  id="rub2diamond">
                <datalist id="datalist">
                    <option>0</option>
                    <option>5</option>
                    <option>20</option>
                    <option>100</option>
                    <option>250</option>
                    <option>500</option>
                </datalist>
                <div class="value ruble">0</div>
                <div class="txt"><img src="img/right.png" alt=""></div>
                <div class="value almaz">0</div>
                <div class="btn-block">
                    <div class="label">
                        за рубли
                    </div>
                    <div class="btn buy" onclick="buyLink();">Купить</div>
                </div>
            </div>

        </div>
        <script>
            var p2d = document.querySelector('#point2diamond');
            var r2d = document.querySelector('#rub2diamond');
            let rangeValue = function() {
                let point = document.querySelector('.point');
                let diamond = document.querySelector('.diamond');
                let pointValue = p2d.value;
                let curse =  p2d.value * 30;
                point.classList.toggle("warning");
                point.innerHTML = curse;
                diamond.innerHTML = pointValue;

            }

            let rangeValue2 = function() {
                let almaz = document.querySelector('.almaz');
                let ruble = document.querySelector('.ruble');
                let pointValue = r2d.value;
                let curseRub =  r2d.value;
                ruble.innerHTML = curseRub;
                almaz.innerHTML = pointValue;
            }

            p2d.addEventListener("input", rangeValue);
            r2d.addEventListener("input", rangeValue2);
        </script>


    </div>
    <div class="footer" id="footer">
        <a class="sm-btn active" title="Главная" id="ButtonHome" href="index.php">
            <div class="icon-block">
                <img src="img/home.svg" alt="" class="icon home">
            </div>
            <span class="text">
                ГЛАВНАЯ
            </span>
        </a>
        <a class="sm-btn" title="Профиль" id="buttonProfile" href="profile.php">
            <div class="icon-block">
                <img src="img/user.svg" alt="" class="icon">
            </div>
        </a>
        <a class="sm-btn" id="buttonStore" href="store2.php">
            <div class="icon-block">
                <img src="img/store.png" alt="" class="icon">
            </div>
        </a>
        <a class="sm-btn" id="buttonCoupon" href="coupons.php">
            <div class="icon-block">
                <img src="img/coupin.svg" alt="" class="icon">
            </div>
            <span class="coupons-amount">74</span>
        </a>
        <a class="sm-btn" title="Правила игры" href="game-words.php">
            <div class="icon-block">
                <img src="img/help.svg" alt="" class="icon">
            </div>
        </a>
    </div>
    <div class="sub-footer" id="title">
        <h1 class="title"><a href="legal.html">Пользовательское соглашение</a> | <a href="#">Политика обработки данных</a></h1>
    </div>
    <div class="shadow hide" onclick="closePopupShadow();"></div>
    <div class="popup hide">
        <a class="close" onclick="closeBtn();">
            <div class="icon-block">
                <img src="img/close.svg" alt="" class="icon">
            </div>
        </a>
        <div class="popup-content"></div>
    </div>
</div>
<div class="zaglushka">
    <div class="col"><img src="img/sova-rotate.png" alt=""></div>
    <div class="col">Пожалуйста переверните телефон в <br>
        <span>вертикальное положение.</span> <br> Так ведь намного удобнее ;)
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script>
   const appHeight = () => {
        const doc = document.documentElement;
        const layout = document.querySelector('.layout');
        doc.style.setProperty('height', `${window.innerHeight}px`);
        layout.style.setProperty('height', `${window.innerHeight}px`);
    }
    window.addEventListener('resize', appHeight)
    appHeight()

</script>
</body>
</html>
