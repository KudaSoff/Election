<?php
    /**
     * Константы для подключения к БД
     * @perem string db_host : хост подключения
     * @perem string db_name : имя БД
     * @perem string db_user : пользователь
     * @perem string db_pass : пароль
     */
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'election_db');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    /**
     * Создание PDO объекта
     */
    $connection_string = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
    $dbo = new PDO($connection_string, DB_USER, DB_PASS);

    /**
     * Функция автозагрузки классов
     */
    function __autoload($class) {
        $filename = '../system/class/class.' . $class . '.php';
        if(file_exists($filename)) {
            include_once $filename;
        }
    }
?>