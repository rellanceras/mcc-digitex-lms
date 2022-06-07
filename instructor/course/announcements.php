<!-- <div class="block h-100 p-4">
    <div class="block" style="background-color: rgb(209, 207, 207)">
        <h4 style="margin-left: 1%;">Announcement</h4>
        <p style="margin-left: 1%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. </span></p>
        <button onclick="myFunction()" id="myBtn" class="btn btn-default" style="margin-left: 1%;" >Read more</button>  
        <br>  
    </div>                       
-->

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
    <div class="align-items-center justify-content-between text-end mb-3">
        <button type="button" class="btn btn-success bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#addModal" id="btn_add" data-page="btn_add"></button>
    </div>  
</div> 


<!--ADD Modal -->
<div class="modal fade" id="addModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Announcement Title</label>
                <input name="title" class="form-control block-sm"/>
                <br>
            <label>Description </label><br>
                <div class="input-group flex-nowrap">
                    <input type="file" class="form-control" id="attachedFile">
                </div>
                <textarea class="form-control" name="description" id="anctDesc" style="height: 200px; resize: none;"  required=""></textarea>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>