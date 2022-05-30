
<!-- Page Content -->

<a class="btn btn-primary text-light mb-3" id="btn_addclass" data-page="addclass">Add Class</a>
<table id="view_course" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>Tiger Nixon</td>
            <td>SCST</td>
            <td>
                <input class="form-check-input" type="checkbox" value="" id="2">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Marie Claire</td>
            <td>SCST</td>
            <td>
                <input class="form-check-input" type="checkbox" value="" id="2">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Josse Reezal</td>
            <td>SCST</td>
            <td>
                <input class="form-check-input" type="checkbox" value="" id="2">
            </td>
        </tr>
    </tbody>
</table>


<script>
    var table = $('#view_course').DataTable({
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
        
        ]
    });
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
                        $('#pageContent').load(data[0].class.addclass);
                        break;
                    default:
                        $('#pageContent').load(data[0].class.viewclass);
                }
                $('#setSubPage').text("Add Class");
            });
        });
    });
</script>