<?php
    /**
     * Класс для подключения к БД
     */
    class DB_connect {
        /**
         * @var object : Переменная для объекта PDO
         */
        protected $db;

        /**
         * Конструктор класса
         * Проверяет существование объекта PDO,
         * если его нет, то пытается его создать,
         * иначе выводится сообщение об ошибке
         */
        protected function __construct($dbo=NULL) {
            $connection_string = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
            try {
                $this->db = new PDO($connection_string, DB_USER, DB_PASS);
            } catch (Exception $e) {
                die ($e->getMessage());
            }
        }
    }
?>