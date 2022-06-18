<!--

    Work in Progress | Template by Nicolas Honrade

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam | DigiTeach LMS</title>
    <!-- Website Icon -->
    <link rel="icon" href="../../resources/img/logo-sm-trans.png">
    
    <!-- Bootstrap and Font Style -->
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap JS with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Google Font/Icons -->
        <!-- Inter Font Style -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../resources/css/style.css"/>
    <link rel="stylesheet" id="themeCSS"/>

</head>
<body>

<div class="container p-0">
    <form action="">
    <div class="d-flex flex-column min-vh-100 gap-3 p-3">
        <div class="d-flex align-items-center justify-content-between sticky-top block px-3 py-2" id="topnav">
            <span id="time" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Time Remaining"></span>
            <span data-bs-toggle="modal" data-bs-target="#itemCheck">
                <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Items Answered / Total Items">10 / 10</button>
            </span>
            <span data-bs-toggle="modal" data-bs-target="#examInfo">
                <button type="button" class="btn material-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Exam Information">info</button>
            </span>
        </div>
        <div class="block p-4">
            <h3 class="fw-bold">Quiz #1</h3>
            <h6>Advanced Mathematics</h6>
            <hr/>
            <span class="fw-bold">Instructions:</span>
            <p class="fs-6 lh-base m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquam velit aspernatur laudantium commodi saepe. Eaque nihil ducimus reprehenderit ullam quas! Quidem officia soluta illo repellat praesentium. Veniam, ab culpa?</p>
        </div>
        <hr/>
        <div class="d-flex flex-column gap-3 block p-3">
            <div class="block2 p-3" id="q1">
                <div class="d-flex justify-content-between">
                    <span class="fs-6 fw-bold">Question #1</span>
                    <span>2 pts</span>
                </div>
                <hr/>
                <p class="fs-6 lh-base">IDENTIFICATION // Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquam velit aspernatur laudantium commodi saepe. Eaque nihil ducimus reprehenderit ullam quas! Quidem officia soluta illo repellat praesentium. Veniam, ab culpa?</p>
                <p class="fs-6 fw-bold">Your Answer:</p>
                <ul class="list-unstyled">
                    <li>
                        <input type="text" class="form-control">
                    </li>
                </ul>
            </div>
            <div class="block2 p-3" id="q2">
                <div class="d-flex justify-content-between">
                    <span class="fs-6 fw-bold">Question #2</span>
                    <span>1 pts</span>
                </div>
                <hr/>
                <p class="fs-6 lh-base">MULTIPLE CHOICE // Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquam velit aspernatur laudantium commodi saepe. Eaque nihil ducimus reprehenderit ullam quas! Quidem officia soluta illo repellat praesentium. Veniam, ab culpa?</p>
                <p class="fs-6 fw-bold">Your Answer:</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2radio" id="q2op1"> <!-- radio inputs should have the same name to so that only one can be selected -->
                            <label class="form-check-label" for="q2op1"> <!-- for the label to be selectable too, id and "for" should be the same -->
                                Answer 1
                            </label>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2radio" id="q2op2">
                            <label class="form-check-label" for="q2op2">
                                Answer 2
                            </label>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2radio" id="q2op3">
                            <label class="form-check-label" for="q2op3">
                                Answer 3
                            </label>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2radio" id="q2op4">
                            <label class="form-check-label" for="q2op4">
                                Answer 4
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="block2 p-3" id="q3">
                <div class="d-flex justify-content-between">
                    <span class="fs-6 fw-bold">Question #3</span>
                    <span>5 pts</span>
                </div>
                <hr/>
                <p class="fs-6 lh-base">ESSAY // Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquam velit aspernatur laudantium commodi saepe. Eaque nihil ducimus reprehenderit ullam quas! Quidem officia soluta illo repellat praesentium. Veniam, ab culpa?</p>
                <p class="fs-6 fw-bold">Your Answer:</p>
                <ul class="list-unstyled">
                    <li>
                        <textarea class="form-control" rows="3"></textarea>
                    </li>
                </ul>
            </div>
            <div class="block2 p-3" id="q4">
                <div class="d-flex justify-content-between">
                    <span class="fs-6 fw-bold">Question #4</span>
                    <span>1 pts</span>
                </div>
                <hr/>
                <p class="fs-6 lh-base">TRUE OR FALSE // Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquam velit aspernatur laudantium commodi saepe. Eaque nihil ducimus reprehenderit ullam quas! Quidem officia soluta illo repellat praesentium. Veniam, ab culpa?</p>
                <p class="fs-6 fw-bold">Your Answer:</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2radio" id="q2op1"> <!-- radio inputs should have the same name to so that only one can be selected -->
                            <label class="form-check-label" for="q2op1"> <!-- for the label to be selectable too, id and "for" should be the same -->
                                True
                            </label>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2radio" id="q2op2">
                            <label class="form-check-label" for="q2op2">
                                False
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <hr/>
            <div class="d-flex justify-content-center gap-3">
                <button type="reset" class="btn btn-secondary">Cancel</button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#submitValidation">Save & Close</button>
            </div>
        </div>
    </div>
    </form>
</div>

<!-- Submit validation -->
<div class="modal fade" id="submitValidation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Answers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to save this exam?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-success" onclick="window.close();" >Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for item checker -->
<div class="modal fade" id="itemCheck" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Answers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-info">Note: Click or tap a row to go the question</p>
                <div style="max-height:400px; overflow-y:auto;">
                    <table class="table table-sm table-striped align-middle">
                        <thead>
                            <tr class="text-center">
                                <th>Question</th>
                                <th>Type</th>
                                <th>Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-bs-dismiss="modal" aria-label="Close"><a class="nav-link text-primary" href="#q1">#1:</a></td>
                                <td>Identify</td>
                                <td>Test answerTest answerTest answerTest answerTest answerTest answerTest answerTest answerTest answerTest answerTest answer</td>
                            </tr>
                            <tr>
                                <td data-bs-dismiss="modal" aria-label="Close"><a class="nav-link text-primary" href="#q2">#2:</a></td>
                                <td>Multi</td>
                                <td>Answer 3</td>
                            </tr>
                            <tr>
                                <td data-bs-dismiss="modal" aria-label="Close"><a class="nav-link text-primary" href="#q3">#3:</a></td>
                                <td>Essay</td>
                                <td><span class="fst-italic">See answer...</span></td>
                            </tr>
                            <tr>
                                <td data-bs-dismiss="modal" aria-label="Close"><a class="nav-link text-primary" href="#q4">#4:</a></td>
                                <td>T or F</td>
                                <td><span class="text-danger me-3">NO ANSWER</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for exam information -->
<div class="modal fade" id="examInfo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exam Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Exam name:</td>
                            <td>Quiz #1</td>
                        </tr>
                        <tr>
                            <td>Subject:</td>
                            <td>Advanced Mathematics</td>
                        </tr>
                        <tr>
                            <td>Creator:</td>
                            <td>Maria Clara</td>
                        </tr>
                        <tr>
                            <td>Total items:</td>
                            <td>10 items</td>
                        </tr>
                        <tr>
                            <td>Total points:</td>
                            <td>10 points</td>
                        </tr>
                        <tr>
                            <td>Timer:</td>
                            <td>5 minutes</td>
                        </tr>
                        <tr>
                            <td>Date created:</td>
                            <td>January 1, 2022</td>
                        </tr>
                        <tr>
                            <td>Date visible:</td>
                            <td>January 25, 2022</td>
                        </tr>
                        <tr>
                            <td>Date due:</td>
                            <td>February 1, 2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




</body>
    <!-- PLUGINS -->
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">

/*   --- WEBSITE THEME ---   */

// Get current theme variable
function get_theme() {
    const currentTheme = localStorage.getItem("theme") || "default";
    return currentTheme;
}

// Theme Initiate
function init_theme() {
    console.log("Theme Initiated");
    if (get_theme() == "dark") {
        $('.themeButton').text("dark_mode");
    }
    $('#themeCSS').attr("href", `../../resources/css/themes/${get_theme()}.css`);
}

function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};

$(document).ready(function(){
    init_theme();
    // $('[data-bs-toggle="tooltip"]').tooltip('show'); // show tooltip on page load
    $('[data-bs-toggle="tooltip"]').tooltip();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 5) {
            $("#topnav").addClass('shadow stickytopnav');
        } else {
            $("#topnav").removeClass("shadow stickytopnav");
        }
    });
});

const navigationHeight = document.querySelector('#topnav').offsetHeight;
document.documentElement.style.setProperty('--scroll-padding', navigationHeight + 20 + "px");
</script>
</html>