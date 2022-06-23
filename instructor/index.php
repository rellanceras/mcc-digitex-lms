<!--

    Work in Progress | Template by Nicolas Honrade

-->

<?php include('header.php'); ?>

<body id="main">

<div class="container-fluid p-0">

<!-- Mobile Navigation -->
<div class="d-md-none d-flex justify-content-between px-3 py-2 m-2 block_md">

    <!-- Button for showing sidebar (mobile) -->
    <button class="btn nav_select navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar_mobile">
        <span class="material-icons">menu</span>
    </button>

    <!-- Topbar (mobile) -->
    <ul class="d-flex list-unstyled align-items-center justify-content-end gap-4 m-0">
        <li class="topnav_select d-flex align-items-center justify-content-center position-relative p-2">
            <span class="material-icons" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Messages">chat</span>
            <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle">
                <span class="visually-hidden">unread messages</span>
            </span>
        </li>

        <li class="dropdown topnav_select d-flex align-items-center justify-content-center position-relative p-2" data-bs-toggle="dropdown">
            <span class="material-icons" data-bs-placement="bottom" title="Notifications">notifications</span>
            <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle" >
                <span class="visually-hidden">unread messages</span>
            </span>
        </li>

        <!-- Notifications tab (mobile) -->
        <div class="dropdown-menu ps-0 pt-4 mt-3 block_md" style="left: auto !important;">
            <ul class="ps-0">
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
    </ul>

    <!-- Sidebar (mobile) -->
    <div class="offcanvas offcanvas-start m-3 block_md" tabindex="-1" id="sidebar_mobile">
        <div class="offcanvas-header">
            <img class="logo" src="" width="125px" height="auto"/>
            <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="d-flex flex-column list-unstyled gap-3">
                <li class="nav-item">
                    <div class="d-inline-flex align-items-center nav-link text-reset">
                        <img class="profile_nav" src="../resources/img/test-profile.png" />
                        <span class="nav_label ms-3 text-start">
                            <span class="fw-bold text-break" id="user_disname">Test name</span> <br />
                            <span class="text-break" id="user_num">#3120003</span>
                        </span>
                    </div>
                </li>
                <hr />
                <li class="nav-item main_link link_dashboard nav_select" data-bs-dismiss="offcanvas">
                    <a class="nav-link text-reset" data-page="dashboard">
                        <div class="d-flex align-items-center">
                            <span class="material-icons">grid_view</span>
                            <span class="nav_label ms-3">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item main_link link_curriculum nav_select" data-bs-dismiss="offcanvas">
                    <a class="nav-link text-reset" data-page="curriculum">
                        <div class="d-flex align-items-center">
                            <span class="material-icons">local_library</span>
                            <span class="nav_label ms-3">Curriculum</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item main_link link_class" data-bs-dismiss="offcanvas">
                    <a class="nav-link text-reset" data-page="class">
                        <div class="d-flex align-items-center">
                            <span class="material-icons">class</span>
                            <span class="nav_label ms-3">Class</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item main_link link_users" data-bs-dismiss="offcanvas">
                    <a class="nav-link text-reset" data-page="users">
                        <div class="d-flex align-items-center">
                            <span class="material-icons">manage_accounts</span>
                            <span class="nav_label ms-3">Users</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item main_link link_calendar" data-bs-dismiss="offcanvas">
                    <a class="nav-link text-reset" data-page="calendar">
                        <div class="d-flex align-items-center">
                            <span class="material-icons">calendar_month</span>
                            <span class="nav_label ms-3">Calendar</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item main_link link_settings" data-bs-dismiss="offcanvas">
                    <a class="nav-link text-reset" data-page="settings">
                        <div class="d-flex align-items-center">
                            <span class="material-icons">settings</span>
                            <span class="nav_label ms-3">Settings</span>
                        </div>
                    </a>
                </li>
                <hr />
                <li class="nav-item nav_select sb_link" data-bs-dismiss="offcanvas">
                    <a class="nav-link text-reset" href="../index.php">
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

<!-- The whole page -->
<div class="d-flex gap-3 min-vh-100 p-2">
    <!-- Sidebar (desktop) -->
    <div class="d-none d-md-block p-3 block_md block_primary" id="sidebar_desktop">
        <ul class="d-flex flex-column gap-3 list-unstyled">
            <li class="nav-item">
                <div class="d-flex align-items-center justify-content-between" id="collapse-btn">
                    <img class="nav_label logo" src="" width="125px" height="auto"/>
                    <a class="btn" id="collapse">
                        <span class="material-icons">menu</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-reset">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <img class="profile_nav" src="../resources/img/test-profile.png" />
                        <span class="nav_label flex-grow-1">
                            <span class="fw-bold" id="user_disname">Test name</span> <br />
                            <span class="" id="user_num">#3120003</span>
                        </span>
                    </div>
                </a>
            </li>
            <!--
                '<li>' classes:
                - nav-item (bootstrap class)
                - main_link (identifier for highlighting when clicked)
                - link_<page_name> (identifier to change nav_select or nav_active)
                - nav_select (identifier for hover) *can be changed with nav_active (identifier for highlight)
                - tool_tip (identifier for tooltips)
            -->
            <li class="nav-item block_sm main_link link_dashboard nav_select tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                <a class="nav-link text-reset" href="#" data-page="dashboard">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <span class="material-icons">grid_view</span>
                        <span class="nav_label flex-grow-1">Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="nav-item block_sm main_link link_qbank nav_select tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Question Bank">
                <a class="nav-link text-reset" href="#" data-page="qbank">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <span class="material-icons">quiz</span>
                        <span class="nav_label flex-grow-1">Question Bank</span>
                    </div>
                </a>
            </li>
            <li class="nav-item block_sm main_link link_class nav_select tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Class">
                <a class="nav-link text-reset" href="#" data-page="class">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <span class="material-icons">class</span>
                        <span class="nav_label flex-grow-1">Class</span>
                    </div>
                </a>
            </li>
            <li class="nav-item block_sm main_link link_grades nav_select tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Grades">
                <a class="nav-link text-reset" href="#" data-page="grades">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <span class="material-icons">school</span>
                        <span class="nav_label flex-grow-1">Grades</span>
                    </div>
                </a>
            </li>
            <li class="nav-item block_sm main_link link_calendar nav_select tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Calendar">
                <a class="nav-link text-reset" href="#" data-page="calendar">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <span class="material-icons">calendar_month</span>
                        <span class="nav_label flex-grow-1">Calendar</span>
                    </div>
                </a>
            </li>
            <li class="nav-item block_sm main_link link_settings nav_select tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                <a class="nav-link text-reset" href="#" data-page="settings">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <span class="material-icons">settings</span>
                        <span class="nav_label flex-grow-1">Settings</span>
                    </div>
                </a>
            </li>
            <hr />
            <li class="nav-item block_sm main_link nav_select tool_tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                <a class="nav-link text-reset" href="../index.php">
                    <div class="d-flex align-items-center justify-content-center gap-3 nav_link">
                        <span class="material-icons text-center">logout</span>
                        <span class="nav_label flex-grow-1">Logout</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Section -->
    <div class="d-flex flex-column gap-3 flex-grow-1 main-section">
        <!-- Topbar (desktop) -->
        <ul class="d-none d-md-flex flex-row list-unstyled align-items-center justify-content-end gap-4 px-4 p-2 m-0 block_md block_primary">
            <li>
                <span class="me-3 time tool_tip_default">Time</span>
                <span class="me-3 date tool_tip_default">Date</span>
            </li>
            <span class="vr"></span>
            <li class="d-flex align-items-center justify-content-center position-relative p-2 block_md block_secondary topnav_select">
                <a class="nav-link text-reset tool_tip_default" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Messages">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="material-icons">chat</span>
                    </div>
                </a>
                <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle">
                    <span class="visually-hidden">unread messages</span>
                </span>
            </li>

            <li class="dropdown d-flex align-items-center justify-content-center position-relative p-2 block_md block_secondary topnav_select" data-bs-toggle="dropdown">
                <a class="nav-link text-reset tool_tip_default" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="material-icons">notifications</span>
                    </div>
                </a>
                <span class="position-absolute p-2 start-100 translate-middle badge rounded-circle" >
                    <span class="visually-hidden">unread messages</span>
                </span>
            </li>
            <div class="dropdown-menu ps-0 pt-4 mt-3 block_md block_primary">
                <ul class="ps-0">
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
        </ul>
        <!-- Content -->
        <div class="d-flex gap-3">
            <!-- Main Content -->
            <div class="d-flex flex-column flex-grow-1 gap-3" id="mainContent"> <!--This is where the pages are loaded-->
                
            </div>

            <!-- Calendar -->
            <div class="right-col d-flex flex-column gap-3 d-none d-xxl-flex">
                <div class="calendar p-4 block_md block_primary">
                    <div class="calendar-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


</body>
<?php include('footer.php'); ?>

