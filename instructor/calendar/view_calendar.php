
<button type="button" class="btn-action" id="addBtn" data-bs-toggle="modal" data-bs-target="#addeventIns">ADD EVENT</button>
<br/><br/><br/>
<div id="evoCalendar"></div>


<!-- Add Event Modal -->
<div class="modal fade" id="addeventIns" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddModalLabel">Add Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Event Title</Title></label>
    <input type="title" class="form-control block-sm" id="title" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Event Duration</label>
    <div class="d-flex align-items-center">
    <span>Start</span>&nbsp;
    <input type="datetime-local" class="form-control block-sm" placeholder="Start" id="start">&nbsp;
    <span>End</span>&nbsp;
    <input type="datetime-local" class="form-control block-sm" placeholder="End" id="end">
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Event Description</Title></label>
    <input type="description" class="form-control block-sm" id="description" aria-describedby="emailHelp">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<script src="../resources/js/evo-calendar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
<script>
    

    // CALENDAR
    $(document).ready(function() {
        $('#evoCalendar').evoCalendar({
            theme: 'Royal Navy',
            todayHighlight: "true",

            calendarEvents: [
        {
            id: 'bHay68s', // Event's ID (required)
            name: "Labor Day", // Event name (required)
            date: "May/1/2022", // Event date (required)
            type: "holiday", // Event type (required)
            everyYear: true // Same event every year (optional)
        },

        {
            name: "Exam Week",
            badge: "5/2 - 5/6", // Event badge (optional)
            date: ["May/2/2022", "May/6/2022"], // Date range
            description: "Examination Week", // Event description (optional)
            type: "event",
            color: "#63d867" // Event custom color (optional)
        },

        {
            id: 'bHay68s', // Event's ID (required)
            name: "Subject", // Event name (required)
            date: "May/16/2022", // Event date (required)
            description: "Deadline of Submission: Assignment #2", // Event description (optional)
            type: "event",
            color: "#FF0000"
        },
        {
            id: 'bHay68s', // Event's ID (required)
            name: "Subject", // Event name (required)
            date: "May/16/2022", // Event date (required)
            description: "Deadline of Submission: Assignment #4", // Event description (optional)
            type: "event",
            color: "#FF0000"
        }
                        ]
        })
    })
</script>