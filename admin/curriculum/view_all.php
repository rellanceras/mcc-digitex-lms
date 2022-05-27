<table id="view_course" class="display table table-bordered" style="width:100%">
    <thead style="width:100%">
        <tr>
            <tr>
            <th class="thborderleft" style="width:35%">Department</th>
            <th style="width:20%">Subject</th>
            <th>Semester</th>
            <th class="thborderright">Options</th>
            </tr>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>School of Computer Science and Technology</td>
            <td style = "text-align: center;">Advance Mathematics</td>
            <td style = "text-align: center;">2nd Semester</td>
            <td style = "text-align: center;">
                <label class="toggle">
                    <input type="checkbox">
                    <span class="labels" data-on="Active" data-off="Set as Active"></span>
                </label>            
            </td>
        </tr>
        <tr>
            <td>School of Engineering and Architecture</td>
            <td style = "text-align: center;">Calculus</td>
            <td style = "text-align: center;">1st Semester</td>
            <td style = "text-align: center;">
                <label class="toggle">
                        <input type="checkbox">
                        <span class="labels" data-on="Active" data-off="Set as Active"></span>
                </label>
            </td>
        </tr>
        <tr>
            <td>School of Tourism and Hospitality Management</td>
            <td style = "text-align: center;">Phisycal Education</td>
            <td style = "text-align: center;">1st Semester</td>
            <td style = "text-align: center;">
                <label class="toggle">
                        <input type="checkbox">
                        <span class="labels" data-on="Active" data-off="Set as Active"></span>
                </label>
            </td>
        </tr>
        <tr>
            <td>School of Business Management and Accountancy</td>
            <td style = "text-align: center;">Algebra</td>
            <td style = "text-align: center;">2nd Semester</td>
            <td style = "text-align: center;">
                <label class="toggle">
                        <input type="checkbox">
                        <span class="labels" data-on="Active" data-off="Set as Active"></span>
                </label>
            </td>
        </tr>
    </tbody>
</table>


<script>
    var table = $('.table').DataTable({
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
</script>