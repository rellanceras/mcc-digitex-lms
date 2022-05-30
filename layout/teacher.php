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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <!-- Calendar -->
    <link rel="stylesheet" href="../resources/css/calendarstyle.css" />
    <link rel="stylesheet" href="../resources/css/theme.css" />


    <!-- Custom CSS -->
    <link href="../resources/css/style.css" rel="stylesheet"/>

    <link rel="icon" href="../resources/img/logo-sm-trans.png">
</head>
<body>

<div class="container-fluid p-0">

    <nav class="d-sm-none navbar content navbar-light m-2">
        <div class="container-fluid">
            <span class="btn nav_select navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </span>
            <a class="navbar-brand" href="#"><i class="bi bi-chat me-4"></i><i class="bi bi-bell"></i></a>
            <div class="offcanvas offcanvas-start content m-3" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    <img class="nav_label logo" src="../resources/img/logov2-trans.png" width="125px" height="auto" class="logo"/>
                </h5>
                <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
                </div>
                <div class="offcanvas-body p-0">
                        <ul class="flex-column list-unstyled p-3">
                            <li class="nav-item text-center">
                                <a class="text-decoration-none">
                                    <div class="d-inline-flex align-items-center">
                                        <img class="profile_pic" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
                                        <span class="nav_label ms-3 text-start">
                                            <span class="fw-bold text-break" id="user_disname">Juan Dela Cruz</span> <br />
                                            <span class="text-break" id="user_num">#3180003</span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <hr />
                            <li class="nav-item nav_select active">
                                <a class="nav-link text-decoration-none">
                                    <i class="bi bi-house-door"></i> <span class="ms-3">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item nav_select">
                                <a class="nav-link text-decoration-none">
                                    <i class="bi bi-book"></i> <span class="ms-3">Courses</span>
                                </a>
                            </li>
                            <li class="nav-item nav_select">
                                <a class="nav-link text-decoration-none">
                                    <i class="bi bi-mortarboard"></i> <span class="ms-3">Grades</span>
                                </a>
                            </li>
                            <li class="nav-item nav_select">
                                <a class="nav-link text-decoration-none">
                                    <i class="bi bi-calendar"></i> <span class="ms-3">Calendar</span>
                                </a>
                            </li>
                            <li class="nav-item nav_select">
                                <a class="nav-link text-decoration-none">
                                    <i class="bi bi-gear"></i> <span class="ms-3">Settings</span>
                                </a>
                            </li>
                            <hr />
                            <li class="nav-item nav_select">
                                <a class="nav-link text-decoration-none">
                                    <i class="bi bi-box-arrow-right"></i> <span class="ms-3">Logout</span>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
    </nav>

    <div class="d-flex gap-3 min-vh-100 p-2">
        <div class="sidebar content p-3">
            <ul class="flex-column list-unstyled">
                <li class="nav-item text-end d-flex justify-content-between align-items-start" id="collapse-btn">
                    <img class="nav_label logo" src="../resources/img/logov1-trans.png" width="125px" height="auto" class="logo"/>
                    <span class="btn nav_select" id="collapse">
                        <i class="bi bi-list"></i>
                    </span>
                </li>
                <hr />
                <li class="nav-item text-center">
                    <a class="text-decoration-none">
                        <div class="d-inline-flex align-items-center tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Juan Dela Cruz #3180003">
                            <img class="profile_pic" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
                            <span class="nav_label ms-3 text-start">
                                <span class="fw-bold text-break" id="user_disname">Juan Dela Cruz</span> <br />
                                <span class="text-break" id="user_num">#3180003</span>
                            </span>
                        </div>
                    </a>
                </li>
                <hr />
            </ul>
            
            <ul class="flex-column list-unstyled">
                <li class="nav-item nav_select active">
                    <a class="nav-link text-decoration-none tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                        
                        <img src="../resources/img/dash.png" width="25px" height="auto">
                        <span class="nav_label ms-3">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-decoration-none tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Courses">
                        
                            <img src="../resources/img/book.png" width="25px" height="auto">
                            <span class="nav_label ms-3">Courses</span>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-decoration-none tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Grades">
                        <img src="../resources/img/grade.png" width="25px" height="auto">
                        <span class="nav_label ms-3">Grades</span>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-decoration-none tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Calendar">
                        <img src="../resources/img/cal.png" width="25px" height="auto">
                        <span class="nav_label ms-3">Calendar</span>
                    </a>
                </li>
                <li class="nav-item nav_select">
                    <a class="nav-link text-decoration-none tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                        <i class="bi bi-gear"></i>
                        <span class="nav_label ms-3">Settings</span>
                    </a>
                </li>
                <hr />
                <li class="nav-item nav_select">
                    <a class="nav-link text-decoration-none tool_tip" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                        <img src="../resources/img/logout.png" width="25px" height="auto">
                        <span class="nav_label ms-3">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-grow-1 d-flex flex-column gap-3">
            <div class="content d-none d-sm-block d-xxl-none">
                <div class="px-4 py-2 text-end align-middle">
                    <span class="me-3 time tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Time">Time goes here</span>
                    <span class="me-3 date tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Date">Date goes here</span>
                    <span class="vr me-3"></span>
                    <i class="bi bi-chat me-3 tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Messages"></i>
                    <i class="bi bi-bell tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="left"  title="Notifications"></i>
                </div>
            </div>
            <div class="content" id="page-header">
                <div class="px-4 pt-4">
                    <h3 class="mb-3 fw-bold"><i class="bi bi-house-door me-2"></i> Dashboard</h3>
                    <p>Current Academic year: <span class="fw-bold">2023-2024</span></p>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb px-4 py-2 m-0">
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="content p-4 flex-grow-1" id="main-content">
                No content yet...
            </div>
        </div>
        <div class="d-none d-xxl-flex flex-column gap-3">
            <div class="content">
                <div class="px-4 py-2 text-end align-middle">
                    <span class="me-3 time tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Time">Time goes here</span>
                    <span class="me-3 date tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Date">Date goes here</span>
                    <span class="vr me-3"></span>
                    <i class="bi bi-chat me-3 tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Messages"></i>
                    <i class="bi bi-bell tool_tip_default" data-bs-toggle="tooltip" data-bs-placement="left"  title="Notifications"></i>
                </div>
            </div>
            <div class="calendar p-4 content">
                <div class="calendar-container"></div>
            </div>
            <div class="content p-4 flex-grow-1">
                test
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../resources/js/calendar.min.js"></script>

<script type="text/javascript">

    var getWindowSize;
    $(document).ready(function(){
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
            $("#collapse-btn").toggleClass("text-end");
            $("#collapse-btn").toggleClass("text-center");
            $('.tool_tip').tooltip('toggleEnabled');
        });
        setInterval(function(){ 
            $(".time").text(display_time());
            $(".date").text(display_date());
        }, 1000);
        changeSidebar();
    });
    $(window).resize(changeSidebar);

    

    // Why is this done in JQuery? Because, it is cumbersome to toggle d-md-none and d-none. d-md-none overrides d-none
    function changeSidebar() {
        var WindowSize = $(window).width();

        if (WindowSize < 1200) {
            $('.sidebar').addClass("mini");
            $(".sidebar .nav_label").addClass("d-none");
            $("#collapse-btn").addClass("text-end");
            $("#collapse-btn").addClass("text-center");
            $('.tool_tip').tooltip('enable');
        } else {
            $('.sidebar').removeClass("mini");
            $(".sidebar .nav_label").removeClass("d-none");
            $("#collapse-btn").removeClass("text-end");
            $("#collapse-btn").removeClass("text-center");
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