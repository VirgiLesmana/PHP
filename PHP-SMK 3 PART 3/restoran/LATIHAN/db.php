<?php 

    class DB 
    {
        //PROPERTI
        public $host = "127.0.0.1";
        private $user="root";
        private $password="";
        private $database="dbrestorant";

        public function __construct()
        {
            echo "construct";
        }

        //METHOD
        public function selectData()
        {
            echo 'select data';
        }

        public function getDatabase()
        {
            echo $this->database;
        }

        public function tampil()
        {
            $this->selectData();
        }

        public static function insertData()
        {
            echo "static function";
        }
    }
    DB::insertData();
echo "<br>";
    $db = new DB;
echo '<br>';
    $db->selectData();
echo "<br>";
    echo $db->host;
echo "<br>";
    echo $db->getDatabase();
echo'<br>';
    echo $db->tampil();
  

?>