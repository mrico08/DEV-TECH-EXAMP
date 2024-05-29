<div class="card">
    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <h4>Leap year Identifier</h4>
    </div>
    <div class="card-body pt-2 row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Year</label>
                <input type="number" class="form-control" id="leafyear" >
            </div>

            <div id="theresult1"><h1></h1></div>
        </div>
    </div>
</div>

<script>
function leapyear(year) {
    return (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
}


$('#leafyear').keyup(function(){
    let year= $('#leafyear').val();
    let isleapyear =  leapyear(year);
    var leapyearresult= "";

    if(isleapyear==true){
        leapyearresukt = "<h4 style='color:green'>Leap Year</h4>";
    }else{
        leapyearresukt = "<h4 style='color:red'>Not a Leap Year</h4>";
    }

   
    $('#theresult1').html(leapyearresukt);
})
</script>