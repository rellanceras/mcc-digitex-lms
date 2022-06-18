<!-- Page Header -->
<div class="block_md block_primary" id="page-header">
    <div class="px-4 pt-4">
        <h3 class="mb-3 fw-bold">
            <div class="d-flex align-items-center">
                <span class="material-icons">local_library</span>
                <span class="ms-3">Curriculum</span>
            </div>
        </h3>
        <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
    </div>
    <nav class="block_md block_secondary">
        <ol class="breadcrumb px-4 py-2 m-0">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Curriculum</a></li>
            <li class="breadcrumb-item active" aria-current="page" id="setSubPage">All</li>
        </ol>
    </nav>
</div>
<div class="block_md block_primary">
    <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2">
        <li class="block_md sub_link nav_select" id="all">
            <a class="nav-link text-reset" href="#" data-page="all">
                All
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="acadyear">
            <a class="nav-link text-reset" href="#" data-page="acadyear">
                Academic Year
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="subject">
            <a class="nav-link text-reset" href="#" data-page="subject">
                Subject
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="department">
            <a class="nav-link text-reset" href="#" data-page="department">
                Department
            </a>
        </li>
    </ul>
</div>
<!-- Page Content -->
<div class="block_md block_primary p-4" id="subContent">
    
</div>

<script>

/*   --- Sub Page Navigation ---   */
    
// Get saved current page variable
function get_curSubPage() {
    const currentPage = localStorage.getItem("subpage") || "all";
    return currentPage;
}

// Loads page from json file
function load_jsonSubPage(page, data) {
    switch(page) {
        case "acadyear" :
            $("#subContent").load(data.curriculum["acadyear"]);
            $("#acadyear").addClass("nav_active");
            $("#acadyear").removeClass("nav_select");
            $('#setSubPage').text("Academic Year");
            break;
        case "subject" :
            $("#subContent").load(data.curriculum["subject"]);
            $("#subject").addClass("nav_active");
            $("#subject").removeClass("nav_select");
            $('#setSubPage').text("Subject");
            break;
        case "department" :
            $("#subContent").load(data.curriculum["department"]);
            $("#department").addClass("nav_active");
            $("#department").removeClass("nav_select");
            $('#setSubPage').text("Department");
            break;
        default: //no need for 404 page here, just redirect to dashboard to avoid hassle
            $('#subContent').load(data.curriculum["all"]);
            $("#all").addClass("nav_active");
            $("#all").removeClass("nav_select");
            $('#setSubPage').text("All");
    }
}

function init_subPage() {
    // Initializes the page based on the current page variable
    $.ajax({
        type: 'GET',
        url: '../admin/navAdmin.json',
        dataType: 'html',
    }).done(function(response) {
        var data = JSON.parse(response);
        $('.sub_link').removeClass('nav_active');
        load_jsonSubPage(get_curSubPage(), data[0]);
    });

    // Selects a new page and saves the page in the browser's local storage
    $('.sub_link').click(function() {
        var page = $(this).find('a').attr('data-page');
        $('.sub_link').removeClass('nav_active');
        $('.sub_link').addClass('nav_select');
        
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            load_jsonSubPage(page, data[0]);
            localStorage.setItem("subpage", page);
        });
    });
}

$(document).ready(function(){
    init_subPage();
});
</script>