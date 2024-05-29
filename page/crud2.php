<div class="card">
    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <h4>Insert Personal Info</h4>
    </div>
    <div class="card-body pt-2 row">
        <form method="POST">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="iname2" name="iname2" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Birthdate</label>
                    <input type="date" class="form-control" id="ibirthdate2" name="ibirthdate2" required>
                </div>
                <h6 id="age"></h6>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="iemail2" name="iemail2" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn bg-gradient-info">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include("page/table/personlist2.php");
?>

<script>


$("#ibirthdate2").change(function(){
    let today = new Date();
    let birthDate = new Date($("#ibirthdate2").val());
    let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    $('#age').html(`${age} Years Old`);
    age2 = age;  
})


$('form').on('submit', function(e){
    e.preventDefault();
    let formDataArray = $(this).serializeArray(); 
    formDataArray.push({name: 'age2', value: age2}); 
    let formData = $.param(formDataArray);

    if(age2<18){
        return alert("Age must be at least 18 years and above.");
    }

    $.ajax({
        url: 'backend/insert2.php',
        type: 'POST',
        data: formData,
        success: function(data){
            let data1 = JSON.parse(data);
            alert(data1[1]);
            if(data1[0]==1){
                window.location.href="";
            }
        },
        error: function(error){
            console.log(error);
        }
    });
})
</script>

