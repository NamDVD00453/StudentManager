<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <title>Attendance List Slot</title>
</head>
{{--<body>--}}

    {{--<div class="navbar-dark">--}}
        {{--<div class="container">--}}

        {{--</div>--}}
    {{--</div>--}}


    {{--<div class="container">--}}
        {{--<div>--}}
            {{--<p></p>--}}
        {{--</div>--}}
        {{--<label class="col-md-12">List Slot</label>--}}
        {{--<div>--}}
            {{--<p></p>--}}
        {{--</div>--}}
        {{--<div class="table-responsive">--}}
            {{--<table class="table">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>Slot ID</th>--}}
                    {{--<th>Time Slot</th>--}}
                    {{--<th>Subject</th>--}}
                    {{--<th>Class ID</th>--}}
                    {{--<th>Action</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($list as $key =>$slot)--}}
                    {{--<tr>--}}
                        {{--<td>{{$slot -> id}}</td>--}}
                        {{--<td>{{$slot -> slotId}}</td>--}}
                        {{--<td>{{$slot -> subjectId}}</td>--}}
                        {{--<td>{{$slot -> classId}}</td>--}}
                        {{--<td><a href="attend/{{$slot->id}}">edit</a></td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</body>--}}

<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a class="navbar-brand" href="#"><i class="fab fa-adversal fa-4x"></i></a>
        <span class="text-muted">Attendance Manager</span>
    </div>
    <div class="col-md-7">

    </div>
    <div class="col-md-2 mt-3">
        <img src="https://www.overleaf.com/assets/logos/overleaf_og_logo.png" alt=""
             class="img-thumbnail rounded-circle w-25 mr-2 float-left">
        <div class="mt-3">
            <strong>Admin</strong>
            <a href="#">(Logout)</a>
        </div>
    </div>
    </div>
</nav>
<div class="container">
    <nav class="col-md-2">

    </nav>
    <div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
    <th>Slot ID</th>
    <th>Time Slot</th>
    <th>Subject</th>
    <th>Class ID</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($list as $key =>$slot)
    <tr>
    <td>{{$slot -> id}}</td>
        @switch($slot -> slotId)
            @case(1)
            <td>8h - 12h</td>
            @break

            @case(2)
            <td>1h30 - 5h30</td>
            @break

            @default
            <td>5h30 - 21h</td>
        @endswitch

    <td>{{$slot -> subjectId}}</td>
    <td>{{$slot -> classId}}</td>
    <td><a href="attend/{{$slot->id}}/{{$slot->classId}}">Take</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
<footer class="container-fluid">
    <p class="text-center">Aptech FPT</p>
</footer>
</body>
</html>