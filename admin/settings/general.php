<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons">settings</span>
                    <span class="ms-3">Settings</span>
                </div>
            </h3>
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block2">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="?page=Class">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">General</li>
            </ol>
        </nav>
    </div>
    <div class="block">
        <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2 subnav">
            <li class="subnav_active sn_link">
                <a class="nav-link" data-page="general">
                    General
                </a>
            </li>
            <li class="subnav_select sn_link">
                <a class="nav-link" data-page="security">
                    Security and Login
                </a>
            </li>
            <li class="subnav_select sn_link">
                <a class="nav-link" data-page="appearance">
                    Appearance
                </a>
            </li>
            <li class="subnav_select sn_link">
                <a class="nav-link" data-page="archive">
                    Archive
                </a>
            </li>
        </ul>
    </div>
    <!-- Page Content -->
    <div class="block p-4">
        <form>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <h4 class="mb-3 fw-bold"> Personal Information </h4>
                    <hr/>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">First Name:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Last Name:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Email Address:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Contact:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Role:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Department:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Personnel Number:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                </div>
                <hr class="d-md-none my-3"/>
                <div class="col-md-6 mt-2">
                    <h4 class="mb-3 fw-bold"> Display Profile Information </h4>
                    <hr/>
                    <div class="container">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"></div>
                            </div>
                        </div>
                    </div>    
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Nickname:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">Bio:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                </div>
                <hr/>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
        
    </div>
</div>

<script>
$(document).ready(function(){
    $('.sn_link').click(function() {
        var page = $(this).find('a').attr('data-page');
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'general':
                    $('#mainContent').load(data[0]['settings'][page]);
                    break;
                case 'security':
                    $('#mainContent').load(data[0]['settings'][page]);
                    break;
                case 'appearance':
                    $('#mainContent').load(data[0]['settings'][page]);
                    break;
                case 'archive':
                    $('#mainContent').load(data[0]['settings'][page]);
                    break;
                default:
                    console.log("Page does not exist");
            }
        });
    });
});
</script>