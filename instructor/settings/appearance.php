<div class="row limited mx-auto">
    <div class="col">
        <h4 class="mb-3 fw-bold mt-2">Theme</h4>
        <hr/>
        <div class="col d-flex flex-wrap gap-3 mt-3">
            <img class="themes" id="default" data-theme="default" src="../resources/img/Light.png" width="auto" height="200"> 
            <img class="themes" id="dark" data-theme="dark" src="../resources/img/Dark.png" width="auto" height="200"> 
            <img class="themes" id="lavender" data-theme="lavender" src="../resources/img/Lavender.png" width="auto" height="200"> 
        </div>
    </div>
</div>


<script>
function get_theme() {
    const currentTheme = localStorage.getItem("theme") || "default";
    return currentTheme;
}

function setThemeActive() {
    switch(get_theme()){
        case "dark":
            $('#dark').removeClass("themeActive");
            $('#dark').addClass("themeActive");
            break;
        case "lavender":
            $('#lavender').removeClass("themeActive");
            $('#lavender').addClass("themeActive");
            break;
        default:
            $('#default').removeClass("themeActive");
            $('#default').addClass("themeActive");
    }
}

function update_theme() {
    console.log("Theme Updated");
    $('#themeCSS').attr("href", `../resources/css/themes/${get_theme()}.css`);
}

// Theme Switch
$(document).ready(function(){
    setThemeActive();

    let setTheme = "default";
    $('.themes').click(function(){
        $('.themes').removeClass("themeActive");
        $('.themes').addClass("themeSelect");
        $(this).addClass("themeActive");

        var theme = $(this).attr('data-theme');

        switch(theme){
            case "dark":
                setTheme = "dark";
                break;
            case "lavender":
                setTheme = "lavender";
                break;
            default:
                setTheme = "default";
        }
        localStorage.setItem("theme", setTheme);
        update_theme();
    });

});
</script>