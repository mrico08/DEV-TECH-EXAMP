<?php
    include ("connect.php");

    if(!isset($_POST['iname2'])){
        echo json_encode([2,"Name required."]);
    }

    if(!isset($_POST['ibirthdate2'])){
        echo json_encode([2,"Birthdate required."]);
    }

    if(!isset($_POST['iemail2'])){
        echo json_encode([2,"Email required."]);
    }

    if (filter_var($_POST['iemail2'], FILTER_VALIDATE_EMAIL)) {

    } else {
        echo json_encode([2,"Please include @ in the email address."]);
    }

    $now = new DateTime();
    $dob = new DateTime($_POST['ibirthdate2']);
    $age = $dob->diff($now);

    if($age->format('%Y')<18){
        echo json_encode([2,"Age must be at least 18 years and above."]);
        return false;
    }


    $name = $_POST['iname2'];
    $birthdate = $_POST['ibirthdate2'];
    $email = $_POST['iemail2'];

    $qry = mysqli_query($conn,"SELECT * FROM persons2 WHERE name='".$name."' OR email='".$email."'");
    $row = mysqli_fetch_array($qry);
    if(mysqli_num_rows($qry)>0){
        if($row['email']==$email){
            echo json_encode([2,"Email is existing."]);
        }else if($row['name']==$name){
            echo json_encode([2,"Name is exisiting."]);
        }             

        return false;
    }

    $sql = mysqli_query($conn,"INSERT INTO persons2 (
        name,
        birthdate,
        email
    ) VALUES (
        '".$name."',
        '".$birthdate."',
        '".$email."'
    )");

    echo json_encode([1,"Record has been saved successfully."]);


?>