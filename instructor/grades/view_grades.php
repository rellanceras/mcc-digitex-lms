<!--

    Work in Progress | Template by Nicolas Honrade

-->
<!-- Page Content -->
<!-- <div class="block h-100 p-4"> -->
                     
    <select class="d-inline-flex p-2 block-sm" name="languages" id="lang">
        <option value="select">Sort</option>
        <option value="javascript">Student Number</option>
        <option value="php">Name</option>
        <option value="java">Quiz</option>
        <option value="golang">Exam</option>
        <option value="python">Final Grade</option>
    </select>
                         
    <select class="d-inline-flex p-2 block-sm" name="languages" id="lang">
        <option value="select">Choose Type</option>
        <option value="javascript">Student Number</option>
        <option value="php">Name</option>
        <option value="java">Quiz</option>
        <option value="golang">Exam</option>
        <option value="python">Final Grade</option>
    </select>
                      
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
        <i class="fa fa-file-pdf-o"></i> Save to PDF
    </button>
    <br><br>
    <table id="viewAcadYear" class="display table table-bordered">
        <thead>
            <tr>
                <th class="thborderleft">Student Number</th>
                <th>Student Name</th>
                <th>Quiz Grade</th>
                <th>Exam Grade</th>
                <th>Final Grade</th>
                <th class="thborderright">Options</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>3181472</td>
                <td style = "text-align: center;">Jose Selgado</td>
                <td style = "text-align: center;">90</td>
                <td style = "text-align: center;">93</td>
                <td style = "text-align: center;">95</td>
                <td style = "text-align: center;">
                    <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>           
                </td>
            </tr>
            
            <tr>
                <td>3181472</td>
                <td style = "text-align: center;">Arturo Belgado</td>
                <td style = "text-align: center;">95</td>
                <td style = "text-align: center;">92</td>
                <td style = "text-align: center;">98</td>
                <td style = "text-align: center;">
                    <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>      
                </td>
            </tr>                            
        </tbody>
    </table>                  
<!-- </div> -->

<!--PDF Modal -->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PDF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Are you sure you want to save this to PDF?</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--EDIT Modal -->
<div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Quiz Grade </label>
                <input name="year" class="form-control block-sm"/>
                <br>
                <label>Exam Grade </label>
                <input name="semester" class="form-control block-sm"/>
                <br>
                <label>Final Grade </label>
                <input name="semester" class="form-control block-sm"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--DELETE Modal -->
<div class="modal fade" id="deleteModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Academic Year</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you want to delete this academic year?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </div>
  </div>

<script>
    var table = $('#viewAcadYear').DataTable( {
        
    } );
</script>