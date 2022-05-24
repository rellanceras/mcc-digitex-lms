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
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block block2">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
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
                    <h3 class="card-title fw-bold"><span class="material-icons">people</span><span class="nav_label ms-3">50</span></h3>
                    <h6 class="card-subtitle">Users</h6>
                </div>
            </div>
            <div class="card block p-2 card-green flex-grow-1">
                <div class="card-body text-center">
                    <h3 class="card-title fw-bold"><span class="material-icons">how_to_reg</span><span class="nav_label ms-3">50</span></h3>
                    <h6 class="card-subtitle">Active Users</h6>
                </div>
            </div>
            <div class="card block p-2 card-violet flex-grow-1">
                <div class="card-body text-center">
                    <h3 class="card-title fw-bold"><span class="material-icons">task_alt</span><span class="nav_label ms-3">50</span></h3>
                    <h6 class="card-subtitle">Actions Done</h6>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="row mx-2">
                <div class="col-md-7 col-12 p-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold">Login Activity</h6>
                        <div id="reportrange">
                            <span></span>
                            <i class="bi bi-chevron-down ms-3"></i>
                        </div>
                    </div>
                    <div class="chart_container" style="padding: 0; position: relative;">
                        <div id="loginChart" class="charts"></div>
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
</div>

<script>
$(document).ready(function(){
    init_adminChartLogin();
});

function get_theme() {
    const currentTheme = localStorage.getItem("theme") || "default";
    return currentTheme;
}
/*   --- ADMIN LOGIN CHART ---   */

// adminChartLogin Initiate
function init_adminChartLogin() {
    if ($('#loginChart').length == 0) { return; }
    console.log("Admin Login Chart Initialized");

    var admin_chartLoginOptions = { // For some reason, apexcharts won't accept returned values... WTF
        colors: ['#2196f3'],
        theme: {
            mode: get_theme(), 
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
    };
    var admin_chartLogin = new ApexCharts(document.querySelector("#loginChart"), admin_chartLoginOptions);


    $('.themeButton').click(function(){
        if ($('#loginChart').length == 0) { return; }
        console.log("Admin Login Chart Theme Updated");
        admin_chartLogin.updateOptions({theme:{mode:get_theme()}});
        
    });

    $('.sb_link').click(function() {
        admin_chartLogin.destroy();
    });
    admin_chartLogin.render();
}
</script>