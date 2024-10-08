<?php    
    // Mysql PDO connection
    // mysql databse creattion
    // mysql tables creation

    // using PHP OOP

    class DBconnection {
        private $servername;
        private $dbname;
        private $username;
        private $password;
        private $con;
        private $error;
        
        public function __construct($servername, $username, $password, string $dbname = NULL) {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname ?? null;
        }
        
        public function connect() {
            try {   
                if($this->dbname)
                    $this->con = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
                else
                    $this->con = new PDO("mysql:host={$this->servername}", $this->username, $this->password);
                // set PDO error mode to exception
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this;
            }
            catch (PDOException $ex) {
                $this->error = $ex->getMessage();
                return false;
            }
        }
        
        public function getConnection() {
            return $this->con ? $this->con : false;
        }
        
        public function getError() {
            return $this->error ? $this->error : false;
        }
        
        public function sqlExec($sql) {
            try {
                $this->con->exec($sql);
                return true;
            } catch (PDOException $ex) {
                $this->error = $ex->getMessage();
                return false;
            }
        }
        
        public function sqlInsertMany (array $sql_arr) {
            try {
                $this->con->beginTransaction();
                foreach($sql_arr as $sql) {
                    $this->con->exec($sql);
                }
                $this->con->commit();
                return true;
            } catch (PDOException $ex) {
                $this->error = $ex->getMessage();
                return false;
            }
        }
        
        
        public function closeConnection() {
            $this->con = null;
            return true;
        }
        
    }