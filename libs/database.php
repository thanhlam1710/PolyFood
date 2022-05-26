<?php 
    class database extends PDO{
        public function __construct()
        {
            $conn = "mysql:dbname=polyfood; host=localhost; charset=utf8";
            $user = "root";
            $pass = "";
            return parent::__construct($conn,$user,$pass);
        }

        // 2 function dưới đây dùng để tìm kiếm theo keyword
        public function pdo_get_connection()
        {
            $dburl = "mysql:dbname=polyfood; host=localhost; charset=utf8";
            $username = 'root';
            $password = '';

            $conn = new PDO($dburl, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        // Function for selecting data tables
        public function pdo_query($sql){
            $sql_args = array_slice(func_get_args(), 1);
            try{
                $conn = $this->pdo_get_connection();
                $stmt = $conn->prepare($sql);
                $stmt->execute($sql_args);
                $rows = $stmt->fetchAll();
                return $rows;
            }
            catch(PDOException $e){
                throw $e;
            }
            finally{
                unset($conn);
            }
        }
        // end 2 function tìm kiếm theo keyword
        public function select_district($sql,$data = array(),$fetch = PDO::FETCH_ASSOC){
            $stmt = $this->prepare($sql);
            foreach($data as $key => $value){
                $stmt->bindParam($key,$value);
            }
            $stmt->execute();
            return $stmt->fetchAll($fetch);
        }
        
        /**
            * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
            ** $fetch = PDO::FETCH_ASSOC: được truyền vào dưới dạng tham số và trả về mảng dạng key = collumn của tables
            *** cơ chế prepare: chống SQL injection (chống chèn dữ liệu đầu vào bất hợp pháp),không truyền trực tiếp tham số vào,
            *** tham số truyền vào đều dưới dạng ẩn danh hoặc placeholder. có dạng " :param hoặc ? "
            *** Hàm bindParam: Gắn giá trị thực cho tham số truyền vào
         **/
        // Function for selecting data tables
        public function select_db($sql,$data = array(),$fetch = PDO::FETCH_ASSOC){
            $stmt = $this->prepare($sql);
            foreach($data as $key => $value){
                $stmt->bindParam($key,$value);
            }
            $stmt->execute();
            return $stmt->fetchAll($fetch);
        }
        public function select_db_one($sql, $data,$fetch = PDO::FETCH_ASSOC) {
            $stmt = $this->prepare($sql);
            foreach($data as $key => $value){
                $stmt->bindParam($key,$value);
            }
            $stmt->execute();
            return $stmt->fetch($fetch);
        }
        // Function for inserting data tables
        public function insert_db($table, $data){
            $keys = implode(",",array_keys($data));
            $values =":" .implode(", :",array_keys($data));
            $sql = "INSERT INTO $table($keys) VALUES($values)";
            $stmt = $this-> prepare($sql);
            foreach($data as $key => $value){
                $stmt->bindValue($key,$value);
            }
            return $stmt ->execute();
        } 
         // Function for updating data tables
        public function update_db($table, $data, $condition) {
            $update = null;
            foreach($data as $key => $value){
                $update .= "$key=:$key,";
            }
            $update = rtrim($update,","); 
            $sql = "UPDATE $table SET $update WHERE $condition";
            $stmt = $this->prepare($sql);
            foreach($data as $key => $value){
               $stmt->bindValue($key,$value);
            }
            return $stmt->execute(); 
        }
        // Function for deleting data tables
        public function delete_db($table, $condition, $limit = 1) {
             $sql = "DELETE FROM $table WHERE $condition LIMIT $limit";
             return $this->exec($sql);
         }
        //  function for comparing
        public function affect_rows($sql,$username,$pass) {
            $stmt = $this->prepare($sql);
            $stmt->execute(array($username,$pass));
            return $stmt->rowCount(); // return true = 1
        }
        // function for selecting user
        public function select_user($sql,$username,$pass) {
            $stmt = $this->prepare($sql);
            $stmt->execute(array($username,$pass));
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>