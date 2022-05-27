<!--

    Work in Progress | Template by Nicolas Honrade

-->

<?php include('admin-header.php'); ?>
<body>
<div class="container-fluid">

<nav class="d-md-none navbar block navbar-light m-2">
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
        <div class="d-none d-md-block sidebar block p-3">
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
                <li class="nav-item nav_select sb_link" id="dashboard">
                    <a class="nav-link text-reset tool_tip" data-page="dashboard" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">grid_view</span>
                            <span class="nav_label ms-3">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select sb_link" id="curriculum">
                    <a class="nav-link text-reset tool_tip" data-page="curriculum" data-bs-toggle="tooltip" data-bs-placement="right" title="Courses">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">local_library</span>
                            <span class="nav_label ms-3">Curriculum</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select sb_link" id="class">
                    <a class="nav-link text-reset tool_tip" data-page="class" data-bs-toggle="tooltip" data-bs-placement="right" title="Class">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">class</span>
                            <span class="nav_label ms-3">Class</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select sb_link" id="users">
                    <a class="nav-link text-reset tool_tip" data-page="users" data-bs-toggle="tooltip" data-bs-placement="right" title="Calendar">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">manage_accounts</span>
                            <span class="nav_label ms-3">Users</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select sb_link" id="calendar">
                    <a class="nav-link text-reset tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Calendar">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">calendar_month</span>
                            <span class="nav_label ms-3">Calendar</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav_select sb_link" id="settings">
                    <a class="nav-link text-reset tool_tip" data-page="settings" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                        <div class="d-flex align-items-center justify-content-center nav_link">
                            <span class="material-icons material-icons-round">settings</span>
                            <span class="nav_label ms-3">Settings</span>
                        </div>
                    </a>
                </li>
                <hr />
                <li class="nav-item nav_select sb_link">
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
            <ul class="d-none d-md-flex flex-row list-unstyled align-items-center justify-content-end gap-4 px-4 p-2 m-0 block">
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

                <li class="dropdown topnav_select d-flex align-items-center justify-content-center position-relative p-2" data-bs-toggle="dropdown">
                    <span class="material-icons tool_tip_default" data-bs-placement="bottom" title="Notifications">notifications</span>
                    <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle" >
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
                <div class="dropdown-menu block ps-0 pt-4 mt-3">
                <ul>
                        <h6 class="fw-bold ms-4">Notifications</h6>
                        <li class="dropdown-item nav_select">
                            <a class="nav-link text-reset text-decoration-none" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="profile_pic_student" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
                                    <div class="ms-3">
                                        <p class="m-0">
                                            <span class="fw-bold">Juan Dela Cruz</span><br />
                                            Answered a <span class="fw-bold">Quiz</span> in
                                            <span class="fw-bold tool_tip_default" data-bs-placement="top"  title="Advanced Mathematics">GEC-0001</span> <br/>
                                            <span class="fst-italic">February 28, 2023</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <hr />
                        <li class="dropdown-item nav_select">
                            <a class="nav-link text-reset text-decoration-none" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="profile_pic_instructor" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
                                    <div class="ms-3">
                                        <p class="m-0">
                                            <span class="fw-bold">Maria Clara</span><br />
                                            Posted a <span class="fw-bold">Quiz</span> in
                                            <span class="fw-bold tool_tip_default" data-bs-placement="top"  title="Advanced Mathematics">GEC-0001</span> <br/>
                                            <span class="fst-italic">February 25, 2023</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <hr/>
                        <li class="dropdown-item nav_select">
                            <a class="nav-link text-reset text-decoration-none" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="profile_pic_admin" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
                                    <div class="ms-3">
                                        <p class="m-0">
                                            <span class="fw-bold">Chrisostomo Ibarra</span><br />
                                            Created a <span class="fw-bold">User</span> : 
                                            <span class="fw-bold tool_tip_default" data-bs-placement="top"  title="Padre Damaso">#3184672</span> <br/>
                                            <span class="fst-italic">February 25, 2023</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <hr/>
                        <li class="dropdown-item nav_select">
                            <a class="nav-link text-reset text-decoration-none" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="profile_pic_admin" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
                                    <div class="ms-3">
                                        <p class="m-0">
                                            <span class="fw-bold">Chrisostomo Ibarra</span><br />
                                            Created a <span class="fw-bold">User</span> : 
                                            <span class="fw-bold tool_tip_default" data-bs-placement="top"  title="Padre Damaso">#3184672</span> <br/>
                                            <span class="fst-italic">February 25, 2023</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <hr/>
                        <li class="dropdown-item nav_select">
                            <a class="nav-link text-reset text-decoration-none" href="#">
                                <div class="d-flex align-items-center">
                                    <img class="profile_pic_admin" src="../resources/img/test-profile.png" width="42px" height="42px" style="border-radius: 50px;" />
                                    <div class="ms-3">
                                        <p class="m-0">
                                            <span class="fw-bold">Chrisostomo Ibarra</span><br />
                                            Created a <span class="fw-bold">User</span> : 
                                            <span class="fw-bold tool_tip_default" data-bs-placement="top"  title="Padre Damaso">#3184672</span> <br/>
                                            <span class="fst-italic">February 25, 2023</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <hr/>
                    </ul>
                </div>
                    
                <!-- <span class="vr"></span>
                <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
                    <span class="material-icons tool_tip_default themeButton" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Select Theme">light_mode</span>
                </li> -->
            </ul>
            <!-- Content -->
            <div class="d-flex gap-3">
                <!-- Main Content -->
                <div class="d-flex flex-column flex-grow-1 gap-3" id="mainContent">
                    <?php //include('../admin/routes.php'); ?>
                </div>

                <div class="right-col d-flex flex-column gap-3 d-none d-xxl-flex">
                    <div class="calendar p-4 block">
                        <div class="calendar-container"></div>
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
    <!-- Moment JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <!-- Date Range Picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- Datatables JS -->
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

<script>

/*   --- SIDEBAR ---   */

// Call function when browser window is resized
$(window).resize(adapt_sidebar);

// Change sidebar size when window is <= 1200px
function adapt_sidebar() {
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

/*   --- WEBSITE THEME ---   */

// Get current theme variable
function get_theme() {
    const currentTheme = localStorage.getItem("theme") || "default";
    return currentTheme;
}

// Theme Initiate
function init_theme() {
    console.log("Theme Initiated");
    if (get_theme() == "dark") {
        $('.themeButton').text("dark_mode");
    }
    $('#themeCSS').attr("href", `../resources/css/themes/${get_theme()}.css`);
}

/*   --- Page Navigation ---   */

// Get current page variable
function get_curPage() {
    const currentPage = localStorage.getItem("page") || "dashboard";
    return currentPage;
}


function init_page() {
    // Initializes the page based on the current page variable
    $.ajax({
        type: 'GET',
        url: '../admin/navAdmin.json',
        dataType: 'html',
    }).done(function(response) {
        var data = JSON.parse(response);
        $('.sb_link').removeClass('nav_active');
        switch(get_curPage()) {
            case 'curriculum':
                $('#mainContent').load(data[0].curriculum.curriculumIndex);
                $('#curriculum').addClass('nav_active');
                break;
            case 'class':
                $('#mainContent').load(data[0].class.classIndex);
                $('#class').addClass('nav_active');
                break;
            case 'users':
                $('#mainContent').load(data[0].users.usersIndex);
                $('#users').addClass('nav_active');
                break;
            case 'settings':
                $('#mainContent').load(data[0].settings.settingsIndex);
                $('#settings').addClass('nav_active');
                break;
            default:
                $('#mainContent').load(data[0].dashboard);
                $('#dashboard').addClass('nav_active');
        }
        document.title = get_curPage().charAt(0).toUpperCase() + get_curPage().slice(1)  + ' | DigiTex LMS';
    });

    // Selects a new page and saves the page in the browser's local storage
    $('.sb_link').click(function() {
        var page = $(this).find('a').attr('data-page');
        $('.sb_link').removeClass('nav_active');
        $('.sb_link').addClass('nav_select');

        $(this).addClass('nav_active');
        $(this).removeClass('nav_select');

        
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'curriculum':
                    $('#mainContent').load(data[0].curriculum.curriculumIndex);
                    break;
                case 'class':
                    $('#mainContent').load(data[0].class.classIndex);
                    break;
                case 'users':
                    $('#mainContent').load(data[0].users.usersIndex);
                    break;
                case 'settings':
                    $('#mainContent').load(data[0].settings.settingsIndex);
                    break;
                default:
                    $('#mainContent').load(data[0].dashboard);
            }
            localStorage.setItem("page", page);
            document.title = get_curPage().charAt(0).toUpperCase() + get_curPage().slice(1)  + ' | DigiTex LMS';
        });
    });
}

/*   --- Time and Date ---   */

// Gets current time
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

// Gets current date
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

/*   --- Side Calendar ---   */

// Initializes the calendar on the right side
function init_sideCalendar() {
    $('.calendar-container').calendar({
        date:new Date(),// today
        weekDayLength: 1,
        prevButton:'<i class="bi bi-chevron-left"></i>',
        nextButton:'<i class="bi bi-chevron-right"></i>',
        highlightSelectedWeekday:false, //this prevents blue weekday highlight
        todayButtonContent:"See Current Day"
    });
}

/*   --- Tooltips ---   */

// Initializes the tooltips
function init_tooltip() {
    $('.tool_tip_default').tooltip('enable');
    $('#collapse').click(function(){
        $('.sidebar').toggleClass("mini");
        $(".sidebar .nav_label").toggleClass("d-none");
        $("#collapse-btn").toggleClass("justify-content-between");
        $("#collapse-btn, .nav_link").toggleClass("justify-content-center");
        $('.tool_tip').tooltip('toggleEnabled');
    });
}

/*   --- Function call on document ready ---   */

$(document).ready(function(){
    adapt_sidebar();
    init_theme();
    init_page();
    init_sideCalendar();
    init_tooltip();

    // Updates the time in 1 sec interval
    setInterval(function(){ 
        $(".time").text(display_time());
        $(".date").text(display_date());
    }, 1000);
});
</script>

</html>