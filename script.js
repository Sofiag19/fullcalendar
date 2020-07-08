$(document).ready(function () {

  $('#calendar').fullCalendar({
    weekends: false,
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
  });

});


