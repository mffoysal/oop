<?php

    // require_once "db.php";

    spl_autoload_register(function ($class){
        require $class.".php";
    });

    class cruid{


    }
    
    $db = new db();

    $insert = ["name"=>"Najifa","phone"=>"01585855075","email"=>"mff585855075@gmail.com","course"=>"CSE"];
    // $db->insert("users",$insert);
    // echo "Data insert Id : ".print_r($db->ShowResultMsg());

    $update = ["name"=>"Najifa Ahmed", "phone"=>"01816444372"];
    $Where = "id='6'"; // AND/OR add on single qutation.
    // $db->update("users",$update,$Where);
    // echo "Data updated : ".print_r($db->ShowResultMsg());

    $delete = "id='5'";
    // $db->delete("users",$delete);
    // echo "Data Deleted : ".print_r($db->ShowResultMsg());

    $select = "";
    // $db->select("users","name, email",null,$select,null,null);

    // $db->sql("SELECT * FROM users");

    // echo "Selected Data : ".print_r($db->ShowResultMsg());

    $join = " district ON users.d_id=district.d_id";

    $data = "users.id,users.name,users.phone,users.email,users.course,district.dname";

    $db->pagination("users",$data,$join,$select,null,2);

    echo "Selected Data : ".print_r($db->ShowResultMsg());

    $db->page("users",$join,$select,2);

    

?>