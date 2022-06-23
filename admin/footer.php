<!-- PLUGINS -->
    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Apex Chart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Calendar JS -->
    <script src="../resources/js/calendar.min.js"></script>
    <!-- Moment JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <!-- Date Range Picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- Datatables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <!-- Smart Wizard -->
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
    <!-- JQuery Validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js" type="text/javascript"></script>

<script>

/*   --- SIDEBAR ---   */

// Call function when browser window is resized
$(window).resize(adapt_sidebar);

// Change sidebar size when window is <= 1200px
function adapt_sidebar() {
    var WindowSize = $(window).width();

    if (WindowSize <= 1200) {
        $("#sidebar_desktop").addClass("mini");
        $("#sidebar_desktop .nav_label").addClass("d-none");
        $('.tool_tip').tooltip('enable');
    } else {
        $("#sidebar_desktop").removeClass("mini");
        $("#sidebar_desktop .nav_label").removeClass("d-none");
        $('.tool_tip').tooltip('disable');
    }
}

/*   --- WEBSITE THEME ---   */

// Get current theme variable
function get_theme() {
    const currentTheme = localStorage.getItem("theme") || "default";
    return currentTheme;
}

// Theme Initiator
function init_theme() {
    console.log("Theme Initiated");

    // This changes theme based on 'data-theme' attribute. See CSS file.
    const webTheme = $('html');
    if (get_theme() == "default") {
        webTheme.removeAttr("data-theme"); // Removing 'data-theme' attribute reverts the theme to 'default'. *Changing 'data-theme' value will also revert the theme to 'default' if the theme does not exist in the CSS file
        return;
    }

    webTheme.attr("data-theme", get_theme());
}

/*   --- Page Navigation ---   */

// Get saved current page variable
function get_curPage() {
    const currentPage = localStorage.getItem("mainpage") || "dashboard";
    return currentPage;
}

// Loads page from json file
function load_jsonMainPage(page, data) {
    switch(page) {
        case "curriculum" :
            $("#mainContent").load(data.curriculum["index"]);
            $(".link_curriculum").addClass("nav_active");
            $(".link_curriculum").removeClass("nav_select");
            document.title = "Curriculum | Digitex LMS";
            break;
        case "class" :
            $("#mainContent").load(data.class["index"]);
            $(".link_class").addClass("nav_active");
            $(".link_class").removeClass("nav_select");
            document.title = "Class | Digitex LMS";
            break;
        case "users" :
            $("#mainContent").load(data.users["index"]);
            $(".link_users").addClass("nav_active");
            $(".link_users").removeClass("nav_select");
            document.title = "Users | Digitex LMS";
            break;
        case "settings" :
            $("#mainContent").load(data.settings["index"]);
            $(".link_settings").addClass("nav_active");
            $(".link_settings").removeClass("nav_select");
            document.title = "Settings | Digitex LMS";
            break;
        default: //no need for 404 page here, just redirect to dashboard to avoid hassle
            $('#mainContent').load(data.dashboard);
            $(".link_dashboard").addClass("nav_active");
            $(".link_dashboard").removeClass("nav_select");
            document.title = "Dashboard | Digitex LMS";
    }
}

function init_mainPage() {
    // Initializes the page based on the current page variable
    $.ajax({
        type: 'GET',
        url: 'navAdmin.json',
        dataType: 'html',
    }).done(function(response) {
        var data = JSON.parse(response);
        $('.main_link').removeClass('nav_active');
        load_jsonMainPage(get_curPage(), data[0]);
    });

    // Selects a new page and saves the page in the browser's local storage
    $('.main_link').click(function() {
        var page = $(this).find('a').attr('data-page');
        $('.main_link').removeClass('nav_active');
        $('.main_link').addClass('nav_select');
        
        $.ajax({
            type: 'GET',
            url: 'navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            load_jsonMainPage(page, data[0]);
            localStorage.setItem("mainpage", page);
            localStorage.setItem("subpage", "");
        });
    });
}

/*   --- Display Time and Date ---   */

// Gets current time
function display_time() {
    const getDate = new Date(); // This gets whole date based on your current location

    // This is about time
    let hours = getDate.getHours(); // This only get hours
    let minutes = getDate.getMinutes(); // This only get minutes
    let ampm = hours >= 12 ? 'PM' : 'AM'; // If hours is greater than or equal to 12 (noon - military time) it is considered as PM, otherwise it is AM.
    
    hours = hours % 12; // Gets remainder (ex. 13 % 12 = 1, so its 1PM)
    hours = hours ? hours : 12; // Hour 0 will be 12. This prevents empty value
    minutes = minutes < 10 ? '0' + minutes : minutes; // This adds a "0" before the number if it is less than 10. Its an aesthetic thing.
    /*
    let second = getDate.getSeconds();
    second = second < 10 ? '0' + second : second;
    */
    let strTime = hours + ':' + minutes /*+ ':' + second*/ + ' ' + ampm;

    return strTime;
}

// Gets current date
function display_date() {
    const getDate = new Date(); // This gets whole date based on your current location

    // This is about date
    const dateFormat = new Intl.DateTimeFormat('en-PH', {month: 'long'}); // Date formatter for set on PH
    let month = dateFormat.format(getDate);
    let day = getDate.getDate();
    let year = getDate.getFullYear();
    
    month = month < 10 ? '0' + month : month;
    day = day < 10 ? '0' + day : day;
    
    let strDate = month + ' ' + day + ', ' + year;

    return strDate;
}

/*   --- Side Calendar ---   */

// Initializes the calendar on the right side
function init_sideCalendar() {
    $('.calendar-container').calendar({
        date:new Date(),// today
        weekDayLength: 1,
        prevButton:'<i class="bi bi-chevron-left"></i>',
        nextButton:'<i class="bi bi-chevron-right"></i>',
        highlightSelectedWeekday:false, //this prevents blue weekday highlight
        todayButtonContent:"See Current Day"
    });
}

/*   --- Tooltips ---   */

// Initializes the tooltips
function init_tooltip() {
    $('.tool_tip_default').tooltip('enable');
}

/*   --- Function call on document ready ---   */

$(document).ready(function(){
    adapt_sidebar();
    init_theme();
    init_mainPage();
    init_sideCalendar();
    init_tooltip();

    // Updates the time in 1 sec interval
    setInterval(function(){ 
        $(".time").text(display_time());
        $(".date").text(display_date());
    }, 1000);

    // Sidebar size toggle *This cannot be inside adapt_sidebar() because for some reason, it will disable #collapse function
    $('#collapse').click(function(){
        $("#sidebar_desktop").toggleClass("mini");
        $("#sidebar_desktop .nav_label").toggleClass("d-none");
        $('.tool_tip').tooltip('toggleEnabled');
    });
});
</script>

</html>