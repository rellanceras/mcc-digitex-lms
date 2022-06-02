<!--

    Work in Progress | Template by Nicolas Honrade

-->
<!-- Page Content -->
<div class="container">
<div class="row">

<div class="card col gradeblock block-sm nav_select" data-page="viewgrades" id="btn_grades">
<div class="px-4 pt-4 gradecard">
    <h3 class="mb-3 fw-bold">
        <div class="d-flex align-items-center">
            <i class="bi bi-people-fill"></i>
        </div>
    </h3>
</div>
<nav class="bread_block">
    <ol class="breadcrumb px-4 py-2 m-0">
        <li class="breadcrumb-item"><a class="text-decoration-none">GEC-0001</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none">Advance Mathematics</a></li>
    </ol>
</nav>
</div>

<div class="card col gradeblock block-sm nav_select" data-page="viewgrades" id="btn_grades">
<div class="px-4 pt-4 gradecard">
    <h3 class="mb-3 fw-bold">
        <div class="d-flex align-items-center">
            <i class="bi bi-people-fill"></i>
        </div>
    </h3>
</div>
<nav class="bread_block">
    <ol class="breadcrumb px-4 py-2 m-0">
        <li class="breadcrumb-item"><a class="text-decoration-none">GEC-0001</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none">Advance Mathematics</a></li>
    </ol>
</nav>
</div>

<div class="card col gradeblock block-sm nav_select" data-page="viewgrades" id="btn_grades">
<div class="px-4 pt-4 gradecard"> 
    <h3 class="mb-3 fw-bold">
        <div class="d-flex align-items-center">
            <i class="bi bi-people-fill"></i>
        </div>
    </h3>
</div>
<nav class="bread_block">
    <ol class="breadcrumb px-4 py-2 m-0">
        <li class="breadcrumb-item"><a class="text-decoration-none">GEC-0001</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none">Advance Mathematics</a></li>
    </ol>
</nav>
</div>

<!-- Modal Add-->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Subject Code</label>
                <input name="scode" class="form-control"/>
                <label>Subject Name </label>
                <input name="sname" class="form-control"/>
                <label>Department </label>
                <select name="dept" class="form-control">
                    <option value="" disabled selected> Choose Account Type</option>
                    <option value="school">school</option>
                </select>
                <label>Description </label>
                <input name="desc" class="form-control"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Year </label>
                <input name="year" class="form-control"/>
                <label>Semester </label>
                <input name="semester" class="form-control"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--DELETE Modal -->
<div class="modal fade" id="deleteModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Academic Year</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this subject?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </div>
  </div>

<script>
    $(document).ready(function(){
        $('#btn_grades').click(function() {
            var page = $(this).attr('data-page');
            $.ajax({
                type: 'GET',
                url: '../instructor/navInstructor.json',
                dataType: 'html',
            }).done(function(response) {
                var data = JSON.parse(response)
                switch(page) {
                    case 'viewgrades':
                        $('#pageContent').load(data[0].grades.viewgrades);
                        break;
                    default:
                        $('#pageContent').load(data[0].grades.viewcourse);
                }
                $('#setSubPage').text("");
            });
        });
    });

</script>