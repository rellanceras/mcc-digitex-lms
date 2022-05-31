
<div class="row">

    <form>
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Reset Password</label>
            <input type="email" class="form-control block" id="resetID" name="resetID" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Enter School ID to reset password</div>
        </div>

        <button type="button" class="btn btn-primary btn_reset" data-bs-toggle="modal" data-bs-target="#resetmodal">Submit</button>
        <br><br>
    </form>
                    
</div>
<div class="modal fade" id="resetmodal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
            </div>
            <form action="../admin/users/functions/reset-ps.php" method="POST" >
            
            <div class="modal-body">
                Are you sure you want to reset the password?
                <input class="form-control block-sm" name="school_id" id="school_id" disabled>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" id="btn_reset">Reset</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script>
    $('.btn_reset').on('click', function(){

        var data = $('#resetID').val();

        $('#school_id').val(data);
        
    });
</script>