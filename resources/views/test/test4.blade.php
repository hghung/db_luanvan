
@extends('luanvan.master')
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>



    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
        <input placeholder="Select date" type="text" id="example" class="form-control">
        <label for="example">Try me...</label>
        <i class="fas fa-calendar input-prefix" tabindex=0></i>
    </div>

    <script>
        var dateToday = new Date(); 
        $(function() {
            $('.datepicker').datepicker({
                
            });
        });

    </script> 

    



