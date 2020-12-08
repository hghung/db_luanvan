<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>hien thi</h4>
            <div id="rateYo" 
                            data-rateyo-rating="{{ $total }}"
                            data-rateyo-num-stars="5"
                            >

                        </div>
            <form action="{{ route('post.test7') }}" method="POST">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>
                    <div class="panel-body">
                        <div id="rateYo2" class="rateyo"
                            data-rateyo-rating="4"
                            data-rateyo-num-stars="5"
                            data-rateyo-score="5">

                        </div>
                    </div>
                    <input type="hidden" id="rating" name="rating">
                </div>
                <input type="submit" class="btn btn-success" value="save">
            </form>
           
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
   

    <script>
        $(function () {
            $("#rateYo").rateYo({
                numStars: 5,
                fullStar: true
            });

            $("#rateYo2").rateYo({
                fullStar: true
            });

            $("#rateYo2").rateYo()
                
              .on("rateyo.change", function (e, data) {
                
                var rating2 = data.rating;
                
                $("#rating").val(rating2);
            });
        });
    </script>