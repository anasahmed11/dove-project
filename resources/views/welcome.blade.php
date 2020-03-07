<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--    internet explorer compatibility meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    first mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DOVE</title>
    <!--    bootstrap-->
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <!--    my stylesheet-->
    <link rel="stylesheet" href="{{ url('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="{{ url('/css/style.css') }}">


</head>
<body>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logo">
                    <img src="{{ url('/images/logosmall.png') }}" width="100%">
                    <h1>DOVE</h1>
                    <h2>حمامة من ورق</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-text">
                    <img src="{{ url('/images/listed.png') }}" width="100%" height="100%">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-login">
                    {{Form::open(array('id'=>'new-form'))}}
                    {{Form::text('sname','',['class' => 'form-control','placeholder'=>'اسم المرسل'])}}<br>
                    {{Form::text('snum','',['class' => 'form-control','placeholder'=>'رقم المرسل'])}}<br>
                    {{Form::text('rname','',['class' => 'form-control','placeholder'=>'اسم المستلم'])}}<br>
                    {{Form::text('rnum','',['class' => 'form-control','placeholder'=>'رقم المستلم'])}}<br><br>
                    {{Form::text('title','',['class' => 'form-control','placeholder'=>'عنوان الرسالة'])}}<br>
                    {{Form::textarea('msgtext','',['class' => 'form-control','rows' =>3,'cols'=>10])}}<br><br>
                    {{Form::button('عرض الاسعار',['class' => 'form-control see-prices','id'=>'prices','data-toggle'=>'modal', 'data-target'=>'#see-prices'])}}<br><br>
                    {{Form::submit('ارسل رسالة',['class' => 'btn btn-review btn-lg','id'=>'new-client-rev'])}}<br>
                    {{Form::close()}}
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- see location Modal -->
    <div class="modal fade" id="see-prices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">الاسعار</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <button class="btn btn-block price">الدفع عند الاستلام 25 ريال</button><br>
                        <button class="btn btn-block price2">الدفع الالكتروني 15 ريال</button><br>
                        <button class="btn btn-block price">الدفع عند نقاط الاستلام 5 ريال</button><br>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- see location Modal -->
</div>
<!-- scripts -->
<script src="{{ url('/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('/js/html5shiv.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>

<!--    wow.js file-->
<script src="{{ url('/js/wow.min.js') }}"></script>
<script>
    new WOW().init();

</script>
<script src="{{ url('/js/message.js') }}"></script>
</body>
</html>




