<div class="row limited mx-auto">
    <div class="col">
        <h4 class="mb-3 fw-bold mt-2">Theme</h4>
        <hr/>
        <div class="col d-flex gap-3 mt-3">
            <img class="themes" id="default" data-theme="default" src="../resources/img/Light.png" width="auto" height="200"> 
            <img class="themes" id="dark" data-theme="dark" src="../resources/img/Dark.png" width="auto" height="200"> 
        </div>
    </div>
</div>


<script>

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