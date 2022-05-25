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
                <li class="breadcrumb-item"><a class="text-decoration-none" href="">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Security and Login</li>
            </ol>
        </nav>
    </div>
    <div class="block">
    <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2 subnav">
            <li class="subnav_select sn_link">
                <a class="nav-link" data-page="general">
                    General
                </a>
            </li>
            <li class="subnav_active sn_link">
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
            <h4 class="mb-3 fw-bold mt-2"> Change Password </h4>
            <hr/>
            <div class="mb-3">
                <label for="Password" class="form-label">Old Password</label>
                <div class="input-group">
                    <input type="password" class="form-control content" id="oldPass" name="oldPass" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">New Password</label>
                <div class="input-group">
                    <input type="password" class="form-control content" id="newPass" name="newPass" required> 
                </div>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" class="form-control content" id="newPassC" name="newPassC" required> 
                </div>
            </div>
            <hr/>
            <button type="submit" class="btn btn-success w-100">Submit</button>
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