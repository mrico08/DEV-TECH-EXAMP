
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Person Info</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" id="uname">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Birthdate</label>
            <input type="date" class="form-control" id="ubirthdate" placeholder="Enter Birthdate">
        </div>
        <h6 id="age2"></h6>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="uemail" placeholder="Enter Email">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bg-gradient-primary update_button">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
$("#ubirthdate").change(function(){
    let today = new Date();
    let birthDate = new Date($("#ubirthdate").val());
    let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    $('#age2').html(`${age} Years Old`);
    age2 = age;  
})
</script>