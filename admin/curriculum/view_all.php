<table id="view_all" class="display row-border" style="width:100%">
    <thead style="width:100%">
        <tr>
            <tr>
            <th class="thborderleft" style="width:45%">Department</th>
            <th style="width:20%">Subject</th>
            <th>Academic Year</th>
            </tr>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>School of Computer Science and Technology</td>
            <td style = "text-align: center;">Advance Mathematics</td>
            <td style = "text-align: center;">2022-2023 2nd Semester</td>
        </tr>
        <tr>
            <td>School of Engineering and Architecture</td>
            <td style = "text-align: center;">Calculus</td>
            <td style = "text-align: center;">2022-2023 1st Semester</td>
            </td>
        </tr>
        <tr>
            <td>School of Tourism and Hospitality Management</td>
            <td style = "text-align: center;">Phisycal Education</td>
            <td style = "text-align: center;">2022-2023 1st Semester</td>
            </td>
        </tr>
        <tr>
            <td>School of Business Management and Accountancy</td>
            <td style = "text-align: center;">Algebra</td>
            <td style = "text-align: center;">2022-2023 2nd Semester</td>
            </td>
        </tr>
    </tbody>
</table>


<script>
    var table = $('#view_all').DataTable({
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