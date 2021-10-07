<?
date_default_timezone_set("Europe/Moscow");
$time = date("G");
echo $time;
if (($time < "20") && ($time > "08")){
    $style = "/style/styles.css";}
    else{
        $style = "/style/night.css";

}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Kirill's page</title>
    <link rel="stylesheet" href="<? echo $style;?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<header>
    <div class="headline">
        <a href="table/table.html">
            <div class="tablebutton">
                Таблица
            </div>
        </a>
    </div>
</header>
<main>
    <div class="aboutme">
        <div class="photo"></div>
        <div class="infocontain">
            <div class="name">Омельяненко Кирилл</div>
            <div class="info">

                <div class="iam" align="center">
                    Привет! Меня зовут Кирилл! На данный момент я изучаю веб-разработку
                    и очень хочу попасть в Факт. Сейчас я работаю в <a href="https://quickresto.ru/">Quick Resto</a>, а ранее я
                    учился
                    в <a href="https://www.csu.ru/"> ЧелГУ</a> по направлению Правовое обеспечение национальной безопасности. К
                    сожалению, это
                    совсем не мой вид деятельности, и я хочу связать жизнь с информационными технологиями.
                </div>
                <div class="feedback" align="center">
                    На первых занятиях, да и вообще занятиях мне нравится последовательность информации и ее
                    порционность. Даже
                    сейчас, я бы хотел сделать эту страницу лучше, но меня уносит слишком далеко, и мне начинает не нравиться
                    мой проект.
                    Мне очень нравятся задания, но я так боюсь таблиц. Отрицательных моментов нет, по крайней мере, я пытался
                    выделить их минут 5 и не смог.</div>
            </div>
        </div>

    </div>

    <!--Flex-->
    <div class="container">
        <div class="block1">
            <div class="pic1"></div>
            <div class="text1">Overwatch</div>
        </div>
        <div class="block2">
            <div class="pic2"></div>
            <div class="text2">The Witcher 3</div>
        </div>
        <div class="block3">
            <div class="pic3"></div>
            <div class="text3">Metro Exodus</div>
        </div>
        <div class="block4">
            <div class="pic4"></div>
            <div class="text4">Dark Souls 3</div>
        </div>
    </div>
    <!--Grid-->
    <div class="setka">
        <div class="block5">
            <div class="pic5"></div>
            <div class="text5">The Walking Dead</div>
        </div>
        <div class="block6">
            <div class="pic6"></div>
            <div class="text6">Bioshock Infinite</div>
        </div>
        <div class="block7">
            <div class="pic7"></div>
            <div class="text7">Hotline Miami</div>
        </div>
        <div class="block8">
            <div class="pic8"></div>
            <div class="text8">Devil May Cry</div>
        </div>
    </div>
</main>


<footer>

</footer>
</body>
</html>