<div class="row">
    <div class="col-md-3 mb-3">
        <div class="card card1">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                    <img src="system.png" class="img-fluid border-radius-lg">
                </a>
            </div>

            <div class="card-body pt-2">
                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">#1</span>
                <a href="javascript:;" class="card-title h5 d-block text-darker">
                    Simple CRUD
                </a>
                <p class="card-description mb-4" style="white-space:pre-line">
                    Create a simple CRUD with the following:
                    - input: (name, birthdate, email)
                    - will auto compute age based on birthdate
                    - display (table): (name, birthdate, age, email , controls [delete, edit])
                </p>
                <br><br><br><br><br><br>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card2">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                <img src="system.png" class="img-fluid border-radius-lg">
                </a>
            </div>

            <div class="card-body pt-2">
                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">#2</span>
                <a href="javascript:;" class="card-title h5 d-block text-darker">
                    Multiplication
                </a>
                <p class="card-description mb-4" style="white-space:pre-line">
                    Create a Multiplication Table from 1x1 upto 10x10
                       - display (table)

                </p>
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card3">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                <img src="system.png" class="img-fluid border-radius-lg">
                </a>
            </div>

            <div class="card-body pt-2">
                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">#3</span>
                <a href="javascript:;" class="card-title h5 d-block text-darker">
                    Odd Even Number
                </a>
                <p class="card-description mb-4" style="white-space:pre-line">
                    Create a function to identify if a number is odd/even
                      - input: (number)
                      - display: (odd/even)
                      - example: 10 = even, 1 = odd
                </p>
                <br><br><br><br><br><br>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card4">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                <img src="system.png" class="img-fluid border-radius-lg">
                </a>
            </div>

            <div class="card-body pt-2">
                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">4#</span>
                <a href="javascript:;" class="card-title h5 d-block text-darker">
                    CRUD with Validation
                </a>
                <p class="card-description mb-4" style="white-space:pre-line">
                    Create a simple CRUD with the following:
                      - input: (name, birthdate, email)
                      - will auto compute age based on birthdate
                      - must be a valid email`s format
                      - validate birthdate, age must be greater than or equal to 18
                      - unique: name + email
                      - display (table): (name, birthdate, age, email , controls [delete, edit])

                 </p>                
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card5">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                <img src="system.png" class="img-fluid border-radius-lg">
                </a>
            </div>

            <div class="card-body pt-2">
                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">5#</span>
                <a href="javascript:;" class="card-title h5 d-block text-darker">
                    Number's Hole Counter
                </a>
                <p class="card-description mb-4" style="white-space:pre-line">
                    Number`s hole counter
                      - input: (number)
                      - display: (number of hole(s))
                      - example: 8 = 2, 1 = 0, 10 = 1, 108 = 3


                 </p>

            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card card6">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                <img src="system.png" class="img-fluid border-radius-lg">
                </a>
            </div>

            <div class="card-body pt-2">
                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">6#</span>
                <a href="javascript:;" class="card-title h5 d-block text-darker">
                    Leap Year Identifier
                </a>
                <p class="card-description mb-4" style="white-space:pre-line">
                    Number`s hole counter
                      - input: (number)
                      - display: (number of hole(s))
                      - example: 8 = 2, 1 = 0, 10 = 1, 108 = 3
                 </p>
                <br><br>
            </div>
        </div>
    </div>
<div>

<script>
$(".card1").click(function(){
    window.location.href = "index.php?page=CRUD";
})

$(".card2").click(function(){
    window.location.href = "index.php?page=multiplication";
})

$(".card3").click(function(){
    window.location.href = "index.php?page=odd_even";
})

$(".card4").click(function(){
    window.location.href = "index.php?page=CRUD2";
})

$(".card5").click(function(){
    window.location.href = "index.php?page=countthehole";
})

$(".card6").click(function(){
    window.location.href = "index.php?page=leapyear";
})
</script>