<!--

    Work in Progress | Template by Nicolas Honrade

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | DigiTeach LMS</title>
    <!-- Website Icon -->
    <link rel="icon" href="resources/img/logo-sm-trans.png">
    
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
    <link href="resources/css/style.css" rel="stylesheet"/>
    <link href="resources/css/themes/default.css" rel="stylesheet"/>

</head>
<body>
    
<canvas class="container-fluid min-vh-100" id="dots_bg"></canvas>
<div class="container-fluid p-0">
    <div class="min-vh-100 max-width d-flex align-items-center justify-content-center mx-auto">
        <div class="row login">
            <div class="login_cover col-md-6 d-none d-md-block">
                <div class="d-flex flex-column h-100 p-5">
                    <div class="flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                        <h3 class="mb-2 fw-bold">
                            Welcome to 
                        </h3>
                        <img class="nav_label" src="resources/img/logov1-dark-trans.png" width="200px" height="auto" class="logo"/>

                        <p class="fst-italic">"Your own learning hub"</p>
                    </div>
                    <div class="d-flex">
                        <div>
                            <i class="bi bi-facebook me-2"></i> @facebook
                        </div>
                        <div class="ms-auto">
                            <i class="bi bi-box-arrow-up-right me-2"></i> website.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="login_block col-md-6 p-5">
                <div class="text-center mb-5">
                    <h3 class="mb-5 fw-bold d-none d-md-inline" id="login_greeting"></h3>
                    <img class="nav_label logo d-md-none" src="resources/img/logov1-trans.png" width="200px" height="auto" class="logo"/>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address or Username</label>
                        <input type="email" class="form-control block-sm" id="username" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <div class="d-flex align-items-center">
                            <input type="password" class="form-control block-sm" id="password" required>
                            <span class="material-icons" id="show_pass" style="margin-left: -30px;">visibility_off</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Login</button>
                    <div class="text-center mt-3 f-pass">
                        <a class="text-decoration-none" href="layout/admin.php">Forget Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
    <!-- PLUGINS -->
        <!-- Connecting Dots JS-->
        <script src="resources/js/dots.js" type="text/javascript"></script>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#show_pass").click(function(){
            $("#show_pass").text($("#show_pass").text() === "visibility" ? "visibility_off" : "visibility");
            $("#password").attr('type', $("#password").attr('type') === "password" ? "text" : "password");
        });
        $("#login_greeting").text(display_time());
    });

    function display_time() {
        const getDate = new Date(); // This gets whole date based on your system time

        // This is about time
        let hours = getDate.getHours(); // This only get hours (only gets military time)
        let strTime = "Good Day!";

        if (hours > 12 && hours < 18) {
            strTime = "Good Afternoon!";
        }else if (hours > 12) {
            strTime = "Good Evening!";
        }else {
            strTime = "Good Morning!";
        }

        return strTime;
    }
</script>
</html>