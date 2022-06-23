<div class="row">
    <div class="col-lg-6 mt-2">
        <div class="d-flex justify-content-between">
            <h4 class="mb-3 fw-bold"> Exam Information </h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editExam"><span class="material-icons">edit</span> Edit</button>
        </div>
        <hr/>
        <table class="table">
            <tbody>
                <tr>
                    <td>Exam name:</td>
                    <td>Quiz #1</td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td>Advanced Mathematics</td>
                </tr>
                <tr>
                    <td>Creator:</td>
                    <td>Maria Clara</td>
                </tr>
                <tr>
                    <td>Total items:</td>
                    <td>10 items</td>
                </tr>
                <tr>
                    <td>Total points:</td>
                    <td>10 points</td>
                </tr>
                <tr>
                    <td>Timer:</td>
                    <td>5 minutes</td>
                </tr>
                <tr>
                    <td>Date created:</td>
                    <td>January 1, 2022</td>
                </tr>
                <tr>
                    <td>Date visible:</td>
                    <td>January 25, 2022</td>
                </tr>
                <tr>
                    <td>Date due:</td>
                    <td>February 1, 2022</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr class="d-md-none my-3"/>
    <div class="col-lg-6 mt-2">
        <div class="d-flex justify-content-between">
            <h4 class="mb-3 fw-bold"> Exam Questions </h4>
            <button class="btn btn-primary">Assign Questions</button>
            <div class="btn-group mb-3">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-icons">add</span> Add Question
                </button>
                <ul class="dropdown-menu block_primary">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#iden">Identification</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#multi">Multiple Choice</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#torf">True or False</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#essay">Essay</a></li>
                </ul>
            </div>
        </div>
        
        <hr/>
        <table id="viewquestions" class="display row-border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th width="400px">Question</th>
                    <th>Type</th>
                    <th>Answer/s</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123</td>
                    <td>
                        <div class="td_limit td_limit_height">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi officiis, ut aperiam, hic reiciendis delectus eveniet dolore, iste distinctio blanditiis veniam? Similique deserunt ea ipsam repudiandae omnis laboriosam facilis totam!</div>
                        <a type="button" class="text-decoration-none text-info see">See more...</a>
                    </td>
                    <td>Identify</td>
                    <td>Test</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;"  data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td>123</td>
                    <td>
                        <div class="td_limit td_limit_height">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi officiis, ut aperiam, hic reiciendis delectus eveniet dolore, iste distinctio blanditiis veniam? Similique deserunt ea ipsam repudiandae omnis laboriosam facilis totam!</div>
                        <a type="button" class="text-decoration-none text-info see">See more...</a>
                    </td>
                    <td>Multi</td>
                    <td>Test, Test, Test, Test</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;"  data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td>123</td>
                    <td>
                        <div class="td_limit td_limit_height">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi officiis, ut aperiam, hic reiciendis delectus eveniet dolore, iste distinctio blanditiis veniam? Similique deserunt ea ipsam repudiandae omnis laboriosam facilis totam!</div>
                        <a type="button" class="text-decoration-none text-info see">See more...</a>
                    </td>            <td>T or F</td>
                    <td>True</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;"  data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td>123</td>
                    <td>
                        <div class="td_limit td_limit_height">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi officiis, ut aperiam, hic reiciendis delectus eveniet dolore, iste distinctio blanditiis veniam? Similique deserunt ea ipsam repudiandae omnis laboriosam facilis totam!</div>
                        <a type="button" class="text-decoration-none text-info see">See more...</a>
                    </td>            <td>Essay</td>
                    <td>N/A</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;"  data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th width="400px">Question</th>
                    <th>Type</th>
                    <th>Answer/s</th>
                    <th>Options</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<!-- Modal for edit exam entry -->
<div class="modal fade" id="editExam" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content block_md block_primary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Exam</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Exam Name:</label>
                    <input type="text" class="form-control block-sm" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Exam Instruction:</label>
                    <textarea class="form-control block-sm" name="" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Timer: (minutes)</label>
                    <input type="number" class="form-control block-sm" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date Due:</label>
                    <input type="date" class="form-control block-sm" id="">
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <div>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button"  class="btn btn-success" id="btn_addexamform" data-page="addexamform">Submit</button>
                </div>
                <p class="text-info">Pressing submit will take you to 'add exam items' page)</p>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for identification form -->
<div class="modal fade" id="iden"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content block_md block_primary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Identification</h5>
                <a data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
                    <span class="material-icons">close</span>
                </a>
                
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Question </label>
                    <textarea class="form-control" name="" id="" cols="30" rows="3">

                    </textarea>
                </div>
                <div class="mb-3">
                    <label>Answer </label>
                    <input class="form-control" name=""/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for multiple choice form -->
<div class="modal fade" id="multi" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content block_md block_primary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Multiple Choice</h5>
                <a data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
                    <span class="material-icons">close</span>
                </a>
                
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Question </label>
                    <textarea class="form-control" name="" id="" cols="30" rows="3">

                    </textarea>
                </div>
                <div class="mb-3">
                    <label>Answer/s</label>
                    <div class="d-flex flex-column gap-2" id="choices">
                        <div class="input-group">
                            <input class="form-control" name=""/>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="add_multi">Add more</button>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for true or false form -->
<div class="modal fade" id="torf" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content block_md block_primary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add True or False</h5>
                <a data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
                    <span class="material-icons">close</span>
                </a>
                
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Question </label>
                    <textarea class="form-control" name="" id="" rows="3">

                    </textarea>
                </div>
                <div class="mb-3">
                    <label>Answer</label>
                    <div class="d-flex justify-content-center gap-4" id="choices">
                        <div class="p-3 block_sm block_secondary">
                            <input class="form-check-input" type="radio" name="torf" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                True
                            </label>
                        </div>
                        <div class="p-3 block_sm block_secondary">
                            <input class="form-check-input" type="radio" name="torf" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                False
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for essay form -->
<div class="modal fade" id="essay" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content block_md block_primary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Essay</h5>
                <a data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
                    <span class="material-icons">close</span>
                </a>
                
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Question </label>
                    <textarea class="form-control" name="" id="" rows="3">

                    </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

    $('#viewquestions').DataTable({
        dom: 'Bfrtip',
        pageLength : 5,
        buttons: [
            {
                text: '<i class="bi bi-arrow-clockwise"></i>'
            },
            {
                extend: 'colvis',
                text: '<i class="bi bi-layout-three-columns"></i>'
            },
        ],
        order: [[ 1, 'asc' ]]
    });
});
</script>