<?php
    class Database{
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

        //Expects at least one key, accepted: "first_name", "last_name", "email", "phone"
        public function searchUsers($first_name = null, $last_name = null, $email = null, $phone = null){
            $query = 'SELECT * FROM user WHERE ';
            $searches = [];
            $args = [];
            if (isset($first_name)) {
                $searches[] = 'first_name = ?';
                $args[] = $first_name;
            }
            if (isset($last_name)) {
                $searches[] = 'INSTR(last_name, ?) > 0';
                $args[] = $last_name;
            }
            if (isset($email)) {
                $searches[] = 'email = ?';
                $args[] = $email;
            }
            if (isset($phone)) {
                $searches[] = '(home_phone = ? OR cell_phone = ?)';
                $args[] = $phone;
                $args[] = $phone;
            }
            $query.= implode(" AND ", $searches);

            $statement = $this->db->prepare($query);
            $statement->execute($args);
            $users = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $users;
        }

    }

    $db = new Database;
?>