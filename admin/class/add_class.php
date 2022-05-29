<?php
	require_once('../../config.php'); 
?>
<!-- Page Content -->
<form id="addClass" method="POST" action="">
    <div id="smartwizard">
        <ul class="nav">
            <li>
                <a class="nav-link" href="#step-1">
                    Step 1: <br />
                    <span class="fw-bold">Configure Class Information</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-2">
                    Step 2: <br />
                    <span class="fw-bold">Assign Instructor</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-3">
                    Step 3: <br />
                    <span class="fw-bold">Enroll Students</span>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-4">
                    Step 4: <br />
                    <span class="fw-bold">Summary & Finish</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="step-1" class="tab-pane limited p-4 block2 mx-auto" role="tabpanel">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="className" class="form-label fw-bold">Class Name:</label>
                        <input type="text" class="form-control block-sm" name="cname" id="className" placeholder="Enter Course Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="classPic" class="form-label fw-bold">Upload Class Banner:</label>
                        <input type="file" class="form-control block-sm" name="cbanner" id="classBanner">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="classDesc" class="form-label fw-bold">Enter Class Description <p class="fw-normal d-inline-block mb-0">(Limited to 300 characters)</p></label>
                    <textarea class="form-control block-sm" placeholder="Enter Course Description" name="cdesc" id="classDesc" style="height: 200px; resize: none;" maxlength="300" required></textarea>
                    <p id="the-count" class="d-flex justify-content-end">
                        <span id="current">0</span>
                        <span id="maximum">/ 300</span>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                    <?php 
                        $sql = "SELECT abbreviation FROM `department`";
                        $abbreviations = mysqli_query($conn,$sql);
                    ?>
                        <label for="courseSubject" class="form-label fw-bold">Choose Department</label>
                        <select class="form-select block-sm" name="cdept" id="classDept" required>
                            <option value="" disabled="disabled" selected>--None Selected--</option>
                            <?php
                            while ($abbreviation = mysqli_fetch_array(
                                    $abbreviations,MYSQLI_ASSOC)):;
                            ?>
                            <option name="department" id="department" value="<?php echo $abbreviation["abbreviation"];?>">
                            <?php echo $abbreviation["abbreviation"];?>
                            </option>
                            <?php endwhile;?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                    <?php 
                        $sql = "SELECT subject_name FROM `subject`";
                        $subjects = mysqli_query($conn,$sql);
                    ?>
                        <label for="classSubject" class="form-label fw-bold">Choose Subject</label>
                        <select class="form-select block-sm" name="subject" id="classSubject" required>
                            <option value="" disabled="disabled" selected>--None Selected--</option>
                            <?php
                            while ($subject = mysqli_fetch_array(
                                    $subjects,MYSQLI_ASSOC)):;
                            ?>
                            <option name="subject" id="subject" value="<?php echo $subject["subject_name"];?>">
                            <?php echo $subject["subject_name"];?>
                            </option>
                            <?php endwhile;?>
                        </select>
                    </div>
                </div>
            </div>
            <div id="step-2" class="tab-pane limited p-4 block2 mx-auto" role="tabpanel">
                <div class="d-flex align-items-center mb-3">
                    <a class="nav-link nav_active" href="#">
                        <div class="d-flex align-items-center">
                            <span class="nav_label me-3">Instructors: <span id="selectedIns">0</span></span>
                            <span class="material-icons">info</span>
                        </div>
                    </a>
                    <span class="text-danger mb-0 ms-2" id="selectedInsError"></span>
                </div>
                
                <table id="courseIns" class="display table table-bordered addClassUsers" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>a t</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>b q</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>c e</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>d s</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>e d</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>f v</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>g b</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>h a</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div id="step-3" class="tab-pane limited p-4 block2 mx-auto" role="tabpanel">
                <div class="d-flex align-items-center mb-3">
                    <a class="nav-link nav_active" href="#">
                        <div class="d-flex align-items-center">
                            <span class="nav_label me-3">Students: <span id="selectedStuds">0</span></span>
                            <span class="material-icons">info</span>
                        </div>
                    </a>
                    <span class="text-danger mb-0 ms-2" id="selectedStudsError"></span>
                </div>
                <table id="courseStuds" class="display table table-bordered addClassUsers" style="width:100%">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>a t</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>b q</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>c e</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>d s</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>e d</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>f v</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>g b</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>h a</td>
                            <td>SCST</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                
            </div>
            <div id="step-4" class="tab-pane limited p-4 block2 mx-auto" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="className" class="form-label fw-bold">Class Name:</label>
                            <input type="text" class="form-control-plaintext text-muted block-sm px-3" id="classNameSum"  value="Sample Class Name" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="className" class="form-label fw-bold">Subject Name:</label>
                            <input type="text" class="form-control-plaintext text-muted block-sm px-3" id="classSubjectSum"  value="Sample Subject Name" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Class Description:</label>
                        <textarea class="form-control-plaintext text-muted block-sm px-3" style="height: 200px; resize: none;" id="classDescSum" readonly>Sample Class Desc</textarea>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Instructor/s:</label>
                        <table id="courseInsSum" class="display table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Student/s:</label>
                        <table id="courseStudsSum" class="display table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success">Create Class</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>

$(document).ready(function(){
    init_smartWizard();
    $('#classSubject').prop('disabled', true);
    $('#classDept').change(function() {
        if ($(this).val == "") {
            $('#classSubject').prop('disabled', true);
        }else {
            $('#classSubject').prop('disabled', false);
        }
    });
});


function init_smartWizard() {
    $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        toolbarSettings: {
            toolbarPosition: 'bottom',
            toolbarButtonPosition: 'center',
        },
        autoAdjustHeight: false,
    });
    
    $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {
        if ($("#smartwizard").smartWizard("getStepIndex") == 0) {
            if (!($("#addClass").valid())) {
                alert("Please fill up the form");
                return false;
            }
            $("#classNameSum").val($("#className").val());
            $("#classDescSum").val($("#classDesc").val());
            $("#classSubjectSum").val($("#classSubject").val());
            $("#classDeptSum").val($("#classDept").val());
        }
        if ($("#smartwizard").smartWizard("getStepIndex") == 1) {
            $("#courseInsSum tbody tr").remove();
            if (selectedIns.length == 0) {
                $("#selectedInsError").text("No instructor/s selected");
                return false;
            }
            $("#selectedInsError").text("");
            selectedIns.forEach((row)=>{
                if (row.length > 3){
                    row.pop();
                }
            });

            var tbodyIns = $('#courseInsSum tbody');
            $.each(selectedIns, function(i) {
                var tr = $('<tr>');
                $.each(selectedIns[i], function(j) {
                    $('<td>').html(selectedIns[i][j]).appendTo(tr);  
                });
                tbodyIns.append(tr);
            });
            
        }
        if ($("#smartwizard").smartWizard("getStepIndex") == 2) {
            $("#courseStudsSum tbody tr").remove();
            if (selectedStuds.length == 0) {
                $("#selectedStudsError").text("No student/s selected");
                return false;
            }
            $("#selectedStudsError").text("");

            selectedStuds.forEach((row)=>{
                if (row.length > 3){
                    row.pop();
                }
            });

            var tbodyStuds = $('#courseStudsSum tbody');
            $.each(selectedStuds, function(i) {
                var tr = $('<tr>');
                $.each(selectedStuds[i], function(j) {
                    $('<td>').html(selectedStuds[i][j]).appendTo(tr);  
                });
                tbodyStuds.append(tr);
            });
        }
    });

    $("#addClass").validate({
        rules: {
            cname: "required",
            cdesc: "required",
            csubject: "required",
            cdept: "required",
        }
    });

    $('.addClassUsers').DataTable({
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
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets: 3
        } ],
        select: {
            style:    'multi',
            selector: 'td:last-child'
        },
        order: [[ 1, 'asc' ]]
    });
    
    var courseIns = $('#courseIns').DataTable();
    var courseStuds = $('#courseStuds').DataTable();
    var cname;
    var cdesc;
    var csubject;
    var cdept;
    var selectedIns = [];
    var selectedStuds = [];

    courseStuds.on( 'select', function ( e, dt, type, indexes ) {
        var count = courseStuds.rows( { selected: true } ).count();
        selectedStuds = courseStuds.rows('.selected').data().toArray();
        $('#selectedStuds').text(count);
        $("#selectedStudsError").text("");
        console.log(selectedStuds);
    });
    courseStuds.on( 'deselect', function ( e, dt, type, indexes ) {
        var count = courseStuds.rows( { selected: true } ).count();
        selectedStuds = courseStuds.rows('.selected').data().toArray();
        $('#selectedStuds').text(count);
        console.log(selectedStuds);
    });
    
    courseIns.on( 'select', function ( e, dt, type, indexes ) {
        var count = courseIns.rows( { selected: true } ).count();
        selectedIns = courseIns.rows('.selected').data().toArray();
        $('#selectedIns').text(count);
        $("#selectedInsError").text("");
        console.log(selectedIns);
    });
    courseIns.on( 'deselect', function ( e, dt, type, indexes ) {
        var count = courseIns.rows( { selected: true } ).count();
        selectedIns = courseIns.rows('.selected').data().toArray();
        $('#selectedIns').text(count);
        console.log(selectedIns);     
    });

    $('#viewAcadYear').DataTable();
    

    $('textarea').keyup(function() {
    
        var characterCount = $(this).val().length,
            current = $('#current'),
            maximum = $('#maximum'),
            theCount = $('#the-count');
          
        current.text(characterCount);
       
        
        /*This isn't entirely necessary, just playin around*/
        if (characterCount < 70) {
          current.css('color', '#666');
        }
        if (characterCount > 70 && characterCount < 90) {
          current.css('color', '#6d5555');
        }
        if (characterCount > 90 && characterCount < 100) {
          current.css('color', '#793535');
        }
        if (characterCount > 100 && characterCount < 120) {
          current.css('color', '#841c1c');
        }
        if (characterCount > 120 && characterCount < 139) {
          current.css('color', '#8f0001');
        }
        
        if (characterCount >= 140) {
          maximum.css('color', '#8f0001');
          current.css('color', '#8f0001');
          theCount.css('font-weight','bold');
        } else {
          maximum.css('color','#666');
          theCount.css('font-weight','normal');
        }
        
            
      });
      
}
</script>