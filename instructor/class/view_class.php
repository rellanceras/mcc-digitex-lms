<!-- Page Header -->
<div class="block_md block_primary" id="page-header">
      <div class="px-4 pt-4">
          <div class="d-flex justify-content-between">
          <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons">class</span>
                    <span class="ms-3">Advanced Mathematics</span>
                </div>
          </h3>
          </div>
          
          <h6 class="mb-3">Course Code: <span class="fw-bold">GEC-0001</span></h6>
      </div>
      <nav class="block_md block_secondary">
          <ol class="breadcrumb px-4 py-2 m-0">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="">A.Y. 2023-2024</a></li>
              <li class="breadcrumb-item"><a class="text-decoration-none" href="">Courses</a></li>
              <li class="breadcrumb-item active" aria-current="page" id="setSubPage">GEC-001</li>
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
        <li class="block_md sub_link nav_select" id="announcement">
            <a class="nav-link text-reset" href="#" data-page="announcement">
                Announcements
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="exam">
            <a class="nav-link text-reset" href="#" data-page="exam">
                Exams
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="discussion">
            <a class="nav-link text-reset" href="#" data-page="discussion">
                Discussions
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="files">
            <a class="nav-link text-reset" href="#" data-page="files">
                Files and Resource Links
            </a>
        </li>
    </ul>
</div>
<!-- Page Content-->
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
        case "announcement" :
            $("#subContent").load(data.class.creq["vannouncement"]);
            $("#announcement").addClass("nav_active");
            $("#announcement").removeClass("nav_select");
            $('#setSubPage').text("Announcements");
            break;
        case "exam" :
            $("#subContent").load(data.class.creq["vexamlist"]);
            $("#exam").addClass("nav_active");
            $("#exam").removeClass("nav_select");
            $('#setSubPage').text("Exams");
            break;
        case "discussion" :
            $("#subContent").load(data.class.creq["vdiscussion"]);
            $("#discussion").addClass("nav_active");
            $("#discussion").removeClass("nav_select");
            $('#setSubPage').text("Discussions");
            break;
        case "files" :
            $("#subContent").load(data.class.creq["vfiles"]);
            $("#files").addClass("nav_active");
            $("#files").removeClass("nav_select");
            $('#setSubPage').text("Files and Resource Links");
            break;
        default: //no need for 404 page here, just redirect to dashboard to avoid hassle
            $('#subContent').load(data.class.creq["all"]);
            $("#all").addClass("nav_active");
            $("#all").removeClass("nav_select");
            $('#setSubPage').text("All");
    }
}

function init_subPage() {
    // Initializes the page based on the current page variable
    $.ajax({
        type: 'GET',
        url: 'navInstructor.json',
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
            url: 'navInstructor.json',
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