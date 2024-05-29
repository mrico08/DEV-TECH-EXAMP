<div class="card">
    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <h4>Insert Personal Info</h4>
    </div>
    <div class="card-body pt-2 row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" id="iname" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Birthdate</label>
                <input type="date" class="form-control" id="ibirthdate">
            </div>
            <h6 id="age"></h6>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="iemail" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <button type="button" id="insert_button" class="btn bg-gradient-info">Submit</button>
            </div>
        </div>
    </div>
</div>



<?php
    include("page/table/personlist.php");
?>

<script>
$("#ibirthdate").change(function(){
    let today = new Date();
    let birthDate = new Date($("#ibirthdate").val());
    let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    $('#age').html(`${age} Years Old`);
    age2 = age;  
})
</script>