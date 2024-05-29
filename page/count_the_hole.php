<div class="card">
    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <h4>Number Holes counter</h4>
    </div>
    <div class="card-body pt-2 row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Number</label>
                <input type="number" class="form-control" id="numberhole" >
            </div>

            <div id="theresult1"><h1>0</h1></div>
        </div>
    </div>
</div>

<script>
number_array = [1,0,0,0,0,0,1,0,2,1,1];

$('#numberhole').keyup(function(){
    let number1= $('#numberhole').val();

    let array = number1.split('');
    var number_result= 0;

    array.map(function(value) {
        number_result = number_result + number_array[value];

    });

    $('#theresult1').html(`<h1>${number_result}</h1>`);

    



})
</script>