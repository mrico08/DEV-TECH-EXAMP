<?php
    include ("connect.php");
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract values for iname, ibirthdate, and iemail
    $iname = $data['iname'];
    $ibirthdate = $data['ibirthdate'];
    $iemail = $data['iemail'];


    $sql = mysqli_query($conn,"INSERT INTO persons (
        name,
        birthdate,
        email
    ) VALUES (
        '".$iname."',
        '".$ibirthdate."',
        '".$iemail."'
    )");

    echo json_encode(["Record has been saved successfully."]);
?>