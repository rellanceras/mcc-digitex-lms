<!-- Page Header -->
<div class="block" id="page-header">
    <div class="px-4 pt-4">
        <h3 class="mb-3 fw-bold">
            <div class="d-flex align-items-center">
                <span class="material-icons">class</span>
                <span class="ms-3">Class</span>
            </div>
        </h3>
        <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
    </div>
    <nav class="block2 bread_block">
        <ol class="breadcrumb px-4 py-2 m-0">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Class</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Class</li>
        </ol>
    </nav>
</div>
<!-- Page Content -->
<div class="block h-100 p-4">
    <a class="btn btn-primary text-light mb-3" id="btn_addclass" data-page="addclass">Add Class</a>
    <table id="view_course" class="display table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>Tiger Nixon</td>
                <td>SCST</td>
                <td>
                    <input class="form-check-input" type="checkbox" value="" id="2">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Marie Claire</td>
                <td>SCST</td>
                <td>
                    <input class="form-check-input" type="checkbox" value="" id="2">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Josse Reezal</td>
                <td>SCST</td>
                <td>
                    <input class="form-check-input" type="checkbox" value="" id="2">
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function(){
    $('#btn_addclass').click(function() {
        var page = $(this).attr('data-page');
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'addclass':
                    $('#mainContent').load(data[0]['class'][page]);
                    break;
                default:
                    console.log("Page does not exist");
            }
            document.title = page.charAt(0).toUpperCase() + page.slice(1)  + ' | DigiTeach LMS';
        });
        
    });
});
</script>