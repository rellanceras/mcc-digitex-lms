<!-- Page Header -->
<div class="block" id="page-header">
      <div class="px-4 pt-4">
          <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons">class</span>
                    <span class="ms-3">Advanced Mathematics</span>
                </div>
          </h3>
          <h6 class="mb-3">Course Code: <span class="fw-bold">GEC-0001</span></h6>
      </div>
      <nav class="block block2">
          <ol class="breadcrumb px-4 py-2 m-0">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="">A.Y. 2023-2024</a></li>
              <li class="breadcrumb-item"><a class="text-decoration-none" href="">Courses</a></li>
              <li class="breadcrumb-item active" aria-current="page" id="setSubPage">GEC-001</li>
          </ol>
      </nav>
</div>
<div class="block">
    <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2 subnav">
        <li class="subnav_active sn_link">
            <a class="nav-link" data-page="all">
                All
            </a>
        </li>
        <li class="subnav_select sn_link">
            <a class="nav-link" data-page="announcements">
                Announcements
            </a>
        </li>
        <li class="subnav_select sn_link">
            <a class="nav-link" data-page="quizzes">
                Quizzes
            </a>
        </li>
        <li class="subnav_select sn_link">
            <a class="nav-link" data-page="discussions">
                Discussions
            </a>
        </li>
        <li class="subnav_select sn_link">
            <a class="nav-link" data-page="links">
                Files and Resource Links
            </a>
        </li>
        <li class="subnav_select sn_link">
            <a class="nav-link" data-page="more">
                More
            </a>
        </li>
    </ul>
</div>
<!-- Page Content-->
<div class="block p-4" id="pageContent">
    
</div> 

<script>
$(document).ready(function(){
    $.ajax({
        type: 'GET',
        url: '../instructor/navInstructor.json',
        dataType: 'html',
    }).done(function(response) {
        var data = JSON.parse(response)
        $('#pageContent').load(data[0]['viewdetails'].all);
    });

    $('.sn_link').click(function() {
        var page = $(this).find('a').attr('data-page');
        $('.sn_link').addClass('subnav_select');
        $('.sn_link').removeClass('subnav_active');

        $(this).addClass('subnav_active');
        $(this).removeClass('subnav_select');
        $.ajax({
            type: 'GET',
            url: '../instructor/navInstructor.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'all':
                    $('#pageContent').load(data[0].viewdetails.all);
                    break;
                case 'announcements':
                    $('#pageContent').load(data[0].viewdetails.announcements);
                    break;
                case 'quizzes':
                    $('#pageContent').load(data[0].viewdetails.quizzes);
                    break;
                case 'discussions':
                    $('#pageContent').load(data[0].viewdetails.discussions);
                    break;
                case 'links':
                    $('#pageContent').load(data[0].viewdetails.links);
                    break;
                case 'more':
                    $('#pageContent').load(data[0].viewdetails.more);
                    break;
                default:
                    $('#pageContent').load(data[0].viewdetails.all);
            }
            $('#setSubPage').text(page.charAt(0).toUpperCase() + page.slice(1));
        });
    });
});
</script>