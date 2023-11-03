<?php
    final class Database{
        protected $db;

        public function __construct(){
            $env = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/../.env');

            try{
                $this->db = new PDO("mysql:host=".$env["DB_HOST"].";dbname=".$env["DB_NAME"], $env["DB_USER"], $env["DB_PASS"]);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                echo "ERROR: ".$e->getMessage();
                die();
            }
        }

        public function getAllUsers(): array {
            $query = 'SELECT * FROM user';
            $statement = $this->db->prepare($query);
            $statement->execute();

            $users = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $users;
        }

    }
?>