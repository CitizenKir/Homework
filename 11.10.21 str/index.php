<?
date_default_timezone_set("Europe/Moscow");
$time = date("G");
if (($time < "20") && ($time > "08")) {
    $style = "style/styles.css";
} else {
    $style = "style/night.css";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Kirill's page</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/flexstyle.css">
    <link rel="stylesheet" href="style/headerstyle.css"
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<?
include 'header/header.html'
?>
<?
//Мне пришлось сделать текст без переносов, иначе explode начинает считать пробелы массивами
$text = 'Привет! Меня зовут Кирилл! На данный момент я изучаю веб-разработку и очень хочу попасть в Факт. Сейчас я работаю в , а ранее я учился в ЧелГУ по направлению Правовое обеспечение национальной безопасности. К сожалению, это совсем не мой вид деятельности, и я хочу связать жизнь с информационными технологиями. На первых занятиях, да и вообще занятиях мне нравится последовательность информации и ее порционность. Даже сейчас, я бы хотел сделать эту страницу лучше, но меня уносит слишком далеко, и мне начинает не нравиться мой проект. Мне очень нравятся задания, но я так боюсь таблиц. Отрицательных моментов нет, по крайней мере, я пытался выделить их минут и не смог. Главная Таблица Массивы';
$glas = array('б', 'в', 'г', 'д', 'ж', 'з', 'й','к', 'л', 'м', 'н', 'п', 'р', 'с', 'т','ф', 'х', 'ц', 'ч', 'ш', 'щ',
    'Б', 'В', 'Г', 'Д', 'Ж', 'З', 'Й', 'К', 'Л', 'М', 'Н', 'П', 'Р', 'С', 'Т', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', '!', ' ', ',', '.');
$glasCount = str_replace($glas, '', $text);
echo 'Всего гласных букв на странице: '.mb_strlen($glasCount);

$main = explode(' ', $text);
$value = count($main);

echo '<br>'.'Всего слов на странице: '.$value;

date_default_timezone_set("Europe/Moscow");
$time = date("d.m.Y");
$value = (strtotime ($time)-strtotime("31.07.1998"))/(60*60*24);
echo '<br>'.'Прошло дней с моего дня рождения: '.substr($value, 0, 4);
?>
<main>
    <div class="aboutme">
        <div class="photo"></div>
        <div class="infocontain">
            <div class="name">Омельяненко Кирилл</div>
            <div class="info">

                <div class="iam" align="center"><?
                    $a = 'Привет! Меня зовут Кирилл! На данный момент я изучаю веб-разработку
                    и очень хочу попасть в Факт. Сейчас я работаю в <a href="https://quickresto.ru/">Quick Resto</a>, а ранее я
                    учился
                    в <a href="https://www.csu.ru/"> ЧелГУ</a> по направлению Правовое обеспечение национальной безопасности. К
                    сожалению, это
                    совсем не мой вид деятельности, и я хочу связать жизнь с информационными технологиями.';
                    $a = explode('! ', $a);
                    $a[0] = "<strong style='color: #135FD2'>$a[0]</strong>";
                    $a = implode('! ', $a);
                    echo "$a";
                    ?>
                </div>
                <div class="feedback" align="center"><?
                    $text = 'На первых занятиях, да и вообще занятиях мне нравится последовательность информации и ее порционность. Даже сейчас, я бы хотел сделать эту страницу лучше, но меня уносит слишком далеко, и мне начинает не нравиться 
                   мой проект.
                    Мне очень нравятся задания, но я так боюсь таблиц. Отрицательных моментов нет, по крайней мере, я пытался
                    выделить их минут 5 и не смог.';
                    $main = explode(' ', $text);
                    foreach ($main as $key => $value) {
                        if($key % 2 == 0) {
                            $value = "<strong style='color: #FF34B3'>$value</strong>";
                            echo $value . ' ';
                        } else {
                            $value = "<strong style='color: green'>$value</strong>";
                            echo $value . ' ';
                        }
                    }


                    ?>
                </div>


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