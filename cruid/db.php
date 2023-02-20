<?php
    // namespace db;
    class db{
        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "youtube";

        private $mysqli = "";
        private $con = false;
        private $result = array();

        public function __construct(){
            if(!$this->con){
                $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
                
                $this->con = true;

                if($this->mysqli->connect_error){
                    array_push($this->result,$this->mysqli->connect_error);
                    return false;
                }else{

                }

            }else{
                return true;
            }
            // $con = 
        }

        public function insert($table, $params=array()){
            if($this->tableExists($table)){
                // print_r($params);

                $t_colums = implode(', ',array_keys($params));
                $t_value = implode("', '",$params);


                $sql = "INSERT INTO $table ($t_colums) VALUES ('$t_value')";
                
                if($this->mysqli->query($sql)){
                    array_push($this->result,$this->mysqli->insert_id." Data Inserted.");
                    return true;
                }else{
                    array_push($this->result,$this->mysqli->error." Try again.");
                    return false;
                }

            }else{
                // echo array_push($this->result,$table." Does not exists in this Db.");
                return false;
            }
        }

        public function delete($table,$where = null){
            if($this->tableExists($table)){
                $sql = "DELETE FROM $table ";
                if($where!=null){
                    $sql .= " WHERE $where";
                }

                if($this->mysqli->query($sql)){
                    array_push($this->result,$this->mysqli->affected_rows."Data Deleted");
                    return true;
                }else{
                    array_push($this->result,$this->mysqli->error."Try again");
                    return false;
                }

            }else{
                return false;
            }
        }

        public function update($table,$params=array(),$where = null){
            if($this->tableExists($table)){
                // print_r($params);

                $args = array();
                foreach ($params as $key => $value) {
                    $args[] = "$key = '$value'";
                }
                
                // print_r($args);

                $t_value = implode(', ',$args);

                $sql = "UPDATE $table SET $t_value";

                if($where!=null){
                    $sql .= " WHERE $where ";
                }
                // echo $sql;
                if($this->mysqli->query($sql)){
                    array_push($this->result,$this->mysqli->affected_rows." Data Updated.");
                    return true;
                }else{
                    array_push($this->result,$this->mysqli->error." Try again.");
                    return false;
                }

            }else{
                // echo array_push($this->result,$table." Does not exists in this Db.");
                return false;
            }
        }

        public function select($table,$data="*",$join=null,$where=null,$order=null,$limit=null){
            if($this->tableExists($table)){
                $sql = "SELECT $data FROM $table ";
                if($join!=null){
                    $sql .= " JOIN $join";
                }
                if($where != null){
                    $sql .= " WHERE $where";
                }
                if($order != null){
                    $sql .= " ORDER BY $order";
                }
                if($limit != null){
                    $sql .= " LIMIT 0,$limit";
                }

                if($query = $this->mysqli->query($sql)){
                    $this->result = $query->fetch_all(MYSQLI_ASSOC);
                    return true;
                }else{
                    array_push($this->result,$this->mysqli->error."Data not found");
                    return false;
                }

            }else{
                return false;
            }
        }
        public function sql($sql){
            $query = $this->mysqli->query($sql);
            if($query){
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error."Data not found");
                return false;
            }
        }


        public function pagination($table,$data="*",$join=null,$where=null,$order=null,$limit=null){
            if($this->tableExists($table)){
                $sql = "SELECT $data FROM $table ";
                if($join!=null){
                    $sql .= " JOIN $join";
                }
                if($where != null){
                    $sql .= " WHERE $where";
                }
                if($order != null){
                    $sql .= " ORDER BY $order";
                }
                if($limit != null){
                    if(isset($_REQUEST['page'])){
                        $page = $_REQUEST['page'];
                    }else{
                        $page = 1;
                    }
                    $start = ($page - 1) * $limit;
                    $sql .= " LIMIT $start,$limit";
                }

                if($query = $this->mysqli->query($sql)){
                    $this->result = $query->fetch_all(MYSQLI_ASSOC);
                    return true;
                }else{
                    array_push($this->result,$this->mysqli->error."Data not found");
                    return false;
                }

            }else{
                return false;
            } 
        }

        public function page($table,$join=null,$where=null,$limit=null){
            if($this->tableExists($table)){
                if($limit != null){
                    $sql = " SELECT COUNT(*) FROM $table";

                    if($join!=null){
                        $sql .= " JOIN $join";
                    }
                    if($where != null){
                        $sql .= " WHERE $where";
                    }
                    $query = $this->mysqli->query($sql);
                    $total_record = $query->fetch_array();

                    // print_r($total_record);

                    $total_record = $total_record[0];

                    $total_page = ceil($total_record/$limit);

                    $url = basename($_SERVER['PHP_SELF']);

                    if(isset($_REQUEST['page'])){
                        $page = $_REQUEST['page'];
                    }else{
                        $page = 1;
                    }

                    $output = "<ul class='pagination'>";

                    if($page>1){
                        $output .= "<li><a href='$url?page=".($page-1)."'>Previous</a></li>";
                    }
                        if($total_record > $limit){
                            for($i = 1; $i<=$total_page; $i++){
                                if($i == $page){
                                    $cls = "class = 'active'";
                                }else{
                                    $cls = "";
                                }
                                $output .= "<li><a $cls href='$url?page=$i'>$i</a></li>";
                            }
                        }

                    if($total_page>$page){
                        $output .= "<li><a href='$url?page=".($page+1)."'>Next</a></li>";
                    }
                        
                    $output .= "</ul>";

                    echo $output;

                }else{
                    return false;
                }


                // if(){
                //     $this->result = $query->fetch_all(MYSQLI_ASSOC);
                //     return true;
                // }else{
                //     array_push($this->result,$this->mysqli->error."Data not found");
                //     return false;
                // }

            }else{
                return false;
            } 
        }
        private function tableExists($table){
            $sql = "SHOW TABLES FROM $this->db_name LIKE '$table' ";
            $t_indb = $this->mysqli->query($sql);
            if($t_indb){
                if($t_indb->num_rows == 1){
                    return true;
                }else{
                    array_push($this->result,$table." Does not exists in this Db.");
                    return false;
                }
            }else{
                array_push($this->result,$table." Does not exists in this Db.");  
            }
        }

        public function ShowResultMsg(){
            $val = $this->result;
            $this->result = array();
            return $val;
        }

        public function __destruct(){
            if($this->con){
                if($this->mysqli->close()){
                    $this->con = false;
                    return true;
                }
            }else{
                return false;
            }
        }


    }
    
?>