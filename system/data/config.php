<?php
    /**
     * ��������� ��� ����������� � ��
     * @perem string db_host : ���� �����������
     * @perem string db_name : ��� ��
     * @perem string db_user : ������������
     * @perem string db_pass : ������
     */
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'election_db');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    /**
     * �������� PDO �������
     */
    $connection_string = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
    $dbo = new PDO($connection_string, DB_USER, DB_PASS);

    /**
     * ������� ������������ �������
     */
    function __autoload($class) {
        $filename = '../system/class/class.' . $class . '.php';
        if(file_exists($filename)) {
            include_once $filename;
        }
    }
?>