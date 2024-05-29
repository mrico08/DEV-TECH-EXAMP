<?php
    include ("connect.php");
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract values for iname, ibirthdate, and iemail
    $uname = $data['uname'];
    $ubirthdate = $data['ubirthdate'];
    $uemail = $data['uemail'];
    $personid = $data['personid'];

    mysqli_query($conn,"UPDATE persons SET
        name='".$uname."',
        birthdate='".$ubirthdate."',
        email='".$uemail."'
        WHERE id='".$personid."'
    ");    


    echo json_encode(["Record has been updated successfully."]);
?>