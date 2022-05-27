<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons material-icons-round">local_library</span>
                    <span class="ms-3">Curriculum</span>
                </div>
            </h3>
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block2 bread_block">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Curriculum</a></li>
                <li class="breadcrumb-item active" aria-current="page" id="curSubPage">Academic Year</li>
            </ol>
        </nav>
    </div>
    <div class="block">
        <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2 subnav">
            <li class="subnav_active sn_link">
                <a class="nav-link text-reset" data-page="all">
                    All
                </a>
            </li>
            <li class="subnav_select sn_link">
                <a class="nav-link text-reset" data-page="academicyear">
                    Academic Year
                </a>
            </li>
            <li class="subnav_select sn_link">
                <a class="nav-link text-reset" data-page="subject">
                    Subject
                </a>
            </li>
            <li class="subnav_select sn_link">
                <a class="nav-link text-reset" data-page="department">
                    Department
                </a>
            </li>
        </ul>
    </div>
    <!-- Page Content -->
    <div class="block p-4" id="pageContent">
        
    </div>
</div>

<script>
$(document).ready(function(){
    $.ajax({
        type: 'GET',
        url: '../admin/navAdmin.json',
        dataType: 'html',
    }).done(function(response) {
        var data = JSON.parse(response)
        $('#pageContent').load(data[0]['curriculum'].all);
        document.title = 'Curriculum | DigiTeach LMS';
    });

    $('.sn_link').click(function() {
        var page = $(this).find('a').attr('data-page');
        $('.sn_link').addClass('subnav_select');
        $('.sn_link').removeClass('subnav_active');

        $(this).addClass('subnav_active');
        $(this).removeClass('subnav_select');
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'all':
                    $('#pageContent').load(data[0]['curriculum'][page]);
                    break;
                case 'academicyear':
                    $('#pageContent').load(data[0]['curriculum'][page]);
                    break;
                case 'subject':
                    $('#pageContent').load(data[0]['curriculum'][page]);
                    break;
                case 'department':
                    $('#pageContent').load(data[0]['curriculum'][page]);
                    break;
                default:
                    console.log("Page does not exist");
            }
            $('#curSubPage').text(page.charAt(0).toUpperCase() + page.slice(1));
        });
    });
});
</script>