<div class="card">
    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <h4>Identifying Odd even Number</h4>
    </div>
    <div class="card-body pt-2 row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleFormControlInput1">Number</label>
                <input type="number" class="form-control" id="number1" >
            </div>

            <div id="theresult"></div>
        </div>
    </div>
</div>

<script>
$('#number1').keyup(function(){
    number1= $('#number1').val();
    number2 = 2;

    if(number1==""){
        return $('#theresult').html("");
    }

    result = number1 / number2    
    decimalpart = result - Math.floor(result);
    getdecimal = Math.round(decimalpart * 100);
    if(getdecimal==0){
        $('#theresult').html("<h1 style='color:green'>Even number</h1>");
    }else{
        $('#theresult').html("<h1 style='color:red'>Odd number</h1>");
    }
})
</script>