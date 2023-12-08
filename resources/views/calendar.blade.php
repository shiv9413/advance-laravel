<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - FullCalendar use to add event onclick with bootstrap 3 </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<br>
<br>
<div class="container">
  <!-- <h1>Heading Here</h1> -->
  <div class="alert alert-warning">
    <i class="glyphicon glyphicon-exclamation-sign"></i> From <strong>1st</strong> of <strong>Aprial</strong> As per labour law first 5 paid holiday consider as planning holidays.
  </div>
  <div id='calendarFull'></div>
</div>

<div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form name="save-event" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" />
          </div>
          <div class="form-group">
            <label>Event start</label>
            <input type="text" name="evtStart" class="form-control col-xs-3" />
          </div>
          <div class="form-group">
            <label>Event end</label>
            <input type="text" name="evtEnd" class="form-control col-xs-3" />
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
