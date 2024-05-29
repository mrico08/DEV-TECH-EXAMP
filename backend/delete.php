<?php
    include ("connect.php");
    $data = json_decode(file_get_contents('php://input'), true);
        
    $sql = mysqli_query($conn,"DELETE FROM persons WHERE id='".$data['personid']."'");

    echo json_encode(["Record has been saved successfully."]);
?>