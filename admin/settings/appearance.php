<div class="row limited mx-auto">
    <div class="col">
        <h4 class="mb-3 fw-bold mt-2">Theme</h4>
        <hr/>
        <div class="col d-flex flex-wrap gap-3 mt-3">
            <a class="p-2 block_sm themes" href="#" id="default" data-theme="default">
                <img class="block_sm" src="../resources/img/Light.png"> 
            </a>
            <a class="p-2 block_sm themes" href="#" id="dark" data-theme="dark">
                <img class="block_sm" src="../resources/img/Dark.png"> 
            </a>
            <a class="p-2 block_sm themes" href="#" id="lavender" data-theme="glass-lavender">
                <img class="block_sm" src="../resources/img/Lavender.png">
            </a>
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
            $('#dark').removeClass("theme_active");
            $('#dark').addClass("theme_active");
            break;
        case "glass-lavender":
            $('#lavender').removeClass("theme_active");
            $('#lavender').addClass("theme_active");
            break;
        default:
            $('#default').removeClass("theme_active");
            $('#default').addClass("theme_active");
    }
}

function update_theme() {
    console.log("Theme Updated");
    // $('#themeCSS').attr("href", `../resources/css/themes/${get_theme()}.css`);

    const webTheme = $('html');
    if (get_theme() == "default") {
        webTheme.removeAttr("data-theme");
        return;
    }

    webTheme.attr("data-theme", get_theme());
}

// Theme Switch
$(document).ready(function(){
    setThemeActive();

    let setTheme = "default";
    $('.themes').click(function(){
        $('.themes').removeClass("theme_active");
        $('.themes').addClass("themeSelect");
        $(this).addClass("theme_active");

        var theme = $(this).attr('data-theme');

        switch(theme){
            case "dark":
                setTheme = "dark";
                break;
            case "glass-lavender":
                setTheme = "glass-lavender";
                break;
            default:
                setTheme = "default";
        }
        localStorage.setItem("theme", setTheme);
        update_theme();
    });

});
</script>