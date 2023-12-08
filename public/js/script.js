$('#calendarFull').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        // right: 'month,agendaWeek,agendaDay'
        right: 'month'
    },
    defaultView: 'month',
    editable: true,
    allDaySlot: false, // Remove the "all-day" section
    eventSources: [
      {
        events: [
          {
            title: "event3",
            start: "2019-03-09T12:30:00"
          }
        ],
        color: "black", // an option!
        textColor: "yellow" // an option!
      },
    ],
    select: function( start, end, jsEvent, view ) {
        $('#event-modal').find('input[name=evtStart]').val(
            start.format('YYYY-MM-DD HH:mm:ss')
        );
        $('#event-modal').find('input[name=evtEnd]').val(
            end.format('YYYY-MM-DD HH:mm:ss')
        );
      
        $('#event-modal').modal('show');
    },
    selectHelper: true,
    selectable: true,
    snapDuration: '00:10:00'
});
$("#event-modal").find('form').on('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    alert('hello');
    
    $.ajax({
        url: 'yourFileUrl.php',
        data: $("#event-modal form").serialize(),
        type: 'post',
        dataType: 'json',
        success: function(response) {
            $("#event-modal").modal('hide');
            $("#calendarFull").fullCalendar('refetchEvents');
        }
    });
});