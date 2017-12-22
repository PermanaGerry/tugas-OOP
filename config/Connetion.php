<?php

    /**
    * connetion database
    */
    class Connetion
    {
        private $server = "localhost";
        private $username = "root";
        private $password = "mysql";
        private $dbName = "crud";

        public function connect()
        {
            try {
                $conn = new mysqli($this->server, $this->username, $this->password, $this->dbName);

                return $conn;

            } catch (Exception $e) {
                echo "Connetion Failled " . $e->getMessage();
            }
        }

        public function close() {
            return mysql_close();
        }
    }
 ?>