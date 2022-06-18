<!-- Page Header -->
<div class="block_md block_primary" id="page-header">
    <div class="px-4 pt-4">
        <h3 class="mb-3 fw-bold">
            <div class="d-flex align-items-center">
                <span class="material-icons">class</span>
                <span class="ms-3">Class</span>
            </div>
        </h3>
        <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
    </div>
    <nav class="block_md block_secondary">
        <ol class="breadcrumb px-4 py-2 m-0">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Class</a></li>
            <li class="breadcrumb-item active" aria-current="page" id="setSubPage">View Class</li>
        </ol>
    </nav>
</div>
<!-- Page Content -->
<div class="block_md block_primary p-4" id="pageContent">
    
</div>

<script>
$(document).ready(function(){
    $.ajax({
        type: 'GET',
        url: '../admin/navAdmin.json',
        dataType: 'html',
    }).done(function(response) {
        var data = JSON.parse(response)
        $('#pageContent').load(data[0].class["vclass"]);
    });
});
</script>