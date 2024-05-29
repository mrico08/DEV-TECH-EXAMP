<?php
    include ("connect.php");
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract values for iname, ibirthdate, and iemail
    $uname = $data['uname'];
    $ubirthdate = $data['ubirthdate'];
    $uemail = $data['uemail'];
    $personid = $data['personid'];

    if (filter_var($uemail, FILTER_VALIDATE_EMAIL)) {

    } else {
        echo json_encode([2,"Please include @ in the email address."]);
    }

    $now = new DateTime();
    $dob = new DateTime($ubirthdate);
    $age = $dob->diff($now);

    if($age->format('%Y')<18){
        echo json_encode([2,"Age must be at least 18 years and above."]);
        return false;
    }

    $qry = mysqli_query($conn,"SELECT * FROM persons2 WHERE (name='".$uname."' AND id!='".$personid."') OR (email='".$uemail."' AND id!='".$personid."') ");
    $row = mysqli_fetch_array($qry);
    if(mysqli_num_rows($qry)>0){
        if($row['email']==$uemail){
            echo json_encode([2,"Email is existing."]);
        }else if($row['name']==$uname){
            echo json_encode([2,"Name is exisiting."]);
        }             

        return false;
    }

    mysqli_query($conn,"UPDATE persons2 SET
        name='".$uname."',
        birthdate='".$ubirthdate."',
        email='".$uemail."'
        WHERE id='".$personid."'
    ");

    echo json_encode([1,"Record has been updated successfully."]);
?>