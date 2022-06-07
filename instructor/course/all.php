
<div class="row d-flex h-100 p-4 gap-3">
    <div class="p-3 block2">
        <a href="#jun12022" class="accord d-flex justify-content-between btn w-100" data-bs-toggle="collapse" role="button">
            <span class="fw-bold fs-6">Announcement</span>
            <div>
                <button class="material-icons btn btn-sm btn-default">more_horiz</button>         
                <button class="material-icons btn btn-sm btn-default ">close</button>
            </div>
            
        </a>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex p-3 gap-3 text-start">
                <p class="m-0">
                    Message... <br/>
                    Message... 
                </p> 
            </div>
        </div>
        <p class="text-end mb-3">Posted on&nbsp;<span class="fst-italic fw-bold">January 23, 2022</span></p>
        <hr>
    </div>

    <div class="p-3 block2">
        <div class="accord d-flex justify-content-between btn w-100" data-bs-toggle="collapse">
            <span class="fw-bold fs-6">Quiz</span>
            <div>
                <button class="material-icons btn btn-sm btn-default">more_horiz</button>         
                <button class="material-icons btn btn-sm btn-default ">close</button>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex p-3 gap-3 text-start">
                <p class="m-0">
                Due Date: June 5, 2022 <br/>
                Test Types: Multiple Choice, True or False, Essay <br/>
                Total Score: 100 points </br>
            </p>
            
            </div>
            <div class="text-start">
            <button onclick="myFunction()" id="myBtn" class="btn btn-sm btn-default">Read more</button>
            </div>
        </div>
        <p class="text-end mb-3">Posted on&nbsp;<span class="fst-italic fw-bold">January 23, 2022</span></p>
        <hr>
    </div>
    <div class="p-3 block2">
        <a href="#jun12022" class="accord d-flex justify-content-between btn w-100" data-bs-toggle="collapse" role="button">
            <span class="fw-bold fs-6">Announcement</span>
            <div>
                <button class="material-icons btn btn-sm btn-default">more_horiz</button>         
                <button class="material-icons btn btn-sm btn-default ">close</button>
            </div>
            
        </a>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex p-3 gap-3 text-start">
                <p class="m-0">
                    Message... <br/>
                    Message... 
                </p> 
            </div>
        </div>
        <p class="text-end mb-3">Posted on&nbsp;<span class="fst-italic fw-bold">January 23, 2022</span></p>
        <hr>
    </div>    
</div>

<script>

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>    