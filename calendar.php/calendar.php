<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar View</title>
  <!-- Include FullCalendar CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet" />
  <style>
    #calendar {
      width: 80%;
      margin: 0 auto; /* Center the calendar horizontally */
    }

  </style>
</head>
<body>
  <h1 class="text-light">Calendar View</h1>
  <hr>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div id="calendar">
      </div>
    </div>
  </div>
  </div>
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include FullCalendar JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
  <script>
   $(document).ready(function() {
      var calendar = $('#calendar').fullCalendar({
        header: {
          left: 'prev,next',
          center: 'title',
          right: 'agendaWeek,month,day'
        },
        defaultView: 'month',
        // events: [
        //   // Example of multiple events on a single day
        //   {
        //     title: 'Event 1',
        //     start: '2023-08-30',
        //   },
        //   {
        //     title: 'Event 2',
        //     start: '2023-08-30',
        //   },
        // ],
        eventClick: function(calEvent, jsEvent, view) {
          alert('Event clicked: ' + calEvent.title);
        },
      });

      // Add event delegation for the "Week" button
      $(document).on('click', '.fc-agendaWeek-button', function() {
        var currentDate = calendar.fullCalendar('getDate');
        calendar.fullCalendar('gotoDate', currentDate);
        calendar.fullCalendar('changeView', 'agendaWeek');
      });

      // Add event delegation for each day cell
      $(document).on('click', '.fc-day', function() {
        var dateStr = $(this).data('date');
        var date = moment(dateStr);
        calendar.fullCalendar('gotoDate', date);
        calendar.fullCalendar('changeView', 'agendaDay');
      });

      // Create the custom "Day" button
      var customDayButton = $('<button type="button" class="fc-button fc-agendaDay-button">Day</button>');
      
      // Add event delegation for the custom "Day" button
      $(document).on('click', '.fc-agendaDay-button', function() {
        var currentDate = calendar.fullCalendar('getDate');
        calendar.fullCalendar('gotoDate', currentDate);
        calendar.fullCalendar('changeView', 'agendaDay');
      });

      // Append the custom "Day" button to the header
      $('.fc-header-right').prepend(customDayButton);
    });
  </script>
</body>
</html>
