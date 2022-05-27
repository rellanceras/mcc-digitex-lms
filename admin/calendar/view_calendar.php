<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons">calendar_month</span>
                    <span class="ms-3">Calendar</span>
                </div>
            </h3>
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block bread_block">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
            </ol>
        </nav>
    </div>
    <div class="block h-100 p-4">
        <button type="button" class="btn-action" id="addBtn" data-bs-toggle="modal" data-bs-target="#addevent">ADD EVENT</button>
        <br/><br/><br/>
        <div id="calendar"></div>
    </div>    
</div>

<!-- Add Event Modal -->
<div class="modal fade" id="addevent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Event Title</Title></label>
    <input type="title" class="form-control" id="title" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Event Duration</label>
    <div class="d-flex align-items-center">
    <span class="material-icons ">calendar_month</span>
    <input type="start" class="form-control" placeholder="Start" id="start">
    <span class="material-icons ">calendar_month</span>
    <input type="end" class="form-control" placeholder="End" id="end">
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Event Description</Title></label>
    <input type="description" class="form-control" id="description" aria-describedby="emailHelp">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>