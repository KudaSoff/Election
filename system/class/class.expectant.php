<?php
    /**
     * Класс отвечает за кандидата
     */
    class Expectant extends DB_connect{
        /**
         * Список переменных хранящих данные пользователя
         * @var array $all_persons : Массив содержащий всех кондидатов
         */
        protected $all_persons;

        /**
         * Конструктор вызывает конструктор родителя для подключения к БД
         * Затем сохраняет все данные о кандидатах в массив $all_persons[номаер_строки][массив_столбцов]
         */
        public function __construct() {
            parent::__construct();
            $query = $this->db->prepare('SELECT * FROM `persons`');
            $query->execute();
            $this->all_persons = $query->fetchAll(PDO::FETCH_ASSOC);
        }

        /**
         * @return array $all_persons : передает пользователю всех кандидатов
         */
        public function getPersons() {
            return $this->all_persons;
        }

        /**
         * Обрабатывает и выводит внешний вид кандидата
         *
         * @param $person : Массив с данными кандидата
         */
        public function viewPerson($person) {
            echo '<section class="person">';
                echo '<header class="person_full_name">' .
                            $person['first_name'] . ' ' . $person['second_name'] . ' ' . $person['last_name'] .
                     '</header>';
                echo '<div class="person_portrait">';
                    echo '<img src="' . $person['portrait'] . '" height="200px"' . ' />';
                echo '</div>';
                echo '<ul class="person_data">';
                    echo '<li><div class="text">Дата рождения</div>' . $person['birthday'] . '</li>';
                    echo '<li><div class="text">Гражданство</div>' . $person['nation'] . '</li>';
                    echo '<li><div class="text">Партийность</div>' . $person['instance'] . '</li>';
                    echo '<li><div class="text">Деятельность</div>' . $person['work'] . '</li>';
                echo '</ul>';
                echo '<div class="click">Биография</div>';
                echo '<div class="biography">' . $person['biography'] . '</div>';
            echo '</section>';
        }
    }
?>