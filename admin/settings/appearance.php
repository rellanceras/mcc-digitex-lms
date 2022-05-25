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
            <li class="subnav_select sn_link">
                <a class="nav-link" data-page="general">
                    General
                </a>
            </li>
            <li class="subnav_select sn_link">
                <a class="nav-link" data-page="security">
                    Security and Login
                </a>
            </li>
            <li class="subnav_active sn_link">
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
    <h4 class="mb-3 fw-bold">
            <div class="d-flex align-items-center">
                <span class="ms-3">Theme</span>
            </div>
            <div class="d-flex gap-3 mt-3">
                <img class="themes" id="default" data-theme="default" src="../resources/img/Light.png" width="auto" height="200"> 
                <img class="themes" id="dark" data-theme="dark" src="../resources/img/Dark.png" width="auto" height="200"> 
            </div>
        </h4>
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

// Theme Switch
$(document).ready(function(){
    setThemeActive();

    let setTheme;
    $('.themes').click(function(){
        $('.themes').removeClass("themeActive");
        $('.themes').addClass("themeSelect");
        $(this).addClass("themeActive");

        var theme = $(this).attr('data-theme');
        if (theme == "default") {
            setTheme = "default";
        } else if (theme == "dark") {
            setTheme = "dark";
        } else {
            return;
        }
        localStorage.setItem("theme", setTheme);
        update_theme();
    });
});

function get_theme() {
    const currentTheme = localStorage.getItem("theme") || "default";
    return currentTheme;
}

function setThemeActive() {
    if (get_theme() == "default") {
        $('#default').removeClass("themeActive");
        $('#default').addClass("themeActive");
    } else if (get_theme() == "dark") {
        $('#dark').removeClass("themeActive");
        $('#dark').addClass("themeActive");
    }
}

function update_theme() {
    console.log("Theme Updated");
    $('#themeCSS').attr("href", `../resources/css/themes/${get_theme()}.css`);
}
</script>