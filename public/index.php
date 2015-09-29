<?php
    include_once '../system/data/config.php';
?>

<!DOCTYPE HTML>

<html>
    <META charset="utf-8" />

    <title>Выборы президента Республики Беларусь - 2015</title>

    <link href="css_styles/person.css" type="text/css" rel="stylesheet" />
    <link href="css_styles/header.css" type="text/css" rel="stylesheet" />

    <script src="http://google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">
        google.load('jquery', '1');
        google.load('jqueryui', '1');
    </script>
    <script src="jscript/action.js" type="text/javascript"></script>
<head>

</head>

<body>

    <header>
        <div class="slogan"></div>
        <menu></menu>
    </header>

    <div id="info">
        <?php
            /**
             * @var $exp : Объект класса кандидатов
             * @var $persons : Массив со списком всех кандидатов
             */
            $exp = new Expectant();
            $persons = $exp->getPersons();

            /**
             * Обрабатываются и выводятся все кандидаты, используя метод класса viewPerson
             */
            foreach($persons as $person) {
                $exp->viewPerson($person);
            }
        ?>
    </div>
</body>

</html>
