<?php
    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }

        public function insertrec($fname,$lname,$phone,$email,$gender){
            try {
                $sql = "INSERT INTO `attend`(firstname, lastname, phone, email, gender) VALUES (:fname,:lname,:phone,:email,:gender)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(":fname",$fname);
                $stmt->bindparam(":lname",$lname);
                $stmt->bindparam(":phone",$phone);
                $stmt->bindparam(":email",$email);
                $stmt->bindparam(":gender",$gender);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getall(){
            $sql = "SELECT * FROM `attend`";
            $result = $this->db->query($sql);
            // $result->execute();
            return $result;
        }

        public function getone($id){
            try {
                $sql = "SELECT * FROM `attend` WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":id",$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editrecord($id, $fname, $lname, $phone, $email, $gender){
            try {
                $sql = " UPDATE `attend` SET  `firstname`=:fname, `lastname`=:lname, `phone`=:phone, `email`=:email, `gender`=:gender WHERE id= :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':gender',$gender);
    
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleterecord($id){
            try {
                $sql = "DELETE FROM `attend` WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam('id',$id);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }