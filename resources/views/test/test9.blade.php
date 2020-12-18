<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Fullcalender Add/Update/Delete Event Example Tutorial - Tutsmake.com</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"  />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.1/jquery.min.js" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" ></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js" ></script>




    {{--    --}}
    <body>
    
    <div class="container">
        <div class="response"></div>
        <div id='calendar2'></div>  
    </div>
    
    
    </body>
</html>

    <script>
        $(document).ready(function () {
            var SITEURL = "{{route('test9.calendar')}}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            var calendar = $('#calendar2').fullCalendar({
               // editable: true, // sua di chuyen ghi chu
                events: SITEURL,
                displayEventTime: true,
                selectable: true,
                selectHelper: true,
            });
        });

        
    </script>