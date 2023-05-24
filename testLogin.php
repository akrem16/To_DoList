<?php 
session_start();
include "db_conn.php";
if (isset($_POST['name']) && isset($_POST['password']) ){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data ;
    }
    $name = validate($_POST['name']);
    $pass = validate($_POST['password']);

    if (empty($name)){
        header("Location: login.php?error=User Name is required");
        exit();

    }else if (empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM login WHERE user_name='$name' AND password = '$pass' ";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            print_r($row);
            if($row['user_name'] === $name && $row['password'] === $pass){
                $_SESSION ['user_name'] = $row['user_name'];
                $_SESSION ['name'] = $row['name'];
                $_SESSION ['id'] = $row['id'];
                header("Location: index.php");
            exit();


            }
            else{
                header("Location: login.php?error=Incorrect User Name or password");
            exit();
            }
        }
        else{
            header("Location: login.php?error=Incorrect User Name or password");
        exit();
        }
        
    }

}else{
    header("Location: login.php");
    exit();
}