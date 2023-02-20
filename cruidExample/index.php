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

    // echo "Selected Data : ".print_r($db->ShowResultMsg());

    $result = $db->ShowResultMsg();

    echo "<table border='1' width='100%'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Course</th>
            <th>District</th>
        </tr>
    ";
    $i=1;
    foreach ($result as list("id"=>$id,"name"=>$name,"phone"=>$phone,"email"=>$email,"course"=>$course,"dname"=>$dis)) {
        echo "<tr> <td>".$i++."</td> <td>$name</td> <td>$phone</td>  <td>$email</td>  <td>$course</td>  <td>$dis</td> </tr>";
    }
    echo "</table>";
    $db->page("users",$join,$select,2);

    
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];
        $district = $_POST['district'];

        if($name!=null){
            $insert = ["name"=>$name,"phone"=>$phone,"email"=>$email,"course"=>$course,"d_id"=>$district];

            if($db->insert("users",$insert)){
                echo "Data inserted Successfully!";
            }else{
                echo "Try Again!";
            }

        }else{
            echo "Name required!";
        }

    }

?>

<form width="100%" action="" method="post">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br><br>

    <label for="phone">Phone:</label>
    <input type="phone" name="phone" id="phone"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br><br>

    <label for="course">Course:</label>
    <input type="text" name="course" id="course"><br><br>

    <label for="district">District:</label>
    <select id="district" name="district">
        <?php
            $db->select("district");
            $result = $db->ShowResultMsg();
            foreach ($result as list("id"=>$id,"d_id"=>$did,"dname"=>$dname)) {
                ?>
                    <option value="<?=$did?>"><?=$dname?></option>
                <?php
            }
        ?>
    </select>
    <input type="submit" name="save" id="save" value="SAVE"><br><br>

</form>
