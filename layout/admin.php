<!--

    Work in Progress | Template by Nicolas Honrade

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['page']?> | DigiTeach LMS</title>
    <!-- Website Icon -->
    <link rel="icon" href="../resources/img/logo-sm-trans.png">

    <!-- Bootstrap Style/Icons -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>
        

    <!-- Google Font/Icons -->
        <!-- Inter Font Style -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <!-- PLUGINS -->
        <!-- Calendar -->
        <link rel="stylesheet" href="../resources/css/calendarstyle.css" />
        <link rel="stylesheet" href="../resources/css/theme.css" />
        <!-- Date Range Picker -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <!-- Datatables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css"/>
        <!-- Smart Wizard -->
        <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
        <!-- Year Picker -->
        <link rel='stylesheet' href='../resources/css/yearpicker.css' />


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../resources/css/style.css"/>
    <link rel="stylesheet" href="../resources/css/themes/default.css" id="themeCSS"/>

    
</head>
<body>

<div class="container-fluid">

<nav class="d-sm-none navbar block navbar-light m-2">
    <div class="container-fluid">
        <span class="btn nav_select navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar_mobile">
            <i class="bi bi-list"></i>
        </span>
        <ul class="d-flex list-unstyled align-items-center justify-content-end gap-3 m-0">
            <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
                <span class="material-icons tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Messages">chat</span>
                <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle">
                    <span class="visually-hidden">unread messages</span>
                </span>
            </li>
            <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
                <span class="material-icons tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Notifications">notifications</span>
                <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle">
                    <span class="visually-hidden">unread messages</span>
                </span>
            </li>
            <span class="vr"></span>
            <!-- Theme Switcher -->
            <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
                <span class="material-icons tool_tip_default themeButton" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Select Theme">light_mode</span>
            </li>
        </ul>

        <div class="offcanvas offcanvas-start block m-3" tabindex="-1" id="sidebar_mobile">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">
                    <img class="nav_label logo" src="../resources/img/logov2-trans.png" width="125px" height="auto"/>
                </h5>
                <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="d-flex flex-column list-unstyled">
                    <li class="nav-item text-center">
                        <div class="d-inline-flex align-items-center">
                            <img class="profile_nav" src="../resources/img/test-profile.png" />
                            <span class="nav_label ms-3 text-start">
                                <span class="fw-bold text-break" id="user_disname">Chrisostomo Ibarra</span> <br />
                                <span class="text-break" id="user_num">#3120003</span>
                            </span>
                        </div>
                    </li>
                    <hr />
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none" href="../index.html">
                            <div class="d-flex align-items-center">
                                <span class="material-icons">grid_view</span>
                                <span class="nav_label ms-3">Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_active mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="curriculum/view_acadyear.html">
                            <div class="d-flex align-items-center">
                                <span class="material-icons">local_library</span>
                                <span class="nav_label ms-3">Curriculum</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons">class</span>
                                <span class="nav_label ms-3">Class</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons material-icons-round">manage_accounts</span>
                                <span class="nav_label ms-3">Users</span>
                            </div>
                        </a>
                    </li><li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons">calendar_month</span>
                                <span class="nav_label ms-3">Calendar</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons">settings</span>
                                <span class="nav_label ms-3">Settings</span>
                            </div>
                        </a>
                    </li>
                    <hr />
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="../../index.html">
                            <div class="d-flex align-items-center">
                                <span class="material-icons material-icons-round">logout</span>
                                <span class="nav_label ms-3">Logout</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

    <div class="d-flex gap-3 min-vh-100 p-2">
        <!-- Side Bar -->
        <div class="d-none d-sm-block sidebar block p-3">
            <ul class="d-flex flex-column list-unstyled">
                <li class="nav-item d-flex justify-content-between align-items-start" id="collapse-btn">
                    <img class="nav_label logo" src="../resources/img/logov1-trans.png" width="125px" height="auto" class="logo"/>
                    <span class="btn nav_select" id="collapse">
                        <i class="bi bi-list"></i>
                    </span>
                </li>
                <hr />
                <li class="nav-item text-center">
                    <div class="d-inline-flex align-items-center tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Juan Dela Cruz #3180003">
                        <img class="profile_nav" src="../resources/img/test-profile.png" />
                        <span class="nav_label ms-3 text-start">
                            <span class="fw-bold text-break" id="user_disname">Chrisostomo Ibarra</span> <br />
                            <span class="text-break" id="user_num">#3120003</span>
                        </span>
                    </div>
                </li>
                <hr />
            </ul>
            
            <ul class="d-flex flex-column gap-3 list-unstyled">
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="../admin/" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">grid_view</span>
                            <span class="nav_label ms-3">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item <?php if ($_GET['page'] == 'Curriculum') {echo 'nav_active';} else {echo 'nav_select';}?>">
                    <a class="nav-link text-reset tool_tip" href="?page=Curriculum&sub=AcademicYear" data-bs-toggle="tooltip" data-bs-placement="right" title="Courses">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">local_library</span>
                            <span class="nav_label ms-3">Curriculum</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item <?php if ($_GET['page'] == 'Class' || $_GET['page'] == 'AddClass') {echo 'nav_active';} else {echo 'nav_select';}?>">
                    <a class="nav-link text-reset tool_tip" href="?page=Class" data-bs-toggle="tooltip" data-bs-placement="right" title="Class">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">class</span>
                            <span class="nav_label ms-3">Class</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item <?php if ($_GET['page'] == 'Users') {echo 'nav_active';} else {echo 'nav_select';}?>">
                    <a class="nav-link text-reset tool_tip" href="?page=Users" data-bs-toggle="tooltip" data-bs-placement="right" title="Calendar">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">manage_accounts</span>
                            <span class="nav_label ms-3">Users</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Calendar">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">calendar_month</span>
                            <span class="nav_label ms-3">Calendar</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">settings</span>
                            <span class="nav_label ms-3">Settings</span>
                        </div>
                    </a>
                </li>
                <hr />
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="../../index.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round text-center">logout</span>
                            <span class="nav_label ms-3">Logout</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Section -->
        <div class="d-flex flex-column gap-3 flex-grow-1 main-section">
            <!-- Top Nav -->
            <ul class="d-none d-sm-flex flex-row list-unstyled align-items-center justify-content-end gap-4 px-4 p-2 m-0 block">
                <li>
                    <span class="me-3 time tool_tip_default">Time</span>
                    <span class="me-3 date tool_tip_default">Date</span>
                </li>
                <span class="vr"></span>
                <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
                    <span class="material-icons tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Messages">chat</span>
                    <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle">
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
                    <span class="material-icons tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Notifications">notifications</span>
                    <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle">
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <span class="vr"></span>
                <!-- Theme Switcher -->
                <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
                    <span class="material-icons tool_tip_default themeButton" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Select Theme">light_mode</span>
                </li>
            </ul>
            <!-- Content -->
            <div class="d-flex gap-3">
                <!-- Main Content -->
                <div class="d-flex flex-column flex-grow-1 gap-3 main-content">
                    <?php include('../admin/routes.php'); ?>
                </div>

                <div class="right-col d-flex flex-column gap-3 d-none d-xxl-flex">
                    <div class="calendar p-4 block">
                        <div class="calendar-container"></div>
                    </div>
                    <div class="block p-4 flex-grow-1">
                        <h6 class="fw-bold">Recent Activities</h6>
                        <ul class="list-unstyled recent_act">
                            <li class="nav-item nav_select">
                                <a class="nav-link text-reset text-decoration-none" href="#">
                                    <div class="d-flex align-items-center">
                                        <img class="profile_nav profile_pic_student" src="../resources/img/test-profile.png"/>
                                        <div class="ms-3">
                                            <p class="m-0">
                                                <span class="fw-bold">Juan Dela Cruz</span><br />
                                                Answered a <span class="fw-bold">Quiz</span> in
                                                <span class="fw-bold tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="top"  title="Advanced Mathematics">GEC-0001</span> <br/>
                                                <span class="fst-italic">February 28, 2023</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr/>
                            <li class="nav-item nav_select">
                                <a class="nav-link text-reset text-decoration-none" href="#">
                                    <div class="d-flex align-items-center">
                                        <img class="profile_nav profile_pic_instructor" src="../resources/img/test-profile.png"/>
                                        <div class="ms-3">
                                            <p class="m-0">
                                                <span class="fw-bold">Maria Clara</span><br />
                                                Posted a <span class="fw-bold">Quiz</span> in
                                                <span class="fw-bold tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="top"  title="Advanced Mathematics">GEC-0001</span> <br/>
                                                <span class="fst-italic">February 25, 2023</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr/>
                            <li class="nav-item nav_select">
                                <a class="nav-link text-reset text-decoration-none" href="#">
                                    <div class="d-flex align-items-center">
                                        <img class="profile_nav profile_pic_admin" src="../resources/img/test-profile.png"/>
                                        <div class="ms-3">
                                            <p class="m-0">
                                                <span class="fw-bold">Chrisostomo Ibarra</span><br />
                                                Created a <span class="fw-bold">User</span> : 
                                                <span class="fw-bold tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="top"  title="Padre Damaso">#3184672</span> <br/>
                                                <span class="fst-italic">February 25, 2023</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <hr/>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
    <!-- PLUGINS -->
        <!-- Bootstrap JS with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Calendar JS -->
        <script src="../resources/js/calendar.min.js"></script>
        <!-- Datatablse JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
        <!-- Smart Wizard -->
        <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
        <!-- JQuery Validate -->
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js" type="text/javascript"></script>
        <!-- Year Picker -->
        <script src= '../resources/js/yearpicker.js'></script>
<script>

var getWindowSize;
$(document).ready(function(){
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
        console.log(selectedIns);
    });
    courseIns.on( 'deselect', function ( e, dt, type, indexes ) {
        var count = courseIns.rows( { selected: true } ).count();
        selectedIns = courseIns.rows('.selected').data().toArray();
        $('#selectedIns').text(count);
        console.log(selectedIns);     
    });
    
    var tableYear = $('#viewAcadYear').DataTable(
        {
        "processing": true,
        "serverside": true,
        "ajax": "../admin/curriculum/functions/server_processing.php",

        "columnDefs":[
        {             // toggle visiblity of status and archived column
            "targets": [0,4,5] ,
            "visible": false ,
            "searchable": false
        },
        {             // centers column header and row data
            "targets": [0,1,2,3] ,
            className: "dt-center",
        },
        {             // disables ordering of certain columns
            "targets": [1,3] ,
            "orderable": false
        },
        {
            "targets": [6] ,    // populate options column
            "orderable": false, 
            className: "dt-center",
            "data":4,
            "render": function(data,type,row){
                var active = 
                "<button type='button' disabled class='btn btn-success'>Currently Active</button>";
                // edit either variable to add things
                var inactive = 
                '<a class="btn btn-success" href ="../admin/curriculum/functions/CRUD_functions.php?activeID='+ row[0] +'">Set as Active</a>'+
                "<button type='button' class='btn btn-danger' style='margin-bottom: 1%;' data-bs-toggle='modal' data-bs-target='#deleteModal'>Delete</button>";
                if(data==1){
                    $('#currentActive').text(row[1]);
                    $('#currentActiveYear').text(row[1]);
                    //console.log(row[2])
                    return active 
                }
                else{
                    return inactive
                }
            }
        }],

        }
    );

    var table = $('#example').DataTable( {
        // rowReorder: {
        //     selector: 'td:nth-child(2)'
        // },
        // responsive: true,
        dom: 'Bfrtip',
        
        buttons: [
        {
            
        text: '<i class="bi bi-arrow-clockwise"></i>'
        },
        {
        extend: 'colvis',
        text: '<i class="bi bi-layout-three-columns"></i>'

        },
        
        ]
    } );
    //gets row data on where the clicked button is located and assigns it
    $('#viewAcadYear').on('click','button',function()
    {
        var data = tableYear.row($(this).parents('tr')).data();
        document.getElementById("delID").value = data[0];
        $('#deletingYear').text(data[1]);
    }
    );
    //resets form inside modal on close
    $('#createModal').on('hidden.bs.modal', function () {
    $('#createModal form')[0].reset();
    });

    $(".yearpicker").yearpicker(
        {
        startYear: get_year(),
        selectedClass:'selected',
        disabledClass:'disabled',
        }
    );

    $('#view_course').DataTable({});
    $(function(){
        $('.calendar-container').calendar({
            date:new Date(),// today
            weekDayLength: 1,
            prevButton:'<i class="bi bi-chevron-left"></i>',
            nextButton:'<i class="bi bi-chevron-right"></i>',
            highlightSelectedWeekday:false, //this prevents blue weekday highlight
            todayButtonContent:"See Current Day"
        });
    });

    $('.tool_tip_default').tooltip('enable');
    $('#collapse').click(function(){
        $('.sidebar').toggleClass("mini");
        $(".sidebar .nav_label").toggleClass("d-none");
        $("#collapse-btn").toggleClass("justify-content-between");
        $("#collapse-btn, .nav_link").toggleClass("justify-content-center");
        $('.tool_tip').tooltip('toggleEnabled');
    });

    setInterval(function(){ 
        $(".time").text(display_time());
        $(".date").text(display_date());
    }, 1000);

    changeSidebar();
    themeSelector();
});
$(window).resize(changeSidebar);
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


function themeSelector() {
    const currentTheme = localStorage.getItem("theme") || "default";
    let setTheme = currentTheme;

    if (currentTheme == "dark") {
        $('.themeButton').text("dark_mode");
    }

    function activateTheme(themeName) {
        $('#themeCSS').attr("href", `../resources/css/themes/${themeName}.css`);
    }

    $('.themeButton').click(function(){
        $(this).text($(this).text() == 'dark_mode' ? 'light_mode' : 'dark_mode');
        if ($(this).text() == "dark_mode") {
            $('.themeButton').text("dark_mode");
            activateTheme("dark");
            setTheme = "dark";
        } else {
            $('.themeButton').text("light_mode");
            activateTheme("default");
            setTheme = "default";
        }

        localStorage.setItem("theme", setTheme);
    });

    activateTheme(currentTheme);
}


// Why is this done in JQuery? Because, it is cumbersome to toggle d-md-none and d-none. d-md-none overrides d-none
function changeSidebar() {
    var WindowSize = $(window).width();

    if (WindowSize <= 1400) {
        $('.sidebar').addClass("mini");
        $(".sidebar .nav_label").addClass("d-none");
        $("#collapse-btn").removeClass("justify-content-between");
        $("#collapse-btn, .nav_link").addClass("justify-content-center");
        $('.tool_tip').tooltip('enable');
    } else {
        $('.sidebar').removeClass("mini");
        $(".sidebar .nav_label").removeClass("d-none");
        $("#collapse-btn").addClass("justify-content-between");
        $("#collapse-btn, .nav_link").removeClass("justify-content-center");
        $('.tool_tip').tooltip('disable');
    }
}

function display_time() {
    const getDate = new Date(); // This gets whole date based on your current location

    // This is about time
    let hours = getDate.getHours(); // This only get hours
    let minutes = getDate.getMinutes(); // This only get minutes
    let ampm = hours >= 12 ? 'PM' : 'AM'; // If hours is greater than or equal to 12 (noon - military time) it is considered as PM, otherwise it is AM.
    
    hours = hours % 12; // Gets remainder (ex. 13 % 12 = 1, so its 1PM)
    hours = hours ? hours : 12; // Hour 0 will be 12. This prevents empty value
    minutes = minutes < 10 ? '0' + minutes : minutes; // This adds a "0" before the number if it is less than 10. Its an aesthetic thing.
    /*
    let second = getDate.getSeconds();
    second = second < 10 ? '0' + second : second;
    */
    let strTime = hours + ':' + minutes /*+ ':' + second*/ + ' ' + ampm;

    return strTime;
}
function get_year(){
    const getDate = new Date();
    let year = getDate.getFullYear();
    return year;

}
function display_date() {
    const getDate = new Date(); // This gets whole date based on your current location

    // This is about date
    const dateFormat = new Intl.DateTimeFormat('en-PH', {month: 'long'}); // Date formatter for set on PH
    let month = dateFormat.format(getDate);
    let day = getDate.getDate();
    let year = getDate.getFullYear();
    
    month = month < 10 ? '0' + month : month;
    day = day < 10 ? '0' + day : day;
    
    let strDate = month + ' ' + day + ', ' + year;

    return strDate;
}
</script>

</html>