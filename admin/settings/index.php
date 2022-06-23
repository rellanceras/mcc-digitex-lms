<!-- Page Header -->
<div class="block_md block_primary" id="page-header">
    <div class="px-4 pt-4">
        <h3 class="mb-3 fw-bold">
            <div class="d-flex align-items-center">
                <span class="material-icons">settings</span>
                <span class="ms-3">Settings</span>
            </div>
        </h3>
        <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
    </div>
    <nav class="block_md block_secondary">
        <ol class="breadcrumb px-4 py-2 m-0">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="">A.Y. 2023-2024</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page" id="setSubPage">General</li>
        </ol>
    </nav>
</div>
<div class="block_md block_primary">
    <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2">
        <li class="block_md sub_link nav_select" id="general">
            <a class="nav-link text-reset" href="#" data-page="general">
                General
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="security">
            <a class="nav-link text-reset" href="#" data-page="security">
                Security and Login
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="appearance">
            <a class="nav-link text-reset" href="#" data-page="appearance">
                Appearance
            </a>
        </li>
        <li class="block_md sub_link nav_select" id="archive">
            <a class="nav-link text-reset" href="#" data-page="archive">
                Archive
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
        case "security" :
            $("#subContent").load(data.settings["security"]);
            $("#security").addClass("nav_active");
            $("#security").removeClass("nav_select");
            $('#setSubPage').text("Security");
            break;
        case "appearance" :
            $("#subContent").load(data.settings["appearance"]);
            $("#appearance").addClass("nav_active");
            $("#appearance").removeClass("nav_select");
            $('#setSubPage').text("Appearance");
            break;
        case "archive" :
            $("#subContent").load(data.settings["archive"]);
            $("#archive").addClass("nav_active");
            $("#archive").removeClass("nav_select");
            $('#setSubPage').text("Archive");
            break;
        default: //no need for 404 page here, just redirect to dashboard to avoid hassle
            $('#subContent').load(data.settings["general"]);
            $("#general").addClass("nav_active");
            $("#general").removeClass("nav_select");
            $('#setSubPage').text("General");
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