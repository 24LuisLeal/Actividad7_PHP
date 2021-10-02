<?php
    include("data_base.php");

    $user_name = $_POST['user_name'];
    $gender = $_POST['gender'];
    $favorite_color = $_POST['favorite_color'];
    $favorite_food = $_POST['favorite_food'];

    $insert_user = "INSERT INTO persons(user_name,gender,favorite_color,favorite_food)
    values ('$user_name','$gender','$favorite_color','$favorite_food')";

    $send_data = mysqli_query($connection,$insert_user);

    if(!$send_data){
        echo "No se inserto";
    }else{
        header("Location: index.php");
    }
?>