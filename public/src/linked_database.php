<?php
    class Database{
        protected $db;

        public function __construct(){
            $server = "208.91.198.197:3306";
            $user = "cmpe272";
            $pass = "Hello@123321#";
            $dbname = "mp_marketplacedb";

            try{
                $this->db = new PDO("mysql:host=".$server.";dbname=".$dbname, $user, $pass);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                echo "ERROR: ".$e->getMessage();
                die();
            }
        }

        public function getAllTables(): array {
            $temp = $this->db->query("SHOW TABLES")->fetchAll(\PDO::FETCH_ASSOC);
            $ret = [];
            foreach($temp as $x){
                $ret[$x] = $this->db->query("SHOW COLUMNS FROM ".$x)->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $ret;
        }

        public function getAllUsers(): array {
            $query = 'SELECT * FROM user';
            $statement = $this->db->prepare($query);
            $statement->execute();

            $users = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $users;
        }

        //Search by any / all of options, no filter = get all
        public function searchUsers($first_name = null, $last_name = null, $email = null, $phone = null){
            if (!$first_name && !$last_name && !$email && !$phone) return $this->getAllUsers();

            $query = 'SELECT * FROM user WHERE ';
            $searches = [];
            $args = [];
            if (isset($first_name)) {
                $searches[] = 'INSTR(first_name, ?) > 0';
                $args[] = $first_name;
            }
            if (isset($last_name)) {
                $searches[] = 'INSTR(last_name, ?) > 0';
                $args[] = $last_name;
            }
            if (isset($email)) {
                $searches[] = 'INSTR(email, ?) > 0';
                $args[] = $email;
            }
            if (isset($phone)) {
                $searches[] = '(INSTR(home_phone, ?) > 0 OR INSTR(cell_phone, ?) > 0)';
                $args[] = $phone;
                $args[] = $phone;
            }
            $query.= implode(" AND ", $searches);

            $statement = $this->db->prepare($query);
            $statement->execute($args);
            $users = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $users;
        }

        public function addUser($first_name, $last_name, $email = null, $address = null, $home_phone = null, $cell_phone = null){
            $query = 'INSERT INTO user (first_name, last_name, email, home, home_phone, cell_phone) VALUES (:fn, :ln, :em, :ad, :hp, :cp)';
            $statement = $this->db->prepare($query);
            $statement->bindParam('fn', $first_name);
            $statement->bindParam('ln', $last_name);
            $statement->bindParam('em', $email);
            $statement->bindParam('ad', $address);
            $statement->bindParam('hp', $home_phone);
            $statement->bindParam('cp', $cell_phone);

            $statement->execute();
        }

        

    }

    $db = new Database;
?>