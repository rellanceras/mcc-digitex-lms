<form>
    <div class="row limited mx-auto">
        <div class="col">
            <h4 class="mb-3 fw-bold mt-2"> Change Password </h4>
            <hr/>
            <div class="mb-3">
                <label for="Password" class="form-label">Old Password</label>
                <input type="password" class="form-control block-sm" id="oldPass" name="oldPass" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">New Password</label>
                <div class="d-flex align-items-center">
                    <input type="password" class="form-control block-sm" id="newPass" name="newPass" minlength="8" disabled required>
                    <span class="material-icons" id="showNewPass" style="cursor:pointer; margin-left: -30px;">visibility_off</span>
                </div>
                <div class="alert alert-danger mt-3 d-none" id="newPassAlertE" role="alert">
                    <h6 class="fw-bold mb-3 text-reset">Your password must contain the following:</h6>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center" id="lowE">
                            <span class="material-icons text-danger">close</span>
                            A lowercase letter (a-z)
                        </li>
                        <li class="mb-3 d-flex align-items-center" id="upE">
                            <span class="material-icons text-danger">close</span>
                            An uppercase letter (A-Z)
                        </li>
                        <li class="mb-3 d-flex align-items-center" id="numE">
                            <span class="material-icons text-danger">close</span>
                            A number (0-9)
                        </li>
                        <li class="mb-3 d-flex align-items-center" id="spE">
                            <span class="material-icons text-danger">close</span>
                            A special character (!@#$%^&*_=+-)
                        </li>
                        <li class="mb-3 d-flex align-items-center" id="minE">
                            <span class="material-icons text-danger">close</span>
                            Minimum of 8 characters
                        </li>
                    </ul>
                </div>
                <div class="alert alert-success mt-3 d-none" id="newPassAlertS" role="alert">
                    <h6 class="text-reset m-0">Password looks good!</h6>
                </div>
                <p class="fw-bold mt-2 text-success d-none" id="newPassAlertS">Password looks good!</p>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Confirm Password</label>
                <div class="d-flex align-items-center">
                    <input type="password" class="form-control block-sm" id="newPassC" name="newPassC" disabled required> 
                    <span class="material-icons" id="showNewPassC" style="cursor:pointer; margin-left: -30px;">visibility_off</span>
                </div>
                <div class="alert alert-danger mt-3 d-none" id="newPassCAlertE" role="alert">
                    <h6 class="text-reset m-0">Passwords does not match</h6>
                </div>
                <div class="alert alert-success mt-3 d-none" id="newPassCAlertS" role="alert">
                    <h6 class="text-reset m-0">Passwords Matched</h6>
                </div>
            </div>
            
        </div>
    </div>
    <hr/>
    <div class="d-flex justify-content-center gap-3">
        <button type="reset" class="btn btn-secondary w-25">Cancel</button>
        <button type="submit" class="btn btn-success w-25" id="btnPassSubmit" disabled>Submit</button>
    </div>
</form>

<script>

function checkNewPass (newPass) {
    console.log(newPass);

    // flags
    var lowF = upF = numF = minF = spF = false;

    // a-z
    if (/[a-z]/g.test(newPass)) {
        $('#lowE').addClass('d-none');
        lowF = true;
    }else{
        $('#lowE').removeClass('d-none');
        lowF = false;
    }

    // A-Z
    if (/[A-Z]/g.test(newPass)) {
        $('#upE').addClass('d-none');
        upF = true;
    }else{
        $('#upE').removeClass('d-none');
        upF = false;
    }

    // 0-9 or \d
    if (/\d/g.test(newPass)) {
        $('#numE').addClass('d-none');
        numF = true;
    }else{
        $('#numE').removeClass('d-none');
        numF = false;
    }

    // 8 characters
    if (/.{8,}/g.test(newPass)) {
        $('#minE').addClass('d-none');
        minF = true;
    }else{
        $('#minE').removeClass('d-none');
        minF = false;
    }

    // special characters
    if (/[!@#$%^&*_=+-]/g.test(newPass)) {
        $('#spE').addClass('d-none');
        spF = true;
    }else{
        $('#spE').removeClass('d-none');
        spF = false;
    }

    // flag check
    if(lowF && upF && numF && minF && spF){
        return true;
    }

    return false;
}

$(document).ready(function() {
    $('#oldPass').keyup(function(){
        if ($('#oldPass').val() != "") {
            $('#newPass').prop("disabled", false);
        }else{
            $('#newPass').prop("disabled", true);
        }
    });

    $('#newPass').keyup(function(){
        var flag = checkNewPass($('#newPass').val());
        if (flag) {
            $('#newPassC').prop("disabled", false);
            $('#newPassAlertE').addClass('d-none');
            $('#newPassAlertS').removeClass('d-none');
        } else {
            $('#newPassC').prop("disabled", true);
            $('#newPassAlertE').removeClass('d-none');
            $('#newPassAlertS').addClass('d-none');
        }
        $('#newPassC').val("");
        $('#btnPassSubmit').prop("disabled", true);
        $('#newPassCAlertS').addClass('d-none');
    });


    $('#newPassC').keyup(function(){
        if ($('#newPassC').val() != $('#newPass').val()) {
            $('#newPassCAlertE').removeClass('d-none');
            $('#newPassCAlertS').addClass('d-none');
            $('#btnPassSubmit').prop("disabled", true);
        }else{
            $('#newPassCAlertE').addClass('d-none');
            $('#newPassCAlertS').removeClass('d-none');
            $('#btnPassSubmit').prop("disabled", false);
        }
    });

    $("#showNewPass").click(function(){
        $("#showNewPass").text($("#showNewPass").text() === "visibility" ? "visibility_off" : "visibility");
        $("#newPass").attr('type', $("#newPass").attr('type') === "password" ? "text" : "password");
    });

    $("#showNewPassC").click(function(){
        $("#showNewPassC").text($("#showNewPassC").text() === "visibility" ? "visibility_off" : "visibility");
        $("#newPassC").attr('type', $("#newPassC").attr('type') === "password" ? "text" : "password");
    });
});
</script>