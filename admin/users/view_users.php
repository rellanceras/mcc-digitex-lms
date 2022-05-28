<a class="btn btn-primary text-light mb-3" id="btn_addusers" data-page="addusers">Add User</a>
<script>
$(document).ready(function(){
    $('#btn_addusers').click(function() {
        var page = $(this).attr('data-page');
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'addusers':
                    $('#pageContent').load(data[0].users.addusers);
                    break;
                default:
                    $('#pageContent').load(data[0].users.viewusers);
            }
            $('#setSubPage').text("Add Users");
        });
    });
});
</script>