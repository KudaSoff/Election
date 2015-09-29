<?php
    /**
     * ����� ��� ����������� � ��
     */
    class DB_connect {
        /**
         * @var object : ���������� ��� ������� PDO
         */
        protected $db;

        /**
         * ����������� ������
         * ��������� ������������� ������� PDO,
         * ���� ��� ���, �� �������� ��� �������,
         * ����� ��������� ��������� �� ������
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