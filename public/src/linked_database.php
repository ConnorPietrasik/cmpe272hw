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

        public function addCompanyToDB($name, $domain): void {
            $query = 'INSERT INTO company (name, domain) VALUES (:na, :do)';
            $statement = $this->db->prepare($query);
            $statement->bindParam('na', $name);
            $statement->bindParam('do', $domain);

            $statement->execute();
        }

        public function getCompanyInfo($company_id): array {
            $data = [
                "id" => $company_id
            ];
            $query = 'SELECT * FROM company WHERE id = :id';
            $statement = $this->db->prepare($query);
            $statement->execute($data);

            return $statement->fetch(\PDO::FETCH_ASSOC);
        }

        public function changeCompanyDomain($name, $domain): void {
            $data = [
                "na" => $name,
                "do" => $domain
            ];

            $query = 'UPDATE company SET domain = :do WHERE name = :na';
            $statement = $this->db->prepare($query);
            $statement->execute($data);
        }

        public function addProduct($name, $description, $price, $img, $company_id): void {
            $data = [
                "na" => $name,
                "de" => $description,
                "pr" => $price,
                "im" => $img,
                "co" => $company_id
            ];

            $query = 'INSERT INTO products (name, description, price, img, hits, companyid) VALUES (:na, :de, :pr, :im, 0, :co)';
            $statement = $this->db->prepare($query);
            $statement->execute($data);
        }

        public function getAllProducts(): array {
            $query = 'SELECT * FROM products';
            $statement = $this->db->prepare($query);
            $statement->execute();

            $users = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $users;
        }

        public function getProductsByCompany($company_id){
            $domain = $this->getCompanyInfo($company_id)["domain"];

            $data = [
                "id" => $company_id
            ];
            $query = 'SELECT * FROM products WHERE companyid = :id';
            $statement = $this->db->prepare($query);
            $statement->execute($data);

            $products = $statement->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($products as $prod){
                $prod["domain"] = $domain;
            }
            return $products;
        }

        public function addUser($fname, $lname, $email, $address, $homephone, $cell, $username, $password): void {
            $data = [
                "fn" => $fname,
                "ln" => $lname,
                "em" => $email,
                "ad" => $address,
                "hp" => $homephone,
                "cp" => $cell,
                "un" => $username,
                "pw" => $password
            ];

            $query = 'INSERT INTO users (firstname, lastname, email, address, homephone, cellphone, username, password) 
                        VALUES (:fn, :ln, :em, :ad, :hp, :cp, :un, :pw)';
            $statement = $this->db->prepare($query);
            $statement->execute($data);
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

        public function addReview($userid, $productid, $rating, $review): void {
            $data = [
                "ui" => $userid,
                "pi" => $productid,
                "ra" => $rating,
                "re" => $review
            ];

            $query = 'INSERT INTO ratings (userid, productid, rating, review) VALUES (:ui, :pi, :ra, :re)';
            $statement = $this->db->prepare($query);
            $statement->execute($data);
        }

        public function getAllTables(): array {
            $temp = $this->db->query("SHOW TABLES")->fetchAll();
            $ret = [];
            foreach($temp as $x){
                $ret[$x[0]] = $this->db->query("SHOW COLUMNS FROM ".$x[0])->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $ret;
        }

        public function getAllInfo(): array {
            $temp = $this->db->query("SHOW TABLES")->fetchAll();
            $ret = [];
            foreach($temp as $x){
                $ret[$x[0]] = $this->db->query("SELECT * FROM ".$x[0])->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $ret;
        }
    }

    $db = new Database;
?>