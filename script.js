$(document).ready(function () {

  $('#calendar').fullCalendar({
    defaultView: 'month',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    resources: {
      url: '/resource.php',
      type: 'GET'
    },
    events: {
      url: '/events.php',
      type: 'GET'
    },
    editable: true,
    eventLimit: true,
    eventDrop: function (event, delta, revertFunc) {

      alert(event.title + " was dropped on " + event.start.format());

      if (!confirm("Are you sure about this change?")) {
        revertFunc();
      }

      $.ajax({
        type: "POST",
        url: "updateevents.php",
        data: { "id": event.ResourceId, "start": event.start.format() },
        success: function (data) {
          console.log(data);
        },
        error: function (error) {
          console.log(error);
          alert('We are unable to process your request');
        }
      });
    }
  })

});
