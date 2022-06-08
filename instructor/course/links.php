    <!-- <h4 class="fw-bold">Course Resources</h4>
        <div class="dropdown text-end mb-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div> 
    </div>-->
<div class="row d-flex h-100 p-4 gap-3">
    <div class="accord d-flex justify-content-between btn w-100">
        <h4 class="fw-bold">Course Resources</h4>
        <div class="dropdown text-end mb-3">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Add Resources
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#linkModal">Link</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#fileModal">File</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#folderModal">Folder</a></li>
            </ul>
        </div>       
    </div>
    <hr>
    <div class="p-3 block2">
        <a href="#test1" class="mb-3 btn w-100 mb-3" data-bs-toggle="collapse" role="button">
            <div class="d-flex justify-content-between">
                <span class="d-flex gap-3 align-items-center">
                    <span class="material-icons">folder</span>
                    Advanced Mathematics
                </span>
                <span class="material-icons">expand_more</span>
            </div>
        </a>
        <div id="test1" class="mx-5 collapse">
            <span class="d-flex gap-3 align-items-center">
                <span class="material-icons">description</span>
                Class Syllabus
            </span>
        </div>
    </div>
    <div class="p-3 block2">
        <a href="#test2" class="mb-3 btn w-100 mb-3" data-bs-toggle="collapse" role="button">
            <div class="d-flex justify-content-between">
                <span class="d-flex gap-3 align-items-center">
                    <span class="material-icons">folder</span>
                    Advanced Mathematics
                </span>
                <span class="material-icons">expand_more</span>
            </div>
        </a>
        <div id="test2" class="mx-5 collapse">
            <span class="d-flex gap-3 align-items-center">
                <span class="material-icons">description</span>
                Class Syllabus
            </span>
        </div>
    </div>
    <div class="p-3 block2">
        <a href="#test3" class="mb-3 btn w-100 mb-3" data-bs-toggle="collapse" role="button">
            <div class="d-flex justify-content-between">
                <span class="d-flex gap-3 align-items-center">
                    <span class="material-icons">description</span>
                    Advanced Mathematics
                </span>
                <div>
                    <button class="material-icons btn btn-sm btn-default">more_horiz</button>         
                </div>
            </div>
        </a>
    </div>
    <div class="p-3 block2">
        <a href="#test4" class="mb-3 btn w-100 mb-3" data-bs-toggle="collapse" role="button">
            <div class="d-flex justify-content-between">
                <span class="d-flex gap-3 align-items-center">
                    <span class="material-icons">attach_file</span>
                    Advanced Mathematics
                </span>
                <div>
                    <button class="material-icons btn btn-sm btn-default">more_horiz</button>         
                </div>
            </div>
        </a>
    </div>
</div>

<!--LINK Modal -->
<div class="modal fade" id="linkModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Link</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Link Url</label>
                <div class="input-group mb-3">
                    <input name="url" class="form-control block-sm" id="link-inp"/>
                    <button class="input-group-text material-icons" id="link-btn">link</button>
                </div>
                <label>Description </label><br>
                    <textarea class="form-control" name="description" id="anctDesc" style="height: 200px; resize: none;"  required=""></textarea>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary">upload</button>
            </div>
        </div>
    </div>
</div>

<!--FILE Modal -->
<div class="modal fade" id="fileModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Attachment</label><br>
                <div class="input-group flex-nowrap">
                    <input type="file" class="form-control" id="attachedFile">
                </div>
                <br>
            <label>Description </label><br>
                <textarea class="form-control" name="description" id="anctDesc" style="height: 200px; resize: none;"  required=""></textarea>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary">upload</button>
            </div>
        </div>
    </div>
</div>

<!--FOLDER Modal -->
<div class="modal fade" id="folderModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Folder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Folder Name</label>
                <input name="foldername" class="form-control block-sm"/>
                <br>
            <label>Description </label><br>
                <textarea class="form-control" name="description" id="anctDesc" style="height: 200px; resize: none;"  required=""></textarea>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    const linkBtn = document.getElementById('link-btn');
    const linkInp = document.getElementById('link-inp');

    linkBtn.addEventListener('click', () => {
        window.open(linkInp.value, '_blank');
    });
</script>