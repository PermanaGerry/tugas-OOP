<?php
    // get file from database config
    include_once 'config/Connetion.php';

    /**
    * 
    */
    class CrudRegister
    {
        
        public $conn;
        public $close;
        public $data = array();

        public function __construct()
        {
            $connection = new Connetion();
            $this->conn = $connection->connect();
        }

        public function getAll($table)
        {
            try {
                $sql = "select * from $table";
                $result = $this->conn->query($sql);
                
                while($d = $result->fetch_assoc()){
                    $data[] = $d;
                }

                $this->close;
             
                return $data;
            
            } catch (mysqli_sql_exception $e) {
                return $e->getMessage();
            }
        
        }

        public function get($table, $field = "", $cell = array())
        {
            try {
                $value = implode(",", $cell);

                $sql = "SELECT * FROM $table WHERE $field IN ($value)";   
                $result = $this->conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $this->data = $row;
                }

                $this->close;

                return $this->data;

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function add($table,$value)
        {
            try {

                $firstName = $value['firstName'];
                $lastName = $value['lastName'];
                $gender = $value['gender'];
                $address = $value['address'];
                $dob = $value['dob'];

                $sql = "INSERT INTO $table (firstName, lastName, gender, address, dob) VALUES ('$firstName', '$lastName', '$gender', '$address', '$dob')";

                $result = $this->conn->query($sql);

                $this->close;

                return $result;

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        public function update($table,$data)
        {
            try {

                $sql = "UPDATE $table SET firstName = '".$data['firstName']."', lastName = '".$data['lastName']."', gender = '".$data['gender']."', address = '".$data['address']."', dob = '".$data['DOB']."' WHERE id_user = ".$data['id_user'];

                $result = $this->conn->query($sql);

                $this->close;

                return $result;

            } catch (Exception $e) {
                return $e->getMessage();
            }
                
        }

        public function delete($table,$id_user)
        {
            try {
                $sql = "DELETE FROM $table WHERE id_user = $id_user";

                $result= $this->conn->query($sql);

                $this->close;

                return $result;

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
    }
 ?>