<?php
    class user{
        // private database object
        private $db;

        // constructor to initialize private variable to the database connection
        function __construct($conn)
        {
            $this->db = $conn;
        }

        // function willing to accept entry from the contact page for proccessing.
        public function insertuser($username, $password){
            // function willing to accept entry(registration of users) from the signup page for proccessing.
            try {
                //calling the getuserbyusername function first before proceeding
                $result = $this->getuserbyusername($username);
                if ($result['num'] > 0) {
                    return false;
                } else {
                    $new_password = md5($password.$username);
                    // function willing to accept entry from the contact page for proccessing.
                    $sql = "INSERT INTO `users` (username, password) VALUE (:username, :password)";
                    // function willing to accept entry from the contact page for proccessing.
                    $stmt = $this->db->prepare($sql);
                    // function willing to accept entry from the contact page for proccessing.
                    $stmt->bindparam(':username', $username);
                    $stmt->bindparam(':password', $new_password);
                    $stmt->execute();
                    return true;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getuser($username, $password){
            try {
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':password', $password);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
        public function getuserbyusername($username){
            try {
            $sql = "SELECT count(*) as num FROM `users` WHERE username = :username";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }


?>