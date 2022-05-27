<!--

    Work in Progress | Template by Nicolas Honrade

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | DigiTeach LMS</title>
    <!-- Website Icon -->
    <link rel="icon" href="../resources/img/logo-sm-trans.png">

    <!-- Bootstrap Style/Icons -->
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>
        

    <!-- Google Font/Icons -->
        <!-- Inter Font Style -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <!-- PLUGINS -->
        <!-- Calendar -->
        <link rel="stylesheet" href="../resources/css/calendarstyle.css" />
        <link rel="stylesheet" href="../resources/css/theme.css" />
        <!-- Date Range Picker -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!-- Custom CSS -->
    <link href="../resources/css/style.css" rel="stylesheet"/>
    <link href="../resources/css/themes/default.css" rel="stylesheet" id="themeCSS"/>

    
</head>
<body>

<div class="container-fluid">

<nav class="d-sm-none navbar block navbar-light m-2">
    <div class="container-fluid">
        <span class="btn nav_select navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar_mobile">
            <i class="bi bi-list"></i>
        </span>
        <a class="navbar-brand" href="#">
            <span class="material-icons me-3">chat</span>
            <span class="material-icons ">notifications</span>
        </a>
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
                <ul class="flex-column list-unstyled">
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
                    <li class="nav-item nav_active mb-2">
                        <a class="nav-link text-reset text-decoration-none" href="index.html">
                            <div class="d-flex align-items-center">
                                <span class="material-icons ">grid_view</span>
                                <span class="nav_label ms-3">Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="curriculum/view_acadyear.html">
                            <div class="d-flex align-items-center">
                                <span class="material-icons ">local_library</span>
                                <span class="nav_label ms-3">Curriculum</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons ">class</span>
                                <span class="nav_label ms-3">Class</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons ">manage_accounts</span>
                                <span class="nav_label ms-3">Users</span>
                            </div>
                        </a>
                    </li><li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons ">calendar_month</span>
                                <span class="nav_label ms-3">Calendar</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="#">
                            <div class="d-flex align-items-center">
                                <span class="material-icons ">settings</span>
                                <span class="nav_label ms-3">Settings</span>
                            </div>
                        </a>
                    </li>
                    <hr />
                    <li class="nav-item nav_select mb-2">
                        <a class="nav-link text-reset text-decoration-none tool_tip" href="../index.html">
                            <div class="d-flex align-items-center">
                                <span class="material-icons ">logout</span>
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
                <li class="nav-item nav_active">
                    <a class="nav-link text-reset tool_tip" href="../admin" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons ">grid_view</span>
                            <span class="nav_label ms-3">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="../layout/admin.php?page=Curriculum&sub=AcademicYear" data-bs-toggle="tooltip" data-bs-placement="right" title="Curriculum">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons ">local_library</span>
                            <span class="nav_label ms-3">Curriculum</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="../layout/admin.php?page=Class" data-bs-toggle="tooltip" data-bs-placement="right" title="Class">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons">class</span>
                            <span class="nav_label ms-3">Class</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="../layout/admin.php?page=Users" data-bs-toggle="tooltip" data-bs-placement="right" title="Users">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons">manage_accounts</span>
                            <span class="nav_label ms-3">Users</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Calendar">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons ">calendar_month</span>
                            <span class="nav_label ms-3">Calendar</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons">settings</span>
                            <span class="nav_label ms-3">Settings</span>
                        </div>
                    </a>
                </li>
                <hr />
                <li class="nav-item nav_select">
                    <a class="nav-link text-reset tool_tip" href="../index.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons text-center">logout</span>
                            <span class="nav_label ms-3">Logout</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Section -->
        <div class="d-flex flex-column gap-3 flex-grow-1 main-section">
            <!-- Top Nav -->
            <div class="d-none d-sm-flex align-items-center justify-content-end px-4 p-2 block">
                <a class="text-decoration-none">
                    <span class="me-3 time tool_tip_default">Time</span>
                    <span class="me-3 date tool_tip_default">Date</span>
                </a>
                
                <span class="vr me-3"></span>

                <span class="top_nav d-flex align-items-center justify-content-center position-relative p-2 me-3 rounded-circle" style="width: 40px; height: 40px;">
                    <span class="material-icons tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Messages">chat</span>
                    <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle">
                      
                      <span class="visually-hidden">unread messages</span>
                    </span>
                </span>
                <span class="top_nav d-flex align-items-center justify-content-center position-relative p-2 me-3 rounded-circle" style="width: 40px; height: 40px;">
                    <span class="material-icons tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Notifications">notifications</span>
                    <span class="position-absolute start-100 p-2 translate-middle badge rounded-circle">
                      
                      <span class="visually-hidden">unread messages</span>
                    </span>
                </span>

                <span class="vr me-3"></span>

                <!-- Theme Switcher -->
                <span class="top_nav d-flex align-items-center justify-content-center position-relative p-2 rounded-circle" style="width: 40px; height: 40px;">
                    <span class="material-icons tool_tip_default" id="themeButton" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Switch to Dark Mode">light_mode</span>
                </span>
                
            </div>
            <!-- Content -->
            <div class="d-flex gap-3">
                <!-- Main Content -->
                <div class="d-flex flex-column flex-grow-1 gap-3 main-content">
                    <!-- Page Header -->
                    <div class="block" id="page-header">
                        <div class="px-4 pt-4">
                            <h3 class="mb-3 fw-bold">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons ">grid_view</span>
                                    <span class="ms-3">Dashboard</span>
                                </div>
                            </h3>
                            <h6 class="mb-3">Current Academic year: <span id="currentActive" class="fw-bold">2023-2024</span></h6>
                        </div>
                        <nav class="block bread_block">
                            <ol class="breadcrumb px-4 py-2 m-0">
                                <li class="breadcrumb-item"><a id="breadcrumbActive" class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Content -->
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-wrap gap-3 counter">
                            <div class="card block p-2 card-red flex-grow-1">
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold"><span class="material-icons">school</span><span class="nav_label ms-3">50</span></h3>
                                    <h6 class="card-subtitle">Classes</h6>
                                </div>
                            </div>
                            <div class="card block p-2 card-blue flex-grow-1">
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold"><span class="material-icons">people</span><span id="userTotal" class="nav_label ms-3">50</span></h3>
                                    <h6 class="card-subtitle">Users</h6>
                                </div>
                            </div>
                            <div class="card block p-2 card-green flex-grow-1">
                                <div class="card-body text-center">
                                    <h3 class="card-title fw-bold"><span class="material-icons">how_to_reg</span><span class="nav_label ms-3">50</span></h3>
                                    <h6 class="card-subtitle">Active Users</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row block mx-2">
                            <div class="col-md-7 col-12 p-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-bold">Login Activity</h6>
                                    <div id="reportrange">
                                        <span></span>
                                        <i class="bi bi-chevron-down ms-3"></i>
                                    </div>
                                </div>
                                <div class="chart_container" style="padding: 0; position: relative;">
                                    <div id="loginChart"></div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 p-4">
                                <h6 class="fw-bold">Recent Activities</h6>
                                <ul class="list-unstyled recent_act">
                                    <li class="nav-item nav_select">
                                        <a class="nav-link text-reset text-decoration-none" href="#">
                                            <div class="d-flex align-items-center">
                                                <img class="profile_pic_student" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
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
                                                <img class="profile_pic_instructor" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
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
                                                <img class="profile_pic_admin" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
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
                <div class="right-col d-flex flex-column gap-3 d-none d-xxl-flex">
                    <div class="calendar p-4 block">
                        <div class="calendar-container"></div>
                    </div>
                    <div class="block p-4 flex-grow-1">
                        <h6 class="fw-bold">Shortcuts</h6>
                        <ul class="list-unstyled">
                            <li class="nav-item nav_select text-reset">
                                <a class="nav-link text-reset text-decoration-none" href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons ">person_add</span>
                                        <span class="nav_label ms-3">Add User</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item nav_select text-reset">
                                <a class="nav-link text-reset text-decoration-none" href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons ">queue</span>
                                        <span class="nav_label ms-3">Add Subject</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item nav_select text-reset">
                                <a class="nav-link text-reset text-decoration-none" href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons ">add_circle</span>
                                        <span class="nav_label ms-3">Add Class</span>
                                    </div>
                                </a>
                            </li>
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
        <!-- Apex Chart -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <!-- Calendar JS -->
        <script src="../resources/js/calendar.min.js"></script>
        <!-- Moment JS-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <!-- Date Range Picker -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<script>

var getWindowSize;
$(document).ready(function(){

    $.ajax({
    type: "GET",
    url: "retrieve_total.php",
    success: function(result) {
        var totals = JSON.parse(result);
        $('#userTotal').text(totals.recorduserTotal);
        $('#currentActive').text(totals.data[0]);
        $('#breadcrumbActive').text(totals.data[0]);
    }
    })
    
    $('#reportrange').daterangepicker();
    
    $(function() {
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
    });

    $(function(){
        $('.calendar-container').calendar({
            date:new Date(),// today
            weekDayLength: 3,
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


function themeSelector() {
    const currentTheme = localStorage.getItem("theme") || "default";
    let setTheme = currentTheme;
    var options = {
        colors: ['#2196f3'],
        theme: {
            mode: setTheme, 
        },
        chart: {
            type: 'line',
            background: 'transparent'
        },
        series: [{
            name: 'sales',
            data: [30,40,35,50,49,60,70]
        }],
        xaxis: {
            categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        }
    }
    var chart = new ApexCharts(document.querySelector("#loginChart"), options);


    if (currentTheme == "dark") {
        $('#themeButton').text("dark_mode");
        $('#themeButton').attr("data-bs-original-title", "Switch to Light Mode");
    }

    function activateTheme(themeName) {
        $('#themeCSS').attr("href", `../resources/css/themes/${themeName}.css`);
    }

    $('#themeButton').click(function(){
        $(this).text($(this).text() == 'dark_mode' ? 'light_mode' : 'dark_mode');
        if ($(this).text() == "dark_mode") {
            setTheme = "dark";
            $(this).attr("data-bs-original-title", "Switch to Light Mode");
        } else {
            setTheme = "default";
            $(this).attr("data-bs-original-title", "Switch to Dark Mode");
        }

        chart.updateOptions({
            theme: {
                mode: setTheme, 
            }
        });
        activateTheme(setTheme);

        localStorage.setItem("theme", setTheme);
    });

    
    chart.render();
    activateTheme(currentTheme);
}


// Why is this done in JQuery? Because, it is cumbersome to toggle d-md-none and d-none. d-md-none overrides d-none
function changeSidebar() {
    var WindowSize = $(window).width();

    if (WindowSize <= 1200) {
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