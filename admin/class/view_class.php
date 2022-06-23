<a class="btn btn-primary text-light mb-3" id="btn_addclass" data-page="addclass">Add Class</a>
<table id="view_class" class="display row-border" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>Tiger Nixon</td>
            <td>SCST</td>
        </tr>
        <tr>
            <td></td>
            <td>Marie Claire</td>
            <td>SCST</td>
        </tr>
        <tr>
            <td></td>
            <td>Josse Reezal</td>
            <td>SCST</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
        </tr>
    </tfoot>
</table>

<script>

function add_classPage() {

}

$(document).ready(function(){
    $('#btn_addclass').click(function() {
        var page = $(this).attr('data-page');
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'addclass':
                    $('#pageContent').load(data[0].class["aclass"]);
                    break;
                default:
                    $('#pageContent').load(data[0].class["vclass"]);
            }
            $('#setSubPage').text("Add Class");
        });
    });

    $('#view_class').DataTable({
        dom: 'Bfrtip',
        pageLength : 5,
        buttons: [
            {
                text: '<i class="bi bi-arrow-clockwise"></i>'
            },
            {
                extend: 'colvis',
                text: '<i class="bi bi-layout-three-columns"></i>'
            },
        ],
        order: [[ 1, 'asc' ]]
    });
});
</script>